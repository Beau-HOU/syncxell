<div class="octf-main-header">
    <div class="octf-area-wrap">
        <div class="container octf-mainbar-container">
            <div class="octf-mainbar">
                <div class="octf-mainbar-row octf-row align-items-center">
                    <div class="octf-col logo-col">
                        <div class="site-logo">
                            <a href="<?= getProjetUrl() ?>"><img src="<?= asset('img/logo/logo.png') ?>" alt="Agence d'immigration au Canada"><b style="color:brown;font-size: 50px;position: absolute;top: 13px;"> C B C </b></a>
                        </div>
                    </div>
                    <div class="octf-col menu-col">
                        <nav id="site-navigation" class="main-navigation">
                            <ul class="menu">
                                <li class="current-menu-item">
                                    <a href="<?= getProjetUrl() ?>" title="<?= getProjetName() ?> : <?= $pageTitle ?>">Accueil</a>

                                </li>
                                <li class=""><a href="<?= m_path("about.us", [], true) ?>">A Propos</a>

                                </li>

                                <li><a href="<?= m_path('our.business', [], true) ?>">Business </a>
                                </li>

                                <li><a href="<?= m_path('all.events', [], true) ?>">Evènements</a>
                                <li>

                                <li class=""><a href="<?= m_path("our.portfolio", [], true) ?>">Portfolio</a>

                                </li>

                            </ul>
                        </nav>
                    </div>

                    <div class="octf-col cta-col justify-content-end align-items-center">
                        <a href="<?= m_path('devis', [], true) ?>" class="octf-btn octf-btn-blue btn-medium text-white devis-btn" title="Confiez nous vos projets de design interieur, extérieur">Parlez nous de votre projet</a>

                        <!--div class="octf-search octf-cta-header">
                                        <div class="position-relative">
                                            <div class="toggle_search octf-cta-icons">
                                                <i class="ot-flaticon-loupe"></i>
                                            </div>
                                            
                                            <div class="h-search-form-field">
                                                <div class="h-search-form-inner">
                                                    <form role="search" method="get" class="search-form">
                                                        <label><span class="screen-reader-text">Search for:</span>
                                                        <input type="search" class="search-field" placeholder="Search" value="" name="s"></label>
                                                        <button type="submit" class="search-submit"><i class="ot-flaticon-loupe"></i></button>
                                                    </form>
                                                </div>                                  
                                            </div>
                                        </div>
                                    </div-->

                        <!--div class="octf-sidepanel octf-cta-header">
                                        <div class="site-overlay panel-overlay"></div>
                                        <div id="panel-btn" class="panel-btn octf-cta-icons">
                                            <i class="ot-flaticon-menu-of-three-lines"></i>
                                        </div>
                                    </div-->

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="header_mobile">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="mlogo_wrapper clearfix">
                    <div class="mobile_logo">
                        <a href="<?= getProjetUrl() ?>"><img src="<?= asset('img/logo/logo.png') ?>" alt="Agence d'immigration au Canada"><b style="color:brown;font-size: 50px;position: absolute;top: 13px;"> C B C </b></a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="octf-menu-mobile octf-cta-header justify-content-end">

                    <!--div class="octf-search octf-cta-header mr-4">
                                    <div class="position-relative">
                                        <div class="toggle_search octf-cta-icons">
                                            <i class="ot-flaticon-loupe"></i>
                                        </div>
                                       
                                        <div class="h-search-form-field">
                                            <div class="h-search-form-inner">
                                                <form role="search" method="get" class="search-form">
                                                    <label><span class="screen-reader-text">Search for:</span>
                                                    <input type="search" class="search-field" placeholder="Search" value="" name="s"></label>
                                                    <button type="submit" class="search-submit"><i class="ot-flaticon-loupe"></i></button>
                                                </form>
                                            </div>                                  
                                        </div>
                                    </div>
                                </div-->

                    <div id="mmenu-toggle" class="mmenu-toggle">
                        <button><i class="ot-flaticon-menu-of-three-lines"></i></button>
                        <div class="site-overlay mmenu-overlay"></div>
                    </div>

                    <div id="mmenu-wrapper" class="mmenu-wrapper on-right">
                        <div class="mmenu-inner">
                            <a class="mmenu-close" href="#"><i class="ot-flaticon-next"></i></a>
                            <div class="mobile-nav">
                                <ul class="mobile_mainmenu none-style">
                                    <li class="current-menu-item">
                                        <a href="<?= getProjetUrl() ?>" title="<?= getProjetName() ?> : <?= $pageTitle ?>">Accueil</a>

                                    </li>
                                    <li class=""><a href="<?= m_path("about.us", [], true) ?>">A propos</a>

                                    </li>

                                    <li><a href="<?= m_path('our.business', [], true) ?>">Business </a>
                                    </li>
                                    <li><a href="<?= m_path('all.events', [], true) ?>">Evènements</a>
                                    <li>

                                    <li class=""><a href="<?= m_path("our.portfolio", [], true) ?>">Portfolio</a>

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
