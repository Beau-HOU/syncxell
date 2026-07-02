<!DOCTYPE html>
<html lang="en">
<head>
<?php include view('layout/head'); ?>
</head>
<body class="gov-hub-page">

<?php include view('layout/header'); ?>
</div><!--/.min-box-->

<!-- ── PAGE TITLE ── -->
<div class="prt-page-title-row" style="background-image:url('<?= asset('images/top_bar1.png') ?>');background-size:cover;background-position:center top;">
  <div class="prt-col-wrapper-bg-layer prt-bg-layer">
    <div class="prt-col-wrapper-bg-layer-inner"></div>
  </div>
  <div class="layer-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-box">
            <div class="breadcrumb-wrapper mb-20">
              <span><a title="Home" href="<?= m_path('home', [], true) ?>">Home</a></span>
              <span class="prt-bread-sep"><i class="fa-angle-double-right fa"></i></span>
              <span>Government Hub</span>
            </div>
            <div class="page-title-heading">
              <h1 class="pb-0">SYNCXELL for U.S. Government</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-main">

  <!-- ── OVERVIEW (about-section-02) ── -->
  <section class="prt-row about-section-02 clearfix">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 col-md-7 m-auto mt-0 mb-0 res-991-mb-30">
          <div class="prt-single-image-wrapper mb-10">
            <img class="img-fluid border-rad_30"
                 src="<?= asset('images/single-img-7.jpg') ?>"
                 alt="SYNCXELL Federal Government IT">
          </div>
        </div>
        <div class="col-lg-7 pl-35 res-991-pl-15">
          <div class="about-content-wrap">
            <div class="section-title-block">
              <div class="subtitle-wrapper">
                <div class="subtitle"><h2>Government Hub</h2></div>
              </div>
              <div class="section-title">
                <h3 class="title">Federal-grade IT solutions built for <span>mission success</span></h3>
              </div>
              <div class="section-desc">
                <p class="m-0">SYNCXELL delivers compliant, secure, and mission-ready IT solutions to U.S. federal, state, and local government agencies. Our professionals bring direct experience from the U.S. and French governments — making compliance, security, and operational resilience the foundation of every engagement, not an afterthought.</p>
              </div>
            </div>
          </div>
          <div class="row mt-50 res-991-mt-30">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="prt-featured-icon-box style1">
                <div class="prt-featured-icon-box-inner style1 d-flex">
                  <div class="prt-featured-icon style1 m-0">
                    <i class="flaticon-cybersecurity"></i>
                  </div>
                  <div class="prt-featured-content-box res-767-pl-20 pl-20">
                    <div class="prt-featured-content-inner">
                      <div class="prt-featured-title style1">
                        <h2>Compliance-First Approach</h2>
                      </div>
                      <div class="prt-featured-dec">
                        <p class="m-0">Every solution is architected around NIST SP 800-53, FISMA, and CMMC from day one — not retrofitted.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 res-767-mt-30">
              <div class="prt-featured-icon-box style1">
                <div class="prt-featured-icon-box-inner d-flex ml-40 res-991-m-0">
                  <div class="prt-featured-icon style1 m-0">
                    <i class="flaticon-cloud-computing"></i>
                  </div>
                  <div class="prt-featured-content-box pl-20 res-767-pl-20">
                    <div class="prt-featured-content-inner">
                      <div class="prt-featured-title style1">
                        <h2>FedRAMP-Ready Cloud</h2>
                      </div>
                      <div class="prt-featured-dec style1">
                        <p class="m-0">Deployments on AWS GovCloud and Azure Government with Landing Zones, IAM, and 24/7 SOC coverage.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── COMPLIANCE FRAMEWORKS (cta-section-style02) ── -->
  <section class="prt-row cta-section-style02 bg-img2 clearfix position-relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 pt-200 res-575-pt-60">
          <div class="cta-section-style02-title">
            <div class="section-title-block">
              <div class="subtitle-wrapper">
                <div class="subtitle">
                  <h2 class="text-white">Compliance frameworks</h2>
                </div>
              </div>
              <div class="section-title">
                <h3 class="title text-white">Authorization-ready from <span>day one</span></h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="featured-iconbox-style02 d-flex pt-30">
                <div class="featured-iconbox-inner-content res-991-mb-20 res-991-pl-0">
                  <div class="featured-icon-box-style02">
                    <i class="flaticon-cybersecurity"></i>
                  </div>
                  <div class="featured-title-style02">
                    <h3>NIST SP 800-53</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="featured-iconbox-style02 d-flex pt-30">
                <div class="featured-iconbox-inner-content d-flex res-991-mb-20 res-991-pl-0">
                  <div class="featured-icon-box-style02">
                    <i class="flaticon-shield"></i>
                  </div>
                  <div class="featured-title-style02">
                    <h3>FISMA ATO Ready</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="featured-iconbox-style02 d-flex pt-30">
                <div class="featured-iconbox-inner-content d-flex">
                  <div class="featured-icon-box-style02">
                    <i class="flaticon-personal-information"></i>
                  </div>
                  <div class="featured-title-style02">
                    <h3>CMMC Level 2 &amp; 3</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── CONTRACTING & TEAMING (service-section-02) ── -->
  <section class="prt-row service-section-02 clearfix">
    <div class="container">
      <div class="row service-section-style2-wrapper">
        <div class="col-lg-6 col-md-10">

          <div class="service-content-style2 mb-40 res-1199-mb-10">
            <div class="service-content-title">
              <h2>Contract vehicles &amp; procurement</h2>
            </div>
            <div class="service-list">
              <div class="service-item">
                <ul class="service-list-item d-flex">
                  <li><span><i class="flaticon-double-tick"></i></span></li>
                  <li>Active SAM.gov registration — eligible for sole-source and competitive federal awards across civilian and defense agencies.</li>
                </ul>
              </div>
              <div class="service-item">
                <ul class="service-list-item d-flex">
                  <li><span><i class="flaticon-double-tick"></i></span></li>
                  <li>Pursuing 8(a), HUBZone, and SDVOSB certifications to maximize set-aside opportunities for qualified agencies.</li>
                </ul>
              </div>
              <div class="service-item">
                <ul class="service-list-item d-flex mb-0">
                  <li><span><i class="flaticon-double-tick"></i></span></li>
                  <li>Experienced in FAR/DFARS compliance, statement-of-work development, and IDIQ task order responses.</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="service-content-style2 res-991-mb-20">
            <div class="service-content-title">
              <h2>Teaming &amp; subcontracting</h2>
            </div>
            <div class="service-list">
              <div class="service-item">
                <ul class="service-list-item d-flex">
                  <li><span><i class="flaticon-double-tick"></i></span></li>
                  <li>Open to prime–sub teaming arrangements — we bring NIST/FISMA/CMMC technical depth to your bid team.</li>
                </ul>
              </div>
              <div class="service-item">
                <ul class="service-list-item d-flex mb-0">
                  <li><span><i class="flaticon-double-tick"></i></span></li>
                  <li>Submit a teaming request directly through our RFQ page or contact us to discuss your specific opportunity.</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="mt-35">
            <a href="<?= m_path('rfq', [], true) ?>"
               class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill prt-btn-color-skincolor">
              Submit a Teaming Request
            </a>
            <a href="<?= m_path('contact', [], true) ?>"
               class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border ml-10">
              Contact us
            </a>
          </div>

        </div>
        <div class="col-lg-6 res-991-mt-40">
          <div class="tm-reveal-effects-yes tm-reveal-direction-rl">
            <div class="prt-single-image-wrapper elementor-widget-container">
              <img width="767" height="475" class="img-fluid border-rad_30"
                   src="<?= asset('images/single-img-4.png') ?>"
                   alt="Federal contracting and teaming">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── FAQ (faq-section_2) ── -->
  <section class="prt-row faq-section_2 overflow-hidden clearfix">
    <div class="container">
      <div class="row">

        <!-- Tab navigation -->
        <div class="col-lg-3 col-md-12">
          <div class="prt-tabs prt-tab-style-02 text-left">
            <ul class="tabs clearfix">
              <li class="tab active" data-filter=".general"><a href="#">General questions</a></li>
              <li class="tab" data-filter=".security"><a href="#">Security &amp; compliance</a></li>
              <li class="tab" data-filter=".procurement"><a href="#">Procurement</a></li>
              <li class="tab" data-filter=".services"><a href="#">Services</a></li>
            </ul>
          </div>
        </div>

        <!-- Tab contents -->
        <div class="col-lg-9 col-md-12">
          <div class="tab-title">
            <h2>Common questions from government clients</h2>
          </div>

          <?php
          $staticFaqs = [
            'general' => [
              ['q' => 'Is SYNCXELL registered in SAM.gov?',
               'a' => 'Yes. SYNCXELL LLC maintains an active SAM.gov registration and is eligible to receive federal awards across civilian and defense agencies. Contact us for our UEI/CAGE code information.'],
              ['q' => 'What agency types does SYNCXELL serve?',
               'a' => 'We serve civilian federal agencies, DoD components, state and local government entities, federally-funded research centers, and regulated private sector organizations requiring government-equivalent security standards.'],
              ['q' => 'Does SYNCXELL have experience with classified environments?',
               'a' => 'Our team members have backgrounds supporting U.S. and French government operations. We engage on CUI and controlled unclassified information environments and can discuss clearance requirements on a case-by-case basis.'],
            ],
            'security' => [
              ['q' => 'What compliance frameworks does SYNCXELL support?',
               'a' => 'We design and implement solutions aligned with NIST SP 800-53 (Rev 5), FISMA HIGH baselines, CMMC Level 2 and 3, FedRAMP, DISA STIGs, and CIS Benchmarks. Compliance is built in from architecture — not retrofitted.'],
              ['q' => 'Can SYNCXELL support our FISMA ATO process?',
               'a' => 'Yes. We provide end-to-end ATO support: system categorization, security control implementation, SSP development, continuous monitoring program design, and POA&M management. We work alongside your ISSO and authorizing official.'],
              ['q' => 'How does your 24/7 SOC handle government environments?',
               'a' => 'Our Security Operations Center provides continuous SIEM monitoring, threat detection, and SLA-backed incident response. For federal environments, we follow NIST SP 800-61 incident handling procedures and can integrate with your agency SIEM or reporting requirements.'],
            ],
            'procurement' => [
              ['q' => 'What contract vehicles does SYNCXELL hold?',
               'a' => 'We are currently expanding our contract vehicle portfolio including GSA MAS and agency-specific BPAs. In the interim, we respond to RFPs/RFQs directly via SAM.gov and are actively seeking teaming arrangements with existing vehicle holders.'],
              ['q' => 'Do you offer teaming or subcontracting partnerships?',
               'a' => 'Absolutely. We actively seek prime–sub teaming arrangements where we bring specialized NIST/FISMA/CMMC technical depth. Submit a teaming request via our RFQ page or contact us directly with your opportunity details.'],
              ['q' => 'Can you respond to sole-source justifications?',
               'a' => 'Yes. As an eligible small business, we can be considered for sole-source awards under applicable FAR thresholds. Our technical specialization in compliance-driven IT for government agencies supports unique/limited source justifications.'],
            ],
            'services' => [
              ['q' => 'What cloud platforms do you use for government work?',
               'a' => 'We primarily deploy on AWS GovCloud (US) and Azure Government — both FedRAMP High authorized environments. We also support on-premise and hybrid architectures using hardened baselines aligned to DISA STIGs.'],
              ['q' => 'Do you provide staff augmentation for government programs?',
               'a' => 'Yes. We can provide skilled IT professionals for time-and-materials or labor-hour task orders. Our staff bring expertise in cloud architecture, cybersecurity, network engineering, system administration, and DevSecOps.'],
              ['q' => 'What is your typical engagement timeline for a federal agency?',
               'a' => 'Discovery and assessment typically takes 2–4 weeks. Architecture and design runs 4–8 weeks. Implementation timelines depend on scope — most initial deployments are completed within 90 days of award with ongoing managed services activated at go-live.'],
            ],
          ];

          foreach (['general', 'security', 'procurement', 'services'] as $catKey):
            $items = !empty($faqsByCategory[$catKey]) ? $faqsByCategory[$catKey] : array_map(
              fn($f) => ['question' => $f['q'], 'answer' => '<p>' . $f['a'] . '</p>'],
              $staticFaqs[$catKey]
            );
            $isFirst = ($catKey === 'general');
          ?>
          <div class="tab-conatin-inner <?= $catKey ?><?= $isFirst ? ' active' : '' ?>">
            <div class="accordion style2">
              <?php foreach ($items as $i => $faq): ?>
              <div class="toggle prt-toggle_style_classic prt-control-right-true">
                <div class="toggle-title">
                  <a href="#" <?= $i === 0 ? 'class="active"' : '' ?>>
                    <?= htmlspecialchars($faq['question'] ?? '') ?>
                  </a>
                </div>
                <div class="toggle-content<?= $i === 0 ? ' show' : '' ?>"<?= $i > 0 ? ' style="display:none;"' : '' ?>>
                  <?php if (!empty($faq['answer'])): ?>
                    <?= $faq['answer'] ?>
                  <?php endif; ?>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endforeach; ?>

        </div>
      </div>
    </div>
  </section>

</div><!--/.site-main-->

<?php include view('layout/footer'); ?>
<?php include view('layout/js'); ?>

</body>
</html>
