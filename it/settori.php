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
				<section class="tj-page-header section-gap-x" data-bg-image="<?= $pathindex ?>assets/images/stock/stock-1.jpg">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="tj-page-header-content text-center">
									<h1 class="tj-page-title">Settori</h1>
									<div class="tj-page-link">
										<span>
											<a href="<?= $pathindex ?>">Home</a>
										</span>
										<span><i class="tji-arrow-right"></i></span>
										<span>
											<span>Settori</span>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="page-header-overlay"></div>
				</section>
				<!-- end: Breadcrumb Section <-->
				<section class="section-gap section-gap-x">
					<div class="container">
						<h1>Lorem ipsum</h1>
						<p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam sint consequuntur iusto atque. Expedita facere mollitia reiciendis laboriosam, repudiandae ducimus nisi iusto, cupiditate quas illum voluptate dolor excepturi. Provident, laboriosam!</p>
					</div>
				</section>
				<!-- start: Service Section -->
				<?
				$settori = [
					[
						"titolo" => "Edilizia civile/industriale, videocitofonia & sistemi antifurto",
						"icona" => "edilizia-civile.svg"
					],
					[
						"titolo" => "Prestazioni sportive",
						"icona" => "prestazioni-sportive.svg"
					],
					[
						"titolo" => "Lighting",
						"icona" => "illuminazione.svg"
					],
					[
						"titolo" => "Meteo & traffico",
						"icona" => "meteo-traffico.svg"
					],
					[
						"titolo" => "Elettromedicale",
						"icona" => "elettromedicale.svg"
					],
					[
						"titolo" => "Soluzioni audio professionali",
						"icona" => "broadcast.svg"
					],
					[
						"titolo" => "Sistemi di controllo motore (inverter)",
						"icona" => "controllo-motore.svg"
					],
					[
						"titolo" => "Sistemi di controllo industriale (automazione e processo)",
						"icona" => "controllo-industriale.svg"
					],
					[
						"titolo" => "Vending machines",
						"icona" => "vending-machines.svg"
					],
					[
						"titolo" => "Sistemi destinati alla ricerca scientifica",
						"icona" => "ricerca-scientifica.svg"
					],
					[
						"titolo" => "Cantieri edili e navali",
						"icona" => "cantieri-edili-navali.svg"
					],
					[
						"titolo" => "Sistemi APR di pilotaggio remoto",
						"icona" => "pilotaggio-remoto.svg"
					],
				];
				$basePath = "assets/images/settori/"
				?>
				<section class="tj-service-section service-2 section-gap section-gap-x slidebar-stickiy-container">
					<div class="container">
						<div class="row">
							<div class="col-lg-4">
								<div class="content-wrap  slidebar-stickiy">
									<div class="sec-heading style-2">
										<span class="sub-title wow fadeInUp bg-carta-da-zucchero" data-wow-delay=".3s">Our Solutions</span>
										<h2 class="sec-title text-white text-anim">Tailored Business Solutions for our
											<span>Corporates.</span>
										</h2>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="service-wrapper-2">
									<? foreach ($settori as $settore): ?>
										<div class="service-item-wrapper tj-fadein-right-on-scroll">
											<div class="service-item style-2 ">
												<div class="title-area">
													<div class="service-icon">
														<img src="<?= $pathindex . $basePath . $settore["icona"] ?>" alt="icona settore">
													</div>
													<span class="title d-block"><?= $settore["titolo"] ?></span>
												</div>
												<div class="service-content">
													<p class="desc">Through a combination of data-driven insights and innovative approaches, we work
														closely with you to develop customized.</p>
													<ul class="list-items">
														<li><i class="tji-list"></i>Expansion Strategies</li>
														<li><i class="tji-list"></i>Operational Efficiency</li>
														<li><i class="tji-list"></i>Competitive Edge</li>
													</ul>
												</div>
											</div>
										</div>
									<? endforeach; ?>
								</div>
							</div>
						</div>
					</div>
					<div class="bg-shape-1">
						<img src="<?= $pathindex ?>assets/images/shape/pattern-2.svg" alt="sfondo">
					</div>
					<div class="bg-shape-2">
						<img src="<?= $pathindex ?>assets/images/shape/pattern-3.svg" alt="sfondo">
					</div>
				</section>
				<!-- end: Service Section -->
				<!-- start: Cta Section -->
                <section class="tj-cta-section section-gap pb-0">
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