<?php if ($activePage !== "home"): ?>
  <style>
    /* .sticky .mega-dropdawn a {
      color: #e2dfdf;
    } */
  </style>
<?php endif; ?>

<header>

  <!--top header -->
  <div class="header-top d-md-block d-none" style="background-color: #f5f5f5; padding: 2px 0; border-bottom: solid #e2dfdf 1px;">
    <div class="container">
      <div class="row align-items-center justify-content-between">

        <!-- Logo à gauche -->
        <div class="col-md-3 text-center text-md-start mb-2 mb-md-0">
          <a href="<?= getProjetUrl() ?>">
            <img src="<?= asset('img/logo/logo.png') ?>" alt="Agence d'immigration au Canada" style="max-height: 100px;">
          </a>
        </div>

        <!-- Informations de contact à droite -->
        <div class="col-md-9 text-center text-md-end top-header-contact">
          <div class="contact-info text-secondary">
            <span><i class="fas fa-home me-1"></i> Bénin, Togo, Gabon</span>
            <span class="mx-2">|</span>
            <span><i class="fas fa-envelope me-1"></i> info@destinations-canada.com</span>
            <span class="mx-2">|</span>
            <span><i class="fas fa-clock me-1"></i> Lun - Ven : 08:00 à 18:30, Sam : 09:00 à 13:00</span>
          </div>
        </div>

      </div>
    </div>
  </div>


  <!--top header -->

  <div class="header-area header-area3 header-area-all d-none d-lg-block" style="  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);" id="header">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="header-elements _relative">

            <div class="site-logo home1-site-logo" id="logo-scroll" style=" display: none;">
              <a href="<?= getProjetUrl() ?>">
                <img src="<?= asset('img/logo/logo.png') ?>" alt="Logo Destination Canada" style="max-width: 115px;">
              </a>
            </div>


            <div class="main-menu-ex main-menu-ex5">
              <ul class="font-f-4 rectangle-reveal">
                <li class="mega-dropdawn">
                  <a href="<?= m_path('service', ['slug' => $pourquoi_canaSlug], true) ?>" class="<?= ($activePage == 'pourquoi') ? 'active' : '' ?> ">Pourquoi le Canada ? <i class="fa-solid "></i></a>

                </li>

                <li class="mega-dropdawn">
                  <a href="<?= m_path('service', ['slug' => $immigrerSlug], true) ?>" class="<?= ($activePage == 'immigrer') ? 'active' : '' ?> ">Immigrer <i class="fa-solid"></i></a>

                </li>

                <li class="mega-dropdawn">
                  <a href="<?= m_path('service', ['slug' =>  $etudierSlug], true) ?>" class="<?= ($activePage == 'etudier') ? 'active' : '' ?> ">Étudier <i class="fa-solid "></i></a>

                </li>

                <li class="mega-dropdawn">
                  <a href="<?= m_path('service', ['slug' =>  $travaillerSlug], true) ?>" class="<?= ($activePage == 'travailler') ? 'active' : '' ?> ">Travailler <i class="fa-solid"></i></a>

                </li>

                <li class="mega-dropdawn">
                  <a href="<?= m_path('blog', [], true) ?>" class="<?= ($activePage == 'blog') ? 'active' : '' ?> ">Blog et actualités <i class="fa-solid"></i></a>
                  <ul class="mega-dropdawn-ul">
                    <div class="mega-menu-all">

                      <div class="row">

                        <div class="row col-12" id="article-relatifs-container">
                          <?php if (isset($articles) and !empty($articles)): ?>
                            <?php foreach ($articles as $article): ?>
                              <div class="col-lg-2">
                                <div class="card blog-card border-0 shadow-sm">
                                  <div class="position-relative">
                                    <img src="<?= asset($article['image_url']) ?>" class="card-img-top" alt=" <?= $article['title'] ?>" loading="lazy">
                                    <span class="badge bg-danger position-absolute top-0 start-0 m-2 px-3 py-1 text-uppercase">
                                      Actualités
                                    </span>
                                  </div>
                                  <div class="card-body px-3 py-2">
                                    <h6 class="card-title fw-semibold mb-1">
                                      <a href="<?= m_path('blog.detail', ['slug' => $article['slug']], true) ?>" class="text-dark text-decoration-none">
                                        <?= $article['title'] ?>
                                      </a>
                                    </h6>
                                    <small class="text-muted">Publié le <?= formatDateFrench2($article['published_at']) ?></small>
                                  </div>
                                </div>

                              </div>
                            <?php endforeach; ?>
                          <?php else: ?>
                            <div class="col-12 text-center align-items-center">
                              <span>
                                Aucun article trouvé
                              </span>
                            </div>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </ul>
                </li>

                <li>
                  <a href="<?= m_path('contact', [], true) ?>" class="<?= ($activePage == 'contact') ? 'active' : '' ?> " target="__blank">
                    Rejoignez nous
                  </a>
                </li>

              </ul>
            </div>




            <div class="home2-header-buttons">


   


              <div class="button2-all">
                <!--div class="select-countrie">
                  <a href="#" style="display: inline-block; margin-right: 10px;"><img src="assets/img/icons/erth.svg" alt=""></a>
                  <select class="select-countries">
                    <option value="">FRA</option>
                    <option value="">ENG</option>
                  </select>
                </div-->


                <?php  if (isset($_SESSION['user']['email'] )): ?>
                <div class="d-flex justify-content-end mx-2">
                  <a href="<?= m_path('user.dashboard', [], true) ?>" class="rounded-circle d-flex avatar align-items-center justify-content-center fw-bold">
                    <?= strtoupper(
                        mb_substr($_SESSION['user']['firstname'], 0, 1) .
                        mb_substr($_SESSION['user']['name'], 0, 1)
                    ) ?>
                  </a>

                </div>
                <?php endif; ?>
                <a href="<?= m_path('rdv', [], true) ?>" class="theme-btn9 font-f-4 me-1" target="__blank">
                  <i class="fas fa-calendar-check me-2"></i>Prenez rendez-vous
                </a>
                <!--a href="<?= m_path('cv.links', [], true) ?>" class="theme-btn9 outline font-f-4 btn btn-outline-danger" target="__blank">
                Créer un CV canadien
                </a-->

              </div>
            </div>
            <div class="mobile-menu-bar d-lg-none">
              <i class="fas fa-bars"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
