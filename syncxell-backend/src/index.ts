import type { Core } from '@strapi/strapi';
import { runSeed } from './seed';

/**
 * Bootstrap : configure les permissions du rôle Public au premier démarrage.
 * Ces permissions déterminent ce qu'un visiteur non authentifié peut faire.
 */
async function setPublicPermissions(strapi: Core.Strapi) {
  // Récupérer le rôle Public
  const publicRole = await strapi.query('plugin::users-permissions.role').findOne({
    where: { type: 'public' },
  });

  if (!publicRole) {
    strapi.log.warn('Bootstrap: rôle Public introuvable — skip permissions setup.');
    return;
  }

  // Définition des permissions publiques
  // Format : { action: 'api::content-type.content-type.action' }
  const publicPermissions: Array<{ action: string }> = [
    // --- Collection Types : lecture publique ---
    { action: 'api::service-category.service-category.find' },
    { action: 'api::service-category.service-category.findOne' },
    { action: 'api::sub-service.sub-service.find' },
    { action: 'api::sub-service.sub-service.findOne' },
    { action: 'api::team-member.team-member.find' },
    { action: 'api::team-member.team-member.findOne' },
    { action: 'api::case-study.case-study.find' },
    { action: 'api::case-study.case-study.findOne' },
    { action: 'api::certification.certification.find' },
    { action: 'api::certification.certification.findOne' },
    { action: 'api::blog-post.blog-post.find' },
    { action: 'api::blog-post.blog-post.findOne' },
    { action: 'api::testimonial.testimonial.find' },
    { action: 'api::testimonial.testimonial.findOne' },
    { action: 'api::partner.partner.find' },
    { action: 'api::partner.partner.findOne' },
    { action: 'api::faq.faq.find' },
    { action: 'api::faq.faq.findOne' },

    // --- Single Types : lecture publique ---
    { action: 'api::company-info.company-info.find' },
    { action: 'api::homepage-hero.homepage-hero.find' },
    { action: 'api::site-settings.site-settings.find' },

    // --- Formulaires : création publique uniquement (jamais de lecture) ---
    { action: 'api::rfq-submission.rfq-submission.create' },
    { action: 'api::teaming-request.teaming-request.create' },

    // --- Routes custom ---
    { action: 'api::homepage-data.homepage-data.getHomepageData' },
    { action: 'api::homepage-data.homepage-data.getServicesByCategory' },

    // --- Upload plugin ---
    { action: 'plugin::upload.content-api.upload' },
    { action: 'plugin::upload.content-api.find' },
    { action: 'plugin::upload.content-api.findOne' },
  ];

  // Récupérer les permissions existantes pour ce rôle
  const existingPermissions = await strapi
    .query('plugin::users-permissions.permission')
    .findMany({ where: { role: publicRole.id } });

  const existingActions = new Set(existingPermissions.map((p: any) => p.action));

  // Créer uniquement les permissions manquantes (idempotent)
  for (const perm of publicPermissions) {
    if (!existingActions.has(perm.action)) {
      await strapi.query('plugin::users-permissions.permission').create({
        data: {
          action: perm.action,
          role: publicRole.id,
        },
      });
    }
  }

  strapi.log.info('Bootstrap: permissions publiques configurées.');
}

async function seedFrenchLocale(strapi: Core.Strapi) {
  try {
    const i18nPlugin = strapi.plugin('i18n');
    if (!i18nPlugin) return;

    const localeService = i18nPlugin.service('locales') as any;
    const existing = await localeService.findByCode('fr');
    if (!existing) {
      await localeService.create({ code: 'fr', name: 'French (fr)' });
      strapi.log.info('Bootstrap: locale FR créé.');
    }
  } catch (err) {
    strapi.log.warn('Bootstrap: impossible de créer le locale FR automatiquement —', err);
    strapi.log.info('→ Ajoutez-le manuellement via Admin Panel > Settings > Internationalization.');
  }
}

export default {
  register(/* { strapi }: { strapi: Core.Strapi } */) {},

  async bootstrap({ strapi }: { strapi: Core.Strapi }) {
    await seedFrenchLocale(strapi);
    await setPublicPermissions(strapi);
    await runSeed(strapi);
  },
};
