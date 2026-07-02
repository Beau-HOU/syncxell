<!-- ══ FOOTER ══ -->
<footer>
  <div class="orbe ft-orbe"></div>
  <div class="container">
    <div class="ft-main">
      <div class="ft-grid">
        <div>
          <span class="ft-logo">
            <svg style="display:inline;width:28px;height:28px;vertical-align:middle;margin-right:8px" viewBox="0 0 28 28">
              <rect width="28" height="28" rx="7" fill="url(#lg-ft)"/>
              <defs><linearGradient id="lg-ft" x1="0%" y1="100%" x2="100%" y2="0%"><stop offset="0%" stop-color="#00C46A"/><stop offset="100%" stop-color="#33D68A"/></linearGradient></defs>
              <path d="M8 6l13 8-13 8V6z" fill="white"/>
            </svg>
            GoCast<span style="font-weight:400">.</span>
          </span>
          <p class="ft-copy">© <?= date('Y') ?> GOCAST STUDIO.<br>Tous droits réservés.</p>
          <div class="ft-socials">
            <a href="#" class="ft-soc" title="Instagram">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
            </a>
            <a href="#" class="ft-soc" title="TikTok">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1V9.01a6.34 6.34 0 0 0-6.33 6.34 6.34 6.34 0 0 0 6.33 6.34 6.34 6.34 0 0 0 6.33-6.34V8.69a8.18 8.18 0 0 0 4.78 1.53V6.77a4.85 4.85 0 0 1-1-.08z"/></svg>
            </a>
          </div>
        </div>

        <div class="ft-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="<?= m_path('home', [], true) ?>#avantages">Avantages</a></li>
            <li><a href="<?= m_path('tarifs', [], true) ?>">Tarifs</a></li>
            <li><a href="<?= m_path('home', [], true) ?>#temoignages">Témoignages</a></li>
            <li><a href="<?= m_path('faq', [], true) ?>">FAQs</a></li>
          </ul>
        </div>

        <div class="ft-col">
          <h4>Légal</h4>
          <ul>
            <li><a href="#">Mentions légales</a></li>
            <li><a href="#">Conditions générales de ventes</a></li>
            <li><a href="#">Politique de confidentialité</a></li>
          </ul>
        </div>

        <div class="ft-col">
          <h4>Retrouvez-nous</h4>
          <ul>
            <li><a href="#">Cotonou, Bénin</a></li>
            <li><a href="tel:+22901999012373">+229 01 99 90 12 73</a></li>
            <li><a href="#">Studio podcast à Cotonou</a></li>
            <li><a href="#">Studio vidéo Bénin</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="ft-watermark">
    <div class="ft-watermark-text">gocast.</div>
  </div>
</footer>

<!-- ══ SCRIPTS COMMUNS ══ -->
<script>
/* Navbar — contraction + glassmorphism au scroll (toutes pages) */
(function(){
  var nb=document.getElementById('navBar');
  if(!nb) return;
  function onScroll(){ if(!nb.classList.contains('nav-forced')) nb.classList.toggle('nav-scrolled', window.scrollY > 60); }
  window.addEventListener('scroll', onScroll, {passive:true});
  onScroll(); /* état initial si on arrive déjà scrollé */
})();

(function(){
  /* Custom camera cursor */
  var cur = document.getElementById('cam-cursor');
  if(!cur) return;
  var tx=-200,ty=-200,cx=-200,cy=-200;
  var LERP=0.14;
  var SEL='a,button,[role="button"],input,select,label,.btn,.dec-arrow,.p-tab,.faq-q,.opt-item,.decor-slide,.dec-dot,.partner-name';
  window.addEventListener('mousemove',function(e){tx=e.clientX;ty=e.clientY;cur.style.opacity='1';},{passive:true});
  window.addEventListener('mouseleave',function(){cur.style.opacity='0';});
  document.addEventListener('mouseover',function(e){if(e.target.closest(SEL))cur.classList.add('on-hover');});
  document.addEventListener('mouseout',function(e){if(e.target.closest(SEL))cur.classList.remove('on-hover');});
  (function tick(){cx+=(tx-cx)*LERP;cy+=(ty-cy)*LERP;cur.style.transform='translate('+cx+'px,'+cy+'px) translate(-50%,-50%)';requestAnimationFrame(tick);})();
})();

/* FAQ accordion */
document.querySelectorAll('.faq-q').forEach(function(q){
  q.addEventListener('click',function(){
    var item=this.closest('.faq-item');
    var isOpen=item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach(function(o){o.classList.remove('open');});
    if(!isOpen) item.classList.add('open');
  });
});
</script>
</body>
</html>
