<?php
$kategori_produks = $this->kategori_model->listing(); 
?>
<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <?php foreach ($kategori_produks as $kategori_produk) { ?>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo base_url('assets/upload/kategori/image/thumbs/' . $kategori_produk->gambar) ?>">
                            <h5><a href="#"><?php echo $kategori_produk->nama_kategori ?></a></h5>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->