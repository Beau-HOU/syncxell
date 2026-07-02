<?php include view('public/layout/header'); ?>

<!-- ══ HERO À PROPOS ══ -->
<section class="page-inner" style="background-image:url('<?= asset('img/Gocast/webp/dlxmedia-hu-JJFfe2qRqhE-unsplash.webp') ?>')">
  <div class="pi-overlay"></div>
  <div class="pi-content">
    <div class="pi-breadcrumb">
      <a href="<?= m_path('home', [], true) ?>">Accueil</a>
      <span>/</span>
      <span>À propos</span>
    </div>
    <h1 class="pi-h1">Notre histoire</h1>
    <p class="pi-sub">Le studio audiovisuel professionnel né au cœur du Bénin</p>
  </div>
</section>

<!-- ══ MISSION ══ -->
<section style="background:var(--gc-dark);padding:100px 0">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center">
      <div>
        <div style="font-size:13px;color:var(--gc-accent);text-transform:uppercase;letter-spacing:2px;margin-bottom:16px">Notre mission</div>
        <h2 style="font-size:clamp(28px,3.5vw,46px);font-weight:800;color:#fff;line-height:1.2;margin-bottom:24px">
          Donner à chaque créateur<br>les moyens de <span class="kw">briller</span>.
        </h2>
        <p style="color:rgba(255,255,255,.6);font-size:16px;line-height:1.75;margin-bottom:20px">
          GoCast Studio est né d'un constat simple : au Bénin, les créateurs de contenu manquent d'un espace professionnel, abordable et complet pour produire des contenus de qualité mondiale.
        </p>
        <p style="color:rgba(255,255,255,.6);font-size:16px;line-height:1.75;margin-bottom:36px">
          Nous avons construit un studio où tout est déjà prêt — caméras, son, lumière, décors, opérateurs — pour que vous puissiez vous concentrer sur l'essentiel : votre message.
        </p>
        <a href="<?= m_path('booking.public', [], true) ?>" class="btn" style="display:inline-block;padding:14px 32px;background:var(--gc-gradient);color:#fff;border-radius:50px;font-weight:700;font-size:14px;text-decoration:none">Réserver mon tournage</a>
      </div>
      <div style="position:relative">
        <img src="<?= asset('img/Gocast/webp/pov-cheerful-influencer-filming-live-video-podcast-talking-internet-channel-audience-content-creator-recording-talk-show-episode-using-modern-sound-equipment-studio.webp') ?>"
             alt="Studio GoCast"
             style="width:100%;border-radius:20px;object-fit:cover;height:480px;">
        <div style="position:absolute;bottom:-24px;right:-24px;background:var(--gc-gradient);border-radius:16px;padding:24px 32px;text-align:center;box-shadow:0 20px 60px rgba(0,196,106,.35)">
          <div style="font-size:42px;font-weight:900;color:#fff">+150</div>
          <div style="font-size:13px;color:rgba(255,255,255,.85);margin-top:4px">créateurs<br>accompagnés</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ VALEURS ══ -->
<section style="background:#080c11;padding:100px 0">
  <div class="container">
    <div style="text-align:center;margin-bottom:64px">
      <div style="font-size:13px;color:var(--gc-accent);text-transform:uppercase;letter-spacing:2px;margin-bottom:12px">Ce qui nous guide</div>
      <h2 style="font-size:clamp(26px,3vw,40px);font-weight:800;color:#fff">Nos valeurs</h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:28px">
      <div class="gl-card" style="padding:36px;text-align:center">
        <div style="width:56px;height:56px;background:rgba(0,196,106,.12);border-radius:16px;display:flex;align-items:center;justify-content:center;margin:0 auto 20px">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--gc-accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2z"/></svg>
        </div>
        <h3 style="color:#fff;font-size:18px;font-weight:700;margin-bottom:12px">Excellence</h3>
        <p style="color:rgba(255,255,255,.55);font-size:14px;line-height:1.7">Un matériel de niveau professionnel, entretenu et calibré avant chaque session. Pas de compromis sur la qualité.</p>
      </div>
      <div class="gl-card" style="padding:36px;text-align:center">
        <div style="width:56px;height:56px;background:rgba(0,196,106,.12);border-radius:16px;display:flex;align-items:center;justify-content:center;margin:0 auto 20px">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--gc-accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        </div>
        <h3 style="color:#fff;font-size:18px;font-weight:700;margin-bottom:12px">Accessibilité</h3>
        <p style="color:rgba(255,255,255,.55);font-size:14px;line-height:1.7">Des tarifs pensés pour tous les profils — créateurs débutants, influenceurs, entreprises — sans sacrifier la qualité.</p>
      </div>
      <div class="gl-card" style="padding:36px;text-align:center">
        <div style="width:56px;height:56px;background:rgba(0,196,106,.12);border-radius:16px;display:flex;align-items:center;justify-content:center;margin:0 auto 20px">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--gc-accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <h3 style="color:#fff;font-size:18px;font-weight:700;margin-bottom:12px">Accompagnement</h3>
        <p style="color:rgba(255,255,255,.55);font-size:14px;line-height:1.7">Un opérateur à vos côtés pendant toute la session. Nous ne vous laissons jamais seul face à la caméra.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══ CHIFFRES ══ -->
