<!DOCTYPE html>
<html lang="en">
<head>
<?php include view('layout/head'); ?>
</head>
<body class="services-page service-detail-page">

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
              <span><a title="Solutions" href="<?= m_path('services', [], true) ?>">Solutions</a></span>
              <span class="prt-bread-sep"><i class="fa-angle-double-right fa"></i></span>
              <span><?= htmlspecialchars($category['name']) ?></span>
            </div>
            <div class="page-title-heading">
              <h1 class="pb-0"><?= htmlspecialchars($category['name']) ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-main">
  <section class="sidebar prt-sidebar-right clearfix">
    <div class="container">
      <div class="row">

        <!-- ── MAIN CONTENT (col-8) ── -->
        <div class="col-lg-8 col-md-12 content-area pr-15 pl-15 spacing-9 mt-0 mb-0 pt-0">
          <div class="prt-service-single-content-area">

            <!-- Cover image -->
            <?php $coverUrl = strapi_img($category['cover_image'] ?? null); ?>
            <div class="prt_single_image-wrapper mb-35">
              <img width="1300" height="400" class="img-fluid border-rad_30"
                   src="<?= $coverUrl ? htmlspecialchars($coverUrl) : asset('images/service-detail01.png') ?>"
                   alt="<?= htmlspecialchars($category['name']) ?>">
            </div>

            <!-- Category description -->
            <div class="prt-service-description">
              <h4>Service overview</h4>
              <?php if (!empty($category['full_description'])): ?>
                <?= $category['full_description'] ?>
              <?php else: ?>
                <p><?= htmlspecialchars($category['short_description'] ?? '') ?></p>
              <?php endif; ?>
            </div>

            <!-- Sub-services list -->
            <?php if (!empty($category['sub_services'])): ?>
            <div class="prt-service-description mt-50">
              <h4>What's included</h4>
            </div>
            <div class="row mt-20">
              <?php foreach ($category['sub_services'] as $sub): ?>
              <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                <div class="service-icon-box" style="height:100%;">
                  <div class="service-iconbox-inner" style="padding:24px; border:1px solid #e5e7eb; border-radius:8px; height:100%; transition:border-color .2s;">
                    <div class="service-content-box">
                      <div class="service-title">
                        <h3 style="font-size:1rem; margin-bottom:8px;">
                          <a href="<?= m_path('service.sub', [$category['slug'], $sub['slug']], true) ?>">
                            <?= htmlspecialchars($sub['name']) ?>
                          </a>
                        </h3>
                      </div>
                      <?php if (!empty($sub['tagline'])): ?>
                      <div class="service-des" style="margin-bottom:14px;">
                        <p style="font-size:0.875rem; color:#6b7280;"><?= htmlspecialchars($sub['tagline']) ?></p>
                      </div>
                      <?php endif; ?>
                      <?php if (!empty($sub['key_features'])): ?>
                      <ul class="prt-list prt-list-style-icon prt-list-icon-color-skincolor" style="margin:0; padding:0;">
                        <?php foreach (array_slice($sub['key_features'], 0, 3) as $feat): ?>
                        <li style="font-size:0.82rem;">
                          <i class="flaticon-double-tick"></i>
                          <span class="prt-list-li-content"><?= htmlspecialchars($feat) ?></span>
                        </li>
                        <?php endforeach; ?>
                      </ul>
                      <?php endif; ?>
                      <div class="prt-bottom-buttonbox mt-15">
                        <a href="<?= m_path('service.sub', [$category['slug'], $sub['slug']], true) ?>">Read more</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <!-- Why trust us -->
            <div class="prt-service-description mt-40">
              <h4>Why trust SYNCXELL with your IT needs?</h4>
              <p class="mb-0">Our professionals bring firsthand experience from the US and French governments, major airlines, and leading technology companies — ensuring strict compliance requirements and zero-downtime standards are met on every engagement.</p>
            </div>

            <div class="mt-30 mb-10">
              <a href="<?= m_path('contact', [], true) ?>"
                 class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill prt-btn-color-skincolor">
                Request a Consultation
              </a>
              <a href="#" id="openQuotation"
                 class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border ml-10">
                Get a Quote
              </a>
            </div>

          </div>
        </div>
        <!-- main content end -->

        <!-- ── SIDEBAR (col-4) ── -->
        <div class="col-lg-4 col-md-12 mt-0 col-sm-8 mb-0 widget-area sidebar-right">
          <div class="prt-bg prt-col-bgcolor-yes bg-base-grey prt-right-span spacing-3 h-100">
            <div class="prt-col-wrapper-bg-layer prt-bg-layer">
              <div class="prt-col-wrapper-bg-layer-inner"></div>
            </div>

            <aside class="widget widget-categories with-title">
              <h3 class="widget-title-style01">Our Solutions</h3>
              <ul>
                <?php foreach ($allCategories as $cat): ?>
                <li class="<?= ($cat['slug'] === $category['slug']) ? 'active' : '' ?>">
                  <a href="<?= m_path('service.detail', [$cat['slug']], true) ?>">
                    <?= htmlspecialchars($cat['name']) ?>
                  </a>
                </li>
                <?php endforeach; ?>
              </ul>
            </aside>

            <aside class="widget widget-banner res-991-ml-5">
              <div class="prt-col-bgcolor-yes prt-bgcolor-darkgrey prt-textcolor-white col-bg-img-seven prt-col-bgimage-yes prt-bg spacing-13">
                <div class="prt-col-wrapper-bg-layer prt-bg-layer">
                  <div class="prt-col-wrapper-bg-layer-inner"></div>
                </div>
                <div class="layer-content">
                  <div class="prt-sidebar-contact-box">
                    <div class="prt-sidebar-subheading">contact us today</div>
                    <div class="prt-sidebar-heading">Ready to start your mission? Let's talk.</div>
                    <div class="prt-sidebar-phone">
                      <span class="link-text">
                        <a href="<?= m_path('contact', [], true) ?>">
                          <i class="flaticon-mail"></i> Contact us now
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </aside>

          </div>
        </div>
        <!-- sidebar end -->

      </div>
    </div>
  </section>
</div><!--/.site-main-->

<?php include view('layout/footer'); ?>
<?php include view('layout/js'); ?>

</body>
</html>
