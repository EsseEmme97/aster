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
$uri = $_SERVER['REQUEST_URI'];
$news_id = explode('/', $uri)[array_key_last(explode('/', $uri))];
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
									<h1 class="tj-page-title">News n° <?= $news_id ?></h1>
									<div class="tj-page-link">
										<span><i class="tji-home"></i></span>
										<span>
											<a href="<?= $pathindex ?>">Home</a>
										</span>
										<span><i class="tji-arrow-right"></i></span>
										<span>
											<span>News n° <?= $news_id ?></span>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="page-header-overlay" data-bg-image="assets/images/shape/pheader-overlay.webp"></div>
				</section>
				<!-- end: Breadcrumb Section -->

				<!-- start: Blog Section -->
				<section class="tj-blog-section section-gap slidebar-stickiy-container">
					<div class="container">
						<div class="row row-gap-5">
							<div class="col-lg-8">
								<div class="post-details-wrapper">
									<div class="blog-images wow fadeInUp" data-wow-delay=".1s">
										<img src="<?= $pathindex ?>assets\images\stock\stock-3.jpg" alt="immagine principale">
									</div>
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
										<p class="wow fadeInUp" data-wow-delay=".3s">The curve. Whether you're looking to streamline
											operations,
											enhance customer experiences, or explore
											new market opportunities, our tailored solutions are designed to empower your business to achieve
											unparalleled success. With a focus on sustainability, scalability, and adaptability, we help your
											business.</p>
										<h3 class="wow fadeInUp" data-wow-delay=".3s">Kye lessons of Business Potential</h3>
										<p class="wow fadeInUp" data-wow-delay=".3s">Unlocking your business potential requires more than
											just
											vision and ambition—it involves strategic
											thinking, adaptability, and an unwavering commitment to growth. Over time, successful businesses
											have
											learned essential lessons that allow them to not only survive but thrive in an ever-changing
											marketplace. One of the most important lessons is understanding the need for continuous
											innovation.
										</p>
										<div class="images-wrap">
											<div class="row">
												<div class="col-sm-6">
													<div class="image-box wow fadeInUp" data-wow-delay=".3s">
														<img src="<?= $pathindex ?>assets/images/blog/blog-9.webp" alt="immagine news">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="image-box wow fadeInUp" data-wow-delay=".5s">
														<img src="<?= $pathindex ?>assets/images/blog/blog-10.webp" alt="immagine news">
													</div>
												</div>
											</div>
										</div>
										<p class="wow fadeInUp" data-wow-delay=".3s">Lastly, effective leadership that inspires and
											motivates
											employees, customers, and stakeholders is
											essential in steering the business toward achieving its full potential. By applying these lessons,
											businesses can unlock new opportunities, overcome obstacles, and reach new levels of success.</p>
										<h3 class="wow fadeInUp" data-wow-delay=".3s">Conclusions</h3>
										<p class="wow fadeInUp" data-wow-delay=".3s">Unlocking your business’s full potential is a journey
											that
											requires vision, innovation, and strategic
											on our execution. By embracing key lessons such as leveraging data, focusing on customer are
											experience, fostering of adaptability, and nurturing effective leadership, businesses can thrive
											in an
											ever-evolving marketplace..</p>
										<p class="wow fadeInUp" data-wow-delay=".3s"> The ability to continuously learn, collaborate, and
											optimize operations will not only drive growth
											but ensure long-term sustainability. Remember, the path to success is not linear.</p>
									</div>
									<div class="tj-post__navigation wow fadeInUp mt-5" data-wow-delay=".3s">
										<!-- previous post -->
										<div class="tj-nav__post previous">
											<div class="tj-nav-post__nav prev_post">
												<a href="blog-details.html"><span><i class="tji-arrow-left"></i></span>Previous</a>
											</div>
										</div>
										<div class="tj-nav-post__grid">
											<a href="blog.html"><i class="tji-window"></i></a>
										</div>
										<!-- next post -->
										<div class="tj-nav__post next">
											<div class="tj-nav-post__nav next_post">
												<a href="blog-details.html">Next<span><i class="tji-arrow-right"></i></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="tj-main-sidebar slidebar-stickiy">
									<div class="tj-sidebar-widget tj-recent-posts wow fadeInUp" data-wow-delay=".3s">
										<h4 class="widget-title">Related post</h4>
										<ul>
											<li>
												<div class="post-thumb">
													<a href="blog-details.html"> <img src="<?= $pathindex ?>assets/images/blog/post-1.webp" alt="Blog"></a>
												</div>
												<div class="post-content">
													<h6 class="post-title">
														<a href="blog-details.html">How to Stay Ahead of the Business Curve</a>
													</h6>
													<div class="blog-meta">
														<ul>
															<li>04 SEP 2025</li>
														</ul>
													</div>
												</div>
											</li>
											<li>
												<div class="post-thumb">
													<a href="blog-details.html"> <img src="<?= $pathindex ?>assets/images/blog/post-2.webp" alt="Blog"></a>
												</div>
												<div class="post-content">
													<h6 class="post-title">
														<a href="blog-details.html">How Digital Tools Shaping the Workforce</a>
													</h6>
													<div class="blog-meta">
														<ul>
															<li>02 JAN 2025</li>
														</ul>
													</div>
												</div>
											</li>
											<li>
												<div class="post-thumb">
													<a href="blog-details.html"> <img src="<?= $pathindex ?>assets/images/blog/post-3.webp" alt="Blog"></a>
												</div>
												<div class="post-content">
													<h6 class="post-title">
														<a href="blog-details.html">How to Sustainability into your Strategy</a>
													</h6>
													<div class="blog-meta">
														<ul>
															<li>24 FEB 2025</li>
														</ul>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<div class="tj-sidebar-widget widget-feature-item wow fadeInUp" data-wow-delay=".3s">
										<div class="feature-box">
											<div class="feature-content">
												<h2 class="title">Modern</h2>
												<span>Home Makeover</span>
												<a class="read-more feature-contact" href="tel:8321890640">
													<i class="tji-phone-3"></i>
													<span>+8 (321) 890-640</span>
												</a>
											</div>
											<div class="feature-images">
												<img src="<?= $pathindex ?>assets/images/service/service-ad.webp" alt="immagine banner">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- end: Blog Section -->
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