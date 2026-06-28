export const companyInfo = {
  company_name: 'SYNCXELL LLC',
  tagline: 'Enterprise IT Solutions for the Institutions That Matter Most',
  mission_statement:
    '<p>SYNCXELL LLC delivers enterprise-grade IT solutions with the rigor, clearance awareness, and compliance depth required by US Federal agencies, financial institutions, and law firms. We exist to close the gap between commercial IT innovation and government-grade security — enabling our clients to modernize without compromise.</p>',
  founded_year: 2019,
  headquarters_address: '1776 K Street NW, Suite 500\nWashington, DC 20006\nUnited States',
  phone: '+1 (202) 555-0174',
  general_email: 'info@syncxell.com',
  linkedin_url: 'https://www.linkedin.com/company/syncxell',
  cage_code: 'SYNCX',
  uei: 'SXLLC123456789',
  primary_naics: '541512',
  naics_codes: [
    { code: '541512', description: 'Computer Systems Design Services' },
    { code: '541519', description: 'Other Computer Related Services' },
    { code: '541690', description: 'Other Scientific and Technical Consulting' },
    { code: '541511', description: 'Custom Computer Programming Services' },
    { code: '541513', description: 'Computer Facilities Management Services' },
  ],
  business_size: 'small',
  socioeconomic_designations: ['Small Business'],
  footer_disclaimer:
    'SYNCXELL LLC is a US-registered limited liability company providing enterprise IT services. CAGE Code: SYNCX | UEI: SXLLC123456789 | DUNS: 123456789. All services subject to applicable federal acquisition regulations.',
};

export const homepageHero = {
  headline: 'Enterprise IT That Governs, Protects, and Delivers',
  subheadline:
    'SYNCXELL LLC brings federal-grade security, cloud engineering, and compliance expertise to agencies, banks, and law firms. From FISMA ATOs to Zero Trust networks — we deliver outcomes, not promises.',
  cta_primary_label: 'Request a Proposal',
  cta_primary_url: '/rfq',
  cta_secondary_label: 'View Our Services',
  cta_secondary_url: '/services',
  trust_badges: [
    { label: 'FISMA Authorized', icon: 'shield-check' },
    { label: 'AWS Advanced Partner', icon: 'cloud' },
    { label: 'CMMC Level 2 Ready', icon: 'badge-check' },
    { label: 'SAM.gov Registered', icon: 'building-library' },
  ],
  stats: [
    { value: '100+', label: 'Federal & Commercial Projects Delivered' },
    { value: '38%', label: 'Average Infrastructure Cost Reduction' },
    { value: '11 wks', label: 'Average FISMA ATO Timeline' },
    { value: '24/7', label: 'Managed Security Operations' },
  ],
  announcement_bar_text: 'Now pursuing CMMC Level 2 certification — learn more about our DoD contractor support services.',
  announcement_bar_enabled: true,
};

export const siteSettings = {
  site_title: 'SYNCXELL LLC — Enterprise IT Solutions',
  site_description:
    'SYNCXELL LLC delivers enterprise IT solutions — cloud architecture, cybersecurity, and compliance consulting — for US Federal agencies, banks, and law firms.',
  maintenance_mode: false,
  rfq_email_recipient: 'leads@syncxell.com',
  teaming_email_recipient: 'partnerships@syncxell.com',
  nav_links: [
    { label: 'Services', url: '/services' },
    { label: 'About', url: '/about' },
    { label: 'Case Studies', url: '/case-studies' },
    { label: 'Blog', url: '/blog' },
    { label: 'Procurement', url: '/procurement' },
    { label: 'Contact', url: '/contact' },
  ],
  footer_links: [
    { section: 'Services', links: [
      { label: 'Cloud Infrastructure', url: '/services/cloud-infrastructure-management' },
      { label: 'Cybersecurity', url: '/services/cybersecurity-compliance' },
      { label: 'Software Development', url: '/services/software-application-development' },
      { label: 'Data Analytics', url: '/services/data-services-analytics' },
    ]},
    { section: 'Company', links: [
      { label: 'About Us', url: '/about' },
      { label: 'Team', url: '/about#team' },
      { label: 'Partners', url: '/about#partners' },
      { label: 'Careers', url: '/careers' },
    ]},
    { section: 'Procurement', links: [
      { label: 'Capability Statement', url: '/procurement' },
      { label: 'Submit RFQ', url: '/rfq' },
      { label: 'Teaming Requests', url: '/teaming' },
      { label: 'SAM.gov Profile', url: 'https://sam.gov' },
    ]},
  ],
  social_proof_stats: [
    { value: '5+ years', label: 'in federal IT' },
    { value: '$50M+', label: 'in contracts delivered' },
    { value: '99.9%', label: 'uptime SLA maintained' },
  ],
  cookie_banner_text:
    'SYNCXELL uses cookies to improve your experience on our site. By continuing to browse, you agree to our use of cookies.',
  cookie_banner_enabled: true,
};
