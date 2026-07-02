<?php
  $appName = params('app_name');
  $appShortName = params('app_short_name') ?? $appName;
  $defaultDescription = params('app_description') ?? 'Destination Canada, agence spécialisée dans l\'accompagnement pour l\'immigration, les études et le travail au Canada.';

  $pageTitle = isset($pageTitle) && !empty($pageTitle) ? $pageTitle : $appName;
  $metaDescription = isset($metaDescription) && !empty($metaDescription) ? $metaDescription : $defaultDescription;
  $metaRobots = isset($metaRobots) && !empty($metaRobots) ? $metaRobots : 'index, follow';
  $canonicalUrl = isset($canonicalUrl) && !empty($canonicalUrl) ? $canonicalUrl : getProjetUrl();
  $logoUrl = asset('img/logo/logo.png');
  $ogImage = isset($ogImage) && !empty($ogImage) ? $ogImage : $logoUrl;
  $ogType = isset($ogType) && !empty($ogType) ? $ogType : 'website';

  $sanitizedTitle = htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8');
  $sanitizedDescription = htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8');
  $sanitizedRobots = htmlspecialchars($metaRobots, ENT_QUOTES, 'UTF-8');
  $sanitizedCanonical = htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8');
  $sanitizedOgImage = htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8');

  $sameAsLinks = [
    'https://www.facebook.com/destinationscanada',
    'https://www.linkedin.com/company/destination-canada-officiel',
    'https://www.tiktok.com/@destinationcanada01',
    'https://wa.me/22996747724'
  ];

  $organizationSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => $appName,
    'url' => $canonicalUrl,
    'logo' => $logoUrl,
    'email' => 'info@destinations-canada.com',
    'contactPoint' => [
      [
        '@type' => 'ContactPoint',
        'telephone' => '+22996747724',
        'contactType' => 'customer service',
        'areaServed' => ['BJ', 'TG', 'GA', 'CA'],
        'availableLanguage' => ['fr', 'en']
      ]
    ],
    'sameAs' => $sameAsLinks,
  ];
?>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<!--===== TITLE & META =======-->
<title><?= $sanitizedTitle ?> - <?= htmlspecialchars($appShortName, ENT_QUOTES, 'UTF-8') ?></title>
<meta name="description" content="<?= $sanitizedDescription ?>" />
<meta name="robots" content="<?= $sanitizedRobots ?>" />
<link rel="canonical" href="<?= $sanitizedCanonical ?>" />

<!--===== SOCIAL =======-->
<meta property="og:title" content="<?= $sanitizedTitle ?>" />
<meta property="og:description" content="<?= $sanitizedDescription ?>" />
<meta property="og:url" content="<?= $sanitizedCanonical ?>" />
<meta property="og:type" content="<?= htmlspecialchars($ogType, ENT_QUOTES, 'UTF-8') ?>" />
<meta property="og:image" content="<?= $sanitizedOgImage ?>" />
<meta property="og:site_name" content="<?= htmlspecialchars($appName, ENT_QUOTES, 'UTF-8') ?>" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?= $sanitizedTitle ?>" />
<meta name="twitter:description" content="<?= $sanitizedDescription ?>" />
<meta name="twitter:image" content="<?= $sanitizedOgImage ?>" />

<!--=====FAV ICON=======-->
<link rel="shortcut icon" href="<?= $logoUrl ?>" />

<!--===== STYLES CSS =====-->
<link rel="stylesheet" href="<?= asset('css/bootstrap.min.css') ?>" />
<link rel="stylesheet" href="<?= asset('css/font-awesome-pro.css') ?>" />
<link rel="stylesheet" href="<?= asset('css/magnific-popup.css') ?>" />
<link rel="stylesheet" href="<?= asset('css/owl.carousel.min.css') ?>" />
<link rel="stylesheet" href="<?= asset('css/slick-slider.css') ?>" />
<link rel="stylesheet" href="<?= asset('css/meanmenu.css') ?>" />
<link rel="stylesheet" href="<?= asset('css/typography.css') ?>" />
<link rel="stylesheet" href="<?= asset('css/preloader.css') ?>" />
<link rel="stylesheet" href="<?= asset('css/mobile-menu.css') ?>" />
<link rel="stylesheet" href="<?= asset('css/aos.css') ?>" />
<link rel="stylesheet" href="<?= asset('css/header.css') ?>" />
<link rel="stylesheet" href="<?= asset('css/footer.css') ?>" />
<link rel="stylesheet" href="<?= asset('css/fonts.css') ?>" />
<link rel="stylesheet" href="<?= asset('css/animate.css') ?>" />
<link rel="stylesheet" href="<?= asset('css/blog-page.css') ?>" />
<link rel="stylesheet" href="<?= asset('css/modal-video.min.css') ?>" />
<link rel="stylesheet" href="<?= asset('css/nice-select.css') ?>" />
<link rel="stylesheet" href="<?= asset('css/comon.css') ?>" />
<link rel="stylesheet" href="<?= asset('css/animation.css') ?>" />
<link rel="stylesheet" href="<?= asset('css/visafast-unit.css') ?>" />
<link rel="stylesheet" href="<?= asset('css/visafast-core.css') ?>" />
<link rel="preconnect" href="https://fonts.googleapis.com">


<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">


<link rel="stylesheet" href="<?= asset('css/global.css') ?>" />

<link rel="stylesheet" href="<?= asset('style.css') ?>" />
<link rel="stylesheet" href="<?= asset('css/responsive.css') ?>" />

<!--===== JQUERY JS =====-->
<script src="<?= asset('js/jquery-3-6-0.min.js') ?>"></script>

<!--===== STRUCTURED DATA =====-->
<script type="application/ld+json">
<?= json_encode($organizationSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<style>
    @media (max-width: 768px) {
        .page-hero-hadding {
            padding-top: 110px;
        }

        .main-hadding7.main-hadding12 {
            padding-top: 110px;
            padding-bottom: 200px;
        }
    }
</style>
