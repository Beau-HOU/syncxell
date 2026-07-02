<?php
$page_title   = $page_title   ?? 'GoCast Studio — Studio audiovisuel professionnel à Cotonou';
$page_desc    = $page_desc    ?? 'Réservez votre session en studio audiovisuel à Cotonou. Caméras, son, lumière et décors professionnels inclus.';
$active_page  = $active_page  ?? '';
$header_dark  = $header_dark  ?? false;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($page_title) ?></title>
<meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= asset('css/public-colors.css') ?>">
<link rel="stylesheet" href="<?= asset('css/public.css') ?>">
</head>
<body>

<!-- ══ CUSTOM CURSOR ══ -->
<div id="cam-cursor">
  <svg viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="28" cy="28" r="22" stroke="rgba(255,255,255,.70)" stroke-width="1.2"/>
    <line x1="28" y1="22" x2="28" y2="25" stroke="rgba(255,255,255,.60)" stroke-width="1.2"/>
    <line x1="28" y1="31" x2="28" y2="34" stroke="rgba(255,255,255,.60)" stroke-width="1.2"/>
    <line x1="22" y1="28" x2="25" y2="28" stroke="rgba(255,255,255,.60)" stroke-width="1.2"/>
    <line x1="31" y1="28" x2="34" y2="28" stroke="rgba(255,255,255,.60)" stroke-width="1.2"/>
    <circle cx="28" cy="28" r="2" fill="rgba(255,255,255,.90)"/>
  </svg>
</div>

<!-- ══ SITE HEADER ══ -->
<header class="site-header" id="siteHeader">

  <!-- TOP BAR — infos contact (desktop seulement) -->
  <div class="top-bar">
    <div class="top-bar-left">
      <a href="tel:+22901999012373" class="top-bar-link">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.5 3.18 2 2 0 0 1 3.5 1h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.73a16 16 0 0 0 6.29 6.29l1.19-1.19a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        +229 01 99 90 12 73
      </a>
      <span class="top-bar-sep">·</span>
      <span class="top-bar-info">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        Cotonou, Bénin
      </span>
    </div>
    <div class="top-bar-right">
      <a href="mailto:contact@gocaststudio.bj" class="top-bar-link">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        contact@gocaststudio.bj
      </a>
    </div>
  </div>

  <!-- NAV BAR -->
  <div class="nav-bar<?= $header_dark ? ' nav-scrolled nav-forced' : '' ?>" id="navBar">
    <a href="<?= m_path('home', [], true) ?>" class="nav-logo">
      <div class="nav-logo-icon">
        <svg viewBox="0 0 18 18" fill="none"><path d="M4 3l11 6-11 6V3z" fill="white"/></svg>
      </div>
      GoCast<span style="font-weight:400">.</span>
    </a>
    <div class="nav-links">
      <a href="<?= m_path('home', [], true) ?>" class="nav-link<?= $active_page === 'home' ? ' active' : '' ?>">Accueil</a>
      <a href="<?= m_path('home', [], true) ?>#avantages" class="nav-link">Avantages</a>
      <a href="<?= m_path('tarifs', [], true) ?>" class="nav-link<?= $active_page === 'tarifs' ? ' active' : '' ?>">Tarifs</a>
      <a href="<?= m_path('blog', [], true) ?>" class="nav-link<?= $active_page === 'blog' ? ' active' : '' ?>">Blog</a>
      <a href="<?= m_path('contact', [], true) ?>" class="nav-link<?= $active_page === 'contact' ? ' active' : '' ?>">Contact</a>
    </div>
    <div class="nav-actions">
      <a href="<?= m_path('booking.public', [], true) ?>" class="nav-cta-btn">Réserver mon tournage</a>
      <a href="<?= m_path('user.login', [], true) ?>" class="btn btn-icon" title="Espace client">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
      </a>
    </div>
  </div>

</header>
