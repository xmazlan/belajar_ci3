<?php defined('BASEPATH') or exit('No direct script access allowed');

function nav_item($segment)
{
    $ci = get_instance();
    if ($segment == $ci->uri->segment(2)) {
        $nav_item = 'nav-item active';
    } else {
        $nav_item = 'nav-item';
    }

    return $nav_item;
}

?>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Belajar CI3</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <li class="<?= nav_item('welcome') ?>">
        <a class="nav-link" href="<?= BASE_URL('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dasbor</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="<?= nav_item('wilayah') ?>">
        <a class="nav-link" href="<?= BASE_URL('wilayah') ?>">
            <i class="fas fa-fw fa-map"></i>
            <span>Wilayah</span>
        </a>
    </li>

    <!-- Nav Item - Template Collapse Menu -->
    <li class="<?= nav_item('investasi') ?>">
        <a class="nav-link pb-0 collapsed" href="#" data-toggle="collapse" data-target="#collapseData" aria-expanded="true" aria-controls="collapseData">
            <i class="fas fa-fw fa-bezier-curve"></i>
            <span>Investasi</span>
        </a>
        <div id="collapseData" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu Investasi:</h6>
                <a class="collapse-item" href="#">PMDN</a>
                <a class="collapse-item" href="#">PMA</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <!-- Nav Item - Tables -->
    <li class="<?= nav_item('logout') ?>">
        <a class="nav-link pb-0" data-toggle="modal" data-target="#logoutModal" href="<?= BASE_URL('auth/logout') ?>">
            <i class="fas fa-fw fa-door-open"></i>
            <span>Logout</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider mt-3 d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->