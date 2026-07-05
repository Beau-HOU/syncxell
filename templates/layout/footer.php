      <!--footer start-->
      <footer id="contact-us" class="footer widget-footer clearfix bg-base-grey">

        <!-- Newsletter bar -->
        <div class="first-footer bg-base-dark">
          <div class="container-fluid">
            <div class="widget-footer-form-block bg-base-skin prt-textcolor-white">
              <div class="widget-footer-box-wrap row align-items-center">
                <div class="col-lg-6">
                  <div class="widget-footer-content">
                    <div class="widget-footer-content-inner">
                      <div class="widget-pre-title"><h2>Stay ahead of threats</h2></div>
                      <div class="widget-section-title"><h3>Subscribe to our cybersecurity &amp; IT insights</h3></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-7 res-991-mt-20">
                  <div class="widget-form">
                    <form id="subscribe-form" class="newsletter-form" method="post" action="#">
                      <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                        <input type="email" name="email" placeholder="Your work email..." required>
                        <p class="form-submit">
                          <button class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill" type="submit" name="submit-form">Subscribe</button>
                        </p>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Main footer -->
        <div class="section-footer bg-base-dark">
          <div class="container-fluid">
            <div class="row">

              <!-- Col 1 : Brand -->
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                <div class="widget widget_text clearfix footer-widget-box">
                  <div class="footer-logo" style="margin:0;padding:0;">
                    <img src="<?= asset('images/logo/logo-dark.png') ?>" alt="SYNCXELL LLC" style="height:100px;width:auto;margin:0;display:block;">
                  </div>
                  <div class="textwidget widget-text footer-widget-box" style="margin:0;padding:0;">
                    <p class="m-0" style="margin-left:15px !important;">Full-spectrum IT solutions for US Federal Government, Banking, and Legal sectors. Where integrity meets innovation.</p>
                    <div class="social-icons social-hover mt-15">
                      <ul class="list-inline mb-0">
                        <li class="social-linkedin">
                          <a class="tooltip-top" target="_blank" rel="noopener" href="<?= params('app_linkedin') ?>" aria-label="LinkedIn">
                            <i class="ti-linkedin" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="social-facebook">
                          <a class="tooltip-top" target="_blank" rel="noopener" href="<?= params('app_facebook') ?>" aria-label="Facebook">
                            <i class="ti-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="social-instagram">
                          <a class="tooltip-top" target="_blank" rel="noopener" href="<?= params('app_instagram') ?>" aria-label="Instagram">
                            <i class="ti-instagram" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="social-x">
                          <a class="tooltip-top" target="_blank" rel="noopener" href="<?= params('app_x') ?>" aria-label="X (Twitter)">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path fill="currentColor" d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Col 2 : Solutions -->
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 widget-area">
                <div class="widget widget_nav_menu clearfix footer-widget-box">
                  <h3 class="widget-title">Our Solutions</h3>
                  <ul class="menu-footer-link style1">
                    <li><a href="<?= m_path('service.detail', ['software-application-development'], true) ?>">Software Development</a></li>
                    <li><a href="<?= m_path('service.detail', ['cloud-infrastructure-management'], true) ?>">Cloud Infrastructure</a></li>
                    <li><a href="<?= m_path('service.detail', ['cybersecurity-compliance'], true) ?>">Cybersecurity &amp; Compliance</a></li>
                    <li><a href="<?= m_path('service.detail', ['network-operations'], true) ?>">Network &amp; Operations</a></li>
                    <li><a href="<?= m_path('service.detail', ['data-services-analytics'], true) ?>">Data &amp; Analytics</a></li>
                    <li><a href="<?= m_path('service.detail', ['virtualization-hypervisor'], true) ?>">Virtualization</a></li>
                  </ul>
                </div>
              </div>

              <!-- Col 3 : Company -->
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2 widget-area">
                <div class="widget widget_nav_menu menu-footer-community-menu clearfix footer-widget-box">
                  <h3 class="widget-title">Company</h3>
                  <ul class="menu-footer-link">
                    <li><a href="<?= m_path('about', [], true) ?>">About Us</a></li>
                    <li><a href="<?= m_path('gov.hub', [], true) ?>">Gov Hub</a></li>
                    <li><a href="<?= m_path('case.studies', [], true) ?>">Case Studies</a></li>
                    <li><a href="<?= m_path('blog', [], true) ?>">Insights</a></li>
                    <li><a href="<?= m_path('rfq', [], true) ?>">Request a Quote</a></li>
                    <li><a href="<?= m_path('contact', [], true) ?>">Contact</a></li>
                  </ul>
                </div>
              </div>

              <!-- Col 4 : Contact -->
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area footer-widget-box">
                <div class="footer-contactbox">
                  <div class="prt-about-footer">
                    <h3 class="widget-title">Contact</h3>
                    <p class="m-0"><i class="ti-location-pin footer-contact-icon" aria-hidden="true"></i><?= params('app_address') ?></p>
                    <p class="m-0 mt-5"><i class="flaticon-mail footer-contact-icon" aria-hidden="true"></i><a href="mailto:<?= params('app_email') ?>"><?= params('app_email') ?></a></p>
                    <p class="m-0 mt-5"><i class="flaticon-phone-call footer-contact-icon" aria-hidden="true"></i><a href="tel:<?= params('app_phone') ?>"><?= params('app_phone') ?></a></p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- Bottom bar -->
        <div class="bottom-footer prt-textcolor-white bg-base-skin">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="copyright">
                  <div class="cpy-text">
                    <p class="mb-0">Copyright &copy; <?= date('Y') ?> <a href="<?= m_path('home', [], true) ?>">SYNCXELL LLC</a>. All rights reserved.</p>
                  </div>
                  <ul class="prt-list footer-nav-menu">
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

      </footer>
      <!--footer end-->

      <!-- back-to-top -->
      <a id="totop" href="#top"><i class="ti-arrow-up"></i></a>

    </div><!-- .page -->
