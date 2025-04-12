<?php
$page_title = 'Contact || SCVBA';
include('./include/head.php');
?>
  <?php include('./include/header.php'); ?>
<section class="inner-banner contact-banner">
  <div class="banner-wrapper position-relative z-1">
    <div class="container">
      <div class="row">
        <?php include('./include/social-links.php'); ?>
        <div class="col-lg-5" data-aos="fade-up"
          data-aos-easing="linear"
          data-aos-duration="1500">
          <div class="card" style="max-width:100%">
            <div class="shape-1"></div>
            <h1 class="hd-70">
              CONTACT US
            </h1>
          </div>
        </div>
      </div>
      <a href="#sec-1" class="">
        <div class="top-to-bottom">
          <i class="fa-solid fa-arrow-down"></i>
        </div>
      </a>
    </div>
  </div>
</section>
<section class="contact-page-sec pt-100" id="sec-1">
  <div class="container">
    <div class="row align-items-center row-gap-40">
      <div class="col-lg-6" data-aos="fade-right"
        data-aos-easing="linear"
        data-aos-duration="1500">
        <h2 class="hd-70 heading text-primary-theme mb-20">CONTACT<span>INFO</span></h2>
        <ul class="contact-links">
          <li class="d-flex align-items-center">
            <span class="icon-wrapper">
              <i class="fa-solid fa-phone"></i>
            </span>
            <a href="tel:+61383760628">+613 83760628</a>
          </li>
          <li class="d-flex align-items-center">
            <span class="icon-wrapper">
              <i class="fa-solid fa-envelope"></i>
            </span>
            <a href="mailto:Info@scvba.com">Info@scvba.com</a>
          </li>
          <li class="d-flex align-items-center">
            <span class="icon-wrapper">
              <i class="fa-solid fa-location-dot"></i>
            </span>
            <a href="#">
              <span>4758 Sunburst Drive Fort Myers, FL 33908</span>
            </a>
          </li>
        </ul>
        <h3 class="heading hd-70  text-primary-theme mb-20">SOCIAL <span>MEDIA</span></h3>
        <ul class="d-flex primary-list justify-content-between social-networks" style="max-width: 43rem;">
          <li><a href="" class="text-uppercase">FACEBOOK</a></li>
          <li><a href="" class="text-uppercase">instagram</a></li>
          <li><a href="" class="text-uppercase">twitter</a></li>
        </ul>
      </div>
      <div class="col-lg-6" data-aos="fade-left"
     data-aos-easing="linear"
     data-aos-duration="1500">
        <div class="img-wrapper">
          <img src="./assets/images/contact.png" alt="contact">
        </div>
      </div>
    </div>
  </div>
</section>
<?php include('./include/footer.php'); ?>