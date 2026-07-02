<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?= isset($pageDesc) ? htmlspecialchars($pageDesc) : params('app_description') ?>">
<meta name="keywords" content="IT solutions, federal government IT, cybersecurity, NIST FISMA CMMC, cloud infrastructure, AWS Azure, SYNCXELL">
<meta name="author" content="SYNCXELL LLC">

<title><?= isset($pageTitle) && !empty($pageTitle) ? htmlspecialchars($pageTitle) . ' | ' . params('app_short_name') : params('app_name') . ' — Where Integrity Meets Innovation' ?></title>

<link rel="shortcut icon" href="<?= asset('images/logo/logo-favicon.png') ?>">
<link rel="apple-touch-icon" href="<?= asset('images/logo/logo-favicon.png') ?>">

<!-- Inqord CSS -->
<link rel="stylesheet" href="<?= asset('css/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?= asset('css/swiper-bundle.min.css') ?>">
<link rel="stylesheet" href="<?= asset('css/animate.css') ?>">
<link rel="stylesheet" href="<?= asset('css/all.min.css') ?>">
<link rel="stylesheet" href="<?= asset('css/flaticon_inqord.css') ?>">
<link rel="stylesheet" href="<?= asset('css/themify-icons.css') ?>">
<link rel="stylesheet" href="<?= asset('css/font-awesome.css') ?>">
<link rel="stylesheet" href="<?= asset('css/fontello.css') ?>">
<link rel="stylesheet" href="<?= asset('css/aos.css') ?>">
<link rel="stylesheet" href="<?= asset('css/wow.css') ?>">
<link rel="stylesheet" href="<?= asset('css/slick.css') ?>">
<link rel="stylesheet" href="<?= asset('css/prettyPhoto.css') ?>">
<link rel="stylesheet" href="<?= asset('css/shortcodes.css') ?>">
<link rel="stylesheet" href="<?= asset('css/main.css') ?>">
<link rel="stylesheet" href="<?= asset('css/megamenu.css') ?>">
<link rel="stylesheet" href="<?= asset('css/responsive.css') ?>">

<!-- Google Fonts — Georgia + Inter -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- SYNCXELL brand overrides -->
<link rel="stylesheet" href="<?= asset('css/syncxell.css') ?>">

<!-- jQuery (requis avant tout JS inline) -->
<script src="<?= asset('js/jquery-3.7.1.min.js') ?>"></script>
