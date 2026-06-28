import type { Core } from '@strapi/strapi';

/**
 * Endpoint agrégé — retourne en un seul appel les données nécessaires à la homepage.
 * Utilise l'API Documents de Strapi v5. Gère les single types vides sans crasher.
 */
const homepageDataController = ({ strapi }: { strapi: Core.Strapi }) => ({
  async getHomepageData(ctx: any) {
    const locale = (ctx.query.locale as string) || 'en';

    const safeFind = async (uid: string, opts: any) => {
      try {
        return await (strapi.documents as any)(uid).findFirst({ locale, ...opts });
      } catch {
        return null;
      }
    };

    const safeFindMany = async (uid: string, opts: any) => {
      try {
        return await (strapi.documents as any)(uid).findMany({ locale, ...opts });
      } catch {
        return [];
      }
    };

    const [hero, companyInfo, featuredCategories, featuredCaseStudies, testimonials] =
      await Promise.all([
        safeFind('api::homepage-hero.homepage-hero', {
          populate: { hero_image: true, hero_image_mobile: true },
        }),

        safeFind('api::company-info.company-info', {
          populate: { logo: true, logo_white: true, capability_statement_pdf: true },
        }),

        safeFindMany('api::service-category.service-category', {
          filters: { is_featured: true },
          populate: { icon_svg: true, sub_services: { populate: { cover_image: true } } },
          sort: ['display_order:asc'],
        }),

        safeFindMany('api::case-study.case-study', {
          filters: { is_featured: true },
          populate: { cover_image: true },
          sort: ['createdAt:desc'],
          limit: 3,
        }),

        safeFindMany('api::testimonial.testimonial', {
          filters: { is_featured: true },
          populate: { author_photo: true },
          sort: ['display_order:asc'],
        }),
      ]);

    ctx.body = {
      data: {
        hero,
        companyInfo,
        featuredCategories,
        featuredCaseStudies,
        testimonials,
      },
    };
  },

  async getServicesByCategory(ctx: any) {
    const locale = (ctx.query.locale as string) || 'en';

    try {
      const categories = await (strapi.documents as any)(
        'api::service-category.service-category'
      ).findMany({
        locale,
        populate: {
          icon_svg: true,
          cover_image: true,
          sub_services: {
            populate: { cover_image: true },
            sort: ['display_order:asc'],
          },
        },
        sort: ['display_order:asc'],
      });

      ctx.body = { data: categories };
    } catch (err) {
      strapi.log.error('getServicesByCategory error:', err);
      ctx.body = { data: [] };
    }
  },
});

export default homepageDataController;
