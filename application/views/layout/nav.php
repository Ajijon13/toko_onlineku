<?php
//ambil data menu dari konfigurasi
$nav_produk         = $this->konfigurasi_model->nav_produk();
$nav_produk_mobile  = $this->konfigurasi_model->nav_produk();

?>
<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Kategori Produk</span>
                    </div>
                    <ul>
                        <?php foreach ($nav_produk as $nav_produk) { ?>
                            <li><a href="" <?= base_url('produk/kategori/' . $nav_produk->slug_kategori) ?>>
                                    <?= $nav_produk->nama_kategori ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5><?= $site->telepon ?></h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
                
                <div class="hero__item set-bg" data-setbg="<?=base_url('theme/frontend/img/hero/banner.jpg')?>">
                    <div class="hero__text">
                        <span>FRUIT FRESH</span>
                        <h2>Vegetable <br />100% Organic</h2>
                        <p>Free Pickup and Delivery Available</p>
                        <a href="#" class="primary-btn">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Humberger Begin menu mobile -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="<?= base_url('assets/upload/image/' . $site->logo) ?>" alt="" width="50"></a>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="<?= base_url() ?>">Beranda</a></li>
            <li><a href="<?= base_url('kontak') ?>">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="<?= $site->facebook ?>" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="<?= $site->instagram ?>" target="_blank"><i class="fa fa-instagram"></i></a>
        <a href="<?= $site->wa         ?>" target="_blank"><i class="fa fa-whatsapp"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> <?= $site->email ?></li>
            <li><?= $site->alamat ?></li>
        </ul>
    </div>
</div>
<!-- Humberger End -->