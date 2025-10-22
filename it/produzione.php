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
				<section class="tj-page-header section-gap-x" data-bg-image="<?= $pathindex ?>assets/images/bg/pheader-bg.webp">
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
					<div class="page-header-overlay" data-bg-image="assets/images/shape/pheader-overlay.webp"></div>
				</section>
				<!-- end: Breadcrumb Section -->

				<!-- start: Service Section -->
				<section class="tj-service-section service-3 section-gap">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="sec-heading style-3 text-center">
									<span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Our Solutions</span>
									<h2 class="sec-title title-anim">Tailor Business Solutions for Corporates.</h2>
								</div>
							</div>
						</div>
						<p class="mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam odit voluptates fugit molestias laborum earum enim similique odio aspernatur! Modi qui vel dolores nisi fugit doloremque, quos excepturi ex repellat.</p>
						<div class="row">
							<div class="col-12">
								<div class="service-wrapper">
									<div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
										<div class="service-content-wrap">
											<div class="service-title">
												<div class="service-icon">
													<i class="tji-service-1"></i>
												</div>
												<h4 class="title"><a href="service-details.html">Business Strategy Development</a></h4>
											</div>
											<div class="service-content">
												<p class="desc">Through a combination of data-driven insights and innovative approaches, we work
													closely with you to develop customized.</p>
											</div>
										</div>
										<div class="service-reveal-bg" data-bg-image="assets/images/service/service-2.webp"></div>
									</div>
									<div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
										<div class="service-content-wrap">
											<div class="service-title">
												<div class="service-icon">
													<i class="tji-service-2"></i>
												</div>
												<h4 class="title"><a href="service-details.html">Customer Experience Solutions</a></h4>
											</div>
											<div class="service-content">
												<p class="desc">Customer Experience Solutions are designed to enhance every touchpoint of your
													customer journey, from first interaction.</p>
											</div>
										</div>
										<div class="service-reveal-bg" data-bg-image="assets/images/service/service-3.webp"></div>
									</div>
									<div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
										<div class="service-content-wrap">
											<div class="service-title">
												<div class="service-icon">
													<i class="tji-service-3"></i>
												</div>
												<h4 class="title"><a href="service-details.html">Sustainability and ESG Consulting</a></h4>
											</div>
											<div class="service-content">
												<p class="desc">Provide tailored strategies that not only drive long-term value but also build
													trust
													with stakeholders, investors.</p>
											</div>
										</div>
										<div class="service-reveal-bg" data-bg-image="assets/images/service/service-4.webp"></div>
									</div>
									<div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
										<div class="service-content-wrap">
											<div class="service-title">
												<div class="service-icon">
													<i class="tji-service-4"></i>
												</div>
												<h4 class="title"><a href="service-details.html">Training and Development Programs</a></h4>
											</div>
											<div class="service-content">
												<p class="desc">Training and Development Programs are designed to empower employees with the
													skills,
													knowledge, and tools they need.</p>
											</div>
										</div>
										<div class="service-reveal-bg" data-bg-image="assets/images/service/service-6.webp"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- end: Service Section -->

				<!-- start: Countup Section -->
				<div class="tj-countup-section">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="countup-wrap">
									<div class="countup-item">
										<div class="inline-content">
											<span class="odometer countup-number" data-count="93"></span>
											<span class="count-plus">%</span>
										</div>
										<span class="count-text">Projects Completed.</span>
										<span class="count-separator" data-bg-image="assets/images/shape/separator.svg"></span>
									</div>
									<div class="countup-item">
										<div class="inline-content">
											<span class="odometer countup-number" data-count="20"></span>
											<span class="count-plus">M</span>
										</div>
										<span class="count-text">Reach Worldwide</span>
										<span class="count-separator" data-bg-image="assets/images/shape/separator.svg"></span>
									</div>
									<div class="countup-item">
										<div class="inline-content">
											<span class="odometer countup-number" data-count="8.5"></span>
											<span class="count-plus">X</span>
										</div>
										<span class="count-text">Faster Growth</span>
										<span class="count-separator" data-bg-image="assets/images/shape/separator.svg"></span>
									</div>
									<div class="countup-item">
										<div class="inline-content">
											<span class="odometer countup-number" data-count="100"></span>
											<span class="count-plus">+</span>
										</div>
										<span class="count-text">Awards Archived</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end: Countup Section -->

				<section class="section-gap">
					<div class="container post-details-wrapper">
						<h2 class="title title-anim">Unlocking Business Potential: Innovative Solutions for Unmatched Success
						</h2>
						<div class="blog-text">
							<p class="wow fadeInUp" data-wow-delay=".3s">In today’s competitive landscape, businesses must
								continuously adapt and innovate to thrive.
								Unlocking Business Potential means identifying untapped opportunities and leveraging innovative
								solutions to drive growth, enhance efficiency, and foster lasting success. At [Company Name], we
								believe that success is not just about working harder—it's about working smarter. By harnessing
								cutting-edge technologies, data-driven insights, and creative problem-solving, we provide
								businesses
								with the tools and strategies needed to stay ahead.</p>
							<ul class="wow fadeInUp" data-wow-delay=".3s">
								<li><span><i class="tji-check"></i></span>Embrace Innovation</li>
								<li><span><i class="tji-check"></i></span>Customer-Centric Approach</li>
								<li><span><i class="tji-check"></i></span>Effective Leadership</li>
								<li><span><i class="tji-check"></i></span>Operational Efficiency</li>
								<li><span><i class="tji-check"></i></span>Scalable Systems</li>
								<li><span><i class="tji-check"></i></span>Resilience</li>
								<li><span><i class="tji-check"></i></span>Continuous Learning</li>
							</ul>
						</div>
					</div>
				</section>

				<!-- start: Cta Section -->
				<section class="tj-cta-section">
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
										<img src="assets/images/cta/cta-bg.webp" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- end: Cta Section -->
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