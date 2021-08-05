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
                    <h6 class="m-0 font-weight-bold text-primary"><?= $jenis; ?></h6>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <form method="post" accept-charset="utf-8" action="<?= BASE_URL('wilayah/edit/' . $jenis . '/' . $wilayah->id) ?>">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">nama wilayah</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_wilayah" class="form-control" placeholder="nama wilayah" value="<?= set_value('nama_wilayah', $wilayah->nama) ?>">
                                    <?= form_error('nama_wilayah', '<small class="text-danger">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <input type="submit" value="Ubah" class="btn btn-success">
                                <a href="<?= BASE_URL('wilayah') ?>" class="btn btn-warning ml-3">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- /.container-fluid -->