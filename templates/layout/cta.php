<style>
    .hello:hover {
        color: white !important;
        background-color: #dc3545 !important; /* effet hover bouton */
    }

    .hello {
        color: black !important;
        transition: 0.3s;
    }

    /* Décorations CTA */
    .cta-shape-group {
        position: absolute;
        width: 100%;
        height: 100%;
        pointer-events: none;
        top: 0;
        left: 0;
        z-index: 0;
    }

    .cta-shape {
        position: absolute;
        font-size: 6rem;
        color: rgba(255, 255, 255, 0.2); /* blanc semi-transparent */
        animation: float 10s ease-in-out infinite;
    }

    /* Positions éparpillées (ne se rejoignent pas) */
    .cta-shape-1 { top: 8%; left: 5%; font-size: 6.5rem; animation-delay: 0s; }
    .cta-shape-2 { top: 15%; right: 8%; font-size: 5.5rem; animation-delay: 2s; }
    .cta-shape-3 { bottom: 18%; left: 8%; font-size: 7rem; animation-delay: 4s; }
    .cta-shape-4 { bottom: 8%; right: 10%; font-size: 6rem; animation-delay: 6s; }

    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-25px); }
    }
</style>

<div class="cta2 position-relative" style="background-color: rgba(236, 78, 79, 0.9); color: white; padding: 60px 0; overflow: hidden;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Texte -->
            <div class="col-lg-7">
                <div class="cta2-hadding2">
                    <h1 style="color: white;">Prêt à concrétiser votre projet au Canada&nbsp;?</h1>
                    <div class="space16"></div>
                    <p style="color: white; font-size: 1.1rem;">
                        Discutez avec l'un de nos experts pour évaluer vos options et vous accompagner dans vos démarches.
                        Ensemble, nous préparerons votre dossier pour maximiser vos chances de réussite.
                    </p>
                </div>
            </div>
            <!-- Bouton -->
            <div class="col-lg-5 text-lg-end text-center mt-3 mt-lg-0">
                <a href="<?= m_path('rdv', [], true) ?>" class="theme-btn9 btn-lg bg-light text-black hello">
                    <i class="fas fa-calendar-check me-2"></i> Prenez un rendez-vous 
                </a>
            </div>
        </div>
    </div>

    <!-- Icônes décoratives -->
    <div class="cta-shape-group">
        <i class="fas fa-plane-departure cta-shape cta-shape-1"></i> <!-- voyage -->
        <i class="fas fa-passport cta-shape cta-shape-2"></i>       <!-- documents/visa -->
        <i class="fas fa-briefcase cta-shape cta-shape-3"></i>      <!-- projet -->
        <i class="fas fa-calendar-alt cta-shape cta-shape-4"></i>  <!-- rendez-vous -->
    </div>
</div>