<section style="background:var(--gc-dark);padding:80px 0;border-top:1px solid rgba(255,255,255,.06)">
  <div class="container">
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:24px;text-align:center">
      <div>
        <div style="font-size:clamp(36px,5vw,64px);font-weight:900;background:var(--gc-gradient);-webkit-background-clip:text;-webkit-text-fill-color:transparent">150+</div>
        <div style="color:rgba(255,255,255,.55);font-size:14px;margin-top:6px">Créateurs accompagnés</div>
      </div>
      <div>
        <div style="font-size:clamp(36px,5vw,64px);font-weight:900;background:var(--gc-gradient);-webkit-background-clip:text;-webkit-text-fill-color:transparent">500+</div>
        <div style="color:rgba(255,255,255,.55);font-size:14px;margin-top:6px">Heures de tournage</div>
      </div>
      <div>
        <div style="font-size:clamp(36px,5vw,64px);font-weight:900;background:var(--gc-gradient);-webkit-background-clip:text;-webkit-text-fill-color:transparent">98%</div>
        <div style="color:rgba(255,255,255,.55);font-size:14px;margin-top:6px">Clients satisfaits</div>
      </div>
      <div>
        <div style="font-size:clamp(36px,5vw,64px);font-weight:900;background:var(--gc-gradient);-webkit-background-clip:text;-webkit-text-fill-color:transparent">4</div>
        <div style="color:rgba(255,255,255,.55);font-size:14px;margin-top:6px">Décors disponibles</div>
      </div>
    </div>
  </div>
</section>

<!-- ══ ÉQUIPE ══ -->
<section style="background:#080c11;padding:100px 0">
  <div class="container">
    <div style="text-align:center;margin-bottom:64px">
      <div style="font-size:13px;color:var(--gc-accent);text-transform:uppercase;letter-spacing:2px;margin-bottom:12px">Les visages derrière l'objectif</div>
      <h2 style="font-size:clamp(26px,3vw,40px);font-weight:800;color:#fff">Notre équipe</h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:32px;max-width:900px;margin:0 auto">
      <div style="text-align:center">
        <div style="width:120px;height:120px;border-radius:50%;overflow:hidden;margin:0 auto 20px;border:3px solid rgba(0,196,106,.3)">
          <img src="<?= asset('img/Gocast/webp/portrait-fitness-influencer.webp') ?>" alt="Équipe" style="width:100%;height:100%;object-fit:cover">
        </div>
        <div style="color:#fff;font-weight:700;font-size:16px">Henoc V.</div>
        <div style="color:var(--gc-accent);font-size:13px;margin-top:4px">Fondateur &amp; Directeur</div>
      </div>
      <div style="text-align:center">
        <div style="width:120px;height:120px;border-radius:50%;overflow:hidden;margin:0 auto 20px;border:3px solid rgba(0,196,106,.3)">
          <img src="<?= asset('img/Gocast/webp/boitumelo-x0uGKonYrog-unsplash.webp') ?>" alt="Équipe" style="width:100%;height:100%;object-fit:cover">
        </div>
        <div style="color:#fff;font-weight:700;font-size:16px">Sèfan M.</div>
        <div style="color:var(--gc-accent);font-size:13px;margin-top:4px">Opérateur Caméra</div>
      </div>
      <div style="text-align:center">
        <div style="width:120px;height:120px;border-radius:50%;overflow:hidden;margin:0 auto 20px;border:3px solid rgba(0,196,106,.3)">
          <img src="<?= asset('img/Gocast/webp/hc-digital-3JZFQcOe78w-unsplash.webp') ?>" alt="Équipe" style="width:100%;height:100%;object-fit:cover">
        </div>
        <div style="color:#fff;font-weight:700;font-size:16px">Chantal A.</div>
        <div style="color:var(--gc-accent);font-size:13px;margin-top:4px">Montage &amp; Post-prod</div>
      </div>
    </div>
  </div>
</section>

<!-- ══ CTA ══ -->
<section style="background:var(--gc-dark);padding:100px 0;text-align:center;border-top:1px solid rgba(255,255,255,.06)">
  <div class="container" style="max-width:640px">
    <h2 style="font-size:clamp(26px,3.5vw,42px);font-weight:800;color:#fff;margin-bottom:20px">Prêt à tourner avec nous&nbsp;?</h2>
    <p style="color:rgba(255,255,255,.6);font-size:16px;line-height:1.7;margin-bottom:40px">Rejoignez les 150 créateurs qui nous font déjà confiance. Votre première session peut être réservée en 2 minutes.</p>
    <a href="<?= m_path('booking.public', [], true) ?>" class="btn" style="display:inline-block;padding:16px 40px;background:var(--gc-gradient);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;box-shadow:0 12px 40px rgba(0,196,106,.4)">Réserver mon tournage</a>
  </div>
</section>

<?php include view('public/layout/footer'); ?>
