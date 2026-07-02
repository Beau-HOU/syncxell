<style>
  .about-title {
    color: #ec4e4f !important;
    font-size: 18px !important;
    font-style: normal !important;
    font-weight: 700 !important;
    line-height: 18px !important;
    text-transform: uppercase !important;
    display: inline-block !important;
  }

  .theme-btn23.active {
    background-color: #ec4e4f !important;
    color: white !important;
    position: relative !important;
  }
</style>

<style>
  * {
    box-sizing: border-box;
  }

  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f5f5f5;
  }

  /* ---------- TOP HEADER ---------- */
  .top-header {
    background-color: #f5f5f5;
    color: #ec4e4f;
    padding: 0 1rem;
    /* enlève le padding vertical */
    font-size: 0.9rem;
  }


  .top-header.hidden {
    transform: translateY(-100%);
  }

  .top-header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    /* important pour centrer le logo verticalement */
    flex-wrap: wrap;
  }


  .top-header .contact-info {
    color: #7e7d7d;
    /* noir */
    font-size: calc(12px + 3px);
    /* taille augmentée */
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 5px;
  }

  .top-header .contact-info .separator {

    font-weight: bold;
  }

  .logo {
    height: 40px;
  }



  .contact-info span {
    margin-right: 10px;
    display: inline-block;
  }

  .contact-info i {
    margin-right: 5px;
  }

  .top-logo img {
    /*height: 60px;*/
    width: 100Px !important;
    height: auto !important;
    margin: 20px;
    /* ou auto si tu veux 100% naturel */
    display: block;
  }


  /* ---------- MENU PRINCIPAL (DESKTOP) ---------- */

  .header {
    background-color: #fff;
    color: #ec4e4f;
    position: relative;
    /* position normale au début */
    z-index: 999;
    transition: top 0.3s ease;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
  }

  .header.fixed {
    position: fixed;
    /* position devient fixe au scroll */
    top: 0;
    left: 0;
    right: 0;
  }

  .menu-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    /* ou la largeur désirée */
    margin: 0 auto;
    padding: 10px 40px;
  }


  .menu {
    display: flex;
    gap: 25px;
  }

  .menu-item {
    padding: 10px;
    cursor: pointer;
    color: #000000;
    font-weight: bold;
    transition: color 0.2s;
  }

  .menu-item:hover {
    background-color: #ec4e4f;
    color: #fff !important;
    text-decoration: none;
    /* retire le soulignement */
  }

  .menu-item.active {
    background-color: #ec4e4f;
    color: #fff !important;
    text-decoration: none;
    /* retire le soulignement */
  }

  .menu-item:hover span {
    color: #fff;
  }

  .cv-button {
    background-color: #ec4e4f;
    color: #ffffff;
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.2s;
  }

  .cv-button:hover {
    background-color: #990000;
    color: white;
  }

  @media screen and (max-width: 768px) {

    .menu-container,
    .dropdown-box {
      display: none;
    }

    .nav-mobile-header {
      display: flex;
    }
  }

  @media screen and (max-width: 768px) {

    .menu-container,
    .dropdown-box {
      display: none;
    }

    .mobile-header {
      display: flex;
    }
  }



  /* ---------- SOUS-MENU MOBILE ---------- */

  body {
    margin: 0;
    font-family: Arial, sans-serif;
  }

  /* Bouton hamburger */
  .cd-menu-toggle {
    font-size: 26px;
    cursor: pointer;
    padding: 15px;
    position: fixed;
    top: 30px;
    right: 10px;
    z-index: 1001;
    background: none;
    border: none;
  }

  .cd-menu-toggle.hidden {
    display: none;
  }

  .cd-close-btn.hidden {
    display: none;
  }

  @media (min-width: 769px) {
    .cd-menu-toggle {
      display: none;
    }

    .cd-mobile-topbar {
      display: none;
    }
  }

  .cd-mobile-topbar-logo img {
    /*height: 40px;
      */
    width: 100px !important;
    height: auto !important;
  }

  @media screen and (max-width: 768px) {

    /* Topbar fixe */
    .cd-mobile-topbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100px;
      background-color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 15px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      z-index: 1002;
    }

    .cd-mobile-topbar-logo img {
      height: 40px;
    }

    .cd-mobile-search,
    .cd-menu-toggle {
      font-size: 22px;
      background: none;
      border: none;
      color: #000;
    }

    /* Décale le menu mobile vers le bas pour ne pas être caché par la topbar */
    .cd-mobile-menu {
      padding-top: 60px;
    }
  }


  /* Menu mobile */
  .cd-mobile-menu {
    width: 100%;
    max-width: 360px;
    height: 100vh;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    padding: 20px;
    box-shadow: -2px 0 8px rgba(0, 0, 0, 0.2);
    position: fixed;
    top: 0;
    right: 0;
    z-index: 1000;
    transform: translateX(100%);
    transition: transform 0.3s ease;
  }

  .cd-mobile-menu.cd-active {
    transform: translateX(0);
  }

  .cd-mobile-menu-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .cd-mobile-logo {
    height: 40px;
  }

  .cd-close-btn {
    font-size: 24px;
    background: none;
    border: none;
    cursor: pointer;
  }

  .cd-mobile-menu-list {
    list-style: none;
    padding: 0;
    margin-top: 60px;
    flex-grow: 1;
  }

  .cd-mobile-menu-list li {
    border-bottom: 1px solid #eee;
    padding: 10px 0;
  }

  .cd-mobile-menu-list a,
  .cd-submenu-toggle {
    text-decoration: none;
    color: #000;
    font-weight: bold;
    display: flex;
    justify-content: space-between;
    width: 100%;
    background: none;
    border: none;
    font-size: 16px;
    cursor: pointer;
    transition: color 0.3s;
  }

  .cd-mobile-menu-list a:hover,
  .cd-submenu-toggle:hover {
    color: #990000;
  }

  .cd-submenu {
    display: none;
    list-style: none;
    padding-left: 15px;
    margin-top: 10px;
  }

  .cd-submenu li {
    padding: 6px 0;
  }

  .cd-submenu li a {
    font-weight: normal;
    color: #444;
  }

  .cd-submenu li a:hover {
    color: #990000;
  }

  .cd-download-btn {
    background-color: #990000;
    color: #fff;
    text-align: center;
    padding: 12px 16px;
    border-radius: 5px;
    margin-top: 20px;
    font-weight: bold;
    text-decoration: none;
    display: block;
    transition: background-color 0.3s;
  }

  .cd-download-btn:hover {
    background-color: #b30000;
  }

  .cd-menu-footer {
    text-align: center;
    font-size: 13px;
    color: #666;
    padding-top: 20px;
    border-top: 1px solid #eee;
  }

  /* ---------- SOUS-MENU DESKTOP ---------- */


  .dropdown-box {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.92);
    border-top: 3px solid #ec4e4f;
    box-shadow: 2 4px 8px rgba(0, 0, 0, 0.2);
    padding: 30px 60px;
    z-index: 100;
    color: rgb(255, 255, 255);
    justify-content: space-between;
    min-height: 400px;
  }


  .dropdown-box.active {
    display: flex;
  }

  .submenu {
    flex: 1;
    max-width: 300px;
  }

  .submenu h4 {
    margin-top: 0;
    color: #ec4e4f;
  }

  /* Style du dropdown box */
  .dropdown-box {
    position: relative;
    padding-bottom: 10px;
    /* Ajout de la marge de 10px sous le contenu */
  }

  /* Pour ajuster la hauteur du dropdown box en fonction du contenu */
  .dropdown-box .submenu {
    margin-bottom: 10px;
    /* Marge sous le dernier élément */
  }

  /* Ajoute un peu de padding au contenu, pour ne pas que ça touche les bords */
  .dropdown-box .submenu ul {
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .dropdown-box .submenu ul li {
    margin: 5px 0;
    /* Espacement entre les éléments de la liste */
  }

  .submenu ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .submenu ul li,
  .submenu ul li a {
    padding: 6px 0;
    cursor: pointer;
    color: #1f1f1f;
  }

  .submenu ul li:hover,
  .submenu ul li a:hover {
    text-decoration: none;
    color: #ff6666 !important;
  }

  .content-preview {
    flex: 2;
    padding-left: 40px;
    border-left: 1px solid #ec4e4f;
  }

  .content-preview h4 {
    margin-top: 0;
    color: #ec4e4f;
  }

  .menu-item span {
    color: #141414;
  }



  @media screen and (max-width: 768px) {

    .menu-container,
    .dropdown-box {
      display: none;
    }

    .mobile-header {
      display: flex;
    }
  }

  @media (max-width: 768px) {
    .top-header {
      display: none;
    }
  }

  .dropdown-box .owl-carousel .owl-nav {
    position: absolute;
    bottom: -55px;
    /* ajuster la hauteur selon ton besoin */
    left: 0;
    display: flex;
    gap: 10px;
    justify-content: flex-start;
    /* aligne les chevrons à gauche */
    padding-left: 15px;
    /* espace sur la gauche */
  }

  .dropdown-box .owl-carousel .owl-nav span {
    background-color: rgb(146, 7, 7);
    /* couleur de fond */
    color: rgb(250, 250, 250);
    /* couleur du texte */
    width: 40px;
    /* largeur du carré */
    height: 40px;
    /* hauteur du carré */
    display: flex;
    justify-content: center;
    /* centrer le texte horizontalement */
    align-items: center;
    /* centrer le texte verticalement */
    border-radius: 5px;
    /* coins légèrement arrondis */
    font-size: 22px;
    /* taille de la flèche */
    cursor: pointer;
    transition: background 0.3s;
  }

  .dropdown-box .owl-carousel .owl-nav span:hover {
    background-color: #d32f2f;
    /* couleur de fond au survol */
  }




  .article-carousel .article-card {
    width: 100% !important;
    /* empêche le redimensionnement */

    max-width: 100%;
    height: 300px;
    flex: 0 0 auto;
  }

  .article-carousel .article-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
    display: block;
  }

  .title-overlay {
    position: absolute;
    top: 10px;
    left: 10px;
    background-color: #d32f2f;
    color: #fff;
    padding: 5px 10px;
    font-size: 14px;
    font-weight: bold;
    border-radius: 5px;
    max-width: 80%;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }

  .bottom-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 10px;
    background: linear-gradient(to top, rgba(207, 19, 19, 0.74), rgba(184, 9, 9, 0.185));

    border-radius: 0 0 10px 10px;
  }

  .bottom-overlay p {
    color: #ffffff !important;
    font-size: 13px;
    font-weight: bold;
    line-height: 15px;
  }
