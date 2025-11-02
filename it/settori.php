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
									<h1 class="tj-page-title">Produzione e Assemblaggio</h1>
									<div class="tj-page-link">
										<span><i class="tji-home"></i></span>
										<span>
											<a href="<?= $pathindex ?>">Home</a>
										</span>
										<span><i class="tji-arrow-right"></i></span>
										<span>
											<span>Produzione e Assemblaggio</span>
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
					<h1>Lorem ipsum</h1>
					<p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam sint consequuntur iusto atque. Expedita facere mollitia reiciendis laboriosam, repudiandae ducimus nisi iusto, cupiditate quas illum voluptate dolor excepturi. Provident, laboriosam!</p>
				</section>
				<!-- start: Service Section -->
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
									<div class="wow fadeInUp" data-wow-delay=".6s">
										<a class="tj-primary-btn" href="service.html">
											<span class="btn-text"><span>Scopri di più</span></span>
											<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
										</a>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="service-wrapper-2">
									<div class="service-item-wrapper tj-fadein-right-on-scroll">
										<div class="service-item style-2 ">
											<div class="title-area">
												<div class="service-icon">
													<i class="tji-service-1"></i>
												</div>
												<span class="title d-block">Cantieri navali</span>
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

									<div class="service-item-wrapper tj-fadein-right-on-scroll">
										<div class="service-item style-2">
											<div class="title-area">
												<div class="service-icon">
													<i class="tji-service-2"></i>
												</div>
												<span class="title d-block">Customer Experience Solutions</span>
											</div>
											<div class="service-content">
												<p class="desc">Developing personalized customer journeys to increase satisfaction and loyalty
													of our expansion to keep competitive.</p>
												<ul class="list-items">
													<li><i class="tji-list"></i>Personalized Customer</li>
													<li><i class="tji-list"></i>Seamless Service</li>
													<li><i class="tji-list"></i>Proactive Support</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="service-item-wrapper tj-fadein-right-on-scroll">
										<div class="service-item style-2">
											<div class="title-area">
												<div class="service-icon">
													<i class="tji-service-3"></i>
												</div>
												<span class="title d-block">Customer Experience Solutions</span>
											</div>
											<div class="service-content">
												<p class="desc">Provide tailored strategies that not only drive long-term value but also build
													trust with stakeholders, investors.</p>
												<ul class="list-items">
													<li><i class="tji-list"></i>Strategy Development</li>
													<li><i class="tji-list"></i>Sustainable Business</li>
													<li><i class="tji-list"></i>Impactful Reporting</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="service-item-wrapper tj-fadein-right-on-scroll">
										<div class="service-item style-2">
											<div class="title-area">
												<div class="service-icon">
													<i class="tji-service-4"></i>
												</div>
												<span class="title d-block">Customer Experience Solutions</span>
											</div>
											<div class="service-content">
												<p class="desc">Training and Development Programs are designed to empower employees with the
													skills, knowledge, and tools they need.</p>
												<ul class="list-items">
													<li><i class="tji-list"></i>Leadership Development</li>
													<li><i class="tji-list"></i>Skill Enhancement</li>
													<li><i class="tji-list"></i>Employee Engagement</li>
												</ul>
											</div>
										</div>
									</div>

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
				<section class="tj-cta-section section-gap">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="cta-area">
									<div class="cta-content">
										<h2 class="title title-anim">Let’s Build Future Together.</h2>
										<div class="cta-btn wow fadeInUp" data-wow-delay=".6s">
											<a class="tj-primary-btn " href="contact.html">
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