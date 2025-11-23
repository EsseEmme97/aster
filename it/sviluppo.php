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
									<h1 class="tj-page-title">Ricerca & Sviluppo</h1>
									<div class="tj-page-link">
										<span>
											<a href="<?= $pathindex ?>">Home</a>
										</span>
										<span><i class="tji-arrow-right"></i></span>
										<span>
											<span>Ricerca & Sviluppo</span>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="page-header-overlay"></div>
				</section>
				<!-- end: Breadcrumb Section -->
				
				<!-- start: About Section -->
				<section class="tj-about-section section-gap">
					<div class="container">
						<div class="row row-gap-4">
							<div class="col-lg-4 col-md-6 order-lg-1 order-3">
								<div class="countup-item style-2 wow fadeInUp h-100 justify-content-end align-items-start" data-wow-delay=".1s" data-bg-image="<?= $pathindex ?>assets/images/ricerca-sviluppo/ricerca-sviluppo-intro-1.webp">
									<span class="h3 text-white">al fianco delle aziende dal 1996</span>
								</div>
							</div>
							<div class="col-lg-8 col-sm-12 order-lg-2 order-1">
								<div class="about-content-area-2 wow fadeInUp " data-wow-delay=".3s">
									<div class="about-content mx-auto">
										<div class="sec-heading style-2">
											<span class="sub-title">Servizi</span>
											<h2 class="sec-title title-highlight">Per un lavoro di qualità, dall’inizio alla fine <span>puntiamo sempre alle stelle</span>
											</h2>
										</div>
										<div class="wow fadeInUp" data-wow-delay=".3s">
											<a class="text-btn" href="<?= $pathindex ?>servizi">
												<span class="btn-text"><span>Scopri di più</span></span>
												<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
											</a>
										</div>
									</div>
									<div class="video-img wow fadeInRight" data-wow-delay=".7s">
										<img src="<?= $pathindex ?>assets/images/ricerca-sviluppo/ricerca-sviluppo-intro-2.webp" alt="immagine servizio">
									</div>
								</div>
							</div>
						</div>
						<div class="mt-5">
							<h2 class="fw-bold">Testo introduttivo</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus suscipit explicabo, reiciendis commodi quos quidem neque eum sequi reprehenderit dolores quas nesciunt inventore ipsum officiis fuga illum totam a dolorem.</p>
						</div>
					</div>
				</section>
				<!-- end: About Section -->
				<!-- start: About Section -->
				<section class="tj-about-section-2 section-gap section-gap-x">
					<div class="container">
						<div class="row">
							<div class="col-xl-6 col-lg-6 order-lg-1 order-2">
								<div class="about-img-area style-2 wow fadeInLeft" data-wow-delay=".3s">
									<div class="about-img overflow-hidden">
										<img data-speed=".8" src="<?= $pathindex ?>assets/images/ricerca-sviluppo/ricerca-sviluppo-formazione-tecnologia.webp" alt="immagine stock">
									</div>
									<div class="box-area style-2">
										<div class="progress-box wow fadeInUp" data-wow-delay=".3s">
											<span class="title h3">I nostri risultati</span>
											<ul class="tj-progress-list">
												<li>
													<span class="tj-progress-title">Revenue</span>
													<div class="tj-progress">
														<span class="tj-progress-percent">82%</span>
														<div class="tj-progress-bar" data-percent="82">
														</div>
													</div>
												</li>
												<li>
													<span class="tj-progress-title">Satisfaction</span>
													<div class="tj-progress">
														<span class="tj-progress-percent">90%</span>
														<div class="tj-progress-bar" data-percent="90">
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 order-lg-2 order-1">
								<div class="about-content-area">
									<div class="sec-heading">
										<span class="sub-title wow fadeInUp" data-wow-delay=".3s">PUNTARE ALLE STELLE</span>
										<h2 class="sec-title title-anim">Driving Innovation and Excellence for Sustainable Corporate Success
											<span>Worldwide.</span>
										</h2>
									</div>
								</div>
								<div class="about-bottom-area">
									<div class="mission-vision-box wow fadeInLeft" data-wow-delay=".5s">
										<span class="title h3">Formazione continua</span>
										<p class="desc mt-3">our mission is empower businesses through innovate best solution, exceptional
											service.
										</p>
									</div>
									<div class="mission-vision-box wow fadeInRight" data-wow-delay=".5s">
										<span class="title h3">Tecnologie avanzate</span>
										<p class="desc mt-3">Our vision is to become a global leader in providing transformative business
											solutions.
										</p>
									</div>
								</div>
								<div class="wow fadeInUp mt-5" data-wow-delay=".3s">
									<a class="text-btn" href="<?= $pathindex ?>su-di-noi">
										<span class="btn-text"><span>Scopri di più</span></span>
										<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="bg-shape-1">
						<img src="<?= $pathindex ?>assets/images/shape/pattern-2.svg" alt="">
					</div>
					<div class="bg-shape-2">
						<img src="<?= $pathindex ?>assets/images/shape/pattern-3.svg" alt="">
					</div>
				</section>
				<!-- end: About Section -->
				<!-- start: Testimonial Section -->
				<section class="tj-testimonial-section-2 section-gap">
					<div class="container">
						<div class="row row-gap-3">
							<div class="col-lg-6 order-lg-2">
								<div class="testimonial-img-area wow fadeInUp" data-wow-delay=".3s">
									<div class="testimonial-img">
										<img src="<?= $pathindex ?>assets/images/testimonial/testimonial-img.webp" alt="">
										<div class="sec-heading style-2">
											<h2 class="sec-title title-anim mb-5">Noi siamo certificati ISO 9001:2015</h2>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
											<div class="wow fadeInUp mt-5" data-wow-delay=".3s">
												<a class="text-btn" href="<?= $pathindex ?>about.html">
													<span class="btn-text"><span>Download pdf</span></span>
													<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 order-lg-1">
								<div class="testimonial-wrapper wow fadeInUp border-radius-12px p-4 bg-white border-primary-color" data-wow-delay=".5s">
									<h2 class="mb-5">Noi siamo <br> <span class="text-blu-primario">Kaizein People</span>.</h2>
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
									</p>
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
									</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- end: Testimonial Section -->
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
										<div class="cta-btn wow fadeInUp mt-60" data-wow-delay=".6s">
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