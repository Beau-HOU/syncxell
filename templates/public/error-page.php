<!DOCTYPE html>
<html lang="en">
<head>
<?php include view('layout/head'); ?>
</head>
<body class="error-page">

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
              <span>404</span>
            </div>
            <div class="page-title-heading">
              <h1 class="pb-0">Page Not Found</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-main">
  <section class="prt-row error-section bg-base-grey clearfix">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 col-md-12">
          <div class="page-content-main text-center">
            <div class="page-content">
              <?php if (file_exists(assetDir('images/404-img.png'))): ?>
              <img class="img-fluid mb-30" src="<?= asset('images/404-img.png') ?>" alt="404">
              <?php else: ?>
              <h1 class="mb-30" style="font-size:150px;line-height:1;color:var(--sx-gold);">404</h1>
              <?php endif; ?>
              <h2>This page couldn't be found.</h2>
              <p>The page you're looking for may have been moved, renamed, or is temporarily unavailable.</p>
            </div>
            <div class="mt-20">
              <a class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill prt-icon-btn-right prt-btn-color-skincolor" href="<?= m_path('home', [], true) ?>">Back to Home</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div><!--/.site-main-->

<?php include view('layout/footer'); ?>
<?php include view('layout/js'); ?>

</body>
</html>
