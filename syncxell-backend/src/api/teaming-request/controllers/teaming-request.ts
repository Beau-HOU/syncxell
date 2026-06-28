import { factories } from '@strapi/strapi';

const ALLOWED_FIELDS = [
  'company_name',
  'contact_name',
  'contact_email',
  'contact_phone',
  'company_website',
  'cage_code',
  'uei',
  'opportunity_name',
  'solicitation_number',
  'issuing_agency',
  'submission_deadline',
  'services_needed_from_syncxell',
  'estimated_subcontract_value',
  'nda_document',
  'teaming_agreement_draft',
  'additional_documents',
  'message',
  'consent_to_contact',
];

export default factories.createCoreController(
  'api::teaming-request.teaming-request',
  ({ strapi }) => ({
    async create(ctx) {
      // 1. Whitelist stricte
      const rawBody = (ctx.request.body as any)?.data || {};
      const sanitizedData: Record<string, unknown> = {};
      for (const key of ALLOWED_FIELDS) {
        if (rawBody[key] !== undefined) sanitizedData[key] = rawBody[key];
      }

      // 2. Consentement obligatoire
      if (!sanitizedData.consent_to_contact) {
        return ctx.badRequest('Le consentement au contact est requis.');
      }

      // 3. Champs ajoutés côté serveur
      sanitizedData.submission_ip =
        (ctx.request.headers['x-forwarded-for'] as string) || ctx.request.ip || '';
      sanitizedData.status = 'new';

      // 4. Persistance (Documents API — Strapi v5)
      const entry = await (strapi.documents as any)('api::teaming-request.teaming-request').create({
        data: sanitizedData,
      });

      // 5. Notifications email
      try {
        const siteSettings: any = await (strapi.documents as any)(
          'api::site-settings.site-settings'
        ).findFirst({});
        const recipientEmail =
          siteSettings?.teaming_email_recipient || process.env.TEAMING_NOTIFICATION_EMAIL;

        if (recipientEmail && strapi.plugin('email')) {
          await strapi.plugin('email').service('email').send({
            to: recipientEmail,
            subject: `[SYNCXELL] Nouvelle demande de Teaming — ${sanitizedData.company_name}`,
            text: [
              `Nouvelle demande de teaming de ${sanitizedData.contact_name} (${sanitizedData.company_name})`,
              `Email: ${sanitizedData.contact_email}`,
              `Téléphone: ${sanitizedData.contact_phone || 'N/A'}`,
              `Site web: ${sanitizedData.company_website || 'N/A'}`,
              `CAGE: ${sanitizedData.cage_code || 'N/A'} | UEI: ${sanitizedData.uei || 'N/A'}`,
              '',
              `Opportunité: ${sanitizedData.opportunity_name}`,
              `Solicitation #: ${sanitizedData.solicitation_number || 'N/A'}`,
              `Agence: ${sanitizedData.issuing_agency || 'N/A'}`,
              `Date limite: ${sanitizedData.submission_deadline || 'N/A'}`,
              `Valeur estimée: ${sanitizedData.estimated_subcontract_value || 'N/A'}`,
              '',
              'Services SYNCXELL requis:',
              JSON.stringify(sanitizedData.services_needed_from_syncxell),
              '',
              `Message: ${sanitizedData.message || 'N/A'}`,
              '',
              `ID: ${entry.id} | IP: ${sanitizedData.submission_ip}`,
            ].join('\n'),
          });

          // Accusé de réception
          await strapi.plugin('email').service('email').send({
            to: sanitizedData.contact_email as string,
            subject: 'SYNCXELL LLC — Votre demande de teaming a été reçue',
            text: [
              `Bonjour ${sanitizedData.contact_name},`,
              '',
              `Nous avons bien reçu votre demande de teaming concernant l'opportunité "${sanitizedData.opportunity_name}".`,
              'Notre équipe partnerships vous contactera sous 1 à 2 jours ouvrés.',
              '',
              'Cordialement,',
              "L'équipe SYNCXELL LLC",
              'partnerships@syncxell.com',
            ].join('\n'),
          });
        }
      } catch (emailError) {
        strapi.log.warn('Teaming request email notification failed:', emailError);
      }

      // 6. Réponse minimale
      ctx.body = {
        data: {
          id: entry.id,
          message: 'Votre demande de teaming a été reçue. Nous vous contacterons sous 48h.',
        },
      };
    },
  })
);
