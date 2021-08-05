<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        <!-- <a href="<?= BASE_URL('wilayah/create') ?>" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a> -->
    </div>

    <div class="row">

        <div class="col-lg-12 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Kelola Wilayah</h6>
                </div>

                <div class="row">

                    <div class="card-body col-6">
                        <div class="card-body">
                            <a href="<?= BASE_URL('wilayah/create/lokasi') ?>" class="btn btn-primary shadow-sm mb-2"><i class="fas fa-plus fa-sm text-white-50"></i> Lokasi</a>
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th rowspan="1" colspan="1">Nama Lokasi</th>
                                        <th rowspan="1" colspan="1">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($lokasi as $location) : ?>
                                        <tr class="odd">
                                            <td class="sorting_1"><?= $location->nama_lokasi ?></td>
                                            <td>
                                                <a href="<?= BASE_URL('wilayah/edit/lokasi/' . $location->id) ?>" class="btn btn-sm btn-warning">Ubah</a>
                                                <a href="<?= BASE_URL('wilayah/delete/lokasi/' . $location->id) ?>" class="btn btn-sm btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-body col-6">
                        <div class="card-body">
                            <a href="<?= BASE_URL('wilayah/create/negara') ?>" class="btn btn-primary shadow-sm mb-2"><i class="fas fa-plus fa-sm text-white-50"></i> Negara</a>
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th rowspan="1" colspan="1">Nama Negara</th>
                                        <th rowspan="1" colspan="1">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($negara as $country) : ?>
                                        <tr class="odd">
                                            <td class="sorting_1"><?= $country->nama_negara ?></td>
                                            <td>
                                                <a href="<?= BASE_URL('wilayah/edit/negara/' . $country->id) ?>" class="btn btn-sm btn-warning">Ubah</a>
                                                <a href="<?= BASE_URL('wilayah/delete/negara/' . $country->id) ?>" class="btn btn-sm btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- /.container-fluid -->