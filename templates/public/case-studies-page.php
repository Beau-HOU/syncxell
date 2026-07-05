<!DOCTYPE html>
<html lang="en">
<head>
<?php include view('layout/head'); ?>
</head>
<body class="case-studies-page">

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
              <span>Case Studies</span>
            </div>
            <div class="page-title-heading">
              <h1 class="pb-0">Case Studies &amp; Past Performance</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-main">
  <!--portfolio-section start-->
  <section class="prt-row portfolio-section-03">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 m-auto text-center">

          <?php if (!empty($studies)): ?>
          <?php if (count($activeSectors) > 1): ?>
          <div class="prt-tabs prt-tab-style-03 mb-30">
            <ul class="tabs clearfix">
              <li class="tab active" data-filter="*"><a href="#">All</a></li>
              <?php foreach ($activeSectors as $key => $label): ?>
              <li class="tab" data-filter=".sector-<?= $key ?>"><a href="#"><?= htmlspecialchars($label) ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>

          <div class="row h-100 isotope-project">
            <?php foreach ($studies as $cs):
              $cover = strapi_img($cs['cover_image'] ?? null);
              $sectorKey = $cs['client_sector'] ?? 'other';
              $sectorLabel = $sectorLabels[$sectorKey] ?? 'Other Industries';
            ?>
            <div class="col-lg-4 col-sm-8 col-md-6 col-xs-12 mb-30 prt-box-col-wrapper sector-<?= $sectorKey ?> all">
              <div class="prt-featured-postbox style1">
                <div class="prt-featured-post-item">
                  <div class="featured-thumbnail">
                    <a href="<?= m_path('case.detail', [$cs['slug']], true) ?>">
                      <img class="img-fluid border-rad_30" src="<?= $cover ?: asset('images/placeholder-blog.svg') ?>" alt="<?= htmlspecialchars($cs['title']) ?>" width="767" height="403">
                    </a>
                  </div>
                  <div class="prt-featured-overly">
                    <div class="prt-featured-content-box">
                      <div class="prt-featured-category">
                        <p><?= htmlspecialchars($sectorLabel) ?></p>
                      </div>
                      <div class="prt-featured-title">
                        <a href="<?= m_path('case.detail', [$cs['slug']], true) ?>">
                          <h3><?= htmlspecialchars($cs['title']) ?></h3>
                        </a>
                      </div>
                    </div>
                    <div class="prt-featured-readmore-btn">
                      <a href="<?= m_path('case.detail', [$cs['slug']], true) ?>"><i class="flaticon-right"></i>Read more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>

          <?php else: ?>
          <div class="text-center" style="padding:60px 0;">
            <p class="m-0">Case studies coming soon — contact us to discuss our past performance record.</p>
            <a class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill prt-btn-color-skincolor mt-30" href="<?= m_path('contact', [], true) ?>">Contact us</a>
          </div>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </section>
  <!--portfolio-section end-->
</div><!--/.site-main-->

<?php include view('layout/footer'); ?>
<?php include view('layout/js'); ?>

</body>
</html>
