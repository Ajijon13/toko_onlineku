  <?php
    $site     = $this->konfigurasi_model->listing();
    ?>
  <!-- Footer Section Begin -->
  <footer class="footer spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="footer__about">
                      <div class="footer__about__logo">
                          <a href="#"><img src="<?php echo base_url('assets/upload/image/' . $site->logo) ?>" width="160" alt=""></a>
                      </div>
                      <ul>
                          <li><?= $site->alamat ?></li>
                          <li><?= $site->telepon ?></li>
                          <li><?= $site->email ?></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                  <div class="footer__widget">
                      <h6>Useful Links</h6>
                      <ul>
                          <li><a href="#">About Us</a></li>
                          <li><a href="#">About Our Shop</a></li>
                          <li><a href="#">Secure Shopping</a></li>
                          <li><a href="#">Delivery infomation</a></li>
                          <li><a href="#">Privacy Policy</a></li>
                          <li><a href="#">Our Sitemap</a></li>
                      </ul>
                      <ul>
                          <li><a href="#">Who We Are</a></li>
                          <li><a href="#">Our Services</a></li>
                          <li><a href="#">Projects</a></li>
                          <li><a href="#">Contact</a></li>
                          <li><a href="#">Innovation</a></li>
                          <li><a href="#">Testimonials</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-4 col-md-12">
                  <div class="footer__widget">
                      <h6>Social Media Kami</h6>
                      <div class="footer__widget__social">
                          <a href="<?= $site->facebook ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                          <a href="<?= $site->instagram ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                          <a href="<?= $site->wa         ?>" target="_blank"><i class="fa fa-whatsapp"></i></a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="footer__copyright">
                      <div class="footer__copyright__text">
                          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                              Copyright &copy;<script>
                                  document.write(new Date().getFullYear());
                              </script> <?= $site->namaweb?>
                              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                      </div>
                      <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Js Plugins -->
  <script src="<?= base_url('') ?>theme/frontend/js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url('') ?>theme/frontend/js/bootstrap.min.js"></script>
  <script src="<?= base_url('') ?>theme/frontend/js/jquery.nice-select.min.js"></script>
  <script src="<?= base_url('') ?>theme/frontend/js/jquery-ui.min.js"></script>
  <script src="<?= base_url('') ?>theme/frontend/js/jquery.slicknav.js"></script>
  <script src="<?= base_url('') ?>theme/frontend/js/mixitup.min.js"></script>
  <script src="<?= base_url('') ?>theme/frontend/js/owl.carousel.min.js"></script>
  <script src="<?= base_url('') ?>theme/frontend/js/main.js"></script>



  </body>

  </html>