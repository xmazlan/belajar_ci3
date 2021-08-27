<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
		<!-- <a href="<?= BASE_URL('investasi/pma_create') ?>" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a> -->
	</div>

	<div class="row">

		<div class="col-lg-12 mb-4">

			<!-- Illustrations -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Judul</h6>
				</div>
				<div class="card-body">
					<div class="card-body">

						<div class="form-group row">
							<?php echo validation_errors('<button type="button" class="btn btn-outline-danger">', '</button>'); ?>
						</div>

						<form method="post" accept-charset="utf-8" action="<?= base_url() ?>investasi/pma_create">

							<div class="form-group row">
								<label class="col-sm-2 col-form-label">nama perusahaan</label>
								<div class="col-sm-10">
									<input type="text" name="nama_perusahaan" class="form-control" value="<?= set_value('nama_perusahaan') ?>" placeholder="nama perusahaan">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">nomor/tanggal</label>
								<div class="col-sm-10">
									<input type="text" name="no_dan_tgl" class="form-control" value="<?= set_value('no_dan_tgl') ?>" placeholder="nomor/tanggal">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">bidang usaha</label>
								<div class="col-sm-10">
									<input type="text" name="bidang_usaha" class="form-control" value="<?= set_value('bidang_usaha') ?>" placeholder="bidang usaha">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">alamat kantor</label>
								<div class="col-sm-10">
									<input type="text" name="alamat_kantor" class="form-control" value="<?= set_value('alamat_kantor') ?>" placeholder="alamat kantor">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Negara</label>
								<div class="col-sm-10">
									<select class="form-control" name="kode_negara" required>
										<option value="">-- Pilih wilayah --</option>
										<?php foreach ($countries as $country) : ?>
											<option value="<?= $country->id ?>" <?= set_select('kode_negara', $country->id) ?>><?= $country->nama_negara ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">investasi tambahan</label>
								<div class="col-sm-10">
									<input type="text" name="investasi_tambahan" class="form-control" value="<?= set_value('investasi_tambahan') ?>" placeholder="investasi tambahan">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">investasi total</label>
								<div class="col-sm-10">
									<input type="text" name="investasi_total" class="form-control" value="<?= set_value('investasi_total') ?>" placeholder="investasi total">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">tki</label>
								<div class="col-sm-10">
									<input type="text" name="tki" class="form-control" value="<?= set_value('tki') ?>" placeholder="tki">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">tka</label>
								<div class="col-sm-10">
									<input type="text" name="tka" class="form-control" value="<?= set_value('tka') ?>" placeholder="tka">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">mata uang</label>
								<div class="col-sm-10">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="mata_uang" value="usd" <?= set_radio('mata_uang', 'usd') ?>>
										<label class="form-check-label">
											USD
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="mata_uang" value="rp" <?= set_radio('mata_uang', 'rp', true) ?>>
										<label class="form-check-label">
											RP
										</label>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<input type="submit" value="tambah" class="btn btn-success">
							</div>


						</form>
					</div>
				</div>

			</div>

		</div>

	</div>

	<!-- /.container-fluid -->