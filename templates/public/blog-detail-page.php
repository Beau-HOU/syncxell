<?php
$categoryLabel = ucwords(str_replace('_', ' ', $post['category'] ?? ''));
$authorName = trim(($post['author']['first_name'] ?? '') . ' ' . ($post['author']['last_name'] ?? ''));
if ($authorName === '') $authorName = 'SYNCXELL Editorial';
$coverUrl = strapi_img($post['cover_image'] ?? null);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include view('layout/head'); ?>
</head>
<body class="blog-page blog-detail-page">

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
              <span><a href="<?= m_path('blog', [], true) ?>">Tech Insights</a></span>
              <span class="prt-bread-sep"><i class="fa-angle-double-right fa"></i></span>
              <span><?= htmlspecialchars(truncate_texte($post['title'], 40)) ?></span>
            </div>
            <div class="page-title-heading">
              <h1 class="pb-0"><?= htmlspecialchars($post['title']) ?></h1>
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

        <!-- ── ARTICLE (col-8) ── -->
        <div class="col-lg-8 col-md-12 m-auto mt-0 content-area">
          <article class="post prt-blog-single clearfix">

            <div class="prt-post-featured-wrapper prt-featured-wrapper">
              <div class="prt-post-featured mb-50">
                <img class="img-fluid border-rad_15" src="<?= $coverUrl ?: asset('images/placeholder-blog.svg') ?>" alt="<?= htmlspecialchars($post['title']) ?>">
              </div>
              <?php if ($categoryLabel): ?>
              <div class="prt-box-post-icon">
                <div class="post-meta">
                  <span class="prt-meta-line category">
                    <a href="<?= m_path('blog', [], true) ?>"><?= htmlspecialchars($categoryLabel) ?></a>
                  </span>
                </div>
              </div>
              <?php endif; ?>
            </div>

            <div class="prt-blog-single-content mb-20">
              <div class="prt-post-entry-header">
                <div class="post-meta">
                  <?php if (!empty($post['published_date'])): ?>
                  <span class="prt-meta-line category"><?= date('F j, Y', strtotime($post['published_date'])) ?></span>
                  <?php endif; ?>
                  <span class="prt-meta-line byline"><?= htmlspecialchars($authorName) ?></span>
                  <?php if (!empty($post['reading_time_minutes'])): ?>
                  <span class="prt-meta-line tags-links"><?= (int)$post['reading_time_minutes'] ?> min read</span>
                  <?php endif; ?>
                </div>
              </div>
              <div class="entry-content">
                <div class="prt-box-desc-text">
                  <?= $post['body'] ?>

                  <div class="border-text">
                    <div class="row">
                      <?php if (!empty($post['tags'])): ?>
                      <div class="col-sm-6">
                        <div class="prt_tag_lists margin_top15">
                          <span class="prt-tags-links-title pr-15">Tags:</span>
                          <?php foreach ($post['tags'] as $tag): ?>
                          <span class="prt-tags-links"><a href="<?= m_path('blog', [], true) ?>"><?= htmlspecialchars($tag) ?></a></span>
                          <?php endforeach; ?>
                        </div>
                      </div>
                      <?php endif; ?>
                      <div class="col-sm-6">
                        <div class="prt-social-share-wrapper margin_top15 res-575-mt-15">
                          <ul class="social-icons float-end-sm">
                            <li><a href="#" rel="noopener" aria-label="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" rel="noopener" aria-label="twitter" target="_blank"><i class="flaticon-twitter"></i></a></li>
                            <li><a href="#" rel="noopener" aria-label="linkedin" target="_blank"><i class="flaticon-linkedin"></i></a></li>
                            <li><a href="#" rel="noopener" aria-label="instagram" target="_blank"><i class="flaticon-instagram"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="prt-post-prev-next-buttons clearfix row">
                    <div class="col-sm-6 prev-link_wrapper col-6">
                      <div class="pagination-item prev prt-postwith-img">
                        <div class="pagination-content">
                          <a href="#"><i class="ti-arrow-left"></i> <span class="prt-nav-sub">Previous post</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 next-link_wrapper col-6">
                      <div class="pagination-item next prt-postwith-img">
                        <div class="pagination-content">
                          <a href="#"><span class="prt-nav-sub">Next post</span> <i class="ti-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="prt-blog-classic-box-comment_1 pt-15 comments-area_1 text-center">
              <h3>Have questions about this topic?</h3>
              <p class="comment-notes">Our compliance and engineering team is ready to help.</p>
              <a href="<?= m_path('contact', [], true) ?>" class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill prt-btn-color-skincolor">Discuss this topic with our experts</a>
            </div>

          </article>
        </div>
        <!-- article end -->

        <!-- ── SIDEBAR (col-4) ── -->
        <div class="col-lg-4 col-md-12 m-auto mt-0 col-sm-8 widget-area sidebar-right mb-0">
          <div class="prt-bg prt-col-bgcolor-yes bg-base-grey prt-bg prt-right-span spacing-4 h-100">
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
            </aside>
            <?php endif; ?>

            <?php if (!empty($post['tags'])): ?>
            <aside class="widget tagcloud-widget with-title">
              <h3 class="widget-title-style01">Tags</h3>
              <div class="tagcloud">
                <?php foreach ($post['tags'] as $tag): ?>
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
