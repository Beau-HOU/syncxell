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

  /* ── RFQ Popup open / close ── */
  $(document).on('click', '#openQuotation, .js-open-rfq', function (e) {
    e.preventDefault();
    $('.quotation--popup-overly, #quotation--popup').addClass('active');
    $('body').addClass('overflow-hidden');
  });
  $('#closePopup, .quotation--popup-overly').on('click', function () {
    $('.quotation--popup-overly, #quotation--popup').removeClass('active');
    $('body').removeClass('overflow-hidden');
  });

  /* ── Step indicator sync ── */
  function syncStepNav(stepNum) {
    $('.rfq-step-item').removeClass('active done');
    $('.rfq-step-item').each(function () {
      var n = parseInt($(this).data('step'));
      if (n < stepNum)       $(this).addClass('done');
      else if (n === stepNum) $(this).addClass('active');
    });
  }

  /* ── Validate current step's required fields ── */
  function validateStep($step) {
    var valid = true;
    $step.find('[required]').each(function () {
      if ($(this).is(':checkbox')) {
        var name = $(this).attr('name');
        if ($step.find('input[name="' + name + '"]:checked').length === 0) {
          valid = false;
        }
      } else if (!$(this).val().trim()) {
        valid = false;
        $(this).addClass('rfq-error');
      }
    });
    return valid;
  }

  /* ── Next button ── */
  $(document).on('click', '.next-btn', function () {
    var $cur  = $(this).closest('.form-step');
    var $next = $cur.next('.form-step');
    if (!$next.length) return;
    $cur.find('.rfq-error').removeClass('rfq-error');
    if (!validateStep($cur)) return;
    var nextNum = parseInt($next.data('step'));
    $cur.removeClass('active');
    $next.addClass('active');
    syncStepNav(nextNum);
  });

  /* ── Prev button ── */
  $(document).on('click', '.prev-btn', function () {
    var $cur  = $(this).closest('.form-step');
    var $prev = $cur.prev('.form-step');
    if (!$prev.length) return;
    var prevNum = parseInt($prev.data('step'));
    $cur.removeClass('active');
    $prev.addClass('active');
    syncStepNav(prevNum);
  });

  /* ── Services dropdown (custom multi-select) ── */
  $(document).on('click', '.rfq-dropdown-trigger', function (e) {
    e.stopPropagation();
    var $dd = $(this).closest('.rfq-dropdown');
    var isOpen = $dd.hasClass('open');
    $('.rfq-dropdown').removeClass('open');
    if (!isOpen) $dd.addClass('open');
  });
  $(document).on('change', '.rfq-dd-opt input[type="checkbox"]', function () {
    var $dd = $(this).closest('.rfq-dropdown');
    var labels = [];
    $dd.find('input[type="checkbox"]:checked').each(function () {
      labels.push($(this).siblings('span').text().trim());
    });
    var $txt = $dd.find('.rfq-dropdown-text');
    if (labels.length === 0) {
      $txt.text('Select services…').removeClass('has-value');
    } else if (labels.length <= 2) {
      $txt.text(labels.join(', ')).addClass('has-value');
    } else {
      $txt.text(labels.length + ' services selected').addClass('has-value');
    }
  });
  $(document).on('click', function (e) {
    if (!$(e.target).closest('.rfq-dropdown').length) {
      $('.rfq-dropdown').removeClass('open');
    }
  });

  /* ── Sector → show/hide conditional fields ── */
  $(document).on('change', '#rfq-sector', function () {
    var v = $(this).val();
    $('#rfq-federal-fields').toggle(v === 'federal');
    $('#rfq-localgov-fields').toggle(v === 'local_gov');
  });

  /* ── Remove error highlight on input ── */
  $(document).on('input change', '#quotationForm [required]', function () {
    $(this).removeClass('rfq-error');
  });

  /* ── AJAX submit ── */
  $('#quotationForm').on('submit', function (e) {
    e.preventDefault();
    var $btn = $('#rfq-submit-btn');
    $btn.prop('disabled', true).text('Sending…');

    $.ajax({
      url:         $(this).attr('action'),
      method:      'POST',
      data:        $(this).serialize(),
      success: function (res) {
        try {
          var r = (typeof res === 'string') ? JSON.parse(res) : res;
          if (r.success) {
            $('#quotationForm').hide();
            $('#rfq-success').fadeIn();
            syncStepNav(5);
          } else {
            alert(r.message || 'An error occurred. Please try again.');
            $btn.prop('disabled', false).text('Submit Request');
          }
        } catch (ex) {
          $('#quotationForm').hide();
          $('#rfq-success').fadeIn();
        }
      },
      error: function () {
        alert('An error occurred. Please email us at <?= params('app_email') ?>');
        $btn.prop('disabled', false).text('Submit Request');
      }
    });
  });

});
</script>
