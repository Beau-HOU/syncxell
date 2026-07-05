<!DOCTYPE html>
<html lang="en">
<head>
<?php include view('layout/head'); ?>
</head>
<body class="about-page">

<?php include view('layout/header'); ?>
</div><!--/.min-box-->

<!-- ── PAGE TITLE (fidèle à about-us.html : prt-page-title-row + bg-layer + layer-content) ── -->
<div class="prt-page-title-row" style="background-image:url('<?= asset('images/titlebar_01.jpg') ?>');background-size:cover;background-position:center top;">
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
              <span>About</span>
            </div>
            <div class="page-title-heading">
              <h1 class="pb-0">The IT Partner Trusted Where Failure Is Not an Option</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- page title end -->

<!-- site-main start -->
<div class="site-main">

  <!-- About-section Start (fidèle à about-us.html) -->
  <section class="prt-row about-section-02 clearfix">
    <div class="container">
      <div class="row align-items-center row-equal-height text-start">

        <div class="col-lg-5 col-md-8 col-sm-8">
          <div class="tm-reveal-effects-yes tm-reveal-direction-lr">
            <div class="prt-single-image-wrapper elementor-widget-container" style="width:505px;height:524px;">
              <img class="img-fluid border-rad_30" style="width:100%; height:100% !important;object-fit:cover;object-position:75% center;"
                   src="<?= asset('images/about.webp') ?>"
                   alt="SYNCXELL team">
            </div>
          </div>
        </div>

        <div class="col-lg-7 pl-35 res-991-pl-15 h-100 res-991-mt-30 wow bounceInRight text-start">
          <div class="about-content-wrap">
            <div class="section-title-block">
              <div class="subtitle-wrapper">
                <div class="subtitle"><h2>About us</h2></div>
              </div>
              <div class="section-title">
                <h3 class="title">Leading with <span>Technology</span>,<br>delivering with Trust.</h3>
              </div>
              <div class="section-desc">
                <p>SYNCXELL LLC is a full-spectrum IT solutions provider specializing in secure, scalable, and mission-critical technology services for US Government agencies and large enterprises. Our professionals bring firsthand experience from high-stakes environments — including the US and French governments, major airlines, and leading global technology companies.</p>
                <p class="m-0">We are committed to helping our clients modernize their IT environments, enhance operational efficiency, and secure digital assets against today's evolving threat landscape.</p>
              </div>
            </div>
          </div>

          <div class="row mt-50 res-991-mt-30">
            <div class="col-lg-6 col-md-6 col-sm-6 res-575-mb-30">
              <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2">
                  <div class="prt-featured-icon style1">
                    <i class="flaticon-targeting"></i>
                  </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 pl-40 res-575-pl-15">
                  <div class="prt-featured-content-box style1">
                    <div class="prt-featured-content-inner">
                      <div class="prt-featured-title style1"><h2>Our mission</h2></div>
                      <div class="prt-featured-dec">
                        <p class="m-0">Deliver mission-critical IT solutions that empower federal agencies and regulated enterprises to operate securely and at peak efficiency.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2">
                  <div class="prt-featured-icon style1">
                    <i class="flaticon-award"></i>
                  </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 pl-40 res-575-pl-15">
                  <div class="prt-featured-content-box style1">
                    <div class="prt-featured-content-inner">
                      <div class="prt-featured-title style1"><h2>Our vision</h2></div>
                      <div class="prt-featured-dec style1">
                        <p class="m-0">Be the most trusted IT partner for government and regulated industries — where integrity meets innovation.</p>
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
  <!-- About-section end -->

  <!-- padding_zero-section (marquee — fidèle à about-us.html) -->
  <div class="prt-row padding_zero-section bg-base-skin overflow-hidden clearfix">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 p-0">
          <div class="marquee-block overflow-hidden">
            <div class="marquee">
              <div class="marquee-content">
                <div class="marquee-text">NIST SP 800-53</div>
                <div class="marquee-text">Federal IT Ready</div>
                <div class="marquee-text">CMMC Level 2 &amp; 3</div>
                <div class="marquee-text">Zero Trust Architecture</div>
                <div class="marquee-text">FISMA High Impact</div>
                <div class="marquee-text">AWS GovCloud</div>
                <div class="marquee-text">Azure Government</div>
                <div class="marquee-text">Mission Critical</div>
                <div class="marquee-text">NIST SP 800-53</div>
                <div class="marquee-text">Federal IT Ready</div>
                <div class="marquee-text">CMMC Level 2 &amp; 3</div>
                <div class="marquee-text">Zero Trust Architecture</div>
                <div class="marquee-text">FISMA High Impact</div>
                <div class="marquee-text">AWS GovCloud</div>
                <div class="marquee-text">Azure Government</div>
                <div class="marquee-text">Mission Critical</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- padding_zero-section end -->

  <!-- ── STATS + BADGES ── -->
  <section class="prt-row bg-base-dark clearfix" style="padding:70px 0;">
    <div class="container">

      <!-- 4 counters -->
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
  <!-- stats end -->

  <!-- cta_section (fidèle à about-us.html : cta-section-style02 + bg-img2) -->
  <section class="prt-row cta-section-style02 clearfix position-relative"
           style="background-image:url('<?= asset('images/cta_image.jpg') ?>');background-size:cover;background-position:center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-11 pt-200 res-575-pt-0">
          <div class="cta-section-style02-title">
            <div class="section-title-block">
              <div class="subtitle-wrapper">
                <div class="subtitle"><h2 class="text-white">Why SYNCXELL</h2></div>
              </div>
              <div class="section-title">
                <h3 class="title text-white">The capabilities that set us <span>apart</span></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4 col-md-6 col-sm-12">
          <div class="featured-iconbox-style02 pt-30">
            <div class="featured-iconbox-inner-content">
              <div class="featured-icon-box-style02"><i class="flaticon-settings"></i></div>
              <div class="featured-title-style02">
                <h3>Full-Stack Engineering</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12">
          <div class="featured-iconbox-style02 pt-30">
            <div class="featured-iconbox-inner-content d-flex">
              <div class="featured-icon-box-style02"><i class="flaticon-personal-information"></i></div>
              <div class="featured-title-style02">
                <h3>Compliance-Driven Delivery</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12">
          <div class="featured-iconbox-style02 pt-30">
            <div class="featured-iconbox-inner-content pr-70">
              <div class="featured-icon-box-style02"><i class="flaticon-clock"></i></div>
              <div class="featured-title-style02">
                <h3>Around-the-clock support</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- cta_section end -->

  <!-- pricing-section (remplacé par Compliance Frameworks — même structure HTML) -->
  <section class="prt-row pricing-section clearfix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 m-auto">
          <div class="section-title-block text-center res-991-mb-20">
            <div class="subtitle-wrapper">
              <div class="subtitle"><h2>Compliance & Security</h2></div>
            </div>
            <div class="section-title">
              <h3 class="title mb-45">Federal compliance<br><span>frameworks</span> we implement</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row">

        <!-- NIST -->
        <div class="prt-pricing-tabel-col col-lg-4 col-md-6 col-sm-8 m-auto mt-0 mb-30 res-991-mb-30">
          <div class="prt-pricing-plan">
            <div class="prt-p_table-head">
              <div class="prt-p_table-title"><h5>NIST Framework</h5></div>
              <div class="prt-ptablebox-price">
                <div class="prt-ptablebox-cur-symbol"></div>
                <div class="prt-ptablebox-price-value" style="font-size:2rem;line-height:1.2;">SP 800-53</div>
              </div>
              <span class="pac_frequency">SP 800-171 · CUI Protection</span>
            </div>
            <div class="prt-p_table-body mt-75">
              <ul class="prt-p_table-features m-0 p-0">
                <li><span>Controls</span> implementation &amp; documentation</li>
                <li><span>CUI</span> data protection architecture</li>
                <li><span>Security</span> assessment &amp; authorization</li>
                <li><span>Continuous</span> monitoring strategy</li>
                <li><span>POA&amp;M</span> development &amp; tracking</li>
              </ul>
              <div class="prt-p_table-footer">
                <a class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill prt-btn-color-skincolor w-100"
                   href="<?= m_path('contact', [], true) ?>">Request an assessment</a>
              </div>
            </div>
          </div>
        </div>

        <!-- FISMA -->
        <div class="prt-pricing-tabel-col col-lg-4 col-md-6 col-sm-8 m-auto mt-0 mb-30 res-991-mb-30">
          <div class="prt-pricing-plan">
            <div class="prt-p_table-head">
              <div class="prt-p_table-title"><h5>FISMA Compliance</h5></div>
              <div class="prt-ptablebox-price">
                <div class="prt-ptablebox-cur-symbol"></div>
                <div class="prt-ptablebox-price-value" style="font-size:2rem;line-height:1.2;">ATO Ready</div>
              </div>
              <span class="pac_frequency">High &amp; Medium Impact Systems</span>
            </div>
            <div class="prt-p_table-body mt-75">
              <ul class="prt-p_table-features m-0 p-0">
                <li><span>System</span> security plan (SSP) authoring</li>
                <li><span>ATO</span> package preparation</li>
                <li><span>High &amp; Medium</span> impact authorization</li>
                <li><span>Annual</span> FISMA reporting support</li>
                <li><span>Incident</span> response readiness</li>
              </ul>
              <div class="prt-p_table-footer">
                <a class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill prt-btn-color-skincolor w-100"
                   href="<?= m_path('contact', [], true) ?>">Request an assessment</a>
              </div>
            </div>
          </div>
        </div>

        <!-- CMMC -->
        <div class="prt-pricing-tabel-col col-lg-4 col-md-6 col-sm-8 m-auto mt-0 mb-0">
          <div class="prt-pricing-plan">
            <div class="prt-p_table-head">
              <div class="prt-p_table-title"><h5>CMMC Certification</h5></div>
              <div class="prt-ptablebox-price">
                <div class="prt-ptablebox-cur-symbol"></div>
                <div class="prt-ptablebox-price-value" style="font-size:2rem;line-height:1.2;">Level 2–3</div>
              </div>
              <span class="pac_frequency">Defense Contractor Readiness</span>
            </div>
            <div class="prt-p_table-body mt-75">
              <ul class="prt-p_table-features m-0 p-0">
                <li><span>Gap</span> analysis &amp; remediation roadmap</li>
                <li><span>Practice</span> implementation (110 controls)</li>
                <li><span>Evidence</span> collection &amp; artifact prep</li>
                <li><span>Mock</span> C3PAO assessment</li>
                <li><span>Ongoing</span> compliance maintenance</li>
              </ul>
              <div class="prt-p_table-footer">
                <a class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill prt-btn-color-skincolor w-100"
                   href="<?= m_path('contact', [], true) ?>">Request an assessment</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- pricing-section end -->

</div>
<!-- site-main end -->

<?php include view('layout/footer'); ?>
<?php include view('layout/js'); ?>

</body>
</html>
