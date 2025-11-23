<?
$lingua = 1;
require_once("../inc/global.php");
require_once("../inc/header.php");
require_once("../inc/mysqli.php");
// $database = new DB();
$titleseo = "aster";
$descriptionseo = "descrizione";
$image = $pathindex . "assets/images/Aster_Elettronica-Favicon.png";
$widthseo = "400";
$heightseo = "115";
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <? require_once($pathindex . "inc/tagmanager.php") ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <? require_once($pathindex . "inc/htmlcx/meta-ita.php"); ?>
    <link rel="canonical" href="<?= $pageurlseolan ?>">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= $image ?>" type="image/x-icon">
    <!-- CSS here -->
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/font-awesome-pro.min.css">
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/bexon-icons.css">
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/venobox.min.css">
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/odometer-theme-default.css">
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/meanmenu.css">
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/main.css">
</head>

<body>

    <? require_once($pathindex . "inc/tagmanager_no.php") ?>

    <!-- ==================== Start Navbar ==================== -->

    <? require_once($pathindex . "inc/htmlcx/menu-ita.php") ?>

    <!-- ==================== End Navbar ==================== -->
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main id="primary" class="site-main">
                <div class="space-for-header"></div>
                <!-- start: Breadcrumb Section -->
                <section class="tj-page-header section-gap-x" data-bg-image="<?= $pathindex ?>assets/images/stock/stock-3.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tj-page-header-content text-center">
                                    <h1 class="tj-page-title">Contatti</h1>
                                    <div class="tj-page-link">
                                        <span>
                                            <a href="<?= $pathindex ?>">Home</a>
                                        </span>
                                        <span><i class="tji-arrow-right text-blu-secondario"></i></span>
                                        <span>
                                            <span>Contatti</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-header-overlay"></div>
                </section>
                <!-- end: Breadcrumb Section -->
                <!-- start: Contact Top Section -->
                <div class="tj-contact-area section-gap">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="sec-heading text-center">
                                    <span class="sub-title wow fadeInUp" data-wow-delay=".1s"><i class="tji-box"></i>Contact info</span>
                                    <h2 class="sec-title title-anim"><span>Reach</span> Out to Us</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row row-gap-4">
                            <div class="col-xl-3 col-lg-6 col-sm-6">
                                <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="contact-icon">
                                        <i class="tji-location-3"></i>
                                    </div>
                                    <h3 class="contact-title">Our Location</h3>
                                    <p>993 Renner Burg, West Rond, MT 94251-030</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6">
                                <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="contact-icon">
                                        <i class="tji-envelop"></i>
                                    </div>
                                    <h3 class="contact-title">Email us</h3>
                                    <ul class="contact-list">
                                        <li><a href="mailto:support@bexon.com">support@bexon.com</a></li>
                                        <li><a href="mailto:info@bexon.com">info@bexon.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6">
                                <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="contact-icon">
                                        <i class="tji-phone"></i>
                                    </div>
                                    <h3 class="contact-title">Call us</h3>
                                    <ul class="contact-list">
                                        <li><a href="tel:10095447818">+1 (009) 544-7818</a></li>
                                        <li><a href="tel:10098801810">+1 (009) 880-1810</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6">
                                <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".9s">
                                    <div class="contact-icon">
                                        <i class="tji-chat"></i>
                                    </div>
                                    <h3 class="contact-title">Live chat</h3>
                                    <ul class="contact-list">
                                        <li><a href="mailto:livechat@bexon.com">livechat@bexon.com</a></li>
                                        <li class="active"><a href="contact.html">Need help?</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: Contact Top Section -->
                <!-- start: Service Section -->
                <section class="tj-service-section service-2 section-gap section-gap-x slidebar-stickiy-container bg-carta-da-zucchero">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="service-wrapper-2">
                                    <? for ($i = 0; $i < 4; $i++): ?>
                                        <div class="service-item-wrapper tj-fadein-right-on-scroll">
                                            <div class="service-item style-2 ">
                                                <div class="title-area">
                                                    <h4 class="title"><a href="service-details.html">Business Strategy Development</a></h4>
                                                </div>
                                                <div class="service-content">
                                                    <p class="desc">Through a combination of data-driven insights and innovative approaches, we work
                                                        closely with you to develop customized.</p>
                                                </div>
                                            </div>
                                        </div>
                                    <? endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-shape-1">
                        <img src="<?= $pathindex ?>assets/images/shape/pattern-2.svg" alt="pattern di sfondo">
                    </div>
                    <div class="bg-shape-2">
                        <img src="<?= $pathindex ?>assets/images/shape/pattern-3.svg" alt="pattern di sfondo">
                    </div>
                </section>
                <!-- end: Service Section -->
                <!-- start: Contact Section -->
                <section class="tj-contact-section-2 section-gap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-form wow fadeInUp" data-wow-delay=".1s">
                                    <h3 class="title">Feel Free to Get in Touch or Visit our Location.</h3>
                                    <form id="contact-form">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-input">
                                                    <input type="text" name="cfName">
                                                    <label class="cf-label">Full Name <span>*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-input">
                                                    <input type="email" name="cfEmail">
                                                    <label class="cf-label">Email Address <span>*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-input">
                                                    <input type="tel" name="cfPhone">
                                                    <label class="cf-label">Phone number <span>*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-input">
                                                    <div class="tj-nice-select-box">
                                                        <div class="tj-select">
                                                            <select name="cfSubject">
                                                                <option value="0">Chose a option</option>
                                                                <option value="1">Business Strategy</option>
                                                                <option value="2">Customer Experience</option>
                                                                <option value="3">Sustainability and ESG</option>
                                                                <option value="4">Training and Development</option>
                                                                <option value="5">IT Support & Maintenance</option>
                                                                <option value="6">Marketing Strategy</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-input message-input">
                                                    <textarea name="cfMessage" id="message"></textarea>
                                                    <label class="cf-label">Type message <span>*</span></label>
                                                </div>
                                            </div>
                                            <div class="submit-btn">
                                                <button class="tj-primary-btn" type="submit">
                                                    <span class="btn-text"><span>Submit Now</span></span>
                                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="map-area wow fadeInUp" data-wow-delay=".3s">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d316440.5712687838!2d-74.01091796224334!3d40.67186885683901!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1745918398047!5m2!1sen!2sbd"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end: Contact Section -->
                <!-- start: Project Section -->
                <section class="h6-project section-gap section-gap-x pt-0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="h6-project-inner wow fadeInUp" data-wow-delay="0.6s">
                                    <? for ($i = 0; $i < 8; $i++): ?>
                                        <div class=" project-item h6-project-item ">
                                            <div class="project-item-inner h6-project-item-inner"
                                                data-bg-image="<?= $pathindex ?>assets/images/stock/stock-2.jpg">
                                            </div>
                                        </div>
                                    <? endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-shape-1">
                        <img src="<?= $pathindex ?>assets/images/shape/pattern-2.svg" alt="pattern di sfondo">
                    </div>
                    <div class="bg-shape-2">
                        <img src="<?= $pathindex ?>assets/images/shape/pattern-3.svg" alt="pattern di sfondo">
                    </div>
                </section>
                <!-- end: Project Section -->
                <!-- start: Cta Section -->
                <section class="tj-cta-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="cta-area">
                                    <div class="cta-content">
                                        <h2 class="title title-anim">Let’s Build Future Together.</h2>
                                        <div class="cta-btn wow fadeInUp" data-wow-delay=".6s">
                                            <a class="tj-primary-btn " href="<?= $pathindex ?>contatti">
                                                <span class="btn-text"><span>Contattaci</span></span>
                                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="cta-img">
                                        <img src="<?= $pathindex ?>assets/images/stock/stock-3.jpg" alt="immagine cta">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end: Cta Section -->
            </main>
            <!-- ==================== Start Footer ==================== -->
            <? require_once($pathindex . "inc/htmlcx/footer-ita.php") ?>
            <!-- ==================== End Footer ==================== -->
        </div>
    </div>


    <!-- JS here -->
    <script src="<?= $pathindex ?>assets/js/jquery.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/gsap.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/ScrollSmoother.js"></script>
    <script src="<?= $pathindex ?>assets/js/gsap-scroll-to-plugin.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/gsap-scroll-trigger.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/gsap-split-text.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/swiper.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/odometer.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/venobox.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/appear.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/wow.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/meanmenu.js"></script>
    <script src="<?= $pathindex ?>assets/js/main.js"></script>
</body>

</html>