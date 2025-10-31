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

<!-- start: Hamburger Menu -->
<div class="hamburger-area d-lg-none">
  <div class="hamburger_bg"></div>
  <div class="hamburger_wrapper">
    <div class="hamburger_inner">
      <div class="hamburger_top d-flex align-items-center justify-content-between">
        <div class="hamburger_logo">
          <a href="<?= $pathindex ?>" class="mobile_logo">
            <img src="<?= $pathindex ?>assets/images/logo/Aster_Elettronica-Logo.svg" alt="logo">
          </a>
        </div>
        <div class="hamburger_close">
          <button class="hamburger_close_btn"><i style="color:var(--grigio-scuro)" class="fa-thin fa-times"></i></button>
        </div>
      </div>
      <div class="hamburger_menu">
        <div class="mobile_menu"></div>
      </div>
      <!-- <div class="hamburger-infos">
        <span class="hamburger-title d-block">Contatti</span>
        <div class="contact-info">
          <div class="contact-item">
            <span class="subtitle">Telefono</span>
            <a class="contact-link" href="tel:+390445123123">+39 0445 123 123</a>
          </div>
          <div class="contact-item">
            <span class="subtitle">Email</span>
            <a class="contact-link" href="mailto:info@aster.it">info@aster.it</a>
          </div>
          <div class="contact-item">
            <span class="subtitle">Indirizzo</span>
            <span class="contact-link">Via Lungo Gogna, 45 · 36015 Schio (VI)</span>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</div>
<!-- end: Hamburger Menu -->

<!-- start: Header Area -->
<header class="header-area header-1 header-sticky  section-gap-x">
  <div class="header-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="header-top-content">
            <div class="d-flex justify-content-between flex-grow-1 flex-lg-grow-0 justify-content-lg-start gap-4">
              <p class="topbar-text"><i class="fa fa-phone me-2"></i><a href="tel:+0445123123">+39 0445 123 123</a>
              </p>
              <p class="topbar-text"><i class="fa fa-envelope me-2"></i><a href="mailto:info@aster.it">info@aster.it</a></p>
              <p class="topbar-text d-none d-lg-block"><i class="fa-solid fa-location-dot me-2"></i>Via Lungo Gogna, 45 · 36015 Schio (VI)</p>
            </div>
            <div class="header-info">
              <div class="info-item">
                <ul class="d-flex">
                  <li><a href="https://www.linkedin.com/company/aster-elettronica-s.r.l./" target="_blank"><img src="<?= $pathindex ?>assets/images/icon set/contatti/linkedin.svg" alt="icona linkedin "></a>
                  </li>
                  <li><a href="<?= $pathindex ?>" target="_blank"><img src="<?= $pathindex ?>assets/images/icon set/contatti/lingua.svg" alt="icona lingua"></a>
                  </li>
                </ul>
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
                <li class="<?= setActiveLink(["index.php"]) ?>"><a href="<?= $pathindex ?>">Home</a>
                </li>
                <li class="<?= setActiveLink(["azienda.php","settori.php","servizi.php","servizi.php","sviluppo.php"]) ?> has-dropdown"><a href="<?= $pathindex ?>azienda">Aster Elettronica</a>
                  <ul class="sub-menu  mega-menu-service">
                    <li class="<?= setActiveLink(["azienda.php"]) ?>">
                      <a class="mega-menu-service-single text-center" href="<?= $pathindex ?>azienda">
                        <span class="mega-menu-service-title">Su di noi</span>
                      </a>
                    </li>
                    <li>
                      <a class="mega-menu-service-single text-center" href="service-details.html">
                        <span class="mega-menu-service-title">settori</span>
                      </a>
                    </li>
                    <li>
                      <a class="mega-menu-service-single text-center" href="service-details.html">
                        <span class="mega-menu-service-title">Servizi</span>
                      </a>
                    </li>
                    <li>
                      <a class="mega-menu-service-single text-center" href="service-details.html">
                        <span class="mega-menu-service-title">Ricerca & sviluppo</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="<?= setActiveLink(["produzione.php"]) ?>"><a href="<?= $pathindex ?>produzione-e-assemblaggio">Produzione & Assemblaggio</a>
                </li>
                <li class="<?= setActiveLink(["news.php", "news-dettaglio.php"]) ?>"><a href="<?= $pathindex ?>news">News</a>
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