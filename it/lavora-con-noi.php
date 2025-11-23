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
                <section class="tj-page-header section-gap-x" data-bg-image="<?= $pathindex ?>assets/images/lavora-con-noi/lavora-con-noi-header.webp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tj-page-header-content text-center">
                                    <h1 class="tj-page-title">Lavora con noi</h1>
                                    <div class="tj-page-link">
                                        <span>
                                            <a href="<?= $pathindex ?>">Home</a>
                                        </span>
                                        <span><i class="tji-arrow-right text-blu-secondario"></i></span>
                                        <span>
                                            <span>Lavora con noi</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-header-overlay"></div>
                </section>
                <!-- end: Breadcrumb Section -->
                <!-- start: Faq Section -->
                <section class="tj-faq-section section-gap section-separator">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum tempore tenetur mollitia eveniet eligendi est voluptas in, unde illum vero quod quae nemo alias aliquam? Facilis, a quod? Dolore, iusto?</p>
                            </div>
                            <div class="row justify-content-center mt-5">
                                <div class="col-lg-12">
                                    <div class="accordion tj-faq" id="faqOne">
                                        <div class="accordion-item active wow fadeInUp" data-wow-delay=".3s">
                                            <button class=" faq-title" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1"
                                                aria-expanded="true">Operatore Assemblaggio SMT</button>
                                            <div id="faq-1" class="collapse show" data-bs-parent="#faqOne">
                                                <div class="accordion-body faq-text">
                                                    <p>Siamo alla ricerca di un operatore specializzato nell’assemblaggio SMT di schede elettroniche, in grado di operare in sinergia con i colleghi, da inserire all’interno del nostro TEAM, che opererà durante la settimana dal lunedì al venerdì.</p>
                                                    <p>
                                                        <strong>Responsabilità principali</strong>
                                                    <ul>
                                                        <li>Utilizzo di macchinari Pick&Place e forni a rifusione</li>
                                                        <li>Assemblaggio, saldatura e rilavorazione di componenti elettronici SMT</li>
                                                        <li>Controllo qualità visivo e strumentale (AOI e raggi X)</li>
                                                        <li>Manutenzione ordinaria delle attrezzature utilizzate</li>
                                                    </ul>
                                                    </p>
                                                    <p>
                                                        <strong>Requisiti richiesti</strong>
                                                    <ul>
                                                        <li>Disponibilità a lavorare su due turni (6:00-14:00/14:00-22:00)</li>
                                                        <li>Esperienza pregressa nel ruolo di operatore SMT</li>
                                                        <li>Buona conoscenza del processo di montaggio elettronico SMT e dei componenti SMD</li>
                                                        <li>Capacità di lettura del disegno tecnico e delle distinte base</li>
                                                        <li>Precisione, manualità e attenzione ai dettagli</li>
                                                        <li>Conoscenza della lingua inglese scritta e parlata</li>
                                                    </ul>
                                                    </p>
                                                    <p>
                                                        <strong>Cosa offriamo</strong>
                                                    <ul>
                                                        <li>Inserimento in un ambiente dinamico e tecnologicamente avanzato</li>
                                                        <li>Possibilità di crescita professionale</li>
                                                        <li>Contratto full time</li>
                                                    </ul>
                                                    </p>
                                                    <p>Condizioni contrattuali valutate in funzione dell’esperienza del candidato. <br> <strong> Per candidarti scrivi a info@asterelettronica.com</strong>
                                                    </p>
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
                <section class="tj-contact-section-2 section-bottom-gap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-form wow fadeInUp border-primary-color" data-wow-delay=".1s">
                                    <span class="title h3 d-block">Invia ora la tua candidatura</span>
                                    <form id="contact-form">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-input">
                                                    <input type="text" name="nome">
                                                    <label class="cf-label">Nome completo</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-input">
                                                    <input type="email" name="email">
                                                    <label class="cf-label">Indirizzo Email</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-input">
                                                    <input type="tel" name="telefono">
                                                    <label class="cf-label">Numero di telefono</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-input position-relative border-bottom border-dark py-4">
                                                    <input class="file-upload" type="file" name="cv" placeholder="Allega il tuo CV">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <i class="fa-solid fa-file fa-xl color-text-body"></i>
                                                        <span id="inputLabel" class="color-text-body">Allega CV</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-input message-input">
                                                    <textarea name="presentazione" id="message"></textarea>
                                                    <label class="cf-label">Lettera di presentazione</label>
                                                </div>
                                            </div>
                                            <div class="submit-btn">
                                                <button class="text-btn" type="submit">
                                                    <span class="btn-text"><span>Invia ora</span></span>
                                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end: Contact Section -->
                <!-- start: Cta Section -->
                <section class="tj-cta-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="cta-area" data-bg-image="<?= $pathindex ?>assets/images/lavora-con-noi/lavora-con-noi-cta.webp">
                                    <div class="cta-content">
                                        <h2 class="title title-anim">Let’s Build Future Together.</h2>
                                        <div class="cta-btn wow fadeInUp" data-wow-delay=".6s">
                                            <a class="tj-primary-btn " href="<?= $pathindex ?>contatti">
                                                <span class="btn-text"><span>Contattaci</span></span>
                                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                            </a>
                                        </div>
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
    <script>
        const inputFile = document.querySelector('input[type="file"]');
        const inputLabel = document.getElementById('inputLabel');

        inputFile.addEventListener('change', function() {
            if (this.files && this.files.length > 0) {
                inputLabel.textContent = this.files[0].name;
            } else {
                inputLabel.textContent = 'Allega il tuo cv';
            }
        });
    </script>
</body>

</html>