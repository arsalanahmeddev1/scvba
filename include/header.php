<?php
// Get the current page filename
$current_page = basename($_SERVER['PHP_SELF']);
// Handle home page special case
if ($current_page == 'index.php' || $current_page == '') {
  $current_page = '/';
}
?>
<header class="header" data-aos="fade-down"
  data-aos-easing="linear"
  data-aos-duration="1000">
  <div class="container">
    <div class="header-container">
      <div class="d-flex align-items-center justify-content-between">
        <div class="">
          <div class="logo">
            <a href="./"><img src="./assets/images/logo.png" alt="logo"></a>
          </div>
        </div>
        <div class="flex-grow-1" style="max-width: 80rem;">
          <div class="primary-navs">
            <div class="primary-navs-inner">
              <ul class="primary-navs-list d-flex align-items-center justify-content-between">
                <div class="close-icon">
                  <i class="fa-solid fa-xmark menu-toggle"></i>
                </div>
                <div class="close-icon">
                  <i class="fa-solid fa-xmark menu-toggle"></i>
                </div>
                <li class="nav-item"><a class="navs <?php echo ($current_page == '/' || $current_page == 'index.php') ? 'active' : ''; ?>" href="./">Home</a></li>
                <li class="nav-item"><a class="navs <?php echo ($current_page == 'about-us.php') ? 'active' : ''; ?>" href="./about-us.php">About Us</a></li>
                <li class="nav-item"><a class="navs <?php echo ($current_page == 'benefits.php') ? 'active' : ''; ?>" href="./benefits.php">Benefits</a></li>
                <li class="nav-item"><a class="navs <?php echo ($current_page == 'member.php') ? 'active' : ''; ?>" href="./member.php">Member Directory</a></li>
                <li class="nav-item"><a class="navs <?php echo ($current_page == 'registration.php') ? 'active' : ''; ?>" href="./registration.php">Registration</a></li>
                <li class="nav-item"><a class="navs <?php echo ($current_page == 'events.php') ? 'active' : ''; ?>" href="./events.php">Events</a></li>
                <li class="nav-item"><a class="navs <?php echo ($current_page == 'coming-soon.php') ? 'active' : ''; ?>" href="./coming-soon.php">Project Hub</a></li>
                <li class="nav-item"><a class="navs <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>" href="./contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="">
          <div class="menu-icon d-flex justify-content-end">
            <i class="fa-solid fa-bars menu-toggle"></i>
          </div>
          <a href="tel:+61383760628" class="d-flex header-right justify-content-end align-items-center gap-10">
            <div>
              <div class="d-flex align-items-center justify-content-center circle-md">
                <img src="./assets/images/call.png" alt="call">
              </div>
            </div>
            <div>
              <span class="fw-500 text-primary-theme d-block">Call us at:</span>
              <span class="fw-700 text-primary-theme fs-24">+613 8376 628</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</header>