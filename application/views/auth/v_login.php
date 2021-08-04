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

<body class="bg-gradient-primary">

	<div class="container">

		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-xl-10 col-lg-12 col-md-9">

				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-5">Silakan Login</h1>
									</div>
									<?= $this->session->flashdata('message'); ?>
									<?= form_open('auth/login', array('class' => 'user')) ?>
									<div class="form-group">
										<input type="text" class="form-control form-control-user text-center" id="username" name="username" value="<?= set_value('username') ?>" placeholder="Email / Username" autocomplete="off" autofocus>
										<?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
									</div>
									<div class="form-group">
										<input type="password" class="form-control form-control-user text-center" id="password" name="password" placeholder="Password">
										<?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
									</div>
									<button type="submit" class="btn btn-primary btn-user btn-block mb-5">
										Login
									</button>
									<?= form_close() ?>
									<hr>
									<div class="text-center">
										<a class="small" href="<?= BASE_URL() ?>">Beranda</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>

	<script src="<?= BASE_URL('assets/sbadmin2/vendor/jquery/jquery.min.js') ?>"></script>
	<script src="<?= BASE_URL('assets/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

	<script src="<?= BASE_URL('assets/sbadmin2/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

	<script src="<?= BASE_URL('assets/sbadmin2/js/sb-admin-2.min.js') ?>"></script>

</body>

</html>