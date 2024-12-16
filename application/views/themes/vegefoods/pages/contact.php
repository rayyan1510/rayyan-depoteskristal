<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<style type="text/css">
  /* <!--
.style1 {
	color: #FFFBF0;
	font-size: 42px;
	font-weight: bold;
}
--> */
</style>

<div class="hero-wrap hero-bread" style="background-image: url('<?php echo get_theme_uri('images/industri.jpg'); ?>');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><?php echo anchor(base_url(), 'Home'); ?></span>
          <span>Contact us</span>
        </p>
        <h1 class="mb-0 bread">Hubungi Kami</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section contact-section bg-light">
  <div class="container">
    <!-- row -->
    <div class="row d-flex mb-5 contact-info">
      <div class="w-100"></div>
      <!-- col 1 -->
      <div class="col-md-4 d-flex">
        <div class="info bg-white p-4">
          <p><span>Alamat</span> <?php echo get_settings('store_address'); ?></p>
        </div>
      </div>
      <!-- end col 1 -->
      <!-- col 2 -->
      <div class="col-md-4 d-flex">
        <div class="info bg-white p-4">
          <p><span>Phone:</span> <a href="#">+62 812-1178-0478</p>
        </div>
      </div>
      <!-- end col 2 -->
      <!-- col 3 -->
      <div class="col-md-4 d-flex">
        <div class="info bg-white p-4">
          <p><span>Email:</span> <a href="#"><?php echo get_settings('store_email'); ?></a></p>
        </div>
      </div>
      <!-- end col 3 -->
    </div>
    <!-- end row -->

    <!-- row 2 -->
    <div class="row block-9">
      <div class="col-md-12 d-flex">
        <form action="#" class="bg-white p-5 contact-form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      </div>
    </div>
    <!-- end row 2 -->
  </div>
  <!-- end container -->
</section>