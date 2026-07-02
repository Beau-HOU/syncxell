<!DOCTYPE html>
<html lang="en">
<?php $filter = 'filter: invert(22%) sepia(200%) saturate(2000%) hue-rotate(706deg) brightness(95%) contrast(310%)'; ?>

<head>
  <?php include view('layout/head'); ?>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
  <link rel="stylesheet" href="<?= asset('css/home.css') ?>" />

</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VSRF8PJ4WG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VSRF8PJ4WG');
</script>


<body>

  <!--=====progress START=======-->

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-56W54846"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Preloader -->
  <section>
    <?php include view('layout/preloader'); ?>
  </section>

  <style>
    @media (max-width: 768px) {
      .main-hadding7.main-hadding12 {
        padding-top: 110px;
        padding-bottom: 200px;
      }
    }
  </style>

  <!--=====progress END=======-->

  <div class="paginacontainer">

    <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>

  </div>


  <!--=====progress END=======-->


  <!--=====HEADER START=======-->
  <?php include view('layout/header-1'); ?>
  <?php // include view('layout/header2') ;
  ?>
  <!--=====HEADER END=======-->

  <!--=====Mobile header start=======-->
  <?php include view('layout/mobile-header'); ?>

  <?php include view('layout/mobile-sidebar'); ?>
  <!--=====Mobile header end=======-->


  <div id="heroCarousel" class="hero-area7 _relative bg-video-wrap carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

      <!-- SLIDE 1 -->
      <div class="carousel-item active" style="background: url('<?= asset("img/bg/imigrer-hero-bg.webp") ?>') no-repeat center center; background-size: cover;" data-bs-interval="15000">
        <div class="overlay"></div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-9">
              <div class="space80 d-none d-sm-block"></div>
              <div class="main-hadding7 main-hadding12">
                <h1 data-aos="fade-right" data-aos-duration="500" class="text-light">Immigrez au Canada avec un accompagnement fiable et personnalisé</h1>
                <div class="space24"></div>
                <p data-aos="fade-right" data-aos-duration="600" class="text-light">
                  Nous vous guidons à travers les programmes d'immigration disponibles, pour vous aider à <br>
                  concrétiser votre projet de vie au Canada.
                </p>
                <div class="space24"></div>
                <div class="hero7-all-buttons ">
                  <a href="<?= m_path('evaluation.profile', [], true) ?>" class="theme-btn9"><span>Evaluer mon profil</span></a>
                </div>
              </div>
            </div>
            <div class="col-lg-5"></div>
          </div>
        </div>
      </div>

      <!-- SLIDE 2 -->
      <div class="carousel-item " style="background: url('<?= asset("img/bg/etudier-hero-bg.webp") ?>') no-repeat center center; background-size: cover;" data-bs-interval="15000">
        <div class="overlay"></div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-9">
              <div class="space80 d-none d-sm-block"></div>
              <div class="main-hadding7 main-hadding12">
                <h1 data-aos="fade-right" data-aos-duration="500" class="text-light">Étudiez dans les meilleures ecoles et universités canadiennes</h1>
                <div class="space24"></div>
                <p data-aos="fade-right" data-aos-duration="600" class="text-light">
                  Du choix du programme à l'obtention du permis d'études, nous vous accompagnons pour que votre rêve d'étudier au Canada devienne réalité.<br>
                </p>
                <div class="space24"></div>
                <div class="hero7-all-buttons ">
                  <a href="<?= m_path('rdv', [], true) ?>" class="theme-btn9"><span>Prenez un rendez-vous</span></a>
                </div>
              </div>
            </div>
            <div class="col-lg-5"></div>
          </div>
        </div>
      </div>

      <!-- SLIDE 3 -->
      <div class="carousel-item " style="background: url('<?= asset("img/bg/travailler-hero-bg.webp") ?>') no-repeat center center; background-size: cover;" data-bs-interval="15000">
        <div class="overlay"></div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-9">
              <div class="space80 d-none d-sm-block"></div>
              <div class="main-hadding7 main-hadding12">
                <h1 data-aos="fade-right" data-aos-duration="500" class="text-light">Travaillez au Canada et bâtissez votre avenir professionnel</h1>
                <div class="space24"></div>
                <p data-aos="fade-right" data-aos-duration="600" class="text-light">
                  Le Canada est un pays d'opportunités où vos compétences sont reconnues et valorisées. <br>
                  Saisissez les opportunités de travail adpaté pour vous maintenant.
                </p>
                <div class="space24"></div>
                <div class="hero7-all-buttons ">
                  <a href="<?= m_path('cv.links', [], true) ?>" class="theme-btn9"><span>Créer un CV canadien</span></a>
                </div>
              </div>
            </div>
            <div class="col-lg-5"></div>
          </div>
        </div>
      </div>

    </div>

    <!-- FORMES DÉCORATIVES -->
    <img class="hero7-shape1 animation-key-2" src="<?= asset('img/shapes/hero7-shape1.svg') ?>" alt="">
    <img class="hero7-shape2 animation-key-2" src="<?= asset('img/shapes/hero7-shape2.svg') ?>" alt="">
    <img class="hero7-shape3 animation-key-3" src="<?= asset('img/shapes/hero7-shape3.svg') ?>" alt="">

    <!-- CONTROLS -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--=====hero area end=======-->

  <!--=====about start=======-->

  <div class="about6 sp3">
    <div class="container">
      <div class="row align-items-lg-start">
        <div class="col-lg-6">
          <div class="about6-image-all">
            <div class="row">
              <div class="col-lg-12">
                <div class="about6-img1 img100 img5" data-aos="fade-down" data-aos-duration="500">
                  <img src="<?= asset('img/image/about_home.webp') ?>" alt="A propos de Destination Canada" loading="lazy">
                </div>
              </div>
              <!--div class="space30"></div>
              <div class="col-md-6 d-none d-md-block" data-aos="fade-up-right" data-aos-duration="600">
                <div class="about6-img2 img100 img5">
                  <img src="<?= asset('img/image/about_1.webp') ?>" alt="">
                </div>
              </div>
              <div class="col-md-6 d-none d-md-block">
                <div class="about6-img3 img100 img5" data-aos="fade-up-left" data-aos-duration="600">
                  <img src="<?= asset('img/image/about_2.webp') ?>" alt="">
                </div>
              </div-->
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="hadding6 about6-hadding">
            <span class="font-f-9 span about-title" data-aos="fade-left" data-aos-duration="500">A propos de Destination
              Canada</span>
            <div class="space16"></div>
            <h1 class="font-f-8" data-aos="fade-left" data-aos-duration="600"><?= $translations[$lang]['about_us_title'] ?> </h1>
            <div class="space24"></div>
            <p class="font-f-9" data-aos="fade-left" data-aos-duration="1100"><?= $translations[$lang]['about_us_text'] ?> </p>
            <div class="space20"></div>


            <div class="" data-aos="fade-left" data-aos-duration="600">
              <a href="<?= m_path('about.us', [], true) ?>" class="theme-btn9 font-f-9"><span class="">En savoir plus à propos de nous</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <style>
    .article-card {
      /* opacity: 1;
      transform: translateY(0); */
      /* transition: all 0.5s ease; */
      /* position: relative; */
      display: block;
    }

    .article-card.hidden {
      display: none;
    }

    #articlesContainer {
      position: relative;
      /* min-height: 400px; */
    }
  </style>

  <!--=====about end=======-->

  <!--=====service start=======-->

  <div class="service4 sp3 _relative" style="background-color: #F6F6F6; position: relative; overflow: hidden;">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 m-auto text-center">
          <div class="hadding4">
            <span class="font-f-2">Infos & ressources essentielles</span>
            <div class="space16"></div>
            <h1 class="font-f-4">
              Découvrez nos conseils et ressources indispensables pour réussir votre projet au Canada.
            </h1>

            <!-- Bouton CTA -->
            <a href="<?= m_path('ressources', [], true) ?>" class="theme-btn9 font-f-4 px-4 mt-3">
              <i class="fas fa-book-open me-2"></i> En savoir plus
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Shapes décoratifs -->
    <div class="shape-group">
      <i class="fas fa-plane-departure shape shape-1"></i> <!-- voyage/avion -->
      <i class="fas fa-passport shape shape-2"></i> <!-- documents/visa -->
      <i class="fas fa-book shape shape-3"></i> <!-- livre/ressource -->
      <i class="fas fa-lightbulb shape shape-4"></i> <!-- conseil/astuce -->
    </div>
  </div>



  <!--=====service end=======-->


  <script>
    const filterButtons = document.querySelectorAll('#articleFilter .btn');
    const cards = document.querySelectorAll('.article-card');
    const articlesContainer = document.querySelector('#articlesContainer');

    // Message par défaut
    const emptyMessage = document.createElement('div');
    emptyMessage.className = 'col-12 text-center py-5';
    emptyMessage.innerHTML = `
  
  <p>  Aucune ressources disponibles pour cette catégorie.
 </p>
`;
    emptyMessage.style.display = 'none';
    articlesContainer.appendChild(emptyMessage);

    filterButtons.forEach(button => {
      button.addEventListener('click', () => {
        filterButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        const filter = button.getAttribute('data-filter');
        let visibleCount = 0;

        cards.forEach(card => {
          const match = (filter === 'all' || card.getAttribute('data-service-id') === filter);
          if (match) {
            card.classList.remove('hidden');
            visibleCount++;
          } else {
            card.classList.add('hidden');
          }
        });

        // Affichage du message si aucun résultat
        if (visibleCount === 0) {
          emptyMessage.style.display = 'block';
        } else {
          emptyMessage.style.display = 'none';
        }
      });
    });
  </script>


  <!--=====service start=======-->
  <div class="choose2 sp3 _relative" style="background-color: white !important;">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 m-auto text-center">
          <div class="hadding6">
            <span class="font-f-9 span about-title" data-aos="fade-up" data-aos-duration="500">Nos services</span>
            <div class="space16"></div>
            <h1 class="font-f-8" data-aos="fade-up" data-aos-duration="600">Découvrez nos services sur-mesure pour
              immigrer au Canada</h1>
          </div>
        </div>
      </div>
      <div class="space30"></div>
      <div class="row align-items-center">
        <div class="col-lg-4">
          <div class="" data-aos="fade-right" data-aos-duration="500">
            <div class="choose2-box3 choose2-left">
              <div class="choose2-text-box3">
                <h4><a href="#services" class="font-f-8"><?= $translations[$lang]['service_home_studie_title'] ?></a></h4>
                <div class="space12"></div>
                <p class="font-f-9"><?= $translations[$lang]['service_home_studie_brief'] ?></p>
                <a href="#" class="text-dark" style="font-weight: bold;"></a>
              </div>
              <div class="choose2-icon-box3">
                <i class="fa-solid fa-graduation-cap fa-2x text-light"></i>
              </div>
            </div>
          </div>



          <div class="" data-aos="fade-right" data-aos-duration="1100">
            <div class="choose2-box3 choose2-left">
              <div class="choose2-text-box3" style="background-color: #ec4e4f !important; color: white !important;">
                <h4><a href="#services" class="font-f-8" style="color: white !important;"><?= $translations[$lang]['service_home_immigrate_title'] ?>
                  </a></h4>
                <div class="space12"></div>
                <p class="font-f-9" style="color: white !important;"><?= $translations[$lang]['service_home_immigrate_brief'] ?> </p>
                <a href="#" class="text-dark" style="font-weight: bold;"></a>
              </div>
              <div class="choose2-icon-box3">
                <i class="fa-solid fa-plane-departure fa-2x text-light"></i>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-4">
          <div class="choose2-main-image" data-aos="zoom-out" data-aos-duration="500">
            <div class="choose2-image img50">
              <img src="<?= asset('img/image/services_home.jpg') ?>" alt="Nos Services à Destination Canada" loading="lazy">
            </div>
          </div>
        </div>


        <div class="col-lg-4">
          <div class="" data-aos="fade-left" data-aos-duration="500">
            <div class="choose2-box4 choose2-right">
              <div class="choose2-text-box4" style="background-color: #ec4e4f !important; color: white !important;">
                <h4><a href="#services" class="font-f-8" style="color: white !important;"><?= $translations[$lang]['service_home_advice_title'] ?></a></h4>
                <div class="space12"></div>
                <p class="font-f-9" style="color: white !important;"><?= $translations[$lang]['service_home_advice_brief'] ?> </p>
                <a href="#" class="text-dark" style="font-weight: bold;"></a>
              </div>
              <div class="choose2-icon-box4">
                <i class="fa-solid fa-book-open-reader fa-2x text-light"></i>
              </div>
            </div>
          </div>



          <div class="" data-aos="fade-left" data-aos-duration="500">
            <div class="choose2-box4 choose2-right">
              <div class="choose2-text-box4">
                <h4><a href="#services" class="font-f-8"><?= $translations[$lang]['service_home_work_title'] ?></a></h4>
                <div class="space12"></div>
                <p class="font-f-9"><?= $translations[$lang]['service_home_work_brief'] ?> </p>
                <a href="#" class="text-dark" style="font-weight: bold;"></a>
              </div>
              <div class="choose2-icon-box4">
                <i class="fa-solid fa-briefcase fa-2x text-light"></i>
              </div>
            </div>
          </div>

        </div>


      </div>

    </div>
    <img class="service2-shape1 aniamtion-key-2" src="<?= asset('/img/shapes/choose6-shape1.svg') ?>" alt="">
    <img class="service2-shape2 aniamtion-key-2" src="<?= asset('/img/shapes/choose6-shape2.svg') ?>" alt="">
  </div>
  <!--=====service end=======-->



  <!-- Section vidéo immersive -->
  <!--section class="video-section" id="videoSection">
    <div class="video-wrapper">

      <video id="promoVideo">
        <source src="<?= asset('video/canada.mp4') ?>" type="video/mp4">
        Ton navigateur ne supporte pas la vidéo.
      </video>

      <button class="play-btn" id="playBtn">é-é Lire</button>
    </div>
  </section-->

  <!-- Section vidéo immersive (version YouTube) -->
  <!--section class="yt-video-section" id="ytVideoSection">
    <div class="yt-video-wrapper">
     
      <iframe
        id="ytPlayer"
        src="https://www.youtube.com/embed/659z-iNgJww?rel=0&showinfo=0"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
        style="width:100%; height:100%; border-radius:14px; box-shadow:0 10px 25px rgba(0,0,0,0.3);">
      </iframe>

    
      <button class="yt-play-btn" id="ytPlayBtn">é-é Lire</button>
    </div>
  </section!-->


  <!--========== Approche -start ==========-->
  <div class="sp3 _relative" style="background-color: #F6F6F6;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="d-flex align-items-start">
            <div class="tab-content" id="v-pills-tabContent" data-aos="zoom-out" data-aos-duration="500">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                aria-labelledby="v-pills-home-tab">
                <div class="choose4-images text-left">
                  <div class="prosess-shape aniamtion-key-2">
                    <img src="assets/img/shapes/choose4-img-shape1.svg" alt="">
                  </div>
                  <div class="choose4-img-2 img100 img5 mb-3 mb-lg-0">
                    <img src="<?= asset('img/image/apr/2.webp') ?>" alt="Notre Approche à Destination Canada" loading="lazy">
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="choose4-images text-left">
                  <div class="prosess-shape aniamtion-key-2">
                    <img src="assets/img/shapes/choose4-img-shape1.svg" alt="">
                  </div>
                  <div class="choose4-img-2 img100 img5 mb-3 mb-lg-0">
                    <img src="<?= asset('img/image/apr/2.webp') ?>" alt="Notre Approche à Destination Canada" loading="lazy">
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="choose4-images text-left">
                  <div class="prosess-shape aniamtion-key-2">
                    <img src="assets/img/shapes/choose4-img-shape1.svg" alt="">
                  </div>
                  <div class="choose4-img-2 img100 img5 mb-3 mb-lg-0">
                    <img src="<?= asset('img/image/apr/2.webp') ?>" alt="Notre Approche à Destination Canada" loading="lazy">
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-6">
          <div class="hadding4 mt-5 mtablette mt-lg-0" data-aos="fade-left" data-aos-duration="500">
            <span class="font-f-2 mt-3 mt-lg-0"><?= $translations[$lang]['section_approach_title'] ?></span>
            <div class="space16"></div>
            <h1 class="font-f-4"><?= $translations[$lang]['section_approach_subtitle'] ?> </h1>
          </div>
          <div class="nav progress-list4 flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
            aria-orientation="vertical" data-aos="fade-left" data-aos-duration="1100">
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
              type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
              <div class="progress-list-box">
                <div class="progress-list-number">
                  <h4><span class="font-f-4">01</span></h4>
                </div>
                <div class="hadding4 progress4-hadding">
                  <h4 class="font-f-4"><?= $translations[$lang]['section_approach_step_1_title'] ?></h4>
                  <div class="space8"></div>
                  <p class="font-f-2"><?= $translations[$lang]['section_approach_step_1_desc'] ?></p>
                </div>
              </div>
            </button>
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
              type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
              <div class="progress-list-box">
                <div class="progress-list-number">
                  <h4><span class="font-f-4">02</span></h4>
                </div>
                <div class="hadding4 progress4-hadding">
                  <h4 class="font-f-4"><?= $translations[$lang]['section_approach_step_2_title'] ?></h4>
                  <div class="space8"></div>
                  <p class="font-f-2"><?= $translations[$lang]['section_approach_step_2_desc'] ?>

                  </p>
                </div>
              </div>
            </button>
            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages"
              type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
              <div class="progress-list-box">
                <div class="progress-list-number">
                  <h4><span class="font-f-4">03</span></h4>
                </div>
                <div class="hadding4 progress4-hadding">
                  <h4 class="fotn-f-4"><?= $translations[$lang]['section_approach_step_3_title'] ?></h4>
                  <div class="space8"></div>
                  <p class="font-f-2"><?= $translations[$lang]['section_approach_step_3_desc'] ?></p>
                </div>
              </div>
            </button>
          </div>

          <div class="space32"></div>
          <div class="" data-aos="fade-left" data-aos-duration="500">
            <a href="<?= m_path('evaluation.profile', [], true) ?>" class="theme-btn9 font-f-4"> Commencer dès maintenant</a>
          </div>
        </div>
      </div>
    </div>
    <img class="progress4-shape1 aniamtion-key-2" src="assets/img/shapes/hom4-shape2.svg" alt="">
    <img class="progress4-shape2 aniamtion-key-2" src="assets/img/shapes/hom4-shape1.svg" alt="">
  </div>
  <!--========== Approche -start ==========-->

  <style>
    .team5-img2 {
      width: 250px;
      /* largeur = hauteur */
      height: 250px;
      border-radius: 50%;
      /* cercle parfait */
      overflow: hidden;
      margin: 0 auto;
      /* centrer dans la colonne */
    }

    .team5-img2 img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }
  </style>



  <!--=====team start=======-->
  <div class="team4 sp3" style="position: relative; overflow: hidden; background-color: rgba(220, 53, 69, 0.08);">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 m-auto text-center">
          <div class="hadding4">
            <span class="font-f-2" data-aos="fade-up" data-aos-duration="500">Notre équipe</span>
            <div class="space16"></div>
            <h1 class="font-f-4" data-aos="fade-up" data-aos-duration="600">Une équipe d'experts à votre écoute</h1>
          </div>
        </div>
      </div>
    </div>

    <!-- CTA bouton -->
    <div class="col-lg-12 mt-4 m-auto text-center aos-init aos-animate" data-aos="fade-up" data-aos-duration="500">
      <a href="<?= m_path('about.us', [], true) ?>#team" class="btn btn-danger btn-lg px-4">
        <i class="fas fa-users me-2"></i> En savoir plus
      </a>
    </div>

    <!-- Shapes décoratifs -->
    <div class="shape-group">
      <i class="fas fa-user-tie shape shape-1"></i> <!-- expert -->
      <i class="fas fa-user-friends shape shape-2"></i> <!-- équipe -->
      <i class="fas fa-headset shape shape-3"></i> <!-- à l'écoute -->
      <i class="fas fa-briefcase shape shape-4"></i> <!-- professionnalisme -->
    </div>
  </div>
  <!--=====team end=======-->

  <!--=====testimonial start=======-->

  <div class="testimonial4 sp3 _relative" style="background-color: #181A1C;">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 m-auto text-center">
          <div class="hadding4-w">
            <span class="font-f-2" data-aos="fade-up" data-aos-duration="500">Temoignages</span>
            <div class="space16"></div>
            <h1 class="font-f-4" data-aos="fade-up" data-aos-duration="1100">Ils sont satisfaits de nos services</h1>
          </div>
        </div>
      </div>
      <div class="space60"></div>
      <div class="row">
        <div class="tes4-slider owl-carousel" data-aos="fade-up" data-aos-duration="800">



          <!-- Témoignage 1 -->
          <div class="tes4-slider-single">
            <div class="tes4-icon">
              <img src="<?= asset('img/icons/tes4-commnet.svg') ?>" style="<?= $filter ?>" alt="">
            </div>
            <div class="space30"></div>
            <div class="tes4-hadding">
              <p class="font-f-2">" Je recommande vivement Destination Canada pour son dynamisme et son accompagnement dans le processus du programme d'immigration de chacun. Leur clairvoyance et assurance m'a convaincu après investigation et j'ai fait confiance en eux comme beaucoup le font. Merci à l'équipe."</p>
            </div>
            <div class="space30"></div>
            <div class="tes4-bottom-hadding">
              <div class="tes4-bottom-img img50" style="width: 60px; height: 60px; padding: 10px; background-color: #ec4e4f">
                <img src="<?= asset('img/image/user.png') ?>" alt="Satisfait par Destination Canada" loading="lazy">
              </div>
              <div class="tes4-hadding-bottom">
                <h6><a href="#" class="font-f-4">Florentin Zogblandan</a></h6>
                <div class="space8"></div>
                <p class="font-f-2">Bénin</p>
              </div>
            </div>
          </div>

          <div class="tes4-slider-single">
            <div class="tes4-icon">
              <img src="<?= asset('img/icons/tes4-commnet.svg') ?>" style="<?= $filter ?>" alt="">
            </div>
            <div class="space30"></div>
            <div class="tes4-hadding">
              <p class="font-f-2">"Peu importe le projet d'immigration que vous avez en tête, le meilleur choix ou la meilleure option c'est Destination Canada."</p>
            </div>
            <div class="space30"></div>
            <div class="tes4-bottom-hadding">
              <div class="tes4-bottom-img img50" style="width: 60px; height: 60px; padding: 10px; background-color: #ec4e4f">
                <img src="<?= asset('img/image/user.png') ?>" alt="Satisfait par Destination Canada" loading="lazy">
              </div>
              <div class="tes4-hadding-bottom">
                <h6><a href="#" class="font-f-4">Arif AHMAD</a></h6>
                <div class="space8"></div>
                <p class="font-f-2">Bénin</p>
              </div>
            </div>
          </div>


          <!-- Témoignage 2 -->
          <div class="tes4-slider-single">
            <div class="tes4-icon">
              <img src="<?= asset('img/icons/tes4-commnet.svg') ?>" style="<?= $filter ?>" alt="">
            </div>
            <div class="space30"></div>
            <div class="tes4-hadding">
              <p class="font-f-2">"Mon premier contact avec ma conseillère a été vraiment chaleureux surtout l'accueil. Je vous recommande de faire recours à Destination Canada parce qu'ici les services sont vraiment les meilleurs. Je ne pense pas que j'aurais pu obtenir ma résidence permanente si peut-être j'avais confié mon projet à d'autres cabinets"</p>
            </div>
            <div class="space30"></div>
            <div class="tes4-bottom-hadding">
              <div class="tes4-bottom-img img50" style="width: 60px; height: 60px; padding: 10px; background-color: #ec4e4f">
                <img src="<?= asset('img/image/user.png') ?>" alt="Satisfait par Destination Canada" loading="lazy">
              </div>
              <div class="tes4-hadding-bottom">
                <h6><a href="#" class="font-f-4">Sedjro J. KOUATONOU</a></h6>
                <div class="space8"></div>
                <p class="font-f-2">Bénin</p>
              </div>
            </div>
          </div>

          <!-- Témoignage 3 -->
          <div class="tes4-slider-single">
            <div class="tes4-icon">
              <img src="<?= asset('img/icons/tes4-commnet.svg') ?>" style="<?= $filter ?>" alt="">
            </div>
            <div class="space30"></div>
            <div class="tes4-hadding">
              <p class="font-f-2">"J'ai connu Destination Canada par le biais de mon beau-frère par rapport à leur fiabilité et professionnalisme. Mon dossier a été traité dans de brefs délais. Je suis très contente d'avoir travaillé avec Destination Canada et j'invite massivement les désireux à faire comme moi."</p>
            </div>
            <div class="space30"></div>
            <div class="tes4-bottom-hadding">
              <div class="tes4-bottom-img img50" style="width: 60px; height: 60px; padding: 10px; background-color: #ec4e4f">
                <img src="<?= asset('img/image/user.png') ?>" alt="Satisfait par Destination Canada" loading="lazy">
              </div>
              <div class="tes4-hadding-bottom">
                <h6><a href="#" class="font-f-4">Damigou GBENGBERTANE </a></h6>
                <div class="space8"></div>
                <p class="font-f-2">Togo</p>
              </div>
            </div>
          </div>

          <div class="tes4-slider-single">
            <div class="tes4-icon">
              <img src="<?= asset('img/icons/tes4-commnet.svg') ?>" style="<?= $filter ?>" alt="">
            </div>
            <div class="space30"></div>
            <div class="tes4-hadding">
              <p class="font-f-2">"Nous avons choisi Destination Canada, qui nous a accompagnés dans le sens de l'accueil, de l'écoute et surtout la disponibilité à travers une communication très fluide. Même si l'obtention du VISA ne dépend pas d'eux, nous vous recommandons Destination Canada afin de maximiser vos chances à 98%"</p>
            </div>
            <div class="space30"></div>
            <div class="tes4-bottom-hadding">
              <div class="tes4-bottom-img img50" style="width: 60px; height: 60px; padding: 10px; background-color: #ec4e4f">
                <img src="<?= asset('img/image/user.png') ?>" alt="Satisfait par Destination Canada" loading="lazy">
              </div>
              <div class="tes4-hadding-bottom">
                <h6><a href="#" class="font-f-4">Couple AKLIKOKOU </a></h6>
                <div class="space8"></div>
                <p class="font-f-2">Togo</p>
              </div>
            </div>
          </div>


          <!-- Témoignage 4 -->
          <div class="tes4-slider-single">
            <div class="tes4-icon">
              <img src="<?= asset('img/icons/tes4-commnet.svg') ?>" style="<?= $filter ?>" alt="">
            </div>
            <div class="space30"></div>
            <div class="tes4-hadding">
              <p class="font-f-2">"J'ai eu l'idée d'immigrer au Canada que j'ai confiée à Destination Canada et aujourd'hui je peux dire que je suis très heureux de travailler avec eux. Éa a été un parcours un peu plus long que prévu, mais aujourd'hui j'ai obtenu mon VISA. Je recommande Destination Canada parce que, de toutes les agences que j'ai eu à rencontrer, c'est la meilleure !"</p>
            </div>
            <div class="space30"></div>
            <div class="tes4-bottom-hadding">
              <div class="tes4-bottom-img img50" style="width: 60px; height: 60px; padding: 10px; background-color: #ec4e4f">
                <img src="<?= asset('img/image/user.png') ?>" alt="Satisfait par Destination Canada" loading="lazy">
              </div>
              <div class="tes4-hadding-bottom">
                <h6><a href="#" class="font-f-4">Kossi Megbenyo BOSSOU</a></h6>
                <div class="space8"></div>
                <p class="font-f-2">Togo</p>
              </div>
            </div>
          </div>

          <!-- Témoignage 5 -->
          <div class="tes4-slider-single">
            <div class="tes4-icon">
              <img src="<?= asset('img/icons/tes4-commnet.svg') ?>" style="<?= $filter ?>" alt="">
            </div>
            <div class="space30"></div>
            <div class="tes4-hadding">
              <p class="font-f-2">"J'ai beaucoup apprécié le travail, surtout l'encouragement et les messages de la cheffe d'agence qui ne cessait de m'informer de l'évolution de mon dossier et aussi des démarches à suivre pour la suite. J'invite tout le monde à passer par cette agence là parce que j'ai beaucoup apprécié l'accompagnement et aujourd'hui je suis très contente."</p>
            </div>
            <div class="space30"></div>
            <div class="tes4-bottom-hadding">
              <div class="tes4-bottom-img img50" style="width: 60px; height: 60px; padding: 10px; background-color: #ec4e4f">
                <img src="<?= asset('img/image/user.png') ?>" alt="Satisfait par Destination Canada" loading="lazy">
              </div>
              <div class="tes4-hadding-bottom">
                <h6><a href="#" class="font-f-4">Akouvi Armande GBOGBO</a></h6>
                <div class="space8"></div>
                <p class="font-f-2">Togo</p>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
    <img class="tes4-shape1 aniamtion-key-2" src="<?= asset('img/shapes/tes4-shape1.svg') ?>" alt="">
    <img class="tes4-shape2 aniamtion-key-2" src="<?= asset('img/shapes/tes4-shape2.svg') ?>" alt="">
    <img class="tes4-shape3" src="<?= asset('img/shapes/tes4-shape4.svg') ?>" alt="">
  </div>

  <!--=====testimonial end=======-->

  <!--=====Galeries start=======-->

  <div class="countrie3 sp3 _relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 m-auto text-center">
          <div class="hadding4">
            <span class="font-f-2 span" data-aos="fade-up" data-aos-duration="500">
              <?= $translations[$lang]['section_gallery_title'] ?>
            </span>
            <div class="space16"></div>
            <h1 class="font-f-4" data-aos="fade-up" data-aos-duration="600">
              <?= $translations[$lang]['section_gallery_subtitle'] ?>
            </h1>
          </div>
        </div>

        <?php if (!empty($allGallery)) : ?>
          <?php
          $imagesPerRow = 2;
          foreach ($allGallery as $key => $media):
            $title = $media['event_title'];
            $url = asset($media['url']);
            $isVideo = !empty($media['is_video']) && $media['is_video'] == 1;
            $youtubeId = !empty($media['youtube_id']) ? $media['youtube_id'] : null;

            $lineNumber = floor($key / $imagesPerRow);
            $lineIsEven = ($lineNumber % 2 === 0);
            $positionInLine = $key % $imagesPerRow;
            $isEvenPosition = ($positionInLine === 0);

            if ($lineIsEven) {
              $colClass = $isEvenPosition ? 'col-lg-8 col-md-12' : 'col-lg-4 col-md-6';
              $aosDelay = $isEvenPosition ? '700' : '900';
            } else {
              $colClass = $isEvenPosition ? 'col-lg-4 col-md-6' : 'col-lg-8 col-md-12';
              $aosDelay = $isEvenPosition ? '900' : '700';
            }
          ?>
            <div class="<?= $colClass ?>">
              <div class="countrie3-box" data-aos="fade-up" data-aos-duration="<?= $aosDelay ?>">
                <div class="countrie3-img img100 img5">

                  <?php if (!$isVideo): ?>
                    <!-- IMAGE -->
                    <a href="<?= $url ?>" data-fancybox="gallery2" data-caption="<?= $title ?>">
                      <img src="<?= $url ?>" alt="<?= $title ?>" loading="lazy">
                    </a>

                  <?php elseif ($youtubeId):  $url = "https://www.youtube.com/watch?v=" . $youtubeId; ?>

                    <!-- VIDEO YOUTUBE -->
                    <?php $youtubeUrl = "https://www.youtube.com/watch?v=" . $youtubeId; ?>
                    <a data-fancybox="gallery2" href="<?= $youtubeUrl ?>" data-caption="<?= $title ?>" class="video-thumbnail">
                      <img src="https://img.youtube.com/vi/<?= $youtubeId ?>/hqdefault.jpg" alt="<?= $title ?>" loading="lazy">
                      <span class="video-play-icon"><i class="fa-solid fa-play"></i></span>
                    </a>

                  <?php else: ?>
                    <!-- VIDEO HTML5 -->
                    <a ddata-fancybox="gallery2" data-caption="<?= $title ?>" href="<?= $url ?>" class="video-thumbnail">
                      <video style="width:100%;">
                        <source src="<?= $url ?>" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture vidéo.
                      </video>
                      <span class="video-play-icon"><i class="fa-solid fa-play"></i></span>
                    </a>
                  <?php endif; ?>

                </div>
                <div class="countrie3-hadding">
                  <div class="space16"></div>
                  <div class="space16"></div>
                  <h2 class="text-white">
                    <?= $title ?>
                  </h2>
                  <div class="space16"></div>
                  <div class="space16"></div>

                  <a href="<?= $url ?>" data-fancybox="gallery" class="w-learn-more font-f-2">
                    <?php if ($isVideo) : ?>
                      Lire <span><i class="fa-solid fa-play"></i> </span>
                    <?php else : ?>
                      Voir <span><i class="fa-solid fa-arrow-right"></i></span>
                    <?php endif; ?>
                  </a>

                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <div class="col-lg-12 mt-4 m-auto text-center aos-init aos-animate" data-aos="fade-up" data-aos-duration="500">
            <a href="<?= m_path('gallery', [], true) ?>" class="theme-btn9 font-f-4">Voir Plus</a>
          </div>

        <?php else: ?>
          <div class="col-12 text-center mt-5">
            <p>Aucune image ou vidéo disponible pour le moment.</p>
          </div>
        <?php endif; ?>

      </div>

    </div>
  </div>

  <!--=====galerie end=======-->


  <!--=====blog start=======-->

  <div class="blog2 sp3" id="blog" style="background-color: #F6F6F6;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 m-auto text-center">
          <div class="hadding5">
            <span class="span" data-aos="fade-up" data-aos-duration="500">Nos actualités</span>
            <div class="space16"></div>
            <h1 data-aos="fade-up" data-aos-duration="1000">Découvrez les récentes actualités sur l'immigration au Canada</h1>
          </div>
        </div>
      </div>
      <div class="space30"></div>
      <div class="row align-items-stretch">
        <?php if (!empty($recentBlogs)) : ?>
          <div class="col-lg-6 d-flex">
            <?php $mainBlog = $recentBlogs[0]; ?>
            <div class="blog2-main-image w-100" data-aos="fade-up" data-aos-duration="500" style="min-height: 420px;">
              <div class="blog2-img1 img100 img5" style="height : 100%!important; overflow: hidden;">
                <img src="<?= asset($mainBlog['image_url']) ?>"
                  alt="<?= ($mainBlog['title']) ?>"
                  style="width: 100%; height: 100%; object-fit: cover;">

              </div>
              <div class="blog2-main-hover">
                <h4><a href="<?= m_path('blog.detail', ['slug' => $mainBlog['slug']]) ?>"><?= ($mainBlog['title']) ?></a></h4>
                <div class="space16"></div>
                <p><?= excerpt($mainBlog['excerpt'] ?? $mainBlog['content'], 25) ?></p>
                <div class="space16"></div>
                <a class="blog-learn" href="<?= m_path('blog.detail', ['slug' => $mainBlog['slug']]) ?>">Lire plus <span><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-between">
            <div class="blog2-side-img-all w-100">
              <?php foreach (array_slice($recentBlogs, 1, 2) as $index => $blog) : ?>
                <div class="blog-single-side-img mb-4" data-aos="fade-up" data-aos-duration="<?= 1000 + ($index * 200) ?>">
                  <div class="img5 blog2-img2 blog5-img2" style="height: 100%; width:100% !important; overflow: hidden;">
                    <img src="<?= asset($blog['image_url']) ?>"
                      alt="<?= ($blog['title']) ?>"

                      style="height: 100%; object-fit: cover;">
                  </div>
                  <div class="hadding2" style="width: 228px;">
                    <h3 style="">
                      <a href="<?= m_path('blog.detail', ['slug' => $blog['slug']], true) ?>">
                        <?= mb_strimwidth($blog['title'], 0, 150, '...') ?>
                      </a>
                    </h3>
                    <div class="space8"></div>
                    <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                      <?= mb_strimwidth(strip_tags($blog['excerpt'] ?? $blog['content']), 0, 100, '...') ?>
                    </p>
                    <div class="space16"></div>
                    <a class="learn-more2" href="<?= m_path('blog.detail', ['slug' => $blog['slug']], true) ?>">Lire plus <span><i class="fa-solid fa-arrow-right"></i></span></a>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>


          <div class="col-lg-12 mt-4 m-auto text-center" data-aos="fade-up" data-aos-duration="500">
            <a href="<?= m_path('blog', [], true) ?>" class="theme-btn9 font-f-4">Voir Plus</a>
          </div>
        <?php else : ?>
          <div class="col-12 text-center">
            <p>Aucun article disponible pour le moment.</p>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>



  <!--=====blog end=======-->

  <!--=====cta start=======-->

  <?php include view('layout/cta'); ?>
  <!--=====cta end=======-->

  <!--=====Footer start=======-->
  <?php include view('layout/footer'); ?>
  <!--=====Footer end=======-->



  <!--=====JS=======-->
  <?php include view('layout/js'); ?>

  <script>
    document.querySelectorAll('.btn-puzzle').forEach(button => {
      button.addEventListener('click', () => {
        document.querySelectorAll('.btn-puzzle').forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
  <script>
    Fancybox.bind('[data-fancybox="gallery"]', {
      Toolbar: {
        display: [
          "close",
          "fullscreen",
          "zoom",
          "download",
          "thumbs",
        ],
      },
      fullscreen: {
        autoStart: true,
      },
    });
  </script>

  <script>
    const videoSection = document.getElementById('videoSection');
    const video = document.getElementById('promoVideo');
    const playBtn = document.getElementById('playBtn');

    // Sections à atténuer autour si tu veux
    const before = document.querySelector('.section-before');
    const after = document.querySelector('.section-after');

    playBtn.addEventListener('click', () => {
      video.play();
      playBtn.style.display = 'none';
    });

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          videoSection.classList.add('zoom');
          before?.classList.add('dimmed');
          after?.classList.add('dimmed');
        } else {
          videoSection.classList.remove('zoom');
          before?.classList.remove('dimmed');
          after?.classList.remove('dimmed');
          video.pause();
          video.currentTime = 0;
          playBtn.style.display = 'block';
        }
      });
    }, {
      threshold: 0.6
    });

    observer.observe(videoSection);
  </script>

  <script>
    const sectionYT = document.getElementById('ytVideoSection');
    const iframeYT = document.getElementById('ytPlayer');
    const btnLectureYT = document.getElementById('ytPlayBtn');

    // Sections avant et après à assombrir
    const sectionAvant = document.querySelector('.section-before');
    const sectionApres = document.querySelector('.section-after');

    btnLectureYT.addEventListener('click', () => {
      let urlActuelle = iframeYT.src;
      if (!urlActuelle.includes('autoplay=1')) {
        iframeYT.src = urlActuelle + (urlActuelle.includes('?') ? '&' : '?') + 'autoplay=1';
      }
      btnLectureYT.style.display = 'none';
    });

    const observateurYT = new IntersectionObserver(entries => {
      entries.forEach(entree => {
        if (entree.isIntersecting) {
          sectionYT.classList.add('zoom');
          sectionAvant?.classList.add('dimmed');
          sectionApres?.classList.add('dimmed');
        } else {
          sectionYT.classList.remove('zoom');
          sectionAvant?.classList.remove('dimmed');
          sectionApres?.classList.remove('dimmed');

          // Remettre autoplay à 0 et réafficher le bouton
          iframeYT.src = iframeYT.src.replace('&autoplay=1', '').replace('?autoplay=1', '');
          btnLectureYT.style.display = 'block';
        }
      });
    }, {
      threshold: 0.6
    });

    observateurYT.observe(sectionYT);
  </script>


</body>

</html>
