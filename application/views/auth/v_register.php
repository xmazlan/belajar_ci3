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

		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">
					<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
					<div class="col-lg-7">
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-5">Buat Akun!</h1>
							</div>
							<form class="user" method="POST" action="<?= BASE_URL('auth/register') ?>">
								<div class="form-group">
									<input type="text" class="form-control form-control-user" id="fullname" name="fullname" value="<?= set_value('fullname') ?>" placeholder="Nama Lengkap" autocomplete="off">
									<?= form_error('fullname', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
								<div class="form-group">
									<input type="text" class="form-control form-control-user" id="username" name="username" value="<?= set_value('username') ?>" placeholder="Username" autocomplete="off">
									<?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
								<div class="form-group">
									<input type="text" class="form-control form-control-user" id="email" name="email" value="<?= set_value('email') ?>" placeholder="Alamat Email" autocomplete="off">
									<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
								<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
									</div>
									<div class="col-sm-6">
										<input type="password" class="form-control form-control-user" id="passwordconf" name="passwordconf" placeholder="Ulangi Password">
									</div>
									<?= form_error('password', '<div class="col-sm-12"><small class="text-danger pl-3">', '</small></div>') ?>
								</div>
								<button type="submit" class="btn btn-primary btn-user btn-block mb-5">
									Buat Akun
								</button>
							</form>
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