<?php
$sectorLabels = [
    'federal'   => 'Federal Government',
    'local_gov' => 'Local & Municipal Gov',
    'banking'   => 'Banking & Finance',
    'legal'     => 'Legal',
    'other'     => 'Other Industries',
];
$engagementLabels = [
    'prime_contract' => 'Prime Contract',
    'subcontract'    => 'Subcontract',
    'internal'       => 'Internal Project',
];
$sectorLabel     = $sectorLabels[$study['client_sector'] ?? ''] ?? 'Other Industries';
$engagementLabel = $engagementLabels[$study['engagement_type'] ?? ''] ?? '';
$coverUrl        = strapi_img($study['cover_image'] ?? null);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include view('layout/head'); ?>
</head>
<body class="case-studies-page case-study-detail-page">

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
              <span><a href="<?= m_path('case.studies', [], true) ?>">Case Studies</a></span>
              <span class="prt-bread-sep"><i class="fa-angle-double-right fa"></i></span>
              <span><?= htmlspecialchars(truncate_texte($study['title'], 40)) ?></span>
            </div>
            <div class="page-title-heading">
              <h1 class="pb-0"><?= htmlspecialchars($study['title']) ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-main">
  <!--single-project-section start-->
  <section class="prt-row single-project-section bg-base-grey clearfix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 position-relative">

          <?php if ($coverUrl): ?>
          <div class="prt-pf-single-content-wrapper prt-pf-view-top-image overflow-hidden">
            <div class="prt-single-image-wrapper">
              <img width="1300" height="500" class="img-fluid border-rad_30" src="<?= $coverUrl ?>" alt="<?= htmlspecialchars($study['title']) ?>">
            </div>
          </div>
          <?php endif; ?>

          <div class="row">
            <!-- ── MAIN (col-8) ── -->
            <div class="col-lg-8 pr-0 res-991-pl-15 res-991-pr-15">

              <div class="prt-portfolio-title mt-40">
                <h2 class="prt-pf-detailbox-title">The challenge</h2>
              </div>
              <?= $study['challenge'] ?>

              <div class="prt-portfolio-title mt-40">
                <h2 class="prt-pf-detailbox-title">Our solution</h2>
              </div>
              <?= $study['solution'] ?>

              <div class="prt-portfolio-title mt-40">
                <h2 class="prt-pf-detailbox-title">The outcome</h2>
              </div>
              <?= $study['outcome'] ?>

              <?php if (!empty($study['metrics'])): ?>
              <div class="prt-portfolio-title mt-40">
                <h2 class="prt-pf-detailbox-title mb-20">Key results</h2>
              </div>
              <div class="featured-icon-box icon-align-before-content style4">
                <?php foreach ($study['metrics'] as $metric): ?>
                <div class="featured-icon-box-inner">
                  <div class="featured-icon">
                    <div class="prt-icon prt-icon onlytxt prt-icon-size-sm prt-icon-color-skincolor">
                      <i class="flaticon-double-tick"></i>
                    </div>
                  </div>
                  <div class="featured-content">
                    <div class="featured-desc">
                      <p><strong><?= htmlspecialchars($metric['label'] ?? '') ?> :</strong> <?= htmlspecialchars($metric['value'] ?? '') ?></p>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
              <?php endif; ?>

              <?php if (!empty($study['gallery'])): ?>
              <div class="prt-portfolio-title mt-40">
                <h2 class="prt-pf-detailbox-title mb-20">Project gallery</h2>
              </div>
              <div class="row">
                <?php foreach ($study['gallery'] as $img): $imgUrl = strapi_img($img); if (!$imgUrl) continue; ?>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                  <div class="prt-single-image-wrapper">
                    <img src="<?= $imgUrl ?>" class="img-fluid border-rad_20" alt="gallery">
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
              <?php endif; ?>

              <?php if (!empty($study['technologies_used'])): ?>
              <div class="prt-portfolio-title mt-40">
                <h2 class="prt-pf-detailbox-title mb-20">Technologies used</h2>
              </div>
              <div class="tagcloud">
                <?php foreach ($study['technologies_used'] as $tech): ?>
                <span class="tag-cloud-link"><?= htmlspecialchars($tech) ?></span>
                <?php endforeach; ?>
              </div>
              <?php endif; ?>

              <?php if (!empty($study['compliance_frameworks'])): ?>
              <div class="prt-portfolio-title mt-40">
                <h2 class="prt-pf-detailbox-title mb-20">Compliance frameworks</h2>
              </div>
              <div style="display:flex;flex-wrap:wrap;gap:10px;">
                <?php foreach ($study['compliance_frameworks'] as $fw): ?>
                <span class="sx-badge"><?= htmlspecialchars($fw) ?></span>
                <?php endforeach; ?>
              </div>
              <?php endif; ?>

              <div class="mt-40 mb-10">
                <a href="<?= m_path('rfq', [], true) ?>" class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill prt-btn-color-skincolor">Start a similar project</a>
                <a href="<?= m_path('case.studies', [], true) ?>" class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border ml-10">All case studies</a>
              </div>

            </div>

            <!-- ── SIDEBAR (col-4) ── -->
            <div class="col-lg-4 col-sm-9 pl-40 pr-0 res-991-pl-15 res-991-pr-15 res-991-mt-15">
              <div class="featured-icon-box icon-align-before-content style5">
                <div class="featured-icon-box-inner">
                  <div class="featured-content">
                    <div class="featured-desc"><p>Sector</p></div>
                    <div class="featured-title"><h3><?= htmlspecialchars($sectorLabel) ?></h3></div>
                  </div>
                </div>
                <?php if (!empty($study['client_name'])): ?>
                <div class="featured-icon-box-inner">
                  <div class="featured-content">
                    <div class="featured-desc"><p>Client</p></div>
                    <div class="featured-title"><h3><?= htmlspecialchars($study['client_name']) ?></h3></div>
                  </div>
                </div>
                <?php endif; ?>
                <?php if ($engagementLabel): ?>
                <div class="featured-icon-box-inner">
                  <div class="featured-content">
                    <div class="featured-desc"><p>Engagement</p></div>
                    <div class="featured-title"><h3><?= htmlspecialchars($engagementLabel) ?></h3></div>
                  </div>
                </div>
                <?php endif; ?>
                <?php if (!empty($study['project_period'])): ?>
                <div class="featured-icon-box-inner">
                  <div class="featured-content">
                    <div class="featured-desc"><p>Period</p></div>
                    <div class="featured-title"><h3><?= htmlspecialchars($study['project_period']) ?></h3></div>
                  </div>
                </div>
                <?php endif; ?>
                <?php if (!empty($study['naics_codes'])): ?>
                <div class="featured-icon-box-inner">
                  <div class="featured-content">
                    <div class="featured-desc"><p>NAICS</p></div>
                    <div class="featured-title"><h3><?= htmlspecialchars(implode(' • ', $study['naics_codes'])) ?></h3></div>
                  </div>
                </div>
                <?php endif; ?>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!--single-project-section end-->
</div><!--/.site-main-->

<?php include view('layout/footer'); ?>
<?php include view('layout/js'); ?>

</body>
</html>
