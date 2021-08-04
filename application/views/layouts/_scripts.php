<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- start script -->
<!-- Bootstrap core JavaScript-->
<script src="<?= BASE_URL('assets/sbadmin2/vendor/jquery/jquery.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="<?= BASE_URL('assets/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= BASE_URL('assets/sbadmin2/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= BASE_URL('assets/sbadmin2/js/sb-admin-2.min.js') ?>"></script>

<script type="text/javascript">
  // file label untuk input file
  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });

  // mengaktifkan fungsi tooltip ke semua halaman
  $(function() {
    $('[data-toggle="tooltip"]').tooltip()
  });
</script>
<!-- end script -->