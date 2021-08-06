<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        <!-- <a href="<?= BASE_URL('investasi/pmdn_create') ?>" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a> -->
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
                        <form method="post" accept-charset="utf-8" action="<?= BASE_URL('investasi/pmdn_create') ?>">

                            <div class="form-group row">
                                <?php echo validation_errors('<button type="button" class="btn btn-outline-danger">', '</button>'); ?>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">nama perusahaan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_perusahaan" class="form-control" placeholder="nama perusahaan" value="<?= set_value('nama_perusahaan') ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">nomor/tanggal</label>
                                <div class="col-sm-10">
                                    <input type="text" name="no_dan_tgl" class="form-control" placeholder="nomor/tanggal" value="<?= set_value('no_dan_tgl') ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">bidang usaha</label>
                                <div class="col-sm-10">
                                    <input type="text" name="bidang_usaha" class="form-control" placeholder="bidang usaha" value="<?= set_value('bidang_usaha') ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">alamat kantor</label>
                                <div class="col-sm-10">
                                    <input type="text" name="alamat_kantor" class="form-control" placeholder="alamat kantor" value="<?= set_value('alamat_kantor') ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Lokasi</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="kode_lokasi">
                                        <?php foreach ($locations as $location) : ?>
                                            <option value="<?= $location->id ?>" <?= set_select('kode_lokasi', $location->id) ?>><?= $location->nama_lokasi ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">investasi tambahan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="investasi_tambahan" class="form-control" placeholder="investasi tambahan" value="<?= set_value('investasi_tambahan', 0) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">investasi total</label>
                                <div class="col-sm-10">
                                    <input type="text" name="investasi_total" class="form-control" placeholder="investasi total" value="<?= set_value('investasi_total', 0) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">tki</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tki" class="form-control" placeholder="tki" value="<?= set_value('tki', 0) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">tka</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tka" class="form-control" placeholder="tka" value="<?= set_value('tka', 0) ?>">
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
                                <input type="submit" value="Simpan" class="btn btn-success">
                                <a href="<?= BASE_URL('investasi/pmdn') ?>" class="btn btn-warning ml-3">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

<!-- /.container-fluid -->