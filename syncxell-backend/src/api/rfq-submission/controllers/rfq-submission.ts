import { factories } from '@strapi/strapi';

const ALLOWED_FIELDS = [
  'contact_first_name',
  'contact_last_name',
  'contact_email',
  'contact_phone',
  'organization',
  'sector',
  'services_requested',
  'project_description',
  'federal_agency',
  'solicitation_number',
  'set_aside_type',
  'municipality_name',
  'it_budget_range',
  'desired_timeline',
  'compliance_needs',
  'rfp_documents',
  'how_did_you_hear',
  'consent_to_contact',
];

export default factories.createCoreController(
  'api::rfq-submission.rfq-submission',
  ({ strapi }) => ({
    async create(ctx) {
      // 1. Whitelist stricte — jamais de status/submission_ip/internal_notes depuis le client
      const rawBody = (ctx.request.body as any)?.data || {};
      const sanitizedData: Record<string, unknown> = {};
      for (const key of ALLOWED_FIELDS) {
        if (rawBody[key] !== undefined) sanitizedData[key] = rawBody[key];
      }

      // 2. Consentement obligatoire
      if (!sanitizedData.consent_to_contact) {
        return ctx.badRequest('Le consentement au contact est requis.');
      }

      // 3. Champs ajoutés côté serveur uniquement
      sanitizedData.submission_ip =
        (ctx.request.headers['x-forwarded-for'] as string) || ctx.request.ip || '';
      sanitizedData.status = 'new';

      // 4. Persistance (Documents API — Strapi v5)
      const entry = await (strapi.documents as any)('api::rfq-submission.rfq-submission').create({
        data: sanitizedData,
      });

      // 5. Email de notification interne
      try {
        const siteSettings: any = await (strapi.documents as any)(
          'api::site-settings.site-settings'
        ).findFirst({});
        const recipientEmail =
          siteSettings?.rfq_email_recipient || process.env.RFQ_NOTIFICATION_EMAIL;

        if (recipientEmail && strapi.plugin('email')) {
          const sectorDetails: string[] = [];
          if (sanitizedData.sector === 'federal') {
            sectorDetails.push(`Agency: ${sanitizedData.federal_agency || 'N/A'}`);
            sectorDetails.push(`Solicitation #: ${sanitizedData.solicitation_number || 'N/A'}`);
            sectorDetails.push(`Set-Aside: ${sanitizedData.set_aside_type || 'N/A'}`);
          } else if (sanitizedData.sector === 'local_gov') {
            sectorDetails.push(`Municipality: ${sanitizedData.municipality_name || 'N/A'}`);
            sectorDetails.push(`IT Budget: ${sanitizedData.it_budget_range || 'N/A'}`);
            sectorDetails.push(`Timeline: ${sanitizedData.desired_timeline || 'N/A'}`);
          } else if (sanitizedData.sector === 'banking' || sanitizedData.sector === 'legal') {
            sectorDetails.push(`Compliance Needs: ${JSON.stringify(sanitizedData.compliance_needs)}`);
          }

          await strapi.plugin('email').service('email').send({
            to: recipientEmail,
            subject: `[SYNCXELL] Nouveau RFQ — ${sanitizedData.organization} [${sanitizedData.sector}]`,
            text: [
              `Nouveau RFQ reçu de ${sanitizedData.contact_first_name} ${sanitizedData.contact_last_name}`,
              `Organisation: ${sanitizedData.organization}`,
              `Secteur: ${sanitizedData.sector}`,
              `Email: ${sanitizedData.contact_email}`,
              `Téléphone: ${sanitizedData.contact_phone || 'N/A'}`,
              '',
              'Description du projet:',
              sanitizedData.project_description as string,
              '',
              ...sectorDetails,
              '',
              `ID Soumission: ${entry.id}`,
              `IP: ${sanitizedData.submission_ip}`,
            ].join('\n'),
          });

          // Accusé de réception au soumetteur
          await strapi.plugin('email').service('email').send({
            to: sanitizedData.contact_email as string,
            subject: 'SYNCXELL LLC — Votre demande a été reçue',
            text: [
              `Bonjour ${sanitizedData.contact_first_name},`,
              '',
              'Nous avons bien reçu votre demande. Un membre de notre équipe vous contactera sous 1 à 2 jours ouvrés.',
              '',
              'Cordialement,',
              "L'équipe SYNCXELL LLC",
              'info@syncxell.com',
            ].join('\n'),
          });
        }
      } catch (emailError) {
        // L'email ne doit pas bloquer la soumission
        strapi.log.warn('RFQ email notification failed:', emailError);
      }

      // 6. Réponse publique minimale — jamais le record complet
      ctx.body = {
        data: {
          id: entry.id,
          message: 'Votre demande a été reçue. Nous vous contacterons prochainement.',
        },
      };
    },
  })
);
