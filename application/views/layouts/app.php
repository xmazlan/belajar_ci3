<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?= $title . ' | Belajar CI3' ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?= BASE_URL('assets/sbadmin2/img/undraw_rocket.svg') ?>">

	<!-- Custom fonts for this template-->
	<link href="<?= BASE_URL('assets/sbadmin2/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= BASE_URL('assets/sbadmin2/css/sb-admin-2.css') ?>" rel="stylesheet">
</head>

<body id="page-top">

	<div id="wrapper">

		<?php $this->load->view('layouts/_sidebar') ?>

		<div id="content-wrapper" class="d-flex flex-column">

			<div id="content">
				<?php $this->load->view('layouts/_topbar') ?>

				<?php $this->load->view($page, $error ?? '') ?>

			</div>

			<?php $this->load->view('layouts/_footer') ?>

		</div>

	</div>

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<?php $this->load->view('layouts/_logoutmodal') ?>
	<?php $this->load->view('layouts/_scripts') ?>
</body>

</html>
