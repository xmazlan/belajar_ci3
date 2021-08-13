<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        <a href="<?= BASE_URL('investasi/pmdn_create') ?>" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
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
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th rowspan="1" colspan="1">Nama</th>
                                    <th rowspan="1" colspan="1">No</th>
                                    <th rowspan="1" colspan="1">Bidang</th>
                                    <th rowspan="1" colspan="1">Alamat</th>
                                    <th rowspan="1" colspan="1">Lokasi</th>
                                    <th rowspan="1" colspan="1">Tambahan</th>
                                    <th rowspan="1" colspan="1">Total</th>
                                    <th rowspan="1" colspan="1">TKI</th>
                                    <th rowspan="1" colspan="1">TKA</th>
                                    <th rowspan="1" colspan="1">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($investment as $invest) : ?>
                                    <tr class="odd">
                                        <td class="sorting_1"><?= $invest->nama_perusahaan ?></td>
                                        <td><?= $invest->no_dan_tgl ?></td>
                                        <td><?= $invest->bidang_usaha ?></td>
                                        <td><?= $invest->alamat_kantor ?></td>
                                        <td><?= $invest->nama_lokasi ?></td>
                                        <td><?= ucwords($invest->mata_uang) ?> <?= $invest->investasi_tambahan ?></td>
                                        <td><?= ucwords($invest->mata_uang) ?> <?= $invest->investasi_total ?></td>
                                        <td><?= $invest->tki ?></td>
                                        <td><?= $invest->tka ?></td>
                                        <td>
                                            <a href="<?= BASE_URL('investasi/pmdn_update/' . $invest->id_investasi) ?>" class="btn btn-sm btn-warning">Ubah</a>
                                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
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