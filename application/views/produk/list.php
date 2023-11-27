<?php 
$total = $this->produk_model->total_produk();
?>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?= base_url('theme/frontend/img/breadcrumb.jpg') ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Produk Toko</h2>
                    <div class="breadcrumb__option">
                        <a href="<?= base_url('produk') ?>"> Beranda - Produk </a>
                        <span><?= $title ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Produk</h4>
                        <?php foreach ($listing_kategori as $listing_kategori) { ?>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url('produk/kategori/' . $listing_kategori->slug_kategori) ?>">
                                        <?php echo $listing_kategori->nama_kategori; ?></a>
                                </li>

                            </ul>
                        <?php } ?>
                    </div>

                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="filter__item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="filter__sort">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="filter__found">
                                <h6><span><?= $total->total?> </span> Produk</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="filter__option">
                                <span class="icon_grid-2x2"></span>
                                <span class="icon_ul"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($produk as $produk) { ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?php echo base_url('assets/upload/image/thumbs/' . $produk->gambar) ?>" alt="<?php echo $produk->nama_produk ?>">
                                    <ul class="product__item__pic__hover">
                                        <a href="https://api.whatsapp.com/send?phone=087755572411&text=Halo%2C%20saya%20tertarik%20dengan%20Produk <?= $produk->nama_produk ?>" target="_blank">
                                            <button class="btn btn-success"><span class="fa fa-shopping-cart"></span> Belanja Sekarang</button>
                                        </a>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="<?php echo base_url('produk/detail/' . $produk->slug_produk) ?>">
                                            <?php echo $produk->nama_produk ?></a></h6>
                                    <h5>IDR <?php echo number_format($produk->harga, '0', ',', '.') ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="pagination">
                    <?php echo $pagin; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->