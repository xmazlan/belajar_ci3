<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">

        <div class="col-lg-12 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Selamat Datang <?= $user['fullname'] ?></h6>
                </div>
                <div class="card-body">
                    <p>Selamat datang <?= $user['fullname'] ?> di Panel Belajar CI3</p>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- /.container-fluid -->