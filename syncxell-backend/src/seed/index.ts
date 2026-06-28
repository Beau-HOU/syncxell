import { serviceCategories } from './data/service-categories';
import { subServices } from './data/sub-services';
import { teamMembers } from './data/team-members';
import { certifications } from './data/certifications';
import { caseStudies } from './data/case-studies';
import { testimonials } from './data/testimonials';
import { partners } from './data/partners';
import { faqs } from './data/faqs';
import { blogPosts } from './data/blog-posts';
import { companyInfo, homepageHero, siteSettings } from './data/single-types';

const docs = (strapi: any) => strapi.documents;

async function publish(strapi: any, uid: string, documentId: string) {
  try {
    await (docs(strapi)(uid) as any).publish({ documentId });
  } catch {
    // draftAndPublish disabled on this type — safe to ignore
  }
}

async function seedServiceCategories(strapi: any): Promise<Map<string, string>> {
  const slugToDocId = new Map<string, string>();
  for (const cat of serviceCategories) {
    try {
      const entry = await (docs(strapi)('api::service-category.service-category') as any).create({ data: cat });
      await publish(strapi, 'api::service-category.service-category', entry.documentId);
      slugToDocId.set(cat.slug, entry.documentId);
      strapi.log.info(`[seed] service-category: ${cat.name}`);
    } catch (err: any) {
      strapi.log.error(`[seed] FAILED service-category "${cat.name}": ${err?.message}`);
    }
  }
  return slugToDocId;
}

async function seedSubServices(strapi: any, categoryMap: Map<string, string>) {
  for (const sub of subServices) {
    const { categorySlug, ...subData } = sub as any;
    try {
      const entry = await (docs(strapi)('api::sub-service.sub-service') as any).create({
        data: { ...subData, category: categoryMap.get(categorySlug) },
      });
      await publish(strapi, 'api::sub-service.sub-service', entry.documentId);
      strapi.log.info(`[seed] sub-service: ${sub.name}`);
    } catch (err: any) {
      strapi.log.error(`[seed] FAILED sub-service "${sub.name}": ${err?.message}`);
    }
  }
}

async function seedTeamMembers(strapi: any) {
  for (const member of teamMembers) {
    try {
      const entry = await (docs(strapi)('api::team-member.team-member') as any).create({ data: member });
      await publish(strapi, 'api::team-member.team-member', entry.documentId);
      strapi.log.info(`[seed] team-member: ${member.full_name}`);
    } catch (err: any) {
      strapi.log.error(`[seed] FAILED team-member "${member.full_name}": ${err?.message}`);
    }
  }
}

async function seedCertifications(strapi: any) {
  for (const cert of certifications) {
    try {
      const entry = await (docs(strapi)('api::certification.certification') as any).create({ data: cert });
      await publish(strapi, 'api::certification.certification', entry.documentId);
      strapi.log.info(`[seed] certification: ${cert.acronym}`);
    } catch (err: any) {
      strapi.log.error(`[seed] FAILED certification "${cert.acronym}": ${err?.message}`);
    }
  }
}

async function seedCaseStudies(strapi: any) {
  for (const cs of caseStudies) {
    try {
      const entry = await (docs(strapi)('api::case-study.case-study') as any).create({ data: cs });
      await publish(strapi, 'api::case-study.case-study', entry.documentId);
      strapi.log.info(`[seed] case-study: ${cs.title}`);
    } catch (err: any) {
      strapi.log.error(`[seed] FAILED case-study "${cs.title}": ${err?.message}`);
    }
  }
}

async function seedTestimonials(strapi: any) {
  for (const t of testimonials) {
    try {
      const entry = await (docs(strapi)('api::testimonial.testimonial') as any).create({ data: t });
      await publish(strapi, 'api::testimonial.testimonial', entry.documentId);
      strapi.log.info(`[seed] testimonial: ${t.author_name}`);
    } catch (err: any) {
      strapi.log.error(`[seed] FAILED testimonial "${t.author_name}": ${err?.message}`);
    }
  }
}

async function seedPartners(strapi: any) {
  for (const p of partners) {
    try {
      const entry = await (docs(strapi)('api::partner.partner') as any).create({ data: p });
      await publish(strapi, 'api::partner.partner', entry.documentId);
      strapi.log.info(`[seed] partner: ${p.name}`);
    } catch (err: any) {
      strapi.log.error(`[seed] FAILED partner "${p.name}": ${err?.message}`);
    }
  }
}

