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
									<h1 class="tj-page-title">Aster elettronica</h1>
									<div class="tj-page-link">
										<span>
											<a href="<?= $pathindex ?>">Home</a>
										</span>
										<span><i class="tji-arrow-right"></i></span>
										<span>
											<span>Aster elettronica</span>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="page-header-overlay"></div>
				</section>
				<!-- end: Breadcrumb Section <-->
				<!-- start: Project Section -->
				<section class="tj-project-section section-gap">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="sec-heading-wrap">
									<span class="sub-title wow fadeInUp" data-wow-delay=".3s"></i>Proud Projects</span>
									<div class="heading-wrap-content">
										<div class="sec-heading">
											<h2 class="sec-title title-anim">Breaking Boundaries, Building <span>Dreams.</span></h2>
										</div>
										<p class="desc wow fadeInUp" data-wow-delay=".5s">We work closely with our clients to understand
											their
											unique needs and craft tailored
											solutions that address challenges.</p>
										<div class="btn-wrap wow fadeInUp" data-wow-delay=".6s">
											<a class="tj-primary-btn" href="portfolio.html">
												<span class="btn-text"><span>More Projects</span></span>
												<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="project-area tj-arrange-container">
									<div class="project-item tj-arrange-item">
										<div class="project-img" data-bg-image="<?= $pathindex ?>assets/images/su-di-noi/su-di-noi-gallery-1.webp"></div>
										<div class="project-content">
											<span class="categories"><a href="<?= $pathindex ?>su-di-noi">Connect</a></span>
											<div class="project-text">
												<span class="title"><a href="<?= $pathindex ?>su-di-noi">Su di noi</a></span>
												<a class="project-btn" href="<?= $pathindex ?>su-di-noi">
													<i class="tji-arrow-right-long"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="project-item tj-arrange-item">
										<div class="project-img" data-bg-image="<?= $pathindex ?>assets/images/su-di-noi/su-di-noi-gallery-2.webp"></div>
										<div class="project-content">
											<span class="categories"><a href="<?= $pathindex ?>settori">Empower</a></span>
											<div class="project-text">
												<span class="title"><a href="<?= $pathindex ?>settori">Settori</a></span>
												<a class="project-btn" href="<?= $pathindex ?>settori">
													<i class="tji-arrow-right-long"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="project-item tj-arrange-item">
										<div class="project-img" data-bg-image="<?= $pathindex ?>assets/images/su-di-noi/su-di-noi-gallery-3.webp"></div>
										<div class="project-content">
											<span class="categories"><a href="<?= $pathindex ?>servizi">Support</a></span>
											<div class="project-text">
												<span class="title"><a href="<?= $pathindex ?>servizi">Servizi</a></span>
												<a class="project-btn" href="<?= $pathindex ?>servizi">
													<i class="tji-arrow-right-long"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="project-item tj-arrange-item">
										<div class="project-img" data-bg-image="<?= $pathindex ?>assets/images/su-di-noi/su-di-noi-gallery-4.webp"></div>
										<div class="project-content">
											<span class="categories"><a href="<?= $pathindex ?>ricerca-e-sviluppo">Business</a></span>
											<div class="project-text">
												<span class="title"><a href="<?= $pathindex ?>ricerca-e-sviluppo">Ricerca e sviluppo</a></span>
												<a class="project-btn" href="<?= $pathindex ?>ricerca-e-sviluppo">
													<i class="tji-arrow-right-long"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- end: Project Section -->
				<!-- start: Cta Section -->
				<section class="tj-cta-section ">
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