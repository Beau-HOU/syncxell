<!DOCTYPE html>
<html lang="en">
<head>
<?php include view('layout/head'); ?>
</head>
<body class="services-page sub-service-detail-page">

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
              <?php if ($category): ?>
              <span class="prt-bread-sep"><i class="fa-angle-double-right fa"></i></span>
              <span><a href="<?= m_path('service.detail', [$category['slug']], true) ?>"><?= htmlspecialchars($category['name']) ?></a></span>
              <?php endif; ?>
              <span class="prt-bread-sep"><i class="fa-angle-double-right fa"></i></span>
              <span><?= htmlspecialchars($subService['name']) ?></span>
            </div>
            <div class="page-title-heading">
              <h1 class="pb-0"><?= htmlspecialchars($subService['name']) ?></h1>
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
            <?php $coverUrl = strapi_img($subService['cover_image'] ?? null); ?>
            <div class="prt_single_image-wrapper mb-35">
              <img width="1300" height="400" class="img-fluid border-rad_30"
                   src="<?= $coverUrl ? htmlspecialchars($coverUrl) : asset('images/service-detail01.png') ?>"
                   alt="<?= htmlspecialchars($subService['name']) ?>">
            </div>

            <!-- Tagline -->
            <?php if (!empty($subService['tagline'])): ?>
            <p class="sx-tagline mb-20" style="font-size:1.05rem;font-style:italic;">
              <?= htmlspecialchars($subService['tagline']) ?>
            </p>
            <?php endif; ?>

            <!-- Description -->
            <div class="prt-service-description">
              <h4>Service overview</h4>
              <?php if (!empty($subService['description'])): ?>
                <?= $subService['description'] ?>
              <?php endif; ?>
            </div>

            <!-- Key features + Technologies (2-col like service-details.html) -->
            <?php if (!empty($subService['key_features']) || !empty($subService['technologies'])): ?>
            <div class="row mt-30 align-items-start">
              <?php if (!empty($subService['key_features'])): ?>
              <div class="col-lg-6 col-md-6">
                <div class="prt-list res-991-mt-20 clearfix">
                  <h4 class="mb-20">Key capabilities</h4>
                  <ul class="prt-list prt-list-style-icon prt-list-icon-color-skincolor">
                    <?php foreach ($subService['key_features'] as $feat): ?>
                    <li>
                      <i class="flaticon-double-tick"></i>
                      <span class="prt-list-li-content"><?= htmlspecialchars($feat) ?></span>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
              <?php endif; ?>
              <?php if (!empty($subService['technologies'])): ?>
              <div class="col-lg-6 col-md-6 res-767-mt-30">
                <h4 class="mb-20">Technologies</h4>
                <div>
                  <?php foreach ($subService['technologies'] as $tech): ?>
                  <span class="sx-badge" style="display:inline-block;margin:4px 4px 4px 0;">
                    <?= htmlspecialchars($tech) ?>
                  </span>
                  <?php endforeach; ?>
                </div>
                <?php if (!empty($subService['target_sectors'])): ?>
                <div class="mt-20">
                  <h4 class="mb-10">Target sectors</h4>
                  <?php
                  $sectorLabels = [
                      'federal'   => 'Federal Government',
                      'local_gov' => 'Local Government',
                      'banking'   => 'Banking & Finance',
                      'legal'     => 'Law Firms & Legal',
                  ];
                  foreach ($subService['target_sectors'] as $sec): ?>
                  <span class="sx-badge" style="display:inline-block;margin:4px 4px 4px 0;border-color:var(--sx-blue);color:var(--sx-blue);">
                    <?= htmlspecialchars($sectorLabels[$sec] ?? $sec) ?>
                  </span>
                  <?php endforeach; ?>
                </div>
                <?php endif; ?>
              </div>
              <?php endif; ?>
            </div>
            <?php endif; ?>

            <!-- Why trust us -->
            <div class="prt-service-description mt-50 res-991-mt-30">
              <h4>Why trust SYNCXELL with your IT needs?</h4>
              <p class="mb-0">Our professionals bring firsthand experience from the US and French governments, major airlines, and leading technology companies — giving us a deep understanding of complex operational needs, strict compliance requirements, and zero-downtime systems.</p>
            </div>

            <!-- CTA -->
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

            <!-- Sub-services in same category -->
            <?php if ($category && !empty($category['sub_services'])): ?>
            <aside class="widget widget-categories with-title">
              <h3 class="widget-title-style01"><?= htmlspecialchars($category['name']) ?></h3>
              <ul>
                <?php foreach ($category['sub_services'] as $sv): ?>
                <li class="<?= ($sv['slug'] === $subService['slug']) ? 'active' : '' ?>">
                  <a href="<?= m_path('service.sub', [$category['slug'], $sv['slug']], true) ?>">
                    <?= htmlspecialchars($sv['name']) ?>
                  </a>
                </li>
                <?php endforeach; ?>
              </ul>
            </aside>
            <?php endif; ?>

            <!-- All categories -->
            <aside class="widget widget-categories with-title">
              <h3 class="widget-title-style01">All Solutions</h3>
              <ul>
                <?php foreach ($allCategories as $cat): ?>
                <li class="<?= ($cat['slug'] === ($category['slug'] ?? '')) ? 'active' : '' ?>">
                  <a href="<?= m_path('service.detail', [$cat['slug']], true) ?>">
                    <?= htmlspecialchars($cat['name']) ?>
                  </a>
                </li>
                <?php endforeach; ?>
              </ul>
            </aside>

            <!-- Contact CTA -->
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
