export const caseStudies = [
  {
    title: 'Zero-Downtime Cloud Migration for a Federal Civilian Agency',
    slug: 'federal-agency-cloud-migration',
    client_name: 'Confidential — Civilian Federal Agency',
    client_sector: 'federal',
    engagement_type: 'prime_contract',
    project_period: 'Q3 2022 – Q1 2024',
    challenge:
      '<p>A mid-size federal civilian agency was running 120+ applications on aging on-premise infrastructure approaching end-of-life. Three previous migration attempts over six years had failed due to interoperability issues, compliance delays, and insufficient change management. The agency faced a hard deadline for ATO renewal and had to migrate without any acceptable downtime on mission-critical case management systems.</p>',
    solution:
      '<p>SYNCXELL designed a phased migration to AWS GovCloud with a zero-downtime approach using blue/green deployments and live data replication. We conducted a complete FISMA High ATO re-authorization using NIST SP 800-53 Rev 5 controls, built a new Landing Zone with AWS Control Tower, established automated compliance drift detection using AWS Config, and deployed a Splunk SIEM for continuous monitoring to satisfy FISMA continuous monitoring requirements.</p>',
    outcome:
      '<p>All 120+ workloads were successfully migrated to AWS GovCloud with zero service disruptions. The new infrastructure reduced operational costs by 38%, and the ATO package was approved in 11 weeks — a 40% reduction from the agency\'s previous ATO cycle time. The SIEM deployment reduced mean time to detect (MTTD) threats from 4.2 days to under 6 hours.</p>',
    metrics: [
      { label: 'Applications migrated', value: '120+' },
      { label: 'Downtime during migration', value: '0 hours' },
      { label: 'Infrastructure cost reduction', value: '38%' },
      { label: 'ATO approval time', value: '11 weeks' },
      { label: 'MTTD reduction', value: '4.2 days → 6 hours' },
    ],
    technologies_used: [
      'AWS GovCloud',
      'AWS Control Tower',
      'AWS Config',
      'Terraform',
      'Splunk',
      'Docker',
      'Kubernetes',
    ],
    compliance_frameworks: ['NIST SP 800-53 Rev 5', 'FISMA High', 'FedRAMP'],
    naics_codes: ['541512', '541519'],
    is_featured: true,
    confidential: true,
  },
  {
    title: 'Fraud Detection ML Platform for a Regional Federal Reserve Member Bank',
    slug: 'banking-fraud-detection-ml-platform',
    client_name: 'Confidential — Regional Bank',
    client_sector: 'banking',
    engagement_type: 'prime_contract',
    project_period: 'Q1 2023 – Q4 2023',
    challenge:
      '<p>A regional bank with $8.2B in assets was experiencing a 34% year-over-year increase in ACH fraud losses despite having deployed a legacy rule-based fraud detection system. The existing system produced excessive false positives (blocking 12% of legitimate transactions), driving customer dissatisfaction and operational cost. The institution needed a modern, ML-driven approach that could adapt to evolving fraud patterns in real time.</p>',
    solution:
      '<p>SYNCXELL designed and deployed a real-time fraud detection pipeline using Python-based ML models (XGBoost ensemble) trained on 4 years of anonymized transaction history. The system was deployed on Azure with AES-256 encryption at rest and in transit, integrated with the bank\'s existing core banking system via a secure REST API layer. We implemented automated model retraining pipelines triggered by detected drift, and a human-in-the-loop review interface for borderline cases.</p>',
    outcome:
      '<p>The ML platform reduced fraud losses by 67% in the first six months while simultaneously reducing false positive rates by 89%. Legitimate transaction throughput improved dramatically, and operations staff were able to process remaining flagged transactions 3x faster using the new review interface. The solution paid for itself within 4 months of deployment.</p>',
    metrics: [
      { label: 'Fraud loss reduction', value: '67%' },
      { label: 'False positive reduction', value: '89%' },
      { label: 'Payback period', value: '4 months' },
      { label: 'Transaction history analyzed', value: '4 years' },
      { label: 'Review throughput improvement', value: '3x faster' },
    ],
    technologies_used: [
      'Python',
      'XGBoost',
      'Azure ML',
      'Apache Kafka',
      'PostgreSQL',
      'AES-256',
      'REST API',
    ],
    compliance_frameworks: ['PCI-DSS', 'SOX', 'FFIEC CAT'],
    naics_codes: ['541511', '541519'],
    is_featured: true,
    confidential: true,
  },
  {
    title: 'Zero Trust Network Modernization for a Mid-Atlantic County Government',
    slug: 'county-government-zero-trust-network',
    client_name: 'Confidential — Mid-Atlantic County',
    client_sector: 'local_gov',
    engagement_type: 'prime_contract',
    project_period: 'Q4 2023 – Q3 2024',
    challenge:
      '<p>A county government serving 380,000 residents was operating on a flat network architecture with no internal segmentation. Following a ransomware incident at a neighboring jurisdiction that caused a 3-week service outage, county leadership commissioned an urgent network modernization to prevent lateral threat movement and protect citizen services including online tax payments, permit applications, and court records access.</p>',
    solution:
      '<p>SYNCXELL conducted a comprehensive network security assessment, then designed and deployed a Zero Trust Network Access (ZTNA) architecture with Palo Alto NGFWs at all perimeter and internal chokepoints, dynamic micro-segmentation separating critical departments, and a centralized Grafana monitoring stack with 24/7 alerting. We also migrated the county\'s identity management to Azure Entra ID with conditional access policies enforced across all devices.</p>',
    outcome:
      '<p>The county now operates with full network visibility across 47 departments and 2,400 endpoints. A penetration test conducted 60 days post-implementation confirmed zero exploitable lateral movement paths across department boundaries. The county\'s cyber insurance premium was reduced by 22% upon presenting the new security posture documentation. Citizen-facing services maintained 100% uptime throughout the migration.</p>',
    metrics: [
      { label: 'Departments segmented', value: '47' },
      { label: 'Endpoints secured', value: '2,400' },
      { label: 'Lateral movement paths post-implementation', value: '0 exploitable' },
      { label: 'Cyber insurance premium reduction', value: '22%' },
      { label: 'Citizen service downtime during migration', value: '0 hours' },
    ],
    technologies_used: [
      'Palo Alto NGFW',
      'Azure Entra ID',
      'Zscaler ZTNA',
      'Grafana',
      'Prometheus',
      'Ansible',
    ],
    compliance_frameworks: ['NIST CSF', 'CIS Controls v8', 'CISA Zero Trust Maturity Model'],
    naics_codes: ['541512', '541690'],
    is_featured: true,
    confidential: true,
  },
];
