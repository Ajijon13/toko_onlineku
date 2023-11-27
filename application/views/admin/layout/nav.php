<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url('admin/dasbor') ?> " class="brand-link">
    <img src="<?= base_url('') ?>theme/backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"><b>TOKO PROPOIN</b></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('') ?>assets/user/user.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="<?= base_url('') ?>" class="d-block"><?php echo $this->session->userdata('nama'); ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <!-- Menu Dasboard -->
        <li class="nav-item">
          <a href="<?= base_url('admin/dasbor') ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt text-info"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <!-- Menu Produk -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-sitemap"></i>
            <p>
              Produk
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/produk') ?>" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>Data Produk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/produk/tambah') ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Tambah Produk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/kategori') ?>" class="nav-link">
                <i class="fas fa-tags nav-icon"></i>
                <p>Kategori Produk</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Menu User -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-lock"></i>
            <p>
              Pengguna
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/user') ?>" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>Data Pengguna</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/user/tambah') ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Tambah Pengguna</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Menu Banner -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-image"></i>
            <p>
              Banner
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/banner') ?>" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>Data Banner</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/banner/tambah') ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Tambah Banner</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Menu berita -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Berita
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/berita') ?>" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>Data Berita</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Menu Konfigurasi -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-wrench"></i>
            <p>
              Konfigurasi
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/konfigurasi') ?>" class="nav-link">
                <i class="fas fa-home nav-icon"></i>
                <p>Konfigurasi Umum</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/konfigurasi/logo') ?>" class="nav-link">
                <i class="fas fa-image nav-icon"></i>
                <p>Konfigurasi Logo</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/konfigurasi/icon') ?>" class="nav-link">
                <i class="fas fa-home nav-icon"></i>
                <p>Konfigurasi Icon</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('login/logout') ?>" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p>Logout</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $title ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url('admin/produk') ?>"><?= $title; ?></a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">