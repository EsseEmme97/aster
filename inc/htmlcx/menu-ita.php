<?php

function setActiveLink($pages)
{
  $current_page = basename($_SERVER["SCRIPT_NAME"]);
  if (in_array($current_page, $pages)) {
    echo "current-menu-ancestor";
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
<header class="header-area header-1 header-sticky  section-gap-x">
  <div class="header-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="header-top-content">
            <p class="topbar-text"><i class="fa fa-phone"></i><a href="tel:+0445123123">+39 0445 123 123</a>
            </p>
            <div class="header-info">
              <div class="info-item">
                <span><i class="tji-location"></i></span>
                <a href="#">Find a Location!</a>
              </div>
              <div class="info-item">
                <span><i class="tji-phone-3"></i></span>
                <a href="tel:8089091313">808-909-1313</a>
              </div>
              <div class="info-item">
                <div class="social-links style-2">
                  <ul>
                    <li><a href="https://www.facebook.com/" target="_blank"><i
                          class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li><a href="https://www.instagram.com/" target="_blank"><i
                          class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li><a href="https://x.com/" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/" target="_blank"><i
                          class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="header-wrapper">
          <!-- site logo -->
          <div class="site_logo">
            <a class="logo" href="index.html"><img src="<?= $pathindex ?>assets\images\logo\Aster_Elettronica-Logo.svg" alt="logo-principale"></a>
          </div>

          <!-- navigation -->
          <div class="menu-area d-none d-lg-inline-flex align-items-center">
            <nav id="mobile-menu" class="mainmenu">
              <ul>
                <li class="<?= setActiveLink(["index.php"])?>"><a href="<?= $pathindex ?>">Home</a>
                </li>
                <li class="<?= setActiveLink(["azienda.php"]) ?>"><a href="<?= $pathindex ?>azienda">Aster Elettronica</a>
                </li>
                <li class="<?= setActiveLink(["produzione.php"]) ?>"><a href="<?= $pathindex ?>produzione-e-assemblaggio">Produzione & Assemblaggio</a>
                </li>
                <li class="<?= setActiveLink(["news.php"]) ?>"><a href="<?= $pathindex ?>news">News</a>
                </li>
                <li class="<?= setActiveLink(["lavora-con-noi.php"]) ?>"><a href="<?= $pathindex ?>lavora-con-noi">Lavora con noi</a>
                </li>
                <li class="<?= setActiveLink(["contatti.php"]) ?>"><a href="<?= $pathindex ?>contatti">Contatti</a></li>
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