</style>
<!--=====HEADER START=======-->

<!-- TOP HEADER -->
<div class="top-header">
  <div class="container">
    <div class="top-logo">
      <a href="home.html"> <img src="assets/img/logo/logo-destination-canada.png" alt="Logo" /></a>
    </div>
    <div class="contact-info">
      <span><i class="fas fa-home"></i> Bénin, Togo, Nigéria</span>
      <span class="separator">|</span>
      <span><i class="fas fa-envelope"></i> contact@exemple.com</span>
      <span class="separator">|</span>
      <span><i class="fas fa-clock"></i> Lun - Ven : 08:00 à 18:30, Sam : 09:00 à 13:00
      </span>
    </div>
  </div>
</div>



<!-- MAIN HEADER -->
<div class="header">
  <!-- HEADER DESKTOP -->
  <div class="menu-container">
    <div class="menu">
      <div class="menu-item dropdown active" data-target="canada">Pourquoi le Canada ? </div>
      <div class="menu-item" data-target="immigrer">Immigrer <span class="fas fa-angle-down "></span>
      </div>
      <div class="menu-item" data-target="etudier">Etudier <span class="fas fa-angle-down "></span></div>
      <div class="menu-item" data-target="travailler">Travailler <span class="fas fa-angle-down "></span>
      </div>
      <div class="menu-item" data-target="sinstaller">S'installer <span class="fas fa-angle-down "></span>
      </div>
      <div class="menu-item" data-target="actus">Actualités <span class="fas fa-angle-down "></span></div>
    </div>
    <a href="#" class="theme-btn9"><span>Créer un CV canadien</span> </a>
  </div>

  <!-- HEADER MOBILE -->

  <!-- Bouton hamburger -->
  <div class="cd-mobile-topbar">
    <a href="home.html" class="cd-mobile-topbar-logo">
      <img src="assets/img/logo/logo-destination-canada.png" alt="Logo">
    </a>


    <!-- Le bouton hamburger déjà présent -->
    <button class="cd-menu-toggle" id="cdMenuToggle">&#9776;</button>
    <button class="cd-close-btn hidden" id="cdCloseBtn">&times;</button>
  </div>

  <!-- Menu mobile -->
  <div class="cd-mobile-menu" id="cdMobileMenu">
    <div class="cd-mobile-menu-header">
      <a href="home.html">
        <img src="assets/img/logo/logo-destination-canada.png" alt="Logo" class="cd-mobile-logo">
      </a>

    </div>

    <ul class="cd-mobile-menu-list">
      <li><a href="service-details.html">Pourquoi le Canada ?</a></li>

      <li>
        <button class="cd-submenu-toggle">Immigrer <span>&#9662;</span></button>
        <ul class="cd-submenu">
          <li><a href="#">Entrée Express</a></li>
          <li><a href="#">Programmes des candidats des provinces</a></li>
          <li><a href="#">Options pour immigrer au Canada</a></li>
          <li><a href="#">Parrainage</a></li>
          <li><a href="#">Immigration pour investisseur et entrepreneur</a></li>
          <li><a href="#">Immigration au Canada</a></li>
          <li><a href="#">Transition au statut de résident permanent</a></li>
          <li><a href="#">Citoyenneté canadienne</a></li>
        </ul>
      </li>

      <li>
        <button class="cd-submenu-toggle">Etudier <span>&#9662;</span></button>
        <ul class="cd-submenu">
          <li><a href="#">Avant de partir au Canada</a></li>
          <li><a href="#">En partant au Canada</a></li>
          <li><a href="#">Arrivée au Canada</a></li>
          <li><a href="#">Etudes au Canada</a></li>
          <li><a href="#">Universités au Canada</a></li>
        </ul>
      </li>

      <li>
        <button class="cd-submenu-toggle">Travailler <span>&#9662;</span></button>
        <ul class="cd-submenu">
          <li><a href="#">Travail au Canada – Faits</a></li>
          <li><a href="#">Options pour travailler au Canada</a></li>
          <li><a href="#">Emploi au Canada</a></li>
          <li><a href="#">Travailleurs et professionnels qualifiés</a></li>
          <li><a href="#">Programme des travailleurs autonomes</a></li>
          <li><a href="#">Travail sans permis de travail</a></li>
        </ul>
      </li>

      <li>
        <button class="cd-submenu-toggle">S'installer <span>&#9662;</span></button>
        <ul class="cd-submenu">
          <li><a href="#">Logement</a></li>
          <li><a href="#">Finances</a></li>
          <li><a href="#">Santé</a></li>
          <li><a href="#">Transport</a></li>
        </ul>
      </li>

      <li><a href="#actu">Actualités</a></li>
    </ul>

    <!-- Bouton téléchargement placé juste après le menu -->
    <a href="#" class="cd-download-btn" download>Télécharger un CV canadien</a>

    <!-- Footer -->
    <div class="cd-menu-footer">
      Copyright Â© 2025 Destination Canada
    </div>
  </div>

  <!-- BOITES DE SOUS-MENU -->
  <div class="dropdown-box" id="canada">
    <div class="content-preview">
      <h4>Articles relatifs</h4> <br>
      <div class="owl-carousel article-carousel">
        <a href="#article1.html" class="article-card">
          <img src="assets/img/news/news-1.jpg" alt="Article 1">
          <div class="title-overlay">Visa étudiant canadien</div>
          <div class="bottom-overlay">
            <p>Les étapes clés pour 2025</p>
          </div>
        </a>
        <a href="#article2.html" class="article-card">
          <img src="assets/img/news/news-2.jpg" alt="Article 2">
          <div class="title-overlay">Top universités au Canada</div>
          <div class="bottom-overlay">
            <p>Les meilleures options</p>
          </div>
        </a>
        <a href="#article3.html" class="article-card">
          <img src="assets/img/news/news-3.jpg" alt="Article 3">
          <div class="title-overlay">Logement étudiant</div>
          <div class="bottom-overlay">
            <p>Conseils pratiques</p>
          </div>
        </a>
        <a href="#article3.html" class="article-card">
          <img src="assets/img/news/news-7.jpg" alt="Article 3">
          <div class="title-overlay">Logement étudiant</div>
          <div class="bottom-overlay">
            <p>Conseils pratiques</p>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="dropdown-box" id="immigrer">
    <div class="submenu">
      <h4>Immigrer</h4>
      <ul>
        <li><a href="service-details.html">Entrée Express</a></li>
        <li><a href="service-details.html">Programmes des candidats des provinces</a></li>
        <li><a href="service-details.html">Options pour immigrer au Canada</a></li>
        <li><a href="service-details.html">Parrainage</a></li>
        <li><a href="service-details.html">Immigration pour investisseur et entrepreneur</a></li>
        <li><a href="service-details.html">Immigration au Canada</a></li>
        <li><a href="service-details.html">Transition au statut de résident permanent</a></li>
        <li><a href="service-details.html">Citoyenneté canadienne</a></li>
      </ul>
    </div>
    <div class="content-preview">
      <h4>Articles relatifs</h4>
      <div class="owl-carousel article-carousel">
        <a href="#article1.html" class="article-card">
          <img src="assets/img/news/news-1.jpg" alt="Article 1">
          <div class="title-overlay">Visa étudiant canadien</div>
          <div class="bottom-overlay">
            <p>Les étapes clés pour 2025</p>
          </div>
        </a>
        <a href="#article2.html" class="article-card">
          <img src="assets/img/news/news-2.jpg" alt="Article 2">
          <div class="title-overlay">Top universités au Canada</div>
          <div class="bottom-overlay">
            <p>Les meilleures options</p>
          </div>
        </a>
        <a href="#article3.html" class="article-card">
          <img src="assets/img/news/news-3.jpg" alt="Article 3">
          <div class="title-overlay">Logement étudiant</div>
          <div class="bottom-overlay">
            <p>Conseils pratiques</p>
          </div>
        </a>
        <a href="#article3.html" class="article-card">
          <img src="assets/img/news/news-7.jpg" alt="Article 3">
          <div class="title-overlay">Logement étudiant</div>
          <div class="bottom-overlay">
            <p>Conseils pratiques</p>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="dropdown-box" id="etudier">
    <div class="submenu">
      <h4>Etudier</h4>
      <ul>
        <li><a href="service-details.html">Avant de partir au Canada</a></a></li>
        <li><a href="service-details.html">En partant au Canada</a></a></li>
        <li><a href="service-details.html">Arrivée au Canada</a></a></li>
        <li><a href="service-details.html">Etudes au Canada</a></a></li>
        <li><a href="service-details.html">Universités au Canada</a></a></li>
      </ul>
    </div>

    <div class="content-preview">
      <h4>Articles qui pourraient vous intéresser</h4><br>

      <!-- Carousel -->
      <div class="owl-carousel article-carousel">
        <a href="#article1.html" class="article-card">
          <img src="assets/img/news/news-1.jpg" alt="Article 1">
          <div class="title-overlay">Visa étudiant canadien</div>
          <div class="bottom-overlay">
            <p>Les étapes clés pour 2025</p>
          </div>
        </a>
        <a href="#article2.html" class="article-card">
          <img src="assets/img/news/news-2.jpg" alt="Article 2">
          <div class="title-overlay">Top universités au Canada</div>
          <div class="bottom-overlay">
            <p>Les meilleures options</p>
          </div>
        </a>
        <a href="#article3.html" class="article-card">
          <img src="assets/img/news/news-3.jpg" alt="Article 3">
          <div class="title-overlay">Logement étudiant</div>
          <div class="bottom-overlay">
            <p>Conseils pratiques</p>
          </div>
        </a>
        <a href="#article3.html" class="article-card">
          <img src="assets/img/news/news-7.jpg" alt="Article 3">
          <div class="title-overlay">Logement étudiant</div>
          <div class="bottom-overlay">
            <p>Conseils pratiques</p>
          </div>
        </a>
      </div>
    </div>
  </div>


  <div class="dropdown-box" id="travailler">
    <div class="submenu">
      <h4>Travailler</h4>
      <ul>
        <li><a href="service-details.html">Travail au Canada – Faits</a></li>
        <li><a href="service-details.html">Options pour travailler au Canada</a></li>
        <li><a href="service-details.html">Emploi au Canada</a></li>
        <li><a href="service-details.html">Travailleurs et professionnels qualifiés</a></li>
        <li><a href="service-details.html">Programme des travailleurs autonomes</a></li>
        <li><a href="service-details.html">Travail sans permis de travail</a></li>
      </ul>
    </div>
    <div class="content-preview">
      <h4>Articles Relatifs</h4> <br>
      <!-- Carousel -->
      <div class="owl-carousel article-carousel">
        <a href="#article1.html" class="article-card">
          <img src="assets/img/news/news-1.jpg" alt="Article 1">
          <div class="title-overlay">Visa étudiant canadien</div>
          <div class="bottom-overlay">
            <p>Les étapes clés pour 2025</p>
          </div>
        </a>
        <a href="#article2.html" class="article-card">
          <img src="assets/img/news/news-2.jpg" alt="Article 2">
          <div class="title-overlay">Top universités au Canada</div>
          <div class="bottom-overlay">
            <p>Les meilleures options</p>
          </div>
        </a>
        <a href="#article3.html" class="article-card">
          <img src="assets/img/news/news-3.jpg" alt="Article 3">
          <div class="title-overlay">Logement étudiant</div>
          <div class="bottom-overlay">
            <p>Conseils pratiques</p>
          </div>
        </a>
        <a href="#article3.html" class="article-card">
          <img src="assets/img/news/news-7.jpg" alt="Article 3">
          <div class="title-overlay">Logement étudiant</div>
          <div class="bottom-overlay">
            <p>Conseils pratiques</p>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="dropdown-box" id="sinstaller">
    <div class="submenu">
      <h4>S'installer</h4>
      <ul>
        <li>Logement</li>
        <li>Finances</li>
        <li>Santé</li>
        <li>Transport</li>
      </ul>
    </div>
    <div class="content-preview">
      <h4>Articles Relatifs</h4> <br>
      <!-- Carousel -->
      <div class="owl-carousel article-carousel">
        <a href="#article1.html" class="article-card">
          <img src="assets/img/news/news-1.jpg" alt="Article 1">
          <div class="title-overlay">Visa étudiant canadien</div>
          <div class="bottom-overlay">
            <p>Les étapes clés pour 2025</p>
          </div>
        </a>
        <a href="#article2.html" class="article-card">
          <img src="assets/img/news/news-2.jpg" alt="Article 2">
          <div class="title-overlay">Top universités au Canada</div>
          <div class="bottom-overlay">
            <p>Les meilleures options</p>
          </div>
        </a>
        <a href="#article3.html" class="article-card">
          <img src="assets/img/news/news-3.jpg" alt="Article 3">
          <div class="title-overlay">Logement étudiant</div>
          <div class="bottom-overlay">
            <p>Conseils pratiques</p>
          </div>
        </a>
        <a href="#article3.html" class="article-card">
          <img src="assets/img/news/news-7.jpg" alt="Article 3">
          <div class="title-overlay">Logement étudiant</div>
          <div class="bottom-overlay">
            <p>Conseils pratiques</p>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="dropdown-box" id="actus">
    <div class="content-preview">
      <h4>Articles</h4> <br>
      <!-- Carousel -->
      <div class="owl-carousel article-carousel">
        <a href="#article1.html" class="article-card">
          <img src="assets/img/news/news-1.jpg" alt="Article 1">
          <div class="title-overlay">Visa étudiant canadien</div>
          <div class="bottom-overlay">
            <p>Les étapes clés pour 2025</p>
          </div>
        </a>
        <a href="#article2.html" class="article-card">
          <img src="assets/img/news/news-2.jpg" alt="Article 2">
          <div class="title-overlay">Top universités au Canada</div>
          <div class="bottom-overlay">
            <p>Les meilleures options</p>
          </div>
        </a>
        <a href="#article3.html" class="article-card">
          <img src="assets/img/news/news-3.jpg" alt="Article 3">
          <div class="title-overlay">Logement étudiant</div>
          <div class="bottom-overlay">
            <p>Conseils pratiques</p>
          </div>
        </a>
        <a href="#article3.html" class="article-card">
          <img src="assets/img/news/news-7.jpg" alt="Article 3">
          <div class="title-overlay">Logement étudiant</div>
          <div class="bottom-overlay">
            <p>Conseils pratiques</p>
          </div>
        </a>
      </div>
    </div>

  </div>
</div>
