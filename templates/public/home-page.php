<!DOCTYPE html>
<html lang="en">
<head>
<?php include view('layout/head'); ?>
</head>
<body class="home-page">

<?php include view('layout/header'); ?>

    <!--hero-section start-->
    <div class="hero-section overflow-hidden">
      <div class="overflow-hidden hero-banner">

        <!-- Slide 1 -->
        <div class="hero-slide slide-1">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-9 col-sm-12">
                <div class="hero-content-block">
                  <div class="hero-content">
                    <div class="section-title-block">
                      <div class="subtitle-wrapper">
                        <div class="subtitle wow animate__fadeInUp" data-wow-delay="0.2s">
                          <h2 class="text-white">Federal-Grade IT Solutions</h2>
                        </div>
                      </div>
                      <div class="section-title wow animate__fadeInDown" data-wow-delay="0.4s">
                        <h3 class="title text-white">Securing America's<br><span class="text-white">Mission-Critical</span> Infrastructure.</h3>
                      </div>
                      <div class="section-desc wow animate__fadeInUp" data-wow-delay="0.6s">
                        <p class="text-white" style="font-size:14px;font-weight:400;line-height:1.4;letter-spacing:0.5px;opacity:0.65;">NIST SP 800-53 &bull; FISMA &bull; CMMC &bull; AWS GovCloud &bull; Azure Government</p>
                      </div>
                      <div class="prt-btn-waprre wow animate__flipInX" data-wow-delay="0.8s">
                        <a href="#" class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill prt-btn-color-skincolor js-open-rfq">Submit an RFQ</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="hero-slide slide-2">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-9 col-sm-12 sm-auto">
                <div class="hero-content-block">
                  <div class="hero-content">
                    <div class="section-title-block">
                      <div class="subtitle-wrapper">
                        <div class="subtitle wow animate__flipInX" data-wow-delay="0.2s">
                          <h2 class="text-white">Zero-Trust. Multi-Cloud. Always-On.</h2>
                        </div>
                      </div>
                      <div class="section-title wow animate__fadeInDown" data-wow-delay="0.4s">
                        <h3 class="title text-white">Cloud Excellence.<br><span>Zero-Trust</span> Security.</h3>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="prt-btn-desc wow animate__fadeInUp" data-wow-delay="0.6s">
                            <p>AWS &amp; Azure architecture, hybrid cloud, 24/7/365 SIEM monitoring and incident response for government and banking environments.</p>
                          </div>
                        </div>
                        <div class="col-lg-5 res-991-mb-30 pl-55 res-991-pl-15">
                          <div class="prt-btn-waprre wow animate__flipInX" data-wow-delay="0.8s">
                            <a href="<?= m_path('service.detail', ['cloud-infrastructure-management'], true) ?>">Explore Cloud Services</a>
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

        <!-- Slide 3 -->
        <div class="hero-slide slide-3">
          <div class="container">
            <div class="row">
              <div class="col-lg-11 col-md-12 m-auto text-center">
                <div class="hero-content-block">
                  <div class="hero-content">
                    <div class="hero-content-inner">
                      <div class="prt-hero-pre-title wow animate__fadeInUp" data-wow-delay="0.2s">
                        <h2 class="text-white">Intelligence from Data. Trust from Experience.</h2>
                      </div>
                      <div class="prt-hero-title wow animate__fadeInUp" data-wow-delay="0.4s">
                        <h3>Predictive Analytics for</h3>
                      </div>
                      <div class="per-hero-titile-inner wow animate__fadeInUp" data-wow-delay="0.6s">
                        <h4>Smarter Government &amp; Banking</h4>
                      </div>
                      <div class="prt-hero-desc wow animate__fadeInUp" data-wow-delay="0.8s">
                        <p class="text-white">Secure data warehousing, AES-256 encryption, ETL pipelines and fraud-detection models for mission-critical operations.</p>
                      </div>
                      <div class="prt-btn-waprre wow animate__fadeInUp" data-wow-delay="1s">
                        <a href="<?= m_path('contact', [], true) ?>">Talk to an Engineer</a>
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
    <!--hero-section end-->

  </div><!--/.min-box-->

  <div class="site-main">
    <!--about-section start-->
    <section class="prt-row about-section clearfix">
      <div class="container">
        <div class="row wow fadeInUp">
          <div class="col-xl-5 col-lg-5 m-auto mt-0 mb-0 pr-22 res-1199-pr-15 text-center">
            <div class="prt-single-image-wrapper" style="width:525px;height:554px;">
              <img class="img-fluid border-rad_30"
                src="<?= asset('images/about2.webp') ?>"
                alt="SYNCXELL team" 
                style="width:100%; height:100% !important;object-fit:cover;">
            </div>
          </div>

          <div class="col-xl-7 col-lg-7 m-auto mt-0 mb-0 res-991-mt-40 pl-30 res-1199-pl-15 res-991-mt-40">
            <div class="about-content-wrap">
              <div class="section-title-block">
                <div class="subtitle-wrapper">
                  <div class="subtitle"><h2>About SYNCXELL LLC</h2></div>
                </div>
                <div class="section-title">
                  <h3 class="title">Leading with <span>technology</span>, delivering with trust.</h3>
                </div>
                <div class="section-desc">
                  <p class="m-0">SYNCXELL LLC is a full-spectrum IT solutions provider serving US Federal/Local Government, Banking, and Legal sectors. Our team brings firsthand experience from the US and French governments, major airlines, and leading technology companies — giving us an unmatched understanding of complex operational requirements, strict compliance mandates, and zero-downtime standards.</p>
                </div>
              </div>
              <div class="about-featured-section pt-20 res-991-pt-30">
                <div class="row">
                  <div class="col-xl-5 col-lg-6 col-md-5">
                    <div class="about-featured-icon-box">
                      <div class="about-featured-icon-box-inner d-flex">
                        <div class="prt-icon-box pr-15"><i class="flaticon-check-box"></i></div>
                        <div class="about-featured-content">
                          <div class="about-featured-title">
                            <h4>Multi-Cloud Architecture</h4>
                            <p>AWS GovCloud &amp; Azure Government</p>
                          </div>
                        </div>
                      </div>
                      <div class="about-featured-icon-box-inner pt-10 d-flex">
                        <div class="prt-icon-box pr-15"><i class="flaticon-check-box"></i></div>
                        <div class="about-featured-content">
                          <div class="about-featured-title">
                            <h4>Open-Source Hypervisors</h4>
                            <p class="m-0">XCP-ng &amp; KVM — zero licensing burden</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-7 col-lg-6 col-md-7 position-relative res-767-pt-30">
                    <div class="prt-featured-icon-box">
                      <div class="prt-featured-icon-box-inner">
                        <div class="prt-iconbox-wrapper">
                          <div class="prt-subheading"><h3>Ready to discuss your requirements?</h3></div>
                          <div class="prt-iconbox-inner d-flex pr-20 res-480-p-0">
                            <div class="prt-iconbox-icon pr-20 res-480-p-0">
                              <div class="prt-box-icon"><i class="flaticon-phone"></i></div>
                            </div>
                            <div class="prt-iconbox-heading">
                              <div class="prt-contact-info">
                                <a href="tel:<?= params('app_phone') ?>"><?= params('app_phone') ?></a>
                              </div>
                              <div class="prt-content-wrapper">
                                <p class="m-0">Mon–Fri, 9 AM – 6 PM ET</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="about-img-overly">
                      <img src="<?= asset('images/single-img-4.png') ?>" alt="single-img">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--about-section end-->

    <!--service-section start-->
    <section class="prt-row service-section position-relative clearfix">
      <div class="container">
        <div class="row wow fadeInUp">
          <div class="col-lg-12 m-auto">
            <div class="service-section-title pb-20">
              <div class="section-title-block text-center">
                <div class="subtitle-wrapper">
                  <div class="subtitle"><h2>Core Solutions</h2></div>
                </div>
                <div class="section-title">
                  <h3 class="title">Enterprise-grade technology for<br><span>mission-critical</span> environments</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php if (!empty($services)): ?>
        <div class="row pb-20 res-991-pb-30 res-575-p-0">
          <?php
          $svIcons = ['service1.svg','service2.svg','service3.svg','service4.svg','service5.svg','service6.svg'];
          foreach ($services as $i => $sv):
            $sa      = $sv['attributes'] ?? $sv;
            $iconUrl = strapi_img($sa['icon'] ?? null) ?? asset('images/' . ($svIcons[$i] ?? 'service1.svg'));
            $svSlug  = $sa['slug'] ?? '#';
          ?>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="service-icon-box mb-30">
              <div class="service-iconbox-inner">
                <div class="service-imagebox">
                  <img class="img-fluid" src="<?= $iconUrl ?>" alt="<?= htmlspecialchars($sa['title'] ?? '') ?>">
                </div>
                <div class="service-content-box pl-30 res-991-pl-20">
                  <div class="service-title"><h3><a href="<?= m_path('service.detail', [$svSlug], true) ?>"><?= htmlspecialchars($sa['name'] ?? '') ?></a></h3></div>
                  <div class="service-des"><p><?= htmlspecialchars($sa['short_description'] ?? '') ?></p></div>
                  <div class="prt-bottom-buttonbox"><a href="<?= m_path('service.detail', [$svSlug], true) ?>" target="_self">Read more</a></div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <?php else: ?>
        <div class="row pb-20 res-991-pb-30 res-575-p-0">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="service-icon-box mb-30">
              <div class="service-iconbox-inner">
                <div class="service-imagebox">
                  <img class="img-fluid" src="<?= asset('images/service1.svg') ?>" alt="Software Development">
                </div>
                <div class="service-content-box pl-30 res-991-pl-20">
                  <div class="service-title"><h3><a href="<?= m_path('service.detail', ['software-application-development'], true) ?>">Software &amp; App Development</a></h3></div>
                  <div class="service-des"><p>Bespoke enterprise apps, legacy modernization, CI/CD pipelines, Docker/Kubernetes — delivering secure, scalable code rapidly and reliably.</p></div>
                  <div class="prt-bottom-buttonbox"><a href="<?= m_path('service.detail', ['software-application-development'], true) ?>" target="_self">Read more</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="service-icon-box mb-30">
              <div class="service-iconbox-inner">
                <div class="service-imagebox">
                  <img class="img-fluid" src="<?= asset('images/service2.svg') ?>" alt="Cloud Infrastructure">
                </div>
                <div class="service-content-box pl-30 res-991-pl-20">
                  <div class="service-title"><h3><a href="<?= m_path('service.detail', ['cloud-infrastructure-management'], true) ?>">Cloud Infrastructure</a></h3></div>
                  <div class="service-des"><p>Multi-cloud orchestration on AWS GovCloud and Azure Government. Landing zones, Entra ID governance, IAM enforcement, hybrid-cloud VPN tunneling.</p></div>
                  <div class="prt-bottom-buttonbox"><a href="<?= m_path('service.detail', ['cloud-infrastructure-management'], true) ?>" target="_self">Read more</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="service-icon-box mb-30">
              <div class="service-iconbox-inner">
                <div class="service-imagebox">
                  <img class="img-fluid" src="<?= asset('images/service3.svg') ?>" alt="Cybersecurity">
                </div>
                <div class="service-content-box pl-30 res-991-pl-20">
                  <div class="service-title"><h3><a href="<?= m_path('service.detail', ['cybersecurity-compliance'], true) ?>">Cybersecurity &amp; Compliance</a></h3></div>
                  <div class="service-des"><p>Penetration testing, NIST SP 800-53, FISMA authorization, CMMC preparation, 24/7 SIEM monitoring and automated incident response playbooks.</p></div>
                  <div class="prt-bottom-buttonbox"><a href="<?= m_path('service.detail', ['cybersecurity-compliance'], true) ?>" target="_self">Read more</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="service-icon-box mb-30">
              <div class="service-iconbox-inner">
                <div class="service-imagebox">
                  <img class="img-fluid" src="<?= asset('images/service4.svg') ?>" alt="Network Operations">
                </div>
                <div class="service-content-box pl-30 res-991-pl-20">
                  <div class="service-title"><h3><a href="<?= m_path('service.detail', ['network-operations'], true) ?>">Network &amp; Operations</a></h3></div>
                  <div class="service-des"><p>SDN design, Zero Trust Network Access (ZTNA), centralized system telemetry across distributed networks, and ITIL-aligned Service Desk with SLA guarantees.</p></div>
                  <div class="prt-bottom-buttonbox"><a href="<?= m_path('service.detail', ['network-operations'], true) ?>" target="_self">Read more</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="service-icon-box mb-30">
              <div class="service-iconbox-inner">
                <div class="service-imagebox">
                  <img class="img-fluid" src="<?= asset('images/service5.svg') ?>" alt="Data Services">
                </div>
                <div class="service-content-box pl-30 res-991-pl-20">
                  <div class="service-title"><h3><a href="<?= m_path('service.detail', ['data-services-analytics'], true) ?>">Data Services &amp; Analytics</a></h3></div>
                  <div class="service-des"><p>Secure data warehouses, AES-256 ETL pipelines, real-time executive dashboards, and predictive ML models for fraud detection and operational forecasting.</p></div>
                  <div class="prt-bottom-buttonbox"><a href="<?= m_path('service.detail', ['data-services-analytics'], true) ?>" target="_self">Read more</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="service-icon-box mb-30">
              <div class="service-iconbox-inner">
                <div class="service-imagebox">
                  <img class="img-fluid" src="<?= asset('images/service6.svg') ?>" alt="Virtualization">
                </div>
                <div class="service-content-box pl-30 res-991-pl-20">
                  <div class="service-title"><h3><a href="<?= m_path('service.detail', ['virtualization-hypervisor'], true) ?>">Virtualization &amp; Hypervisor Ops</a></h3></div>
                  <div class="service-des"><p>Zero-downtime VMware-to-XCP-ng/KVM migrations. Scalable compute clusters with full data sovereignty and no proprietary licensing burdens.</p></div>
                  <div class="prt-bottom-buttonbox"><a href="<?= m_path('service.detail', ['virtualization-hypervisor'], true) ?>" target="_self">Read more</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <div class="row wow fadeInUp">
          <div class="col-lg-12">
            <div class="prt-service-widget-title">
              <h3 class="m-0">Explore all our <a href="<?= m_path('services', [], true) ?>">Solutions</a> or contact us directly for a tailored IT assessment.</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--service-section end-->

    <!--funnumber-section start-->
    <section class="prt-row funnumber-section bg-base-dark clearfix" style="padding:70px 0;">
      <div class="container">
        <div class="row mt-20">
          <div class="col-lg-3 col-md-6 col-sm-6 res-991-mb-30">
            <div class="prt-fid inside prt-fid-view-topicon style3">
              <div class="prt-fid-contents">
                <h4>
                  <span data-appear-animation="animateDigits" data-from="0" data-to="15" data-interval="1" class="numinate">15</span><span>+</span>
                </h4>
                <h3 class="prt-fid-title">Years Combined<br>Experience</h3>
              </div>
              <div class="prt-fid-icon-wrapper">
                <div class="prt-icon prt-icon_element-bgcolor-skincolor prt-icon_element-size-sm prt-icon_element-fill prt-icon_element-color-skin">
                  <i class="flaticon flaticon-expertise"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 res-991-mb-30">
            <div class="prt-fid inside prt-fid-view-topicon style3">
              <div class="prt-fid-contents">
                <h4>
                  <span data-appear-animation="animateDigits" data-from="0" data-to="99" data-interval="5" class="numinate">99</span><span>.9%</span>
                </h4>
                <h3 class="prt-fid-title">Uptime SLA<br>Guaranteed</h3>
              </div>
              <div class="prt-fid-icon-wrapper">
                <div class="prt-icon prt-icon_element-bgcolor-skincolor prt-icon_element-size-sm prt-icon_element-fill prt-icon_element-color-skin">
                  <i class="flaticon flaticon-double-tick"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 res-575-mb-30">
            <div class="prt-fid inside prt-fid-view-topicon style3">
              <div class="prt-fid-contents">
                <h4>
                  <span data-appear-animation="animateDigits" data-from="0" data-to="6" data-interval="1" class="numinate">6</span><span>+</span>
                </h4>
                <h3 class="prt-fid-title">Compliance<br>Frameworks</h3>
              </div>
              <div class="prt-fid-icon-wrapper">
                <div class="prt-icon prt-icon_element-bgcolor-skincolor prt-icon_element-size-sm prt-icon_element-fill prt-icon_element-color-skin">
                  <i class="flaticon flaticon-personal-information"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="prt-fid inside prt-fid-view-topicon style3">
              <div class="prt-fid-contents">
                <h4><span>24</span><span>/7</span></h4>
                <h3 class="prt-fid-title">Security<br>Operations Center</h3>
              </div>
              <div class="prt-fid-icon-wrapper">
                <div class="prt-icon prt-icon_element-bgcolor-skincolor prt-icon_element-size-sm prt-icon_element-fill prt-icon_element-color-skin">
                  <i class="flaticon flaticon-clock"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Compliance badges -->
        <div class="row mt-50">
          <div class="col-lg-12 text-center">
            <div class="sx-compliance-badges justify-content-center">
              <span class="sx-badge">NIST SP 800-53</span>
              <span class="sx-badge">FISMA HIGH</span>
              <span class="sx-badge">CMMC LEVEL 2</span>
              <span class="sx-badge">AWS GovCloud</span>
              <span class="sx-badge">Azure Government</span>
              <span class="sx-badge">SOC 2 Type II</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--funnumber-section end-->

    <!--client-section start-->
    <section class="prt-row client-section bg-base-white clearfix">
      <div class="prt-client-overly1"></div>
      <div class="container-fluid pl-100 pr-100 res-1199-pr-15 res-1199-pl-15">
        <div class="row wow fadeInUp">
          <div class="col-lg-9"></div>
          <div class="col-lg-3">
            <div class="client-reviewbox">
              <div class="client-verify-logo mb-15">
                <img class="img-fluid" src="<?= asset('images/verify.png') ?>" alt="verified">
              </div>
              <div class="client-rating-star mb-10">
                <img class="img-fluid" src="<?= asset('images/star.png') ?>" alt="rating">
              </div>
              <div class="client-review-text">
                <h2 class="m-0">Federal &amp; Enterprise Trusted</h2>
              </div>
              <div class="about-img-overly">
                <img src="<?= asset('images/single-img-4.png') ?>" alt="single-img">
              </div>
            </div>
          </div>
        </div>
        <div class="client-section-wrapper spacing-1 wow fadeInUp position-relative">
          <div class="prt-client-overly"></div>
          <div class="row">
            <div class="col-xl-6 col-lg-12">
              <div class="client-title-box d-flex">
                <div class="prt-client-icon-box pr-15">
                  <i class="flaticon-award"></i>
                </div>
                <div class="prt-client-content-box">
                  <div class="prt-section-title">
                    <h2>Trusted across government &amp; regulated industries</h2>
                  </div>
                  <div class="prt-client-desc">
                    <p>From federal agencies to financial institutions and law firms, SYNCXELL delivers mission-critical IT solutions that meet the highest security and compliance standards.</p>
                  </div>
                  <a href="#" id="openQuotation" class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill prt-btn-color-transparentcolor">Request an estimate</a>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-12 res-1199-mt-30">
              <div class="client-title"><h3>Sectors we serve</h3></div>
              <div class="row mt-30">
                <?php
                $sectors = [
                  'US Federal Government', 'Local &amp; Municipal Gov',
                  'Banking &amp; Finance',  'Law Firms &amp; Legal',
                  'Defense Contractors',   'Healthcare Enterprise',
                  'Higher Education',      'Critical Infrastructure',
                ];
                foreach ($sectors as $s): ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-20">
                  <div class="client-box-main style1">
                    <div class="client-box">
                      <div class="client-thumbnail" style="padding:10px 0 10px 14px;font-size:0.78rem;font-weight:600;color:#ffffff;line-height:1.3;border-left:2px solid var(--sx-gold);">
                        <?= $s ?>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--client-section end-->

    <!--step-section start-->
    <section class="prt-row step-section bg-base-grey clearfix">
      <div class="prt-step-overly"></div>
      <div class="container">
        <div class="row wow fadeInUp">
          <div class="col-lg-6">
            <div class="step-section-title">
              <div class="section-title-block">
                <div class="subtitle-wrapper">
                  <div class="subtitle"><h2>Working process</h2></div>
                </div>
                <div class="section-title">
                  <h3 class="title">Our proven<br>engagement <span>methodology</span></h3>
                </div>
                <div class="step-desc pb-15">
                  <p>Every SYNCXELL engagement follows a structured, risk-aware process — from initial assessment through continuous optimization — ensuring delivery on time, on budget, and in compliance.</p>
                </div>
                <div class="step-btn">
                  <a href="<?= m_path('contact', [], true) ?>" class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill prt-btn-color-darkcolor">Start your engagement</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pl-95 res-991-pl-15 res-1199-pl-50 res-991-mt-50 m-auto mt-0 mb-0">
            <div class="row">
              <div class="col-lg-12 col-md-6 col-sm-12 res-991-mb-10">
                <div class="step-content-box">
                  <div class="prt-stepbox ml-120 mb-50 res-1199-ml-50 res-991-ml-0 res-991-mb-30 res-991-ml-20">
                    <div class="prt-stepbox-content">
                      <div class="prt-left-content-box pr-20">
                        <div class="process-num"><span class="number"></span></div>
                        <div class="prt-step-thumbnail">
                          <img class="img-fluid" src="<?= asset('images/single-img-6.jpg') ?>" alt="Assessment">
                        </div>
                      </div>
                      <div class="prt-step-content-box">
                        <div class="prt-box-title"><h2>Assessment &amp; Planning</h2></div>
                        <div class="prt-step-desc"><p>Deep-dive into your environment, compliance posture, and technical debt to build a prioritized roadmap.</p></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-md-6 col-sm-12 res-991-mb-10">
                <div class="step-content-box">
                  <div class="prt-stepbox mb-50 res-991-mb-30 res-991-ml-20">
                    <div class="prt-stepbox-content">
                      <div class="prt-left-content-box pr-20">
                        <div class="process-num"><span class="number"></span></div>
                        <div class="prt-step-thumbnail">
                          <img class="img-fluid" src="<?= asset('images/single-img-7.jpg') ?>" alt="Implementation">
                        </div>
                      </div>
                      <div class="prt-step-content-box">
                        <div class="prt-box-title"><h2>Solution &amp; Implementation</h2></div>
                        <div class="prt-step-desc"><p>Secure, zero-downtime deployment of cloud, security, or software solutions using industry-best CI/CD practices.</p></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-md-6 col-sm-12">
                <div class="step-content-box">
                  <div class="prt-stepbox ml-120 res-1199-ml-50 res-991-ml-0 res-991-ml-20">
                    <div class="prt-stepbox-content">
                      <div class="prt-left-content-box pr-20">
                        <div class="process-num"><span class="number"></span></div>
                        <div class="prt-step-thumbnail">
                          <img class="img-fluid" src="<?= asset('images/single-img-8.jpg') ?>" alt="Support">
                        </div>
                      </div>
                      <div class="prt-step-content-box">
                        <div class="prt-box-title"><h2>Support &amp; Optimization</h2></div>
                        <div class="prt-step-desc"><p>24/7 managed support, continuous monitoring, and quarterly performance reviews to ensure long-term mission success.</p></div>
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
    <!--step-section end-->

    <!--marquee-section start-->
    <div class="prt-row padding_zero-section bg-base-skin overflow-hidden clearfix">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 p-0">
            <div class="marquee-block overflow-hidden">
              <div class="marquee">
                <div class="marquee-content">
                  <div class="marquee-text">Ready to modernize?</div>
                  <div class="marquee-text">Federal IT &bull; Cloud &bull; Cybersecurity</div>
                  <div class="marquee-text">NIST &bull; FISMA &bull; CMMC</div>
                  <div class="marquee-text">Request your RFQ today</div>
                  <div class="marquee-text">Where integrity meets innovation</div>
                  <div class="marquee-text">Ready to modernize?</div>
                  <div class="marquee-text">Federal IT &bull; Cloud &bull; Cybersecurity</div>
                  <div class="marquee-text">NIST &bull; FISMA &bull; CMMC</div>
                  <div class="marquee-text">Request your RFQ today</div>
                  <div class="marquee-text">Where integrity meets innovation</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--marquee-section end-->

    <!--portfolio-section start-->
    <section class="prt-row portfolio-section bg-base-dark clearfix">
      <div class="container-fluid wow fadeInUp">
        <div class="row">
          <div class="col-lg-12 m-auto">
            <div class="portfolio-section-title pb-20 res-991-pb-15">
              <div class="section-title-block text-center">
                <div class="subtitle-wrapper">
                  <div class="subtitle"><h2 class="text-white">Case Studies</h2></div>
                </div>
                <div class="section-title">
                  <h3 class="title text-white">Featured engagements<br>we're <span class="text-white">proud</span> to share</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php if (!empty($caseStudies)): ?>
        <div class="row pl-100 pr-100 res-991-p-0 res-991-pl-15 res-991-pr-15 slick_slider mr_30 ml_30 res-991-ml_15 res-991-mr_15"
          data-slick='{"slidesToShow":3,"slidesToScroll":1,"arrows":false,"dots":false,"autoplay":true,"infinite":true,"responsive":[{"breakpoint":1199,"settings":{"slidesToShow":2}},{"breakpoint":611,"settings":{"slidesToShow":1}}]}'>
          <?php foreach ($caseStudies as $cs):
            $imgUrl = strapi_img($cs['cover_image'] ?? null) ?? asset('images/placeholder-portfolio.svg');
            $csUrl  = m_path('case.detail', [$cs['slug'] ?? ''], true);
            $sectorLabels = ['federal'=>'Federal Government','local_gov'=>'Local Gov','banking'=>'Banking & Finance','legal'=>'Legal','other'=>'Other'];
            $sectorLabel  = $sectorLabels[$cs['client_sector'] ?? ''] ?? ($cs['client_sector'] ?? 'Enterprise');
          ?>
          <div class="prt-box-col-wrapper col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="prt-featured-postbox style1">
              <div class="prt-featured-post-item">
                <div class="featured-thumbnail">
                  <a href="<?= $csUrl ?>">
                    <img class="img-fluid border-rad_30" src="<?= $imgUrl ?>" alt="<?= htmlspecialchars($cs['title'] ?? '') ?>">
                  </a>
                </div>
                <div class="prt-featured-overly">
                  <div class="prt-featured-content-box">
                    <div class="prt-featured-category"><p><?= htmlspecialchars($sectorLabel) ?></p></div>
                    <div class="prt-featured-title">
                      <a href="<?= $csUrl ?>">
                        <h3><?= htmlspecialchars($cs['title'] ?? '') ?></h3>
                      </a>
                    </div>
                  </div>
                  <div class="prt-featured-readmore-btn">
                    <a href="<?= $csUrl ?>"><i class="flaticon-right"></i>Read more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <?php else: ?>
        <?php
        $portfolio = [
          ['img' => 'placeholder-portfolio.svg', 'cat' => 'Federal Government', 'title' => 'GovCloud Migration for Federal Agency'],
          ['img' => 'placeholder-portfolio.svg', 'cat' => 'Cybersecurity',       'title' => 'Zero-Trust Implementation — Defense Contractor'],
          ['img' => 'placeholder-portfolio.svg', 'cat' => 'Banking',             'title' => 'Fraud Detection ML Pipeline — Financial Institution'],
          ['img' => 'placeholder-portfolio.svg', 'cat' => 'Local Government',    'title' => 'Legacy Modernization — Municipal IT Overhaul'],
          ['img' => 'placeholder-portfolio.svg', 'cat' => 'Data &amp; Analytics','title' => 'Secure Data Warehouse — Healthcare Enterprise'],
          ['img' => 'placeholder-portfolio.svg', 'cat' => 'Virtualization',      'title' => 'VMware-to-XCP-ng Zero-Downtime Migration'],
        ];
        ?>
        <div class="row pl-100 pr-100 res-991-p-0 res-991-pl-15 res-991-pr-15 slick_slider mr_30 ml_30 res-991-ml_15 res-991-mr_15"
          data-slick='{"slidesToShow":3,"slidesToScroll":1,"arrows":false,"dots":false,"autoplay":true,"infinite":true,"responsive":[{"breakpoint":1199,"settings":{"slidesToShow":2}},{"breakpoint":611,"settings":{"slidesToShow":1}}]}'>
          <?php foreach ($portfolio as $p): ?>
          <div class="prt-box-col-wrapper col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="prt-featured-postbox style1">
              <div class="prt-featured-post-item">
                <div class="featured-thumbnail">
                  <a href="<?= m_path('services', [], true) ?>">
                    <img class="img-fluid border-rad_30" src="<?= asset('images/' . $p['img']) ?>" alt="<?= $p['title'] ?>">
                  </a>
                </div>
                <div class="prt-featured-overly">
                  <div class="prt-featured-content-box">
                    <div class="prt-featured-category"><p><?= $p['cat'] ?></p></div>
                    <div class="prt-featured-title">
                      <a href="<?= m_path('services', [], true) ?>"><h3><?= $p['title'] ?></h3></a>
                    </div>
                  </div>
                  <div class="prt-featured-readmore-btn">
                    <a href="<?= m_path('services', [], true) ?>"><i class="flaticon-right"></i>Read more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
    </section>
    <!--portfolio-section end-->

    <!--testimonial-section start-->
    <section class="prt-row testimonial-section clearfix">
      <div class="container wow fadeInUp">
        <div class="row align-items-end">
          <div class="col-lg-7">
            <div class="testimonial-section-title">
              <div class="section-title-block">
                <div class="subtitle-wrapper">
                  <div class="subtitle"><h2>Testimonials</h2></div>
                </div>
                <div class="section-title">
                  <h3 class="title">See what our<br><span>clients</span> are saying</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="prt-section-desc pb-10">
              <p class="text-base-dark">From federal contracting officers to banking CISOs, our clients trust SYNCXELL to deliver secure, compliant, and mission-ready IT solutions.</p>
            </div>
          </div>
        </div>
        <div class="row pt-35 res-991-pt-0 align-items-center">
          <div class="col-lg-2">
            <div class="logo-icon">
              <img width="88" height="18" class="img-fluid" src="<?= asset('images/review-logo.png') ?>" alt="review">
            </div>
            <div class="rating-img mt-5">
              <img width="78" height="13" class="img-fluid" src="<?= asset('images/rating.png') ?>" alt="rating">
            </div>
            <div class="title-text"><h2>Trust score 4.9</h2></div>
          </div>
          <div class="col-lg-10">
            <div class="row slick_slider"
              data-slick='{"slidesToShow":2,"slidesToScroll":1,"arrows":true,"autoplay":false,"infinite":true,"responsive":[{"breakpoint":992,"settings":{"slidesToShow":2}},{"breakpoint":575,"settings":{"slidesToShow":1}}]}'>
              <?php if (!empty($testimonials)):
                foreach ($testimonials as $t):
                  $ta = $t['attributes'] ?? $t;
                  $timgUrl = strapi_img($ta['author_photo'] ?? null) ?? asset('images/placeholder-avatar.svg');
              ?>
              <div class="testimonials">
                <div class="testimonials-inner-item">
                  <div class="testimonial-content">
                    <blockquote>"<?= htmlspecialchars($ta['quote'] ?? '') ?>"</blockquote>
                    <div class="testimonial-avatar">
                      <div class="testimonial-img pr-15">
                        <img width="150" height="150" class="img-fluid" src="<?= $timgUrl ?>" alt="<?= htmlspecialchars($ta['author_name'] ?? '') ?>">
                      </div>
                      <div class="testimonial-caption">
                        <h3><?= htmlspecialchars($ta['author_name'] ?? '') ?></h3>
                        <label><?= htmlspecialchars($ta['author_title'] ?? '') ?></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach;
              else:
                $staticTestimonials = [
                  ['quote' => 'SYNCXELL delivered our GovCloud migration on time, under budget, and with zero downtime. Their knowledge of federal compliance requirements is unmatched.', 'name' => 'J. Harrison', 'role' => 'IT Director, Federal Agency', 'img' => 'placeholder-avatar.svg'],
                  ['quote' => 'Their CMMC preparation team walked us through every control with precision. We passed our assessment on the first attempt.', 'name' => 'M. Rodriguez', 'role' => 'CISO, Defense Contractor', 'img' => 'placeholder-avatar.svg'],
                  ['quote' => 'The fraud detection model SYNCXELL built reduced our false-positive rate by 60%. Outstanding data engineering team.', 'name' => 'A. Chen', 'role' => 'VP Technology, Regional Bank', 'img' => 'placeholder-avatar.svg'],
                ];
                foreach ($staticTestimonials as $st): ?>
              <div class="testimonials">
                <div class="testimonials-inner-item">
                  <div class="testimonial-content">
                    <blockquote>"<?= $st['quote'] ?>"</blockquote>
                    <div class="testimonial-avatar">
                      <div class="testimonial-img pr-15">
                        <img width="150" height="150" class="img-fluid" src="<?= asset('images/' . $st['img']) ?>" alt="<?= $st['name'] ?>">
                      </div>
                      <div class="testimonial-caption">
                        <h3><?= $st['name'] ?></h3>
                        <label><?= $st['role'] ?></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--testimonial-section end-->

    <!--cta-section start-->
    <section class="prt-row cta-section bg-img1 clearfix">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-big-title">
              <h2>Navigating success your trusted partner in <span>Federal &amp; Enterprise IT*</span></h2>
            </div>
            <div class="row pb-50 res-991-pb-30">
              <div class="col-lg-4 col-md-6 col-sm-12 res-991-mb-20 pr-0 res-1199-pr-15">
                <div class="prt-featured-icon-box-wrap">
                  <div class="prt-featured-icon-box-icon">
                    <div class="prt-featured-icon"><i class="flaticon-settings"></i></div>
                    <div class="prt-featured-content">
                      <div class="prt-featured-title"><h4>End-to-end implementation</h4></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12 pl-0 ml_55 res-1199-m-0 res-1199-pl-15 res-767-mb-20 res-767-ml-0">
                <div class="prt-featured-icon-box-wrap">
                  <div class="prt-featured-icon-box-icon">
                    <div class="prt-featured-icon"><i class="flaticon-clock"></i></div>
                    <div class="prt-featured-content">
                      <div class="prt-featured-title"><h4>24/7/365 security operations</h4></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12 res-767-mb-20">
                <div class="prt-featured-icon-box-wrap">
                  <div class="prt-featured-icon-box-icon">
                    <div class="prt-featured-icon"><i class="flaticon-personal-information"></i></div>
                    <div class="prt-featured-content">
                      <div class="prt-featured-title"><h4>NIST · FISMA · CMMC compliance</h4></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="cta-btn">
              <a href="<?= m_path('services', [], true) ?>" class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill prt-btn-color-skincolor mr-20">View all solutions</a>
              <a href="<?= m_path('rfq', [], true) ?>" class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill prt-btn-color-transparentcolor">Submit an RFQ</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--cta-section end-->

    <!--blog-section start-->
    <section class="prt-row blog-section style1 bg-base-grey position-relative clearfix">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-lg-12 m-auto">
            <div class="blog-section-title">
              <div class="section-title-block text-center">
                <div class="subtitle-wrapper">
                  <div class="subtitle"><h2>Latest Insights</h2></div>
                </div>
                <div class="section-title">
                  <h3 class="title">Stay current with our<br>cybersecurity &amp; IT <span>articles</span></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row slick_slider"
          data-slick='{"slidesToShow":3,"slidesToScroll":1,"arrows":false,"dots":false,"autoplay":true,"infinite":true,"responsive":[{"breakpoint":1199,"settings":{"slidesToShow":2}},{"breakpoint":778,"settings":{"slidesToShow":2}},{"breakpoint":611,"settings":{"slidesToShow":1}}]}'>
          <?php if (!empty($blogPosts)):
            foreach ($blogPosts as $post):
              $pa    = $post['attributes'] ?? $post;
              $pimgUrl = strapi_img($pa['cover_image'] ?? null) ?? asset('images/placeholder-blog.svg');
              $pslug = $pa['slug'] ?? '#';
              $pdate = isset($pa['publishedAt']) ? date('M j, Y', strtotime($pa['publishedAt'])) : '';
          ?>
          <div class="col-lg-4">
            <div class="featured-imagebox featured-imagebox-post style3">
              <div class="prt-authorbox">
                <img decoding="async" src="<?= asset('images/placeholder-avatar.svg') ?>" width="100" height="100" alt="author" class="avatar avatar-100 wp-user-avatar alignnone photo">
                <div class="prt-user-name">
                  <span class="prt-user prt-user-name-box">By <span class="prt-author"><?= htmlspecialchars($pa['author'] ?? 'SYNCXELL Team') ?></span></span>
                  <div class="post-time-ago"><?= $pdate ?></div>
                </div>
              </div>
              <div class="featured-thumbnail">
                <a href="<?= m_path('blog.detail', [$pslug], true) ?>">
                  <img class="img-fluid border-rad_15" src="<?= $pimgUrl ?>" alt="<?= htmlspecialchars($pa['title'] ?? '') ?>">
                </a>
              </div>
              <div class="featured-content">
                <div class="post-header">
                  <div class="post-meta">
                    <span class="prt-meta-line category"><a href="<?= m_path('blog', [], true) ?>">Cybersecurity</a></span>
                  </div>
                  <div class="post-title featured-title">
                    <h3><a href="<?= m_path('blog.detail', [$pslug], true) ?>"><?= htmlspecialchars($pa['title'] ?? '') ?></a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach;
          else:
            $staticPosts = [
              ['title' => 'CMMC 2.0: What Defense Contractors Need to Know in 2025', 'cat' => 'Compliance',    'img' => 'placeholder-blog.svg'],
              ['title' => 'Zero-Trust Architecture: Implementation Guide for Federal Agencies', 'cat' => 'Cybersecurity', 'img' => 'placeholder-blog.svg'],
              ['title' => 'AWS GovCloud vs Azure Government: Choosing the Right Platform', 'cat' => 'Cloud',   'img' => 'placeholder-blog.svg'],
              ['title' => 'XCP-ng Migration: Eliminating VMware Licensing Costs at Scale', 'cat' => 'Virtualization', 'img' => 'placeholder-blog.svg'],
            ];
            foreach ($staticPosts as $sp): ?>
          <div class="col-lg-4">
            <div class="featured-imagebox featured-imagebox-post style3">
              <div class="prt-authorbox">
                <img decoding="async" src="<?= asset('images/placeholder-avatar.svg') ?>" width="100" height="100" alt="SYNCXELL" class="avatar avatar-100 wp-user-avatar alignnone photo">
                <div class="prt-user-name">
                  <span class="prt-user prt-user-name-box">By <span class="prt-author">SYNCXELL Team</span></span>
                  <div class="post-time-ago"><?= date('M Y') ?></div>
                </div>
              </div>
              <div class="featured-thumbnail">
                <a href="<?= m_path('blog', [], true) ?>">
                  <img class="img-fluid border-rad_15" src="<?= asset('images/' . $sp['img']) ?>" alt="<?= $sp['title'] ?>">
                </a>
              </div>
              <div class="featured-content">
                <div class="post-header">
                  <div class="post-meta">
                    <span class="prt-meta-line category"><a href="<?= m_path('blog', [], true) ?>"><?= $sp['cat'] ?></a></span>
                  </div>
                  <div class="post-title featured-title">
                    <h3><a href="<?= m_path('blog', [], true) ?>"><?= $sp['title'] ?></a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; endif; ?>
        </div>
      </div>
    </section>
    <!--blog-section end-->

  </div><!--/.site-main-->

<?php include view('layout/footer'); ?>
<?php include view('layout/js'); ?>
</body>
</html>
