<!-- Popup Overlay -->
<div class="quotation--popup-overly"></div>
<!-- Popup RFQ -->
<div class="quotation--popup-extra-header" id="quotation--popup">
  <div class="modal-content">
    <div class="container">
      <div class="row">

        <!-- LEFT — branding + step tracker -->
        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
          <div class="prt-newslettercontent">
            <h3 class="prt-pop-quotationform-title">Request a Quote</h3>
            <p class="prt-pop-quotationform-details">Tell us about your mission requirements. Our specialists respond within one business day.</p>
            <!-- Step indicators -->
            <div class="rfq-steps-nav">
              <div class="rfq-step-item active" data-step="1">
                <span class="rfq-step-num">01</span>
                <span class="rfq-step-label">Contact info</span>
              </div>
              <div class="rfq-step-item" data-step="2">
                <span class="rfq-step-num">02</span>
                <span class="rfq-step-label">Project details</span>
              </div>
              <div class="rfq-step-item" data-step="3">
                <span class="rfq-step-num">03</span>
                <span class="rfq-step-label">Requirements</span>
              </div>
              <div class="rfq-step-item" data-step="4">
                <span class="rfq-step-num">04</span>
                <span class="rfq-step-label">Final step</span>
              </div>
            </div>
          </div>
        </div>

        <!-- RIGHT — form -->
        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
          <div class="popup-right">
            <form id="quotationForm" action="<?= m_path('ajax.rfq', [], true) ?>" method="POST" enctype="multipart/form-data">

              <!-- ── STEP 1 — Contact ── -->
              <div class="form-step active" data-step="1">
                <div class="row">
                  <div class="col-lg-6">
                    <p><label>First name *</label>
                      <input type="text" name="contact_first_name" placeholder="John" required></p>
                  </div>
                  <div class="col-lg-6">
                    <p><label>Last name *</label>
                      <input type="text" name="contact_last_name" placeholder="Smith" required></p>
                  </div>
                  <div class="col-lg-6">
                    <p><label>Work email *</label>
                      <input type="email" name="contact_email" placeholder="you@agency.gov" required></p>
                  </div>
                  <div class="col-lg-6">
                    <p><label>Phone</label>
                      <input type="tel" name="contact_phone" placeholder="+1 (555) 000-0000"></p>
                  </div>
                  <div class="col-lg-6">
                    <p><label>Organization *</label>
                      <input type="text" name="organization" placeholder="Agency / Company name" required></p>
                  </div>
                  <div class="col-lg-6">
                    <p><label>Sector *</label>
                      <select name="sector" id="rfq-sector" required>
                        <option value="" disabled selected>Select your sector</option>
                        <option value="federal">Federal Government</option>
                        <option value="local_gov">Local / Municipal Government</option>
                        <option value="banking">Banking &amp; Finance</option>
                        <option value="legal">Law Firm / Legal</option>
                        <option value="other">Other Enterprise</option>
                      </select></p>
                  </div>
                </div>
                <p><button type="button" class="next-btn prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill prt-btn-color-skincolor">Next &rarr;</button></p>
              </div>

              <!-- ── STEP 2 — Project ── -->
              <div class="form-step" data-step="2">
                <p>
                  <label>Services needed</label>
                  <div class="rfq-dropdown" id="rfq-services-dropdown">
                    <div class="rfq-dropdown-trigger" tabindex="0">
                      <span class="rfq-dropdown-text">Select services…</span>
                      <span class="rfq-dd-arrow">&#9660;</span>
                    </div>
                    <div class="rfq-dropdown-panel">
                      <label class="rfq-dd-opt">
                        <input type="checkbox" name="services_requested[]" value="software-application-development">
                        <span>Software &amp; App Development</span>
                      </label>
                      <label class="rfq-dd-opt">
                        <input type="checkbox" name="services_requested[]" value="cloud-infrastructure-management">
                        <span>Cloud Infrastructure Management</span>
                      </label>
                      <label class="rfq-dd-opt">
                        <input type="checkbox" name="services_requested[]" value="cybersecurity-compliance">
                        <span>Cybersecurity &amp; Compliance</span>
                      </label>
                      <label class="rfq-dd-opt">
                        <input type="checkbox" name="services_requested[]" value="network-operations">
                        <span>Network &amp; Operations</span>
                      </label>
                      <label class="rfq-dd-opt">
                        <input type="checkbox" name="services_requested[]" value="data-services-analytics">
                        <span>Data &amp; Analytics</span>
                      </label>
                      <label class="rfq-dd-opt">
                        <input type="checkbox" name="services_requested[]" value="advanced-virtualization-hypervisor">
                        <span>Virtualization &amp; Hypervisor</span>
                      </label>
                      <label class="rfq-dd-opt">
                        <input type="checkbox" name="services_requested[]" value="it-automation-orchestration">
                        <span>IT Automation &amp; Orchestration</span>
                      </label>
                      <label class="rfq-dd-opt">
                        <input type="checkbox" name="services_requested[]" value="enterprise-os-engineering">
                        <span>Enterprise OS Engineering</span>
                      </label>
                    </div>
                  </div>
                </p>
                <p><label>Project description *</label>
                  <textarea name="project_description" rows="4" placeholder="Describe your project, mission, or compliance challenge..." required></textarea></p>
                <div class="row">
                  <div class="col-lg-6">
                    <p><label>Desired timeline</label>
                      <select name="desired_timeline">
                        <option value="" disabled selected>Select timeline</option>
                        <option value="immediate">Immediately</option>
                        <option value="months_3">Within 3 months</option>
                        <option value="months_6">Within 6 months</option>
                        <option value="year_1">Within 1 year</option>
                        <option value="exploratory">Exploratory only</option>
                      </select></p>
                  </div>
                  <div class="col-lg-6">
                    <p><label>IT budget range</label>
                      <select name="it_budget_range">
                        <option value="" disabled selected>Select range</option>
                        <option value="under_50k">Under $50K</option>
                        <option value="tier_50k_250k">$50K – $250K</option>
                        <option value="tier_250k_1m">$250K – $1M</option>
                        <option value="tier_1m_5m">$1M – $5M</option>
                        <option value="over_5m">Over $5M</option>
                      </select></p>
                  </div>
                </div>
                <p>
                  <button type="button" class="prev-btn prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border">&larr; Back</button>
                  <button type="button" class="next-btn prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill prt-btn-color-skincolor ml-10">Next &rarr;</button>
                </p>
              </div>

              <!-- ── STEP 3 — Compliance + Sector-specific ── -->
              <div class="form-step" data-step="3">
                <p><label>Compliance frameworks needed</label>
                  <span class="rfq-check-grid">
                    <label class="rfq-check"><input type="checkbox" name="compliance_needs[]" value="nist_800_53"> NIST SP 800-53</label>
                    <label class="rfq-check"><input type="checkbox" name="compliance_needs[]" value="fisma"> FISMA ATO</label>
                    <label class="rfq-check"><input type="checkbox" name="compliance_needs[]" value="cmmc"> CMMC Level 2/3</label>
                    <label class="rfq-check"><input type="checkbox" name="compliance_needs[]" value="fedramp"> FedRAMP</label>
                    <label class="rfq-check"><input type="checkbox" name="compliance_needs[]" value="soc2"> SOC 2 Type II</label>
                    <label class="rfq-check"><input type="checkbox" name="compliance_needs[]" value="disa_stig"> DISA STIGs</label>
                  </span>
                </p>

                <!-- Federal-specific -->
                <div id="rfq-federal-fields" style="display:none;">
                  <div class="row">
                    <div class="col-lg-6">
                      <p><label>Federal agency</label>
                        <input type="text" name="federal_agency" placeholder="e.g. DHS, DoD, HHS"></p>
                    </div>
                    <div class="col-lg-6">
                      <p><label>Solicitation number</label>
                        <input type="text" name="solicitation_number" placeholder="e.g. 70RSAT24R00000001"></p>
                    </div>
                  </div>
                  <p><label>Set-aside type</label>
                    <select name="set_aside_type">
                      <option value="none">No set-aside</option>
                      <option value="small_business">Small Business</option>
                      <option value="sba_8a">SBA 8(a)</option>
                      <option value="hubzone">HUBZone</option>
                      <option value="sdvosb">SDVOSB</option>
                      <option value="wosb">WOSB</option>
                    </select></p>
                </div>

                <!-- Local gov-specific -->
                <div id="rfq-localgov-fields" style="display:none;">
                  <p><label>Municipality / jurisdiction name</label>
                    <input type="text" name="municipality_name" placeholder="e.g. City of Atlanta, GA"></p>
                </div>

                <p>
                  <button type="button" class="prev-btn prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border">&larr; Back</button>
                  <button type="button" class="next-btn prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill prt-btn-color-skincolor ml-10">Next &rarr;</button>
                </p>
              </div>

              <!-- ── STEP 4 — Final ── -->
              <div class="form-step" data-step="4">
                <p><label>How did you hear about us?</label>
                  <select name="how_did_you_hear">
                    <option value="" disabled selected>Select an option</option>
                    <option value="sam_gov">SAM.gov</option>
                    <option value="linkedin">LinkedIn</option>
                    <option value="referral">Referral</option>
                    <option value="search">Search engine</option>
                    <option value="other">Other</option>
                  </select></p>
                <p><label>Attach RFP / RFQ documents (optional)</label>
                  <input type="file" name="rfp_documents[]" multiple accept=".pdf,.doc,.docx,.xlsx"></p>
                <p style="margin-top:10px;">
                  <label class="rfq-consent-label">
                    <input type="checkbox" name="consent_to_contact" value="1" required>
                    <span>I consent to SYNCXELL LLC contacting me regarding this request. My information will be handled in accordance with applicable privacy laws. *</span>
                  </label>
                </p>
                <p style="margin-top:20px;">
                  <button type="button" class="prev-btn prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border">&larr; Back</button>
                  <button type="submit" id="rfq-submit-btn" class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill prt-btn-color-skincolor ml-10">Submit Request</button>
                </p>
              </div>

            </form>

            <!-- Success message -->
            <div id="rfq-success" style="display:none;padding:30px;text-align:center;position:absolute;top:50%;transform:translateY(-50%);width:100%;">
              <div style="font-size:48px;margin-bottom:15px;">&#10003;</div>
              <h3 style="color:#fff;margin-bottom:10px;">Request received!</h3>
              <p style="color:rgba(255,255,255,.8);">Our team will contact you within one business day to discuss your requirements.</p>
            </div>

          </div>
        </div>

      </div>
    </div>
    <span class="close-btn" id="closePopup" style="position:absolute;top:15px;right:25px;font-size:32px;cursor:pointer;color:#fff;line-height:1;">&times;</span>
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
                      <li class="<?= (isset($activePage) && $activePage == 'case-studies') ? 'active' : '' ?>">
                        <a href="<?= m_path('case.studies', [], true) ?>">Case Studies</a>
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
