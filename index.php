<?php
$page_title = 'Home || SCVBA';
include('./include/head.php');
?>
<?php include('./include/header.php'); ?>
<section class="hero-banner">
  <div class="banner-wrapper">
    <div class="container">
      <div class="row">
        <?php include('./include/social-links.php'); ?>
        <div class="col-lg-8">
          <div class="card" data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="1500">
            <div class="shape-1"></div>
            <h1 class="fw-700 fs-30 text-white text-uppercase">
              We are South-Central Virginia businesses creating jobs,
              promoting local business owners and workers, and
              knocking down barriers to economic opportunity.
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
<section class="who-we-are py-70" id="sec-1">
  <div class="container">
    <div class="row row-gap-70">
      <div class="col-lg-6" data-aos="fade-right"
        data-aos-easing="linear"
        data-aos-duration="1500">
        <div class="img-wrapper">
          <img src="./assets/images/who-we-are-01.png" class="" alt="About scvba">
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left"
        data-aos-easing="linear"
        data-aos-duration="1500">
        <span class="text-uppercase hd-24 ">about scvba</span>
        <h2 class="text-uppercase hd-42 mb-20">who we are</h2>
        <p class="para mb-20">
          SCVBA is an alliance of local businesses providing the goods, services, and labor needs for major infrastructure projects and other economic development located in South Central Virginia.
        </p>
        <p class="para">
          And we are a one-stop resource for infrastructure owners and general contractors to source local workers, construction goods and services, food, fuel, supplies, and other needs to support their projects in our communities.
        </p>
      </div>
      <div class="col-lg-3" data-aos="fade-right"
        data-aos-easing="linear"
        data-aos-duration="1500">
        <h3 class="hd-42 mb-10 text-uppercase">OUR Mission</h3>
        <p class="para">
          SCVBA ensures that local workers and businesses are always the first choice for providing construction, operational and related services for large infrastructure projects.
        </p>
      </div>
      <div class="col-lg-9" data-aos="fade-left"
        data-aos-easing="linear"
        data-aos-duration="1500">
        <img src="./assets/images/who-we-are-02.png" class="our-mission" alt="our mission">
      </div>
    </div>
  </div>
</section>
<section class="sec-3" id="alliance-sec">
  <div class="container-flid">
    <div class="row row-gap-40">
      <div class="col-lg-8">
        <img src="./assets/images/welcome.png" class="h-100 object-fit-cover" alt="">
      </div>
      <div class="col-lg-4" data-aos="fade-left"
        data-aos-easing="linear"
        data-aos-duration="1500">
        <h3 class="hd-55 text-white text-uppercase mb-30">Alliance Area</h3>
        <p class="para text-white mb-30">
          SCVBA includes, but is not limited to, <br> businesses within the following counties:
        </p>
        <p class="para text-white mb-30">
          Amelia, Nottoway, Goochland, Halifax, Charlotte, Pittsylvania, Stafford, Spotsylvania,
        </p>
        <p class="para text-white mb-30">
          Expansion anticipated into Buckingham, Henrico, and Louisa Counties coming in the near future!
        </p>
        <button class="btn btn-primary">JOIN US</button>
      </div>
    </div>
  </div>
</section>
<section class="member-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6" data-aos="flip-left"
        data-aos-easing="linear"
        data-aos-duration="1500">
        <div class="card position-relative">
          <h4 class="hd-55 text-white text-uppercase">Become a Member</h4>
          <p class="text-white para mb-20">
            The South-Central Virginia Business Alliance connects the best local talent, services, goods, and supplies to the major economic opportunities of construction, maintenance, and operations.
          </p>
          <p class="text-white para mb-20">
            We promote and advocate for all local businesses within our <a href="#alliance-sec" class="text-secondry-theme">Alliance Areas.</a>
          </p>
          <div class="ms-auto">
            <a href="javascript:;" class="btn btn-primary text-capitalize">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include('./include/footer.php') ?>