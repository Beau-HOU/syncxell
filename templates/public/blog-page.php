<!DOCTYPE html>
<html lang="en">
<head>
<?php include view('layout/head'); ?>
</head>
<body class="blog-page">

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
              <span>Tech Insights</span>
            </div>
            <div class="page-title-heading">
              <h1 class="pb-0">Tech Insights &amp; News</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-main">
  <div class="sidebar prt-sidebar-right clearfix">
    <div class="container">
      <div class="row">

        <!-- ── ARTICLES (col-8) ── -->
        <div class="col-lg-8 col-md-12 m-auto mt-0 content-area">
          <div class="post prt-blog-classic-inner">
            <?php if (!empty($posts)): ?>
              <?php foreach ($posts as $p):
                $cover = strapi_img($p['cover_image'] ?? null);
                $categoryLabel = ucwords(str_replace('_', ' ', $p['category'] ?? ''));
              ?>
              <article class="post prt-blog-classic">
                <div class="featured-imagebox featured-imagebox-post style4">
                  <div class="featured-thumbnail">
                    <a href="<?= m_path('blog.detail', [$p['slug']], true) ?>">
                      <img class="img-fluid" src="<?= $cover ?: asset('images/placeholder-blog.svg') ?>" alt="<?= htmlspecialchars($p['title']) ?>" width="767" height="657">
                    </a>
                  </div>
                  <div class="featured-content featured-content-post">
                    <?php if ($categoryLabel): ?>
                    <div class="post-meta">
                      <span class="prt-meta-line category">
                        <a href="<?= m_path('blog', [], true) ?>"><?= htmlspecialchars($categoryLabel) ?></a>
                      </span>
                    </div>
                    <?php endif; ?>
                    <div class="featured-title">
                      <h3><a href="<?= m_path('blog.detail', [$p['slug']], true) ?>"><?= htmlspecialchars($p['title']) ?></a></h3>
                    </div>
                    <div class="prt-postbox-btn">
                      <a class="prt-btn prt-btn-size-sm btn-inline prt-icon-btn-right" href="<?= m_path('blog.detail', [$p['slug']], true) ?>">More details</a>
                    </div>
                  </div>
                </div>
              </article>
              <?php endforeach; ?>
              <div class="row">
                <div class="col-md-12 m-auto">
                  <div class="pagination-block text-center prt-pagination">
                    <span class="page-numbers current">1</span>
                  </div>
                </div>
              </div>
            <?php else: ?>
              <div class="text-center" style="padding:60px 0;">
                <p class="m-0">No articles published yet — check back soon.</p>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <!-- articles end -->

        <!-- ── SIDEBAR (col-4) ── -->
        <div class="col-lg-4 col-md-12 m-auto mt-0 widget-area sidebar-right pl-15 pr-15">
          <div class="prt-bg prt-col-bgcolor-yes bg-base-grey prt-bg prt-right-span spacing-5 h-100">
            <div class="prt-col-wrapper-bg-layer prt-bg-layer">
              <div class="prt-col-wrapper-bg-layer-inner"></div>
            </div>

            <aside class="widget widget-search with-title">
              <h3 class="widget-title-style01">Search here</h3>
              <form role="search" method="get" class="search-form" action="#">
                <label>
                  <span class="screen-reader-text">Search for:</span>
                  <input type="search" class="input-text" placeholder="Search …" value="" name="s">
                </label>
                <button class="btn" type="submit"></button>
              </form>
            </aside>

            <aside class="widget widget-categories with-title">
              <h3 class="widget-title-style01">Categories</h3>
              <ul>
                <li><a href="<?= m_path('blog', [], true) ?>">Compliance</a></li>
                <li><a href="<?= m_path('blog', [], true) ?>">Cloud &amp; Infrastructure</a></li>
                <li><a href="<?= m_path('blog', [], true) ?>">Cybersecurity</a></li>
                <li><a href="<?= m_path('blog', [], true) ?>">Announcements</a></li>
                <li><a href="<?= m_path('blog', [], true) ?>">Case Studies</a></li>
              </ul>
            </aside>

            <?php if (!empty($recentPosts)): ?>
            <aside class="widget widget-recent-post with-title">
              <h3 class="widget-title-style01">Recent Posts</h3>
              <div class="row">
                <div class="col-lg-12">
                  <ul class="widget-post prt-recent-post-list">
                    <?php foreach ($recentPosts as $rp): $rpCover = strapi_img($rp['cover_image'] ?? null); ?>
                    <li>
                      <a href="<?= m_path('blog.detail', [$rp['slug']], true) ?>"><img class="img-fluid" src="<?= $rpCover ?: asset('images/placeholder-blog.svg') ?>" alt="post-img" width="150" height="150"></a>
                      <div class="post-detail">
                        <?php if (!empty($rp['published_date'])): ?>
                        <span class="post-date"><i class="fa fa-calendar"></i><?= date('F j, Y', strtotime($rp['published_date'])) ?></span>
                        <?php endif; ?>
                        <a href="<?= m_path('blog.detail', [$rp['slug']], true) ?>"><?= htmlspecialchars($rp['title']) ?></a>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            </aside>
            <?php endif; ?>

            <?php if (!empty($allTags)): ?>
            <aside class="widget tagcloud-widget with-title">
              <h3 class="widget-title-style01">Tags</h3>
              <div class="tagcloud">
                <?php foreach ($allTags as $tag): ?>
                <a href="<?= m_path('blog', [], true) ?>" class="tag-cloud-link"><?= htmlspecialchars($tag) ?></a>
                <?php endforeach; ?>
              </div>
            </aside>
            <?php endif; ?>

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
  </div>
</div><!--/.site-main-->

<?php include view('layout/footer'); ?>
<?php include view('layout/js'); ?>

</body>
</html>
