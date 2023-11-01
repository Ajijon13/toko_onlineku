<?php
//ambil data menu dari konfigurasi
$kategori_produks           = $this->konfigurasi_model->kategori_produk();
$nav_produks                = $this->konfigurasi_model->nav_produk();
$produk                     = $this->produk_model->listing();

?>
<section class="featured spad">


    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Produk Kami</h2>
                </div>

                <div class="featured__controls">

                    <ul>

                        <li class="active" data-filter="*">All</li>
                        <?php foreach ($nav_produks as $nav_produk) { ?>
                            <li data-filter=".<?= $nav_produk->slug_kategori ?>">
                                <?= $nav_produk->nama_kategori ?></li>
                        <?php } ?>
                    </ul>

                </div>

            </div>
        </div>
        <div class="row featured__filter">

            <?php foreach ($kategori_produks as $kategori_produk) { ?>

                <div class="col-lg-3 col-md-4 col-sm-6 mix <?= $kategori_produk->slug_kategori ?>">


                    <?php if ($kategori_produk->slug_kategori == $kategori_produk->slug_kategori) { ?>

                        <div class="featured__item">

                            <div class="featured__item__pic set-bg" data-setbg="<?php echo base_url('assets/upload/image/thumbs/' . $kategori_produk->gambar) ?>">
                                <ul class="featured__item__pic__hover">
                                    <a href="https://api.whatsapp.com/send?phone=087755572411&text=Halo%2C%20saya%20tertarik%20dengan%20Produk <?= $kategori_produk->nama_produk ?>" target="_blank">
                                        <button class="btn btn-success"><span class="fa fa-shopping-cart"></span> Belanja Sekarang</button>
                                    </a>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#"><?php echo $kategori_produk->nama_produk ?></a></h6>
                                <h5><?php echo $kategori_produk->harga ?></h5>
                            </div>

                        </div>



                    <?php } ?>

                </div>

            <?php } ?>

        </div>

    </div>

</section>
<!-- Featured Section End -->