<?php
//ambil data menu dari konfigurasi
$nav_produk         = $this->konfigurasi_model->nav_produk();
$banners             = $this->konfigurasi_model->banner();

?>
<style>
    .carousel-caption {
        position: absolute;
        top: 0;
        right: 0;
        left: 60%;
        bottom: 0;
        transform: translateY(0%);
        background-color: rgba(111, 103, 103, 0.4);
        /* Warna hitam dengan tingkat keputihan 0.8 */

      
        text-orientation: upright;
        /* Orientasi tulisan dan kotak tegak */
        writing-mode: horizontal-tb;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .carousel-caption h2 {
        color: white;
        /* Warna tulisan diubah menjadi putih */
        margin-top: 30%;
        /* Menghilangkan margin pada tulisan */
    }

    .carousel-caption p {
        color: white;
        /* Warna tulisan diubah menjadi putih */

    }
    .buy-now-button {
            margin-top: 0px;
        }

    @media (max-width: 411px) {

        /* Ukuran layar kecil, seperti pada layar HP */
        .carousel-caption {
            writing-mode: horizontal-tb;
            text-orientation: mixed;
            top: 0;
            right: 0;
            left: 60%;
            bottom: 0;
            transform: translateY(0%);
            border-radius: 0;
        
        }

        .carousel-caption h2 {
            font-size: 80%;
        }

        .carousel-caption p {
            font-size: 50%;
        }
    }

    @media (min-width: 412px) and (max-width: 576px) {

        /* Ukuran layar medium, seperti pada layar Android dengan lebar 412px atau lebih */
        .carousel-caption h2 {
            font-size: 80%;
        }

        .carousel-caption p {
            font-size: 50%;
        }

    }

    @media (min-width: 577px) and (max-width: 768px) {

        /* Ukuran layar tablet */
        .carousel-caption h2 {
            font-size: 1.8rem;
        }
    }

    @media (min-width: 769px) and (max-width: 1024px) {

        /* Ukuran layar laptop */
        .carousel-caption h2 {
            font-size: 2rem;
        }
    }
</style>
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
                            <li><a href=" <?= base_url('produk/kategori/' . $nav_produk->slug_kategori) ?>">
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
                                Semua Kategori
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
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <?php $no = 0; ?>
                    <div class="carousel-inner">
                        <?php foreach ($banners as $banner) : ?>

                            <?php $no++;  ?>
                            <div class="carousel-item <?php if ($no <= 1) {
                                                            echo "active";
                                                        } ?>">
                                <img src="<?php echo base_url('assets/upload/banner/image/thumbs/' . $banner->gambar) ?>" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-block">
                                    <h2 class="font-weight-bold"><?php echo $banner->judul ?></h2>
                                    <p><?php echo $banner->keterangan ?>
                                    </p>
                                    <a href="<?php echo base_url('produk') ?>" class="primary-btn buy-now-button">SHOP NOW</a>
                                    </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <!-- <div class="hero__item owl-carousel set-bg " data-setbg="<?= base_url('theme/frontend/img/hero/banner.jpg') ?>">
                    <div class="hero__text">
                        <span>FRUIT FRESH</span>
                        <h2>Vegetable <br />100% Organic</h2>
                        <p>Free Pickup and Delivery Available</p>
                        <a href="#" class="primary-btn">SHOP NOW</a>
                    </div>
                </div> -->
        </div>
    </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Humberger Begin menu mobile -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="<?= base_url('assets/upload/image/' . $site->logo) ?>" alt="" width="160"></a>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="<?= base_url() ?>">Beranda</a></li>
            <li><a href="<?= base_url('produk') ?>">Produk</a></li>
            <li><a href="<?= base_url('kontak') ?>">Kontak</a></li>
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