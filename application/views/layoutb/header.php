<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> <?= $site->email ?></li>
                            <li><?= $site->alamat ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="<?= $site->facebook ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="<?= $site->instagram ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="<?= $site->wa         ?>" target="_blank"><i class="fa fa-whatsapp"></i></a>
                        </div>
                        <div class="header__top__right__auth">
                            <a href="#"><?= $site->telepon ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="./index.html"><img src="<?= base_url('assets/upload/image/' . $site->logo) ?>" alt="<?= $site->namaweb ?> | <?= $site->tagline ?>" width="150"></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <!-- home -->
                        <li class="active"><a href="<?= base_url() ?>">Beranda</a></li>
                        <li><a href="<?= base_url('produk') ?>">Produk</a></li>
                        <li><a href="<?= base_url('kontak') ?>">Kontak</a></li>
                    </ul>
                </nav>
            </div>
            <!-- <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>$150.00</span></div>
                </div>
            </div> -->
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->