async function seedFaqs(strapi: any) {
  for (const faq of faqs) {
    try {
      const entry = await (docs(strapi)('api::faq.faq') as any).create({ data: faq });
      await publish(strapi, 'api::faq.faq', entry.documentId);
      strapi.log.info(`[seed] faq #${faq.display_order}: ${faq.question.substring(0, 60)}`);
    } catch (err: any) {
      strapi.log.error(`[seed] FAILED faq "${faq.question.substring(0, 60)}": ${err?.message}`);
    }
  }
}

async function seedBlogPosts(strapi: any) {
  for (const post of blogPosts) {
    try {
      const entry = await (docs(strapi)('api::blog-post.blog-post') as any).create({ data: post });
      await publish(strapi, 'api::blog-post.blog-post', entry.documentId);
      strapi.log.info(`[seed] blog-post: ${post.title}`);
    } catch (err: any) {
      strapi.log.error(`[seed] FAILED blog-post "${post.title}": ${err?.message}`);
    }
  }
}

async function seedSingleTypes(strapi: any) {
  try {
    const existingCompany = await (docs(strapi)('api::company-info.company-info') as any).findFirst({});
    if (!existingCompany) {
      await (docs(strapi)('api::company-info.company-info') as any).create({ data: companyInfo });
      strapi.log.info('[seed] company-info: created');
    }
  } catch (err: any) {
    strapi.log.error(`[seed] FAILED company-info: ${err?.message}`);
  }

  try {
    const existingHero = await (docs(strapi)('api::homepage-hero.homepage-hero') as any).findFirst({});
    if (!existingHero) {
      const hero = await (docs(strapi)('api::homepage-hero.homepage-hero') as any).create({ data: homepageHero });
      await publish(strapi, 'api::homepage-hero.homepage-hero', hero.documentId);
      strapi.log.info('[seed] homepage-hero: created');
    }
  } catch (err: any) {
    strapi.log.error(`[seed] FAILED homepage-hero: ${err?.message}`);
  }

  try {
    const existingSettings = await (docs(strapi)('api::site-settings.site-settings') as any).findFirst({});
    if (!existingSettings) {
      await (docs(strapi)('api::site-settings.site-settings') as any).create({ data: siteSettings });
      strapi.log.info('[seed] site-settings: created');
    }
  } catch (err: any) {
    strapi.log.error(`[seed] FAILED site-settings: ${err?.message}`);
  }
}

async function isAlreadySeeded(strapi: any): Promise<boolean> {
  const count = await (docs(strapi)('api::service-category.service-category') as any).count({});
  return count > 0;
}

export async function runSeed(strapi: any) {
  const forceSeed = process.env.FORCE_SEED === 'true';
  if (!forceSeed && await isAlreadySeeded(strapi)) {
    strapi.log.info('[seed] Database already seeded — skipping. Set FORCE_SEED=true to re-seed.');
    return;
  }
  if (forceSeed) {
    strapi.log.info('[seed] FORCE_SEED=true — re-seeding even if data exists.');
  }

  strapi.log.info('[seed] Starting database seed...');

  try { const categoryMap = await seedServiceCategories(strapi); await seedSubServices(strapi, categoryMap); }
  catch (err: any) { strapi.log.error(`[seed] categories/sub-services error: ${err?.message}`); }

  try { await seedTeamMembers(strapi); } catch (err: any) { strapi.log.error(`[seed] team-members error: ${err?.message}`); }
  try { await seedCertifications(strapi); } catch (err: any) { strapi.log.error(`[seed] certifications error: ${err?.message}`); }
  try { await seedCaseStudies(strapi); } catch (err: any) { strapi.log.error(`[seed] case-studies error: ${err?.message}`); }
  try { await seedTestimonials(strapi); } catch (err: any) { strapi.log.error(`[seed] testimonials error: ${err?.message}`); }
  try { await seedPartners(strapi); } catch (err: any) { strapi.log.error(`[seed] partners error: ${err?.message}`); }
  try { await seedFaqs(strapi); } catch (err: any) { strapi.log.error(`[seed] faqs error: ${err?.message}`); }
  try { await seedBlogPosts(strapi); } catch (err: any) { strapi.log.error(`[seed] blog-posts error: ${err?.message}`); }
  try { await seedSingleTypes(strapi); } catch (err: any) { strapi.log.error(`[seed] single-types error: ${err?.message}`); }

  strapi.log.info('[seed] Database seed complete.');
}
