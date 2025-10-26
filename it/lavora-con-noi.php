<?
$lingua = 1;
require_once("../inc/global.php");
require_once("../inc/header.php");
require_once("../inc/mysqli.php");
// $database = new DB();
$titleseo = "aster";
$descriptionseo = "descrizione";
$image = $pathindex . "assets\images\favicon\Aster_Elettronica-Favicon.png";
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
                                    <h1 class="tj-page-title">Lavora con noi</h1>
                                    <div class="tj-page-link">
                                        <span><i class="tji-home"></i></span>
                                        <span>
                                            <a href="<?= $pathindex ?>">Home</a>
                                        </span>
                                        <span><i class="tji-arrow-right"></i></span>
                                        <span>
                                            <span>Lavora con noi</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-header-overlay" data-bg-image="assets/images/shape/pheader-overlay.webp"></div>
                </section>
                <!-- end: Breadcrumb Section -->
                <!-- start: Faq Section -->
                <section class="tj-faq-section section-gap section-separator">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="sec-heading text-center">
                                    <span class="sub-title wow fadeInUp" data-wow-delay=".1s"><i class="tji-box"></i>Common
                                        Questions</span>
                                    <h2 class="sec-title title-anim">Need <span>Help?</span> Start Here...</h2>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="accordion tj-faq" id="faqOne">
                                        <div class="accordion-item active wow fadeInUp" data-wow-delay=".3s">
                                            <button class=" faq-title" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1"
                                                aria-expanded="true">What services does Bexon offer to clients?</button>
                                            <div id="faq-1" class="collapse show" data-bs-parent="#faqOne">
                                                <div class="accordion-body faq-text">
                                                    <p>Getting started is easy! Simply reach out to us through our contact form or give us a call,
                                                        and
                                                        we’ll schedule a consultation to discuss your project and how we can best assist you. Our
                                                        team
                                                        keeps you informed throughout the process, ensuring quality control and timely delivery.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq-2" aria-expanded="false">How do I get started with Corporate
                                                Business?</button>
                                            <div id="faq-2" class="collapse" data-bs-parent="#faqOne">
                                                <div class="accordion-body faq-text">
                                                    <p>Getting started is easy! Simply reach out to us through our contact form or give us a call,
                                                        and
                                                        we’ll schedule a consultation to discuss your project and how we can best assist you. Our
                                                        team
                                                        keeps you informed throughout the process, ensuring quality control and timely delivery.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq-3" aria-expanded="false">How do you ensure the success of a
                                                project?</button>
                                            <div id="faq-3" class="collapse" data-bs-parent="#faqOne">
                                                <div class="accordion-body faq-text">
                                                    <p>Getting started is easy! Simply reach out to us through our contact form or give us a call,
                                                        and
                                                        we’ll schedule a consultation to discuss your project and how we can best assist you. Our
                                                        team
                                                        keeps you informed throughout the process, ensuring quality control and timely delivery.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq-4" aria-expanded="false">How long will it take to complete my
                                                project?</button>
                                            <div id="faq-4" class="collapse" data-bs-parent="#faqOne">
                                                <div class="accordion-body faq-text">
                                                    <p>Getting started is easy! Simply reach out to us through our contact form or give us a call,
                                                        and
                                                        we’ll schedule a consultation to discuss your project and how we can best assist you. Our
                                                        team
                                                        keeps you informed throughout the process, ensuring quality control and timely delivery.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq-5" aria-expanded="false">Can I track the progress of my project?</button>
                                            <div id="faq-5" class="collapse" data-bs-parent="#faqOne">
                                                <div class="accordion-body faq-text">
                                                    <p>Getting started is easy! Simply reach out to us through our contact form or give us a call,
                                                        and
                                                        we’ll schedule a consultation to discuss your project and how we can best assist you. Our
                                                        team
                                                        keeps you informed throughout the process, ensuring quality control and timely delivery.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end: Faq Section -->

                <!-- start: Contact Section -->
                <section class="tj-contact-section section-gap section-gap-x">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="global-map wow fadeInUp" data-wow-delay=".3s">
                                    <div class="global-map-img">
                                        <img src="<?= $pathindex ?>assets/images/bg/map.svg" alt="Image">
                                        <div class="location-indicator loc-1">
                                            <div class="location-tooltip">
                                                <span>Head office:</span>
                                                <p>993 Renner Burg, West Rond, MT 94251-030, USA.</p>
                                                <a href="tel:10095447818">P: +1 (009) 544-7818</a>
                                                <a href="mailto:support@bexon.com">M: support@bexon.com</a>
                                            </div>
                                        </div>
                                        <div class="location-indicator loc-2">
                                            <div class="location-tooltip">
                                                <span>Regional office:</span>
                                                <p>Hessisch Lichtenau 37235, Kassel, Germany.</p>
                                                <a href="tel:10098801810">P: +1 (009) 880-1810</a>
                                                <a href="mailto:support@bexon.com">M: support@bexon.com</a>
                                            </div>
                                        </div>
                                        <div class="location-indicator loc-3">
                                            <div class="location-tooltip">
                                                <span>Regional office:</span>
                                                <p>32 Altamira, State of Pará, Brazil.</p>
                                                <a href="tel:10095447818">P: +1 (009) 544-7818</a>
                                                <a href="mailto:support@bexon.com">M: support@bexon.com</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-form style-2 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="sec-heading">
                                        <span class="sub-title bg-carta-da-zucchero"></i>Get in Touch</span>
                                        <h2 class="sec-title title-anim">Drop Us a <span>Line.</span></h2>
                                    </div>
                                    <form id="contact-form-2">
                                        <div class="row wow fadeInUp" data-wow-delay=".5s">
                                            <div class="col-sm-6">
                                                <div class="form-input">
                                                    <input type="text" name="cfName2" placeholder="Full Name *">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-input">
                                                    <input type="email" name="cfEmail2" placeholder="Email Address *">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-input">
                                                    <input type="tel" name="cfPhone2" placeholder="Phone number *">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-input">
                                                    <div class="tj-nice-select-box">
                                                        <div class="tj-select">
                                                            <select name="cfSubject2">
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
                                                    <textarea name="cfMessage2" id="message" placeholder="Type message *"></textarea>
                                                </div>
                                            </div>
                                            <div class="submit-btn">
                                                <button class="tj-primary-btn" type="submit">
                                                    <span class="btn-text"><span>Send Message</span></span>
                                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
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
                <!-- end: Contact Section -->
                <!-- start: Cta Section -->
                <section class="tj-cta-section section-gap">
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