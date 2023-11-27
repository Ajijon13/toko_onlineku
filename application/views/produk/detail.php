<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?= base_url('theme/frontend/img/breadcrumb.jpg') ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Detail Produk </h2>
                    <div class="breadcrumb__option">
                        <a href="<?= base_url('produk') ?>"> Beranda - Produk</a>
                        <span><?= $title ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large" src="<?php echo base_url('assets/upload/image/thumbs/' . $produk->gambar) ?>" alt="<?php echo $produk->nama_produk ?>">
                    </div>
                    <div class="product__details__pic__slider owl-carousel">
                        <?php
                        if ($gambar) {
                            foreach ($gambar as $gambar) {
                        ?>
                                <img data-imgbigurl="<?php echo base_url('assets/upload/image/thumbs/' . $gambar->gambar) ?>" src="<?php echo base_url('assets/upload/image/' . $gambar->gambar) ?>" alt="<?php echo $gambar->judul_gambar?>">
                        <?php }
                        } ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3><?php echo $produk->nama_produk ?></h3>
                    <div class="product__details__price">IDR <?php echo number_format($produk->harga,'0',',','.') ?> </div>
                    <p><?php echo $produk->keterangan?></p>
                    <a href="https://api.whatsapp.com/send?phone=087755572411&text=Halo%2C%20saya%20tertarik%20dengan%20Produk <?= $produk->nama_produk ?>" target="_blank" class="primary-btn">Beli Sekarang</a>
                    <ul>
                        <li><b>Share on</b>
                            <div class="share">
                                <a href="<?= $site->facebook ?>"><i class="fa fa-facebook"></i></a>
                                <a href="<?= $site->instagram ?>"><i class="fa fa-instagram"></i></a>
                                <a href="<?= $site->wa ?>"><i class="fa fa-whatsapp"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Details Section End -->
