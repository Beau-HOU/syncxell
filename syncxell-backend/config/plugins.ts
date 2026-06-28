import type { Core } from '@strapi/strapi';

const config = ({ env }: Core.Config.Shared.ConfigParams): Core.Config.Plugin => ({
  documentation: {
    enabled: true,
    config: {
      info: {
        version: '1.0.0',
        title: 'SYNCXELL LLC — API',
        description:
          'REST API for the SYNCXELL LLC showcase website. Powered by Strapi v5. Supports English (en) and French (fr) via the ?locale= query parameter.',
        contact: {
          name: 'SYNCXELL Developer Team',
          email: 'dev@syncxell.com',
        },
      },
      'x-strapi-config': {
        plugins: ['users-permissions', 'upload'],
        path: '/documentation',
      },
    },
  },
  i18n: {
    enabled: true,
    config: {
      defaultLocale: 'en',
      locales: ['en', 'fr'],
    },
  },
  upload: {
    config: {
      sizeLimit: 50 * 1024 * 1024, // 50 MB pour les documents RFP/NDA
    },
  },
  email: {
    config: {
      provider: 'nodemailer',
      providerOptions: {
        host: env('SMTP_HOST', 'smtp.gmail.com'),
        port: env.int('SMTP_PORT', 465),
        secure: true,
        auth: {
          user: env('SMTP_USERNAME'),
          pass: env('SMTP_PASSWORD'),
        },
      },
      settings: {
        defaultFrom: env('EMAIL_FROM', 'noreply@syncxell.com'),
        defaultReplyTo: env('EMAIL_REPLY_TO', 'info@syncxell.com'),
      },
    },
  },
});

export default config;
