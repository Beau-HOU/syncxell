<div class="mobile-sidebar d-block d-lg-none">
  <div class="menu-close-logo">
    <a href="<?= getProjetUrl() ?>"><img src="<?= asset('img/logo/logo2.png') ?>" style="width: 100px;" alt="Agence d'immigration au Canada"></a>
  </div>
  <div class="menu-close">
    <i class="fa-solid fa-xmark"></i>
  </div>
  <div class="mobile-nav">

    <li class="has-dropdown has-dropdown1"><a href="<?= m_path('service', ['slug' => $pourquoi_canaSlug], true) ?>" class="<?= ($activePage == 'pourquoi7') ? 'active' : '' ?> ">Pourquoi le Canada ? </a></li>

    <li class="has-dropdown has-dropdown1"><a href="<?= m_path('service', ['slug' => $immigrerSlug], true) ?>" class="<?= ($activePage == 'immigrer4') ? 'active' : '' ?> ">Immigrer </a>

    </li>

    <li class="has-dropdown has-dropdown1"><a href="<?= m_path('service', ['slug' =>  $etudierSlug], true) ?>" class="<?= ($activePage == 'etudier4') ? 'active' : '' ?> ">Étudier </a>

    </li>

    <li class="has-dropdown has-dropdown1"><a href="<?= m_path('service', ['slug' =>  $travaillerSlug], true) ?>" class="<?= ($activePage == 'travailler4') ? 'active' : '' ?> ">Travailler </a>

    </li>


    <li><a href="<?= m_path('blog', [], true) ?>" class="<?= ($activePage == 'blog4') ? 'active' : '' ?> ">Blog et actualités</a></li>
    <li><a href="<?= m_path('contact', [], true) ?>" class="<?= ($activePage == 'contact') ? 'active' : '' ?> ">Contact</a></li>
    <li><a href="<?= m_path('about.us', [], true) ?>" class="<?= ($activePage == 'about4') ? 'active' : '' ?> ">A propos</a></li>
    <li><a href="<?= m_path('rdv', [], true) ?>" class="<?= ($activePage == 'rdv4') ? 'active' : '' ?> ">Prenez un rdv</a></li>

    <li><a href="<?= m_path('evaluation.profile', [], true) ?>" class="<?= ($activePage == 'evaluation-profile') ? 'active' : '' ?> ">Évaluer mon profil</a></li>

    <li><a  href="<?= m_path('cv.links', [], true) ?>" target="__blank" class="mobile-menu-button" download>
        Créer un CV canadien
      </a></li>



  </div>

  <div class="mobile-menu-social">
    <h3>Contact Info</h3>
    <div class="footer4-contact-info">
      <div class="mobile-menu-icon-box">
        <div class="mobile-menu-icon">
          <img src="assets/img/icons/mobile-menu-icon1.svg" alt="">
        </div>
        <div class="mobile-menu-a">
          <a href="tel:+229 96 74 77 10 / 24">(+229) 96 74 77 10 / 24</a>
        </div>
      </div>

      <div class="mobile-menu-icon-box">
        <div class="mobile-menu-icon">
          <img src="assets/img/icons/mobile-menu-icon2.svg" alt="">
        </div>
        <div class="mobile-menu-a">
          <a href="mailto:info@destinations-canada.com">info@destinations-canada.com</a>
        </div>
      </div>

      <div class="mobile-menu-social">
        <h3>Our Location</h3>

        <div class="mobile-menu-icon-box">
          <div class="mobile-menu-icon">
            <img src="assets/img/icons/mobile-menu-icon3.svg" alt="">
          </div>
          <div class="mobile-menu-a">
            <a href="#"> Bénin, Togo, Gabon <br> </a>
          </div>
        </div>

      </div>

      <div class="mobile-menu-social">
        <h3>Reseaux Sociaux</h3>

        <div class="mobile-menu-social-icon">
          <ul>
            <li>
              <a data-bs-toggle="tooltip" title="Linkedin Destination Canada" target="__blank" href="https://www.linkedin.com/company/destination-canada-officiel"><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li>
              <a data-bs-toggle="tooltip" title="Facebook Destination Canada" target="__blank" href="https://www.facebook.com/destinationscanada/?_rdc=1&_rdr#"><i class="fa-brands fa-linkedin-in"></i></a>
            </li>
            <li>
              <a data-bs-toggle="tooltip" title="Instagram Destination Canada" target="__blank" href="https://www.instagram.com/d.e.s.t.i.n.a.t.i.o.n_canada/ "><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li>
              <a data-bs-toggle="tooltip" title="Tiktok Destination Canada" target="__blank" href="https://www.tiktok.com/@destinationcanada01"><i class="fa-brands fa-tiktok"></i></a>
            </li>
          </ul>
        </div>

      </div>

    </div>

  </div>
</div>
