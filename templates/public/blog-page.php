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

            <?php if ($search !== '' || $activeCategory !== '' || $activeTag !== ''): ?>
            <div class="mb-30">
              <p class="m-0">
                <?= $totalPosts ?> result<?= $totalPosts !== 1 ? 's' : '' ?>
                <?php if ($search !== ''): ?> for &laquo; <strong><?= htmlspecialchars($search) ?></strong> &raquo;<?php endif; ?>
                <?php if ($activeCategory !== ''): ?> in <strong><?= htmlspecialchars($blogCategories[$activeCategory]) ?></strong><?php endif; ?>
                <?php if ($activeTag !== ''): ?> tagged <strong><?= htmlspecialchars($activeTag) ?></strong><?php endif; ?>
                &mdash; <a href="<?= m_path('blog', [], true) ?>">clear filters</a>
              </p>
            </div>
            <?php endif; ?>

            <?php if (!empty($posts)): ?>
              <?php foreach ($posts as $p):
                $cover = strapi_img($p['cover_image'] ?? null);
                $categoryLabel = $blogCategories[$p['category'] ?? ''] ?? '';
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
                        <a href="<?= blog_url(['category' => $p['category'], 's' => null, 'tag' => null]) ?>"><?= htmlspecialchars($categoryLabel) ?></a>
                      </span>
                    </div>
                    <?php endif; ?>
                    <div class="featured-title">
                      <h3><a href="<?= m_path('blog.detail', [$p['slug']], true) ?>"><?= htmlspecialchars($p['title']) ?></a></h3>
                    </div>
                    <?php if (!empty($p['excerpt'])): ?>
                    <div class="post-excerpt">
                      <p><?= htmlspecialchars(excerptChars($p['excerpt'], 140)) ?></p>
                    </div>
                    <?php endif; ?>
                    <div class="prt-postbox-btn">
                      <a class="prt-btn prt-btn-size-sm btn-inline prt-icon-btn-right" href="<?= m_path('blog.detail', [$p['slug']], true) ?>">More details</a>
                    </div>
                  </div>
                </div>
              </article>
              <?php endforeach; ?>

              <?php if ($totalPages > 1): ?>
              <div class="row">
                <div class="col-md-12 m-auto">
                  <div class="pagination-block text-center prt-pagination">
                    <?php if ($page > 1): ?>
                    <a class="prev page-numbers" href="<?= blog_url($page - 1 > 1 ? ['page' => $page - 1] : []) ?>"><i class="ti ti-arrow-left"></i></a>
                    <?php endif; ?>
                    <?php for ($n = 1; $n <= $totalPages; $n++): ?>
                      <?php if ($n === $page): ?>
                      <span class="page-numbers current"><?= $n ?></span>
                      <?php else: ?>
                      <a class="page-numbers" href="<?= blog_url($n > 1 ? ['page' => $n] : []) ?>"><?= $n ?></a>
                      <?php endif; ?>
                    <?php endfor; ?>
                    <?php if ($page < $totalPages): ?>
                    <a class="next page-numbers" href="<?= blog_url(['page' => $page + 1]) ?>"><i class="ti ti-arrow-right"></i></a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <?php endif; ?>

            <?php else: ?>
              <div class="text-center" style="padding:60px 0;">
                <?php if ($search !== '' || $activeCategory !== '' || $activeTag !== ''): ?>
                <p class="mb-20">No articles match your filters.</p>
                <a class="prt-btn prt-btn-size-sm btn-inline prt-icon-btn-right" href="<?= m_path('blog', [], true) ?>">View all articles</a>
                <?php else: ?>
                <p class="m-0">No articles published yet — check back soon.</p>
                <?php endif; ?>
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
              <form role="search" method="get" class="search-form" action="<?= m_path('blog', [], true) ?>">
                <label>
                  <span class="screen-reader-text">Search for:</span>
                  <input type="search" class="input-text" placeholder="Search …" value="<?= htmlspecialchars($search) ?>" name="s">
                </label>
                <?php if ($activeCategory !== ''): ?>
                <input type="hidden" name="category" value="<?= htmlspecialchars($activeCategory) ?>">
                <?php endif; ?>
                <button class="btn" type="submit"></button>
              </form>
            </aside>

            <aside class="widget widget-categories with-title">
              <h3 class="widget-title-style01">Categories</h3>
              <ul>
                <li class="<?= $activeCategory === '' ? 'active' : '' ?>">
                  <a href="<?= m_path('blog', [], true) ?>">All</a><span>(<?= count($allPosts) ?>)</span>
                </li>
                <?php foreach ($blogCategories as $catKey => $catLabel): if (empty($categoryCounts[$catKey])) continue; ?>
                <li class="<?= $activeCategory === $catKey ? 'active' : '' ?>">
                  <a href="<?= blog_url(['category' => $catKey, 's' => null, 'tag' => null]) ?>"><?= htmlspecialchars($catLabel) ?></a><span>(<?= $categoryCounts[$catKey] ?>)</span>
                </li>
                <?php endforeach; ?>
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
                <a href="<?= blog_url(['tag' => $tag, 's' => null, 'category' => null]) ?>" class="tag-cloud-link<?= $activeTag === $tag ? ' active' : '' ?>"><?= htmlspecialchars($tag) ?></a>
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
