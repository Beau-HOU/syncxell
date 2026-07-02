<?php include view('public/layout/header'); ?>

<!-- ══ HERO BLOG ══ -->
<section class="page-inner" style="background-image:url('<?= asset('img/Gocast/webp/dlxmedia-hu-lsSpTX8QL_M-unsplash.webp') ?>')">
  <div class="pi-overlay"></div>
  <div class="pi-content">
    <div class="pi-breadcrumb">
      <a href="<?= m_path('home', [], true) ?>">Accueil</a>
      <span>/</span>
      <span>Blog</span>
    </div>
    <h1 class="pi-h1">Le Blog GoCast</h1>
    <p class="pi-sub">Conseils, ressources et actualités pour les créateurs de contenu</p>
  </div>
</section>

<!-- ══ FILTRES CATÉGORIES ══ -->
<?php if (!empty($categories)): ?>
<section style="background:var(--gc-dark);padding:40px 0;border-bottom:1px solid rgba(255,255,255,.06)">
  <div class="container">
    <div style="display:flex;gap:12px;flex-wrap:wrap;align-items:center">
      <button class="blog-cat-btn on" data-cat="all" onclick="filterBlog(this)">Tous les articles</button>
      <?php foreach ($categories as $cat): ?>
      <button class="blog-cat-btn" data-cat="<?= $cat['id'] ?>" onclick="filterBlog(this)"><?= htmlspecialchars($cat['name']) ?></button>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ══ GRILLE ARTICLES ══ -->
<section style="background:var(--gc-dark);padding:80px 0 120px">
  <div class="container">
    <?php if (!empty($blogs)): ?>
    <div id="blog-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:28px">
      <?php foreach ($blogs as $article):
        $cover = $article['cover']
          ? asset($article['cover'])
          : asset('img/Gocast/webp/dlxmedia-hu-JJFfe2qRqhE-unsplash.webp');
        $catId = $article['category_id'] ?? 0;
        $catName = htmlspecialchars($article['category_name'] ?? 'Article');
        $date = $article['published_at']
          ? date('d M Y', strtotime($article['published_at']))
          : '';
      ?>
      <article class="blog-card" data-cat="<?= $catId ?>">
        <a href="<?= m_path('blog.detail', [$article['slug']], true) ?>" style="text-decoration:none;color:inherit">
          <div class="blog-card-img">
            <img src="<?= $cover ?>" alt="<?= htmlspecialchars($article['title']) ?>">
            <?php if ($catName): ?>
            <div class="blog-card-tag"><?= $catName ?></div>
            <?php endif; ?>
          </div>
          <div class="blog-card-body">
            <?php if ($date): ?>
            <div class="blog-card-date"><?= $date ?></div>
            <?php endif; ?>
            <h3 class="blog-card-title"><?= htmlspecialchars($article['title']) ?></h3>
            <?php if ($article['excerpt']): ?>
            <p class="blog-card-excerpt"><?= htmlspecialchars(mb_substr($article['excerpt'], 0, 120)) ?>…</p>
            <?php endif; ?>
            <span class="blog-card-more">Lire l'article →</span>
          </div>
        </a>
      </article>
      <?php endforeach; ?>
    </div>
    <?php else: ?>
    <div style="text-align:center;padding:80px 0">
      <div style="font-size:48px;margin-bottom:16px">✍️</div>
      <h3 style="color:#fff;font-size:22px;margin-bottom:12px">Bientôt disponible</h3>
      <p style="color:rgba(255,255,255,.5);font-size:15px">Nos premiers articles arrivent très bientôt. Revenez nous rendre visite !</p>
      <a href="<?= m_path('home', [], true) ?>" style="display:inline-block;margin-top:32px;padding:12px 28px;background:var(--gc-gradient);color:#fff;border-radius:50px;font-weight:700;font-size:14px;text-decoration:none">Retour à l'accueil</a>
    </div>
    <?php endif; ?>
  </div>
</section>

<?php include view('public/layout/footer'); ?>

<style>
.blog-cat-btn{background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);color:rgba(255,255,255,.7);padding:8px 20px;border-radius:50px;font-size:13px;font-weight:600;cursor:pointer;transition:.2s}
.blog-cat-btn:hover,.blog-cat-btn.on{background:var(--gc-gradient);border-color:transparent;color:#fff}
.blog-card{background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.07);border-radius:16px;overflow:hidden;transition:transform .3s,box-shadow .3s}
.blog-card:hover{transform:translateY(-6px);box-shadow:0 24px 60px rgba(0,0,0,.4)}
.blog-card-img{position:relative;height:220px;overflow:hidden}
.blog-card-img img{width:100%;height:100%;object-fit:cover;transition:transform .4s}
.blog-card:hover .blog-card-img img{transform:scale(1.06)}
.blog-card-tag{position:absolute;top:14px;left:14px;background:var(--gc-gradient);color:#fff;font-size:11px;font-weight:700;padding:4px 12px;border-radius:50px;text-transform:uppercase;letter-spacing:.5px}
.blog-card-body{padding:24px}
.blog-card-date{font-size:12px;color:var(--gc-accent);text-transform:uppercase;letter-spacing:1px;margin-bottom:10px}
.blog-card-title{font-size:17px;font-weight:700;color:#fff;line-height:1.4;margin-bottom:12px}
.blog-card-excerpt{font-size:13px;color:rgba(255,255,255,.5);line-height:1.65;margin-bottom:16px}
.blog-card-more{font-size:13px;color:var(--gc-accent);font-weight:600}
</style>
<script>
function filterBlog(btn){
  document.querySelectorAll('.blog-cat-btn').forEach(function(b){ b.classList.remove('on'); });
  btn.classList.add('on');
  var cat=btn.dataset.cat;
  document.querySelectorAll('.blog-card').forEach(function(card){
    card.style.display=(cat==='all'||card.dataset.cat===cat)?'':'none';
  });
}
</script>
