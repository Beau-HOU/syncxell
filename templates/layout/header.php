<!-- Popup Overlay -->
<div class="quotation--popup-overly"></div>
<!-- Popup RFQ -->
<div class="quotation--popup-extra-header" id="quotation--popup">
  <div class="modal-content">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
          <div class="prt-newslettercontent">
            <h3 class="prt-pop-quotationform-title">Request a Consultation</h3>
            <p class="prt-pop-quotationform-details">Tell us about your mission requirements. Our team responds within one business day.</p>
          </div>
        </div>
        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
          <div class="popup-right">
            <form id="quotationForm" action="<?= m_path('ajax.rfq', [], true) ?>" method="POST">
              <!-- Step 1 -->
              <div class="form-step active">
                <div class="row">
                  <div class="col-lg-12">
                    <p><label>Your name *</label>
                      <input type="text" name="contact_first_name" placeholder="First name" required></p>
                  </div>
                  <div class="col-lg-6">
                    <p><label>Work Email *</label>
                      <input type="email" name="contact_email" placeholder="your@agency.gov" required></p>
                  </div>
                  <div class="col-lg-6">
                    <p><label>Last Name *</label>
                      <input type="text" name="contact_last_name" placeholder="Last name" required></p>
                  </div>
                  <div class="col-lg-6">
                    <p><label>Organization *</label>
                      <input type="text" name="organization" placeholder="Agency / Company" required></p>
                  </div>
                  <div class="col-lg-6">
                    <p><label>Sector *</label>
                      <select name="sector" required>
                        <option value="" disabled selected>Select your sector</option>
                        <option value="federal">Federal Government</option>
                        <option value="local_gov">Local / Municipal Gov</option>
                        <option value="banking">Banking &amp; Finance</option>
                        <option value="legal">Law Firm / Legal</option>
                        <option value="other">Other Enterprise</option>
                      </select></p>
                  </div>
                </div>
                <p><button type="button" class="next-btn">Next</button></p>
              </div>
              <!-- Step 2 -->
              <div class="form-step">
                <p><label>Describe your requirement *</label>
                  <textarea name="project_description" rows="5" placeholder="Outline your project, timeline, or compliance need..." required></textarea></p>
                <p>
                  <button type="button" class="prev-btn">Previous</button>
                  <button type="submit" class="ml-10">Submit</button>
                </p>
              </div>
            </form>
            <div id="rfq-success" style="display:none;padding:20px;background:#d1fae5;border-radius:4px;color:#065f46;">
              Your request has been received. Our team will contact you within one business day.
            </div>
          </div>
        </div>
      </div>
    </div>
    <span class="close-btn" id="closePopup" style="position:absolute;top:10px;right:20px;font-size:28px;cursor:pointer;">&times;</span>
  </div>
</div>

<!--page-start-->
<div class="page">
  <div class="min-box">
    <header id="masthead" class="header prt-header-style-01">

      <!-- topbar -->
      <div class="top_bar prt-topbar-wrapper text-base-white clearfix">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="d-flex flex-row align-items-center justify-content-start top_bar_border">
                <div class="top_bar_contact_item">
                  <div class="top_bar_icon"><i class="flaticon-mail"></i></div>
                  <a href="mailto:<?= params('app_email') ?>"><?= params('app_email') ?></a>
                </div>
                <div class="top_bar_contact_item">
                  <div class="top_bar_icon"><i class="ti-location-pin"></i></div>
                  <?= params('app_address') ?>
                </div>
                <div class="top_bar_contact_item">
                  <div class="top_bar_icon"><i class="flaticon-phone-call"></i></div>
                  <a href="tel:<?= params('app_phone') ?>"><?= params('app_phone') ?></a>
                </div>
                <div class="top_bar_contact_item top_bar_social ms-auto">
                  <ul class="social-icons">
                    <li><a href="<?= params('app_linkedin') ?>" target="_blank" rel="noopener" aria-label="LinkedIn">
                      <i class="ti-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- topbar end -->

      <!-- site-header-menu -->
      <div id="site-header-menu" class="site-header-menu prt-bgcolor-white">
        <div class="site-header-menu-inner prt-stickable-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="site-navigation d-flex flex-row">

                  <!-- Logo -->
                  <div class="site-branding me-auto">
                    <a class="home-link" href="<?= m_path('home', [], true) ?>" title="SYNCXELL LLC" rel="home">
                      <img id="logo-img"
                           src="<?= asset('images/logo/logo-dark.png') ?>"
                           alt="SYNCXELL LLC"
                           style="height:100px;width:auto;display:block;">
                    </a>
                  </div>

                  <!-- Mobile toggle -->
                  <div class="btn-show-menu-mobile menubar menubar--squeeze">
                    <span class="menubar-box"><span class="menubar-inner"></span></span>
                  </div>

                  <!-- Nav -->
                  <nav class="main-menu menu-mobile" id="menu">
                    <ul class="menu">
                      <li class="<?= (isset($activePage) && $activePage == 'home') ? 'active' : '' ?>">
                        <a href="<?= m_path('home', [], true) ?>">Home</a>
                      </li>
                      <li class="<?= (isset($activePage) && $activePage == 'about') ? 'active' : '' ?>">
                        <a href="<?= m_path('about', [], true) ?>">About</a>
                      </li>
                      <li class="mega-menu-item <?= (isset($activePage) && $activePage == 'services') ? 'active' : '' ?>">
                        <a href="<?= m_path('services', [], true) ?>" class="mega-menu-link">Solutions</a>
                        <ul class="mega-submenu">
                          <li><a href="<?= m_path('service.detail', ['software-application-development'], true) ?>">Software &amp; App Development</a></li>
                          <li><a href="<?= m_path('service.detail', ['cloud-infrastructure-management'], true) ?>">Cloud Infrastructure</a></li>
                          <li><a href="<?= m_path('service.detail', ['cybersecurity-compliance'], true) ?>">Cybersecurity &amp; Compliance</a></li>
                          <li><a href="<?= m_path('service.detail', ['network-operations'], true) ?>">Network &amp; Operations</a></li>
                          <li><a href="<?= m_path('service.detail', ['data-services-analytics'], true) ?>">Data Services &amp; Analytics</a></li>
                          <li><a href="<?= m_path('service.detail', ['virtualization-hypervisor'], true) ?>">Virtualization &amp; Hypervisor</a></li>
                        </ul>
                      </li>
                      <li class="<?= (isset($activePage) && $activePage == 'gov-hub') ? 'active' : '' ?>">
                        <a href="<?= m_path('gov.hub', [], true) ?>">Gov Hub</a>
                      </li>
                      <li class="<?= (isset($activePage) && $activePage == 'blog') ? 'active' : '' ?>">
                        <a href="<?= m_path('blog', [], true) ?>">Insights</a>
                      </li>
                      <li class="<?= (isset($activePage) && $activePage == 'contact') ? 'active' : '' ?>">
                        <a href="<?= m_path('contact', [], true) ?>">Contact</a>
                      </li>
                    </ul>
                  </nav>

                  <!-- CTA -->
                  <div class="header_extra d-flex flex-row align-items-center justify-content-end">
                    <div class="header_btn">
                      <a class="prt-btn" href="#" id="openQuotation">Request a Quote</a>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- site-header-menu end -->

    </header>
