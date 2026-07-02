<!DOCTYPE html>
<html lang="en">
<head>
<?php include view('layout/head'); ?>
</head>
<body class="services-page">

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
              <span>Solutions</span>
            </div>
            <div class="page-title-heading">
              <h1 class="pb-0">Mission-critical IT solutions</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-main">

  <!-- ── SERVICE GRID ── -->
  <section class="prt-row service-section01 position-relative clearfix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 m-auto">
          <div class="service-section-title pb-20">
            <div class="section-title-block text-center">
              <div class="subtitle-wrapper">
                <div class="subtitle"><h2>What we offer</h2></div>
              </div>
              <div class="section-title">
                <h3 class="title">Mission-critical IT for government,<br>banking &amp; <span>legal</span> enterprises</h3>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
      $iconMap = [
          'software-application-development'   => 'service1.svg',
          'cloud-infrastructure-management'    => 'service2.svg',
          'cybersecurity-compliance'           => 'service3.svg',
          'network-operations'                 => 'service4.svg',
          'data-services-analytics'            => 'service5.svg',
          'advanced-virtualization-hypervisor' => 'service6.svg',
          'it-automation-orchestration'        => 'service1.svg',
          'enterprise-os-engineering'          => 'service2.svg',
      ];
      ?>

      <div class="row pb-15 res-575-p-0" style="row-gap:30px;">
        <?php if (!empty($services)): ?>
          <?php foreach ($services as $s): ?>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="service-icon-box">
              <div class="service-iconbox-inner">
                <div class="service-imagebox">
                  <?php
                  $coverUrl = strapi_img($s['cover_image'] ?? null);
                  $icon     = $iconMap[$s['slug']] ?? 'service1.svg';
                  ?>
                  <?php if ($coverUrl): ?>
                    <img class="img-fluid" src="<?= htmlspecialchars($coverUrl) ?>" alt="<?= htmlspecialchars($s['name']) ?>">
                  <?php else: ?>
                    <img class="img-fluid" src="<?= asset('images/' . $icon) ?>" alt="<?= htmlspecialchars($s['name']) ?>">
                  <?php endif; ?>
                </div>
                <div class="service-content-box pl-30 res-991-pl-20">
                  <div class="service-title">
                    <h3><a href="<?= m_path('service.detail', [$s['slug']], true) ?>"><?= htmlspecialchars($s['name']) ?></a></h3>
                  </div>
                  <div class="service-des">
                    <p><?= htmlspecialchars($s['short_description'] ?? '') ?></p>
                  </div>
                  <div class="prt-bottom-buttonbox">
                    <a href="<?= m_path('service.detail', [$s['slug']], true) ?>" target="_self">Read more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        <?php else: ?>
          <!-- Static fallback -->
          <?php
          $static = [
            ['slug'=>'software-application-development',  'name'=>'Software & App Development',      'icon'=>'service1.svg','desc'=>'Custom enterprise applications, legacy modernization, DevOps pipelines, and CI/CD for federal and regulated industries.'],
            ['slug'=>'cloud-infrastructure-management',   'name'=>'Cloud Infrastructure Management', 'icon'=>'service2.svg','desc'=>'Multi-cloud orchestration on AWS GovCloud and Azure Government — Landing Zones, IAM, hybrid cloud, and 24/7 management.'],
            ['slug'=>'cybersecurity-compliance',          'name'=>'Cybersecurity & Compliance',      'icon'=>'service3.svg','desc'=>'NIST SP 800-53, FISMA authorization, CMMC preparation, 24/7 SIEM, penetration testing and automated incident response.'],
            ['slug'=>'network-operations',                'name'=>'Network & Operations',             'icon'=>'service4.svg','desc'=>'Zero Trust Network Access (ZTNA), SDN design, ITIL-aligned Service Desk, and centralized infrastructure monitoring.'],
            ['slug'=>'data-services-analytics',          'name'=>'Data Services & Analytics',       'icon'=>'service5.svg','desc'=>'Secure data warehouses, ETL pipelines, AES-256 encryption, executive BI dashboards, and predictive fraud analytics.'],
            ['slug'=>'advanced-virtualization-hypervisor','name'=>'Virtualization & Hypervisor',     'icon'=>'service6.svg','desc'=>'XCP-ng and KVM mastery, zero-downtime VMware migrations, and scalable compute clusters for federal and enterprise clients.'],
            ['slug'=>'it-automation-orchestration',      'name'=>'IT Automation & Orchestration',   'icon'=>'service1.svg','desc'=>'Ansible, Terraform, and Python-driven automation to eliminate manual toil, enforce compliance drift, and accelerate delivery.'],
            ['slug'=>'enterprise-os-engineering',        'name'=>'Enterprise OS Engineering',        'icon'=>'service2.svg','desc'=>'Linux and Windows Server hardening, patching pipelines, golden-image management, and lifecycle operations for regulated environments.'],
          ];
          foreach ($static as $s): ?>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="service-icon-box">
              <div class="service-iconbox-inner">
                <div class="service-imagebox">
                  <img class="img-fluid" src="<?= asset('images/' . $s['icon']) ?>" alt="<?= htmlspecialchars($s['name']) ?>">
                </div>
                <div class="service-content-box pl-30 res-991-pl-20">
                  <div class="service-title">
                    <h3><a href="<?= m_path('service.detail', [$s['slug']], true) ?>"><?= htmlspecialchars($s['name']) ?></a></h3>
                  </div>
                  <div class="service-des"><p><?= htmlspecialchars($s['desc']) ?></p></div>
                  <div class="prt-bottom-buttonbox">
                    <a href="<?= m_path('service.detail', [$s['slug']], true) ?>">Read more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>

      <!-- Bottom CTA row -->
      <div class="row align-items-center mt-15">
        <div class="col-lg-6 m-auto">
          <div class="row align-items-center">
            <div class="col-lg-5 col-md-5 col-sm-6 p-0 res-767-pl-15 res-767-pr-15">
              <div class="prt-btn-service-footer text-center">
                <div class="prt-btn-wapre">
                  <a href="#" id="openQuotation" class="prt-btn prt-btn-size-sm prt-btn-shape-rounded">Request a Quote</a>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-6 res-575-mt-20 res-991-pl-5">
              <div class="prt-btn-service-footer">
                <div class="prt-service-widget-title">
                  <h3>Let's make something great work together!</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ── WHY CHOOSE US (about-section-03) ── -->
  <section class="prt-row about-section-03 bg-base-dark clearfix">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-sm-8">
          <div class="tm-reveal-effects-yes tm-reveal-direction-lr">
            <div class="prt-single-image-wrapper elementor-widget-container">
              <img class="img-fluid border-rad_30"
                   src="<?= asset('images/single-img-10.png') ?>"
                   alt="SYNCXELL team">
            </div>
          </div>
        </div>
        <div class="col-lg-7 pl-35 res-991-pl-15 res-991-mt-40">
          <div class="about-content-wrap-style3">
            <div class="section-title-block">
              <div class="subtitle-wrapper">
                <div class="subtitle"><h2 class="text-white">Why choose us</h2></div>
              </div>
              <div class="section-title">
                <h3 class="title text-white">We deliver <span>results</span><br>you can count on</h3>
              </div>
              <div class="section-desc res-991-p-0 res-991-mb-10">
                <p>Our professionals bring firsthand experience from the US and French governments, major airlines, and leading technology companies — giving us a unique understanding of high-stakes operational needs and strict compliance requirements.</p>
              </div>
            </div>
            <div class="row pb-50 res-991-pb-30">
              <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="prt-fid inside without-icon style1">
                  <div class="prt-fid-contents">
                    <h4 class="prt-fid-inner text-dark">
                      <span data-appear-animation="animateDigits" data-from="0" data-to="15" data-interval="1" class="numinate">15</span>
                      <span class="ml-5">+</span>
                    </h4>
                    <h3 class="prt-fid-title">Years of combined experience</h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 res-575-mt-30">
                <div class="prt-list-content">
                  <ul class="prt-list">
                    <li class="prt-list-item text-white d-flex">
                      <div class="prt-list-icon"><i class="flaticon-double-tick pr-15"></i></div>
                      NIST, FISMA &amp; CMMC compliance built in from day one
                    </li>
                    <li class="prt-list-item text-white d-flex">
                      <div class="prt-list-icon"><i class="flaticon-double-tick pr-15"></i></div>
                      AWS GovCloud &amp; Azure Government certified expertise
                    </li>
                    <li class="prt-list-item text-white d-flex">
                      <div class="prt-list-icon"><i class="flaticon-double-tick pr-15"></i></div>
                      24/7 Security Operations Center coverage
                    </li>
                    <li class="prt-list-item text-white d-flex">
                      <div class="prt-list-icon"><i class="flaticon-double-tick pr-15"></i></div>
                      99.9% uptime SLA guaranteed
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <a href="<?= m_path('about', [], true) ?>"
               class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill prt-btn-color-skincolor">More info about us</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── WORK PROCESS (step-section-style2) ── -->
  <section class="prt-row step-section-style2 clearfix">
    <div class="container">
      <div class="row wow fadeInUp">
        <div class="col-lg-12 m-auto mb-15">
          <div class="section-title-block text-center">
            <div class="subtitle-wrapper">
              <div class="subtitle">
                <h2>Work process</h2>
              </div>
            </div>
            <div class="section-title">
              <h3 class="title">A structured, compliance-first<br>approach to every <span>engagement</span></h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row pr-0">

        <div class="prt-stepbox col-lg-3 col-md-6 col-sm-6 res-991-mb-30">
          <div class="prt-stepbox-style2">
            <div class="prt-stepbox-content">
              <div class="prt-icon-contentbox">
                <div class="prt-stepbox-main-icon">
                  <div class="prt-ptable-icon-type-text">01</div>
                </div>
              </div>
              <div class="prt-stepbox-contents">
                <div class="prt-top-contentbox"></div>
                <div class="prt-bottom-contentbox">
                  <div class="prt-box-title">
                    <h3>Discovery &amp; Assessment</h3>
                  </div>
                  <div class="prt-static-box-desc">
                    <p>We audit your current infrastructure, security posture, and compliance gaps — aligning findings with NIST, FISMA, or CMMC requirements before any design begins.</p>
                  </div>
                </div>
                <div class="prt-bottom-buttonbox">
                  <a href="<?= m_path('contact', [], true) ?>"
                     class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border">Get started</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="prt-stepbox col-lg-3 col-md-6 col-sm-6 res-991-mb-30">
          <div class="prt-stepbox-style2">
            <div class="prt-stepbox-content">
              <div class="prt-icon-contentbox">
                <div class="prt-stepbox-main-icon">
                  <div class="prt-ptable-icon-type-text">02</div>
                </div>
              </div>
              <div class="prt-stepbox-contents">
                <div class="prt-top-contentbox"></div>
                <div class="prt-bottom-contentbox">
                  <div class="prt-box-title">
                    <h3>Architecture &amp; Design</h3>
                  </div>
                  <div class="prt-static-box-desc">
                    <p>Our engineers design a secure, scalable architecture — selecting the right cloud platform, network topology, and automation stack to meet your mission and budget.</p>
                  </div>
                </div>
                <div class="prt-bottom-buttonbox">
                  <a href="<?= m_path('contact', [], true) ?>"
                     class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border">Get started</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="prt-stepbox col-lg-3 col-md-6 col-sm-6 res-767-mb-30">
          <div class="prt-stepbox-style2">
            <div class="prt-stepbox-content">
              <div class="prt-icon-contentbox">
                <div class="prt-stepbox-main-icon">
                  <div class="prt-ptable-icon-type-text">03</div>
                </div>
              </div>
              <div class="prt-stepbox-contents">
                <div class="prt-top-contentbox"></div>
                <div class="prt-bottom-contentbox">
                  <div class="prt-box-title">
                    <h3>Implementation &amp; Deployment</h3>
                  </div>
                  <div class="prt-static-box-desc">
                    <p>We deploy your solution on AWS GovCloud, Azure Government, or on-premise using zero-downtime methodologies, Infrastructure-as-Code, and hardened baselines.</p>
                  </div>
                </div>
                <div class="prt-bottom-buttonbox">
                  <a href="<?= m_path('contact', [], true) ?>"
                     class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border">Get started</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="prt-stepbox col-lg-3 col-md-6 col-sm-6">
          <div class="prt-stepbox-style2">
            <div class="prt-stepbox-content">
              <div class="prt-icon-contentbox">
                <div class="prt-stepbox-main-icon">
                  <div class="prt-ptable-icon-type-text">04</div>
                </div>
              </div>
              <div class="prt-stepbox-contents">
                <div class="prt-top-contentbox"></div>
                <div class="prt-bottom-contentbox">
                  <div class="prt-box-title">
                    <h3>Managed Support &amp; Monitoring</h3>
                  </div>
                  <div class="prt-static-box-desc">
                    <p>Our 24/7 SOC provides continuous SIEM monitoring, patch management, continuous compliance auditing, and SLA-backed incident response to protect your environment.</p>
                  </div>
                </div>
                <div class="prt-bottom-buttonbox">
                  <a href="<?= m_path('contact', [], true) ?>"
                     class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border">Get started</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

</div><!--/.site-main-->

<?php include view('layout/footer'); ?>
<?php include view('layout/js'); ?>

</body>
</html>
