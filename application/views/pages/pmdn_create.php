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
                                <label class="col-sm-2 col-form-label">nama perusahaan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_perusahaan" class="form-control" placeholder="nama perusahaan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">nomor/tanggal</label>
                                <div class="col-sm-10">
                                    <input type="text" name="no_dan_tgl" class="form-control" placeholder="nomor/tanggal">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">bidang usaha</label>
                                <div class="col-sm-10">
                                    <input type="text" name="bidang_usaha" class="form-control" placeholder="bidang usaha">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">alamat kantor</label>
                                <div class="col-sm-10">
                                    <input type="text" name="alamat_kantor" class="form-control" placeholder="alamat kantor">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">kode lokasi</label>
                                <div class="col-sm-10">
                                    <input type="text" name="kode_lokasi" class="form-control" placeholder="kode lokasi">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">kode negara</label>
                                <div class="col-sm-10">
                                    <input type="text" name="kode_negara" class="form-control" placeholder="kode negara">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">investasi tambahan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="investasi_tambahan" class="form-control" placeholder="investasi tambahan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">investasi total</label>
                                <div class="col-sm-10">
                                    <input type="text" name="investasi_total" class="form-control" placeholder="investasi total">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">tki</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tki" class="form-control" placeholder="tki">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">tka</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tka" class="form-control" placeholder="tka">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">mata uang</label>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="mata_uang" value="usd">
                                        <label class="form-check-label">
                                            usd
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="mata_uang" value="rp">
                                        <label class="form-check-label">
                                            rp
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