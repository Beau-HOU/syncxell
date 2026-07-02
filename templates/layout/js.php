<script src="<?= asset('js/jquery-migrate-3.4.1.min.js') ?>"></script>
<script src="<?= asset('js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= asset('js/nouislider.min.js') ?>"></script>
<script src="<?= asset('js/swiper-bundle.min.js') ?>"></script>
<script src="<?= asset('js/Scrolltrigger.js') ?>"></script>
<script src="<?= asset('js/Splittext.js') ?>"></script>
<script src="<?= asset('js/cursor.js') ?>"></script>
<script src="<?= asset('js/gsap.min.js') ?>"></script>
<script src="<?= asset('js/jquery-validate.js') ?>"></script>
<script src="<?= asset('js/jquery.prettyPhoto.js') ?>"></script>
<script src="<?= asset('js/slick.min.js') ?>"></script>
<script src="<?= asset('js/jquery-waypoints.js') ?>"></script>
<script src="<?= asset('js/numinate.min.js') ?>"></script>
<script src="<?= asset('js/smoothscroll.js') ?>"></script>
<script src="<?= asset('js/imagesloaded.min.js') ?>"></script>
<script src="<?= asset('js/jquery-isotope.js') ?>"></script>
<script src="<?= asset('js/circle-progress.min.js') ?>"></script>
<script src="<?= asset('js/main.js') ?>"></script>
<script src="<?= asset('js/aos.js') ?>"></script>
<script src="<?= asset('js/wow.min.js') ?>"></script>

<script>
new WOW().init();
AOS.init({ offset: 0, duration: 400, delay: 0, once: true });


$(function () {
  // RFQ Popup open/close
  $('#openQuotation').on('click', function (e) {
    e.preventDefault();
    $('.quotation--popup-overly, #quotation--popup').addClass('active');
    $('body').addClass('overflow-hidden');
  });
  $('#closePopup, .quotation--popup-overly').on('click', function () {
    $('.quotation--popup-overly, #quotation--popup').removeClass('active');
    $('body').removeClass('overflow-hidden');
  });

  // Multi-step RFQ form
  $('.next-btn').on('click', function () {
    var $cur = $(this).closest('.form-step');
    var $next = $cur.next('.form-step');
    if ($next.length) { $cur.removeClass('active'); $next.addClass('active'); }
  });
  $('.prev-btn').on('click', function () {
    var $cur = $(this).closest('.form-step');
    var $prev = $cur.prev('.form-step');
    if ($prev.length) { $cur.removeClass('active'); $prev.addClass('active'); }
  });

  // AJAX RFQ submit
  $('#quotationForm').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      url: $(this).attr('action'),
      method: 'POST',
      data: $(this).serialize(),
      success: function (res) {
        try {
          var r = JSON.parse(res);
          if (r.success) { $('#quotationForm').hide(); $('#rfq-success').fadeIn(); }
        } catch (ex) { $('#rfq-success').fadeIn(); }
      },
      error: function () {
        alert('An error occurred. Please email us at <?= params('app_email') ?>');
      }
    });
  });
});
</script>
