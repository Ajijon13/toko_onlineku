<?php
//ambil data menu dari konfigurasi
$berita    = $this->berita_model->listing();

?>
<!-- Blog Section Begin -->
<section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <hr class="w-100 bg-success">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__text">
                        <h5><a href="#"><?= $berita->judul_berita_1 ?></a></h5>
                        <p><?= $berita->keterangan_1 ?> </p>
                    </div>
                    <div class="blog__item__text">
                        <h5><a href="#"><?= $berita->judul_berita_2 ?></a></h5>
                        <p><?= $berita->keterangan_2 ?> </p>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->