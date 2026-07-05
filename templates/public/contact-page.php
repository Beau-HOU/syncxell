<!DOCTYPE html>
<html lang="en">
<head>
<?php include view('layout/head'); ?>
</head>
<body class="contact-page">

<?php include view('layout/header'); ?>
</div><!--/.min-box-->

<div class="site-main">

  <!--page-title start-->
  <section class="prt-row contact-section bg-base-dark clearfix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="title-box text-center">
            <div class="breadcrumb-wrapper mb-20">
              <span><a title="Home" href="<?= m_path('home', [], true) ?>">Home</a></span>
              <span class="prt-bread-sep"><i class="fa fa-angle-double-right"></i></span>
              <span>Contact Us</span>
            </div>
            <div class="page-title-heading m-0">
              <h1>Let's talk about your mission</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="row align-items-start pt-50 res-991-pt-30">

        <!-- ── Contact form (left 8 cols) ── -->
        <div class="col-lg-8">
          <div class="contact-form-block">
            <form id="contactForm" class="wrap-form query_form-1">
              <div class="row">
                <div class="col-lg-12">
                  <h3 class="contact-form-title">Tell us about your IT requirement</h3>
                </div>
                <div class="col-lg-6 col-sm-12">
                  <span class="text-input">
                    <input type="text" name="contact_name" placeholder="Your full name *" required>
                  </span>
                </div>
                <div class="col-lg-6 col-sm-12">
                  <span class="text-input">
                    <input type="email" name="contact_email" placeholder="Work email * (your@agency.gov)" required>
                  </span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <span class="text-input">
                    <input type="tel" name="contact_phone" placeholder="Phone number">
                  </span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <span class="text-input">
                    <input type="text" name="contact_org" placeholder="Organization / Agency name">
                  </span>
                </div>
                <div class="col-lg-12">
                  <div class="rfq-dropdown contact-dd" id="contact-sector-dropdown">
                    <div class="rfq-dropdown-trigger" tabindex="0">
                      <span class="rfq-dropdown-text">Select your sector</span>
                      <span class="rfq-dd-arrow">&#9660;</span>
                    </div>
                    <div class="rfq-dropdown-panel">
                      <div class="rfq-dd-opt" data-value="federal">US Federal Government</div>
                      <div class="rfq-dd-opt" data-value="local_gov">Local / Municipal Government</div>
                      <div class="rfq-dd-opt" data-value="banking">Banking &amp; Finance</div>
                      <div class="rfq-dd-opt" data-value="legal">Law Firm / Legal</div>
                      <div class="rfq-dd-opt" data-value="defense">Defense Contractor</div>
                      <div class="rfq-dd-opt" data-value="healthcare">Healthcare Enterprise</div>
                      <div class="rfq-dd-opt" data-value="other">Other Enterprise</div>
                    </div>
                  </div>
                  <input type="hidden" name="contact_sector" id="contact-sector-value">
                </div>
                <div class="col-lg-12">
                  <span class="text-input">
                    <textarea name="contact_message" placeholder="Describe your IT challenge, project scope, or compliance requirement… *" required rows="9" cols="50"></textarea>
                  </span>
                </div>
                <div class="col-lg-12" id="contact-alert" style="display:none;margin-bottom:15px;"></div>
                <div class="row align-items-center">
                  <div class="col-xl-4 col-md-4 col-sm-5">
                    <button id="contactSubmitBtn" class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill prt-btn-color-skincolor" type="submit">Send Message</button>
                  </div>
                  <div class="col-sm-7 p-0 ml_20 res-575-ml-0 res-767-pl-20 res-767-pr-20 res-575-mt-20">
                    <div class="ctn-footer-desc">
                      <p class="m-0" style="font-size:13px;color:#777;">We respond within <strong>one business day</strong>. For urgent matters, call us directly.</p>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- ── Contact info (right 4 cols) ── -->
        <div class="col-lg-4 pl-35 res-991-pl-15 res-991-mt-40">
          <div class="row">
            <div class="col-lg-12" style="margin-bottom:10px;">
              <div class="featured-icon-box style3 sx-contact-card">
                <div class="featured-icon">
                  <div class="prt-icon"><i class="flaticon-phone-call"></i></div>
                </div>
                <div class="featured-content">
                  <div class="featured-title"><h3>Call us directly</h3></div>
                  <div class="featured-desc">
                    <p class="m-0">
                      <a href="tel:<?= params('app_phone') ?>"><?= params('app_phone') ?></a><br>
                      <a href="mailto:<?= params('app_email') ?>"><?= params('app_email') ?></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12" style="margin-bottom:10px;">
              <div class="featured-icon-box style3 sx-contact-card">
                <div class="featured-icon">
                  <div class="prt-icon"><i class="flaticon-pin-map"></i></div>
                </div>
                <div class="featured-content">
                  <div class="featured-title"><h3>Our location</h3></div>
                  <div class="featured-desc">
                    <p class="m-0"><?= params('app_address') ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="featured-icon-box style3 sx-contact-card">
                <div class="featured-icon">
                  <div class="prt-icon"><i class="flaticon-clock"></i></div>
                </div>
                <div class="featured-content">
                  <div class="featured-title"><h3>Availability</h3></div>
                  <div class="featured-desc">
                    <p class="m-0">
                      Mon – Fri: 8:00 AM – 6:00 PM ET<br>
                      24/7 SOC: available for active clients<br>
                      <a href="<?= m_path('rfq', [], true) ?>">Submit an RFQ →</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--page-title end-->

  <!--faq-section start-->
  <section class="prt-row faq-section bg-base-grey clearfix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 m-auto mb-25">
          <div class="section-title-block text-center">
            <div class="subtitle-wrapper">
              <div class="subtitle"><h2>FAQ</h2></div>
            </div>
            <div class="section-title">
              <h3 class="title">Common questions about<br>working with <span>SYNCXELL</span></h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-10 col-md-12 faq-col m-auto">
          <div class="accordion style2">

            <div class="toggle prt-toggle_style_classic prt-control-right-true">
              <div class="toggle-title"><a href="#" class="active">Do you work with small defense contractors, not just large agencies?</a></div>
              <div class="toggle-content show">
                <p>Yes. SYNCXELL works with organizations of all sizes — from individual prime contractors and small businesses pursuing CMMC certification to mid-size agencies managing complex ATO renewals. We tailor engagement scope and pricing to your budget and mission requirements.</p>
              </div>
            </div>

            <div class="toggle prt-toggle_style_classic prt-control-right-true">
              <div class="toggle-title"><a href="#">What compliance frameworks does SYNCXELL support?</a></div>
              <div class="toggle-content" style="display:none;">
                <p>We support NIST SP 800-53, NIST SP 800-171, FISMA (Low/Moderate/High), CMMC Level 1 &amp; 2, FedRAMP, SOC 2 Type II, PCI-DSS, HIPAA, and CIS Controls v8. Our team can guide you from initial gap assessment through ATO package submission or third-party audit readiness.</p>
              </div>
            </div>

            <div class="toggle prt-toggle_style_classic prt-control-right-true">
              <div class="toggle-title"><a href="#">What is your typical engagement timeline?</a></div>
              <div class="toggle-content" style="display:none;">
                <p>Timelines depend on scope. A cybersecurity gap assessment typically takes 2–3 weeks. A full FISMA ATO package ranges from 8–16 weeks. Cloud migrations are phased over 3–6 months. We provide a detailed project timeline and milestones during our initial scoping call — usually within 48 hours of your inquiry.</p>
              </div>
            </div>

            <div class="toggle prt-toggle_style_classic prt-control-right-true">
              <div class="toggle-title"><a href="#">Can SYNCXELL respond to a formal RFQ or RFP?</a></div>
              <div class="toggle-content" style="display:none;">
                <p>Absolutely. We are a registered vendor on SAM.gov with an active UEI and CAGE Code. We respond to federal RFQs and RFPs and can issue past performance references, technical capability statements, and pricing proposals. Use our <a href="<?= m_path('rfq', [], true) ?>">RFQ form</a> or contact us directly to discuss your acquisition vehicle requirements.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!--faq-section end-->

