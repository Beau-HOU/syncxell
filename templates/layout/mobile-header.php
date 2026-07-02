<div class="mobile-header mobile-header-4 d-block d-lg-none mb-4">

  <!--div class="site-bannerm" role="status" aria-live="polite" id="siteBanner_mobile">

    <div style="width: 100%; text-align: end;">
      <a href="#" class="text-danger close-alert" id="close_bannerm" style="margin-left: 10px;">
        <i class="fa-solid fa-close fs-5"></i>
      </a>
    </div>
    <span  class="site-banner__icon" aria-hidden="true">éY""</span>


    <span class="site-banner__text">
      Notre site est en pleine mise à jour pour mieux vous servir.
      Certaines erreurs peuvent apparaître temporairement. Merci pour votre patience et votre compréhension.

    </span>


  </div-->


  <style>
    /* Banner fixé en haut */
    .site-bannerm {

      width: 100%;

      padding: 0.75rem 1rem;
      font: 12px system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans";
      background: #fff7cc;
      border-bottom: 1px solid #f0e2a2;
      color: #5a4a00;
      text-align: center;
      box-sizing: border-box;
    }

    .site-banner__icon {
      margin-right: 0.5rem;
    }

    /* Header sticky qui se cale sous le banner */


    /* Mode sombre */
    @media (prefers-color-scheme: dark) {
      .site-bannerm {
        background: #3b3200;
        border-bottom-color: #5c5000;
        color: #ffe58a;
      }

      .site-header {
        background: #222;
        color: #eee;
      }
    }
  </style>

  <script>
    const bannerm = document.getElementById('siteBanner_mobile');
    const closeBtnm = document.getElementById('close_bannerm'); // éo. définir le bouton

    function updateBannerHeightm() {
      const heightm = bannerm.offsetHeight;
      document.documentElement.style.setProperty('--banner-height', heightm + 'px');
    }

    // Appel initial et sur redimensionnement
    updateBannerHeight();
    window.addEventListener('resize', updateBannerHeightm);

    closeBtnm.addEventListener("click", function() {
      bannerm.style.transition = "opacity 0.5s";
      bannerm.style.opacity = 0;
      setTimeout(() => bannerm.style.display = "none", 500);
    });
  </script>





  <div class="container-fluid">
    <div class="col-12">
      <div class="mobile-header-elements">
        <div class="mobile-logo">
          <a href="<?= getProjetUrl() ?>"><img src="<?= asset('img/logo/logo.png') ?>" style="width: 100px;" alt="Agence d'immigration au Canada"></a>
        </div>


        <div class="row">
          <?php if (isset($_SESSION['user']['email'])): ?>
            <div class="col-3 mx-4">
              <a href="<?= m_path('user.dashboard', [], true) ?>" class="rounded-circle d-flex avatar align-items-center justify-content-center fw-bold">
                <?= strtoupper(
                  mb_substr($_SESSION['user']['firstname'], 0, 1) .
                    mb_substr($_SESSION['user']['name'], 0, 1)
                ) ?>
              </a>
            </div>
          <?php endif; ?>

          <div class="mobile-nav-icon me-1">
            <i class="fa-solid fa-bars"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
