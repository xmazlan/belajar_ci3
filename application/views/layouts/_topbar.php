<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item no-arrow mx-1">
            <a class="nav-link" href="javascript:history.go(0)" data-toggle="tooltip" title="Refresh"><i class="fas fa-sync-alt fa-fw"></i></a>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['fullname'] ?></span>
                <?php if (!file_exists(FCPATH . 'uploads/users/dp/' . $user['image']) || $user['image'] == NULL) : ?>
                    <img class="img-profile rounded-circle" src="https://i.pravatar.cc/300?img=4">
                <?php else : ?>
                    <img class="img-profile rounded-circle" src="<?= base_url('uploads/users/dp/') . $user['image'] ?>">

                <?php endif ?>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->