</div><!--/.site-main-->

<?php include view('layout/footer'); ?>
<?php include view('layout/js'); ?>

<script>
$('#contactForm').on('submit', function(e) {
  e.preventDefault();
  var $btn = $('#contactSubmitBtn');
  var $alert = $('#contact-alert');
  $btn.prop('disabled', true).text('Sending…');
  $alert.hide();

  $.ajax({
    url: '<?= m_path('ajax.contact', [], true) ?>',
    method: 'POST',
    data: $(this).serialize(),
    dataType: 'json',
    success: function(res) {
      if (res.success) {
        $alert.html('<div class="sx-alert sx-alert-success">' + res.message + '</div>').show();
        $('#contactForm')[0].reset();
        $btn.prop('disabled', false).text('Send Message');
      } else {
        $alert.html('<div class="alert alert-danger">' + res.message + '</div>').show();
        $btn.prop('disabled', false).text('Send Message');
      }
    },
    error: function() {
      $alert.html('<div class="alert alert-danger">A server error occurred. Please try again or call us directly.</div>').show();
      $btn.prop('disabled', false).text('Send Message');
    }
  });
});
</script>

<style>
.sx-contact-card {
  border: 1px solid rgba(255,255,255,0.65) !important;
  border-radius: 8px;
  padding: 16px 18px !important;
}
.sx-contact-card:hover {
  border-color: #fff !important;
}
</style>

</body>
</html>
