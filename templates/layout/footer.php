      <!--footer start-->
      <footer id="contact-us" class="footer widget-footer clearfix bg-base-grey">

        <!-- Newsletter bar -->
        <div class="first-footer bg-base-dark">
          <div class="container">
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
          <div class="container">
            <div class="row">

              <!-- Col 1 : Brand -->
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                <div class="widget widget_text clearfix footer-widget-box">
                  <div class="footer-logo pb-15">
                    <img src="<?= asset('images/logo/logo-dark.png') ?>" alt="SYNCXELL LLC" style="max-height:50px;">
                  </div>
                  <div class="textwidget widget-text footer-widget-box">
                    Full-spectrum IT solutions for US Federal Government, Banking, and Legal sectors. Where integrity meets innovation.
                    <div class="footer-brand-contact mt-15">
                      <p class="m-0"><a href="mailto:<?= params('app_email') ?>"><?= params('app_email') ?></a></p>
                      <p class="m-0 mt-5"><a href="tel:<?= params('app_phone') ?>"><?= params('app_phone') ?></a></p>
                    </div>
                    <div class="social-icons social-hover mt-15">
                      <ul class="list-inline mb-0">
                        <li class="social-facebook">
                          <a class="tooltip-top" target="_blank" href="<?= params('app_linkedin') ?>" aria-label="LinkedIn">
                            <i class="ti-linkedin" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Col 2 : Solutions -->
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
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
                    <li><a href="<?= m_path('blog', [], true) ?>">Insights</a></li>
                    <li><a href="<?= m_path('rfq', [], true) ?>">Request a Quote</a></li>
                    <li><a href="<?= m_path('contact', [], true) ?>">Contact</a></li>
                  </ul>
                </div>
              </div>

              <!-- Col 4 : Contact -->
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 widget-area footer-widget-box">
                <div class="footer-contactbox">
                  <div class="prt-about-footer mb-30">
                    <h3 class="widget-title">Contact</h3>
                    <p class="m-0"><?= params('app_address') ?></p>
                  </div>
                  <h3 class="widget-title">Compliance</h3>
                  <ul class="prt-contact-widget-detail pl-0">
                    <li><span class="prt-contact-title">CAGE Code</span><span><?= params('cage_code') ?></span></li>
                    <li><span class="prt-contact-title">UEI</span><span><?= params('uei') ?></span></li>
                    <li><span class="prt-contact-title">NAICS</span><span>541512 &bull; 541519 &bull; 541611</span></li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- Bottom bar -->
        <div class="bottom-footer prt-textcolor-white bg-base-skin">
          <div class="container">
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
