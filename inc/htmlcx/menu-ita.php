<?php

function setActiveLink($pages)
{
  $current_page = basename($_SERVER["SCRIPT_NAME"]);
  if (in_array($current_page, $pages)) {
    echo "attivo";
  }
}

?>

<!-- Preloader Start -->
<div class="tj-preloader is-loading">
  <div class="tj-preloader-inner">
    <div class="tj-preloader-ball-wrap">
      <div class="tj-preloader-ball-inner-wrap">
        <div class="tj-preloader-ball-inner">
          <div class="tj-preloader-ball"></div>
        </div>
        <div class="tj-preloader-ball-shadow"></div>
      </div>
      <div id="tj-weave-anim" class="tj-preloader-text">Caricamento...</div>
    </div>
  </div>
  <div class="tj-preloader-overlay"></div>
</div>
<!-- Preloader end -->

<!-- back to top start -->
<div id="tj-back-to-top"><span id="tj-back-to-top-percentage"></span></div>
<!-- back to top end -->

<!-- start: Header Area -->
<header class="header-area header-1 header-absolute  section-gap-x">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="header-wrapper">
          <!-- site logo -->
          <div class="site_logo">
            <a class="logo" href="index.html"><img src="assets/images/logos/logo.webp" alt=""></a>
          </div>

          <!-- navigation -->
          <div class="menu-area d-none d-lg-inline-flex align-items-center">
            <nav id="mobile-menu" class="mainmenu">
              <ul>
                <li class="current-menu-ancestor"><a href="index.html">Home</a>
                </li>
                <li><a href="about.html">Aster Elettronica</a>
                </li>
                <li><a href="service.html">Produzione & Assemblaggio</a>
                </li>
                <li><a href="service.html">News</a>
                </li>
                <li><a href="service.html">Lavora con noi</a>
                </li>
                <li><a href="contact.html">Contatti</a></li>
              </ul>
            </nav>
          </div>

          <!-- menu bar -->
          <div class="menu_bar mobile_menu_bar d-lg-none">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- end: Header Area -->