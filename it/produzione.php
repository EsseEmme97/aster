<?
$lingua = 1;
require_once("../inc/global.php");
require_once("../inc/header.php");
require_once("../inc/mysqli.php");
// $database = new DB();
$titleseo = "Assemblaggio di schede elettroniche | Aster Elettronica";
$descriptionseo = "Montaggio e assemblaggio di schede elettroniche e
componenti elettronici, saldatura elettronica e produzione di componenti
elettronici su misura.";
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
				<section class="tj-page-header section-gap-x" data-bg-image="<?= $pathindex ?>assets/images/produzione-assemblaggio/produzione-assemblaggio-header.webp">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="tj-page-header-content text-center">
									<h1 class="tj-page-title">Produzione e Assemblaggio</h1>
									<div class="tj-page-link">
										<span>
											<a href="<?= $pathindex ?>">Home</a>
										</span>
										<span><i class="tji-arrow-right text-blu-secondario"></i></span>
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
				<!-- end: Breadcrumb Section -->

				<!-- start: Service Section -->
				<section class="tj-service-section service-3 section-gap">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="sec-heading style-3 text-center">
									<span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>ASSEMBLAGGIO DI SCHEDE ELETTRONICHE</span>
									<h2 class="sec-title title-anim">Soluzioni complete di assemblaggio elettronico, <span class="text-blue">precisione e qualità</span></h2>
								</div>
							</div>
						</div>
						<p><a href="<?= $pathindex ?>azienda" class="text-link">Aster Elettronica</a> offre un servizio completo di assemblaggio di schede
							elettroniche, partendo dal progetto del cliente fino alla produzione industriale.
							Grazie a competenze consolidate e <a href="<?= $pathindex ?>ricerca-e-sviluppo" class="text-link">processi certificati</a>, realizziamo schede
							elettroniche SMD e PTH con la massima precisione, includendo controlli ottici
							(AOI), test funzionali e saldature a onda e selettive.</p>
						<p class="mb-5">
							Ogni fase è monitorata per garantire affidabilità e qualità, anche per volumi
							elevati. Offriamo inoltre <a href="<?= $pathindex ?>servizi" class="text-link">servizi</a> di approvvigionamento di componenti
							elettronici, montaggio di apparecchi chiavi in mano e gestione dei materiali,
							assicurando una produzione efficiente, sicura e affidabile.<strong>Il nostro
								approccio flessibile ci consente di adattarci a qualsiasi esigenza del
								cliente</strong> , garantendo assemblaggi elettronici personalizzati e prestazioni
							elevate.
						</p>
						<div class="row">
							<div class="col-12">
								<div class="service-wrapper">
									<div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
										<div class="service-content-wrap">
											<div class="service-title">
												<div class="service-icon">
													<img src="<?= $pathindex ?>assets/images/home/produzione-assemblaggio-fase-01.svg" alt="immagine aster">
												</div>
												<span class="title">Approvvigionamento componenti</span>
											</div>
											<div class="service-content">
												<p class="desc">Ricerca e fornitura di componenti elettronici, gestendo obsolescenze e
													garantendo reperibilità anche in mercati critici.</p>
											</div>
										</div>
										<div class="service-reveal-bg" data-bg-image="assets/images/service/service-2.webp"></div>
									</div>
									<div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
										<div class="service-content-wrap">
											<div class="service-title">
												<div class="service-icon">
													<img src="<?= $pathindex ?>assets/images/home/produzione-assemblaggio-fase-02.svg" alt="immagine aster">
												</div>
												<span class="title">Montaggio schede elettroniche e apparecchi chiavi in mano</span>
											</div>
											<div class="service-content">
												<p class="desc">Assemblaggio SMD e PTH: garantiamo un processo integrato, affidabile e
													controllato che va dall’assemblaggio della scheda al prodotto finito, per tutti i
													settori industriali.</p>
											</div>
										</div>
										<div class="service-reveal-bg" data-bg-image="assets/images/service/service-3.webp"></div>
									</div>
									<div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
										<div class="service-content-wrap">
											<div class="service-title">
												<div class="service-icon">
													<img src="<?= $pathindex ?>assets/images/home/produzione-assemblaggio-fase-03.svg" alt="immagine aster">
												</div>
												<span class="title">Industrializzazione prodotto</span>
											</div>
											<div class="service-content">
												<p class="desc">Supportiamo il cliente nell’industrializzazione delle schede elettroniche,
													ottimizzando distinte base e standardizzando processi produttivi, per una
													maggiore efficienza.</p>
											</div>
										</div>
										<div class="service-reveal-bg" data-bg-image="assets/images/service/service-4.webp"></div>
									</div>
									<div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
										<div class="service-content-wrap">
											<div class="service-title">
												<div class="service-icon">
													<img src="<?= $pathindex ?>assets/images/home/produzione-assemblaggio-fase-04.svg" alt="immagine aster">
												</div>
												<span class="title">Gestione materiali e stoccaggio</span>
											</div>
											<div class="service-content">
												<p class="desc">Offriamo servizi di logistica integrata: ricezione dei materiali, controllo qualità
													in ingresso, stoccaggio in magazzino organizzato e gestione FIFO.</p>
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
										<span class="count-text">Progetti completati</span>
										<span class="count-separator" data-bg-image="<?= $pathindex ?>assets/images/shape/separator.svg"></span>
									</div>
									<div class="countup-item">
										<div class="inline-content">
											<span class="odometer countup-number" data-count="20"></span>
											<span class="count-plus">k</span>
										</div>
										<span class="count-text">Componenti realizzate</span>
										<span class="count-separator" data-bg-image="<?= $pathindex ?>assets/images/shape/separator.svg"></span>
									</div>
									<div class="countup-item">
										<div class="inline-content">
											<span class="odometer countup-number" data-count="8.5"></span>
											<span class="count-plus">x</span>
										</div>
										<span class="count-text">Velocità di crescita</span>
										<span class="count-separator" data-bg-image="<?= $pathindex ?>assets/images/shape/separator.svg"></span>
									</div>
									<div class="countup-item">
										<div class="inline-content">
											<span class="odometer countup-number" data-count="100"></span>
											<span class="count-plus">+</span>
										</div>
										<span class="count-text">Riconoscimenti ottenuti</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end: Countup Section -->

				<section class="section-gap-3">
					<div class="container post-details-wrapper">
						<h2 class="title title-anim">Produzione di componenti elettronici, per ogni applicazione
						</h2>
						<div class="blog-text">
							<p class="wow fadeInUp" data-wow-delay=".3s">Garantiamo un processo integrato, affidabile e controllato di montaggio
								elettronico, per tutti i settori industriali. I nostri servizi includono:</p>
							<ul class="wow fadeInUp" data-wow-delay=".3s">
								<li><span><img src="<?= $pathindex ?>assets/images/produzione-assemblaggio/aster-punto-elenco.svg" alt="icona"></span>Assemblaggio elettronico</li>
								<li><span><img src="<?= $pathindex ?>assets/images/produzione-assemblaggio/aster-punto-elenco.svg" alt="icona"></span>Saldatura componenti elettronici</li>
								<li><span><img src="<?= $pathindex ?>assets/images/produzione-assemblaggio/aster-punto-elenco.svg" alt="icona"></span>Test ottico AOI</li>
								<li><span><img src="<?= $pathindex ?>assets/images/produzione-assemblaggio/aster-punto-elenco.svg" alt="icona"></span>Collaudo funzionale</li>
								<li><span><img src="<?= $pathindex ?>assets/images/produzione-assemblaggio/aster-punto-elenco.svg" alt="icona"></span>Gestione materiali</li>
								<li><span><img src="<?= $pathindex ?>assets/images/produzione-assemblaggio/aster-punto-elenco.svg" alt="icona"></span>Stoccaggio protetto ESD</li>
							</ul>
						</div>
					</div>
				</section>

				<!-- start: Cta Section -->
				<section class="tj-cta-section">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="cta-area" data-bg-image="<?= $pathindex ?>assets/images/produzione-assemblaggio/produzione-assemblaggio-cta.webp">
									<div class="cta-content">
										<h2 class="title title-anim">Let’s Build Future Together.</h2>
										<div class="cta-btn wow fadeInUp" data-wow-delay=".6s">
											<a class="text-btn" href="<?= $pathindex  ?>contatti">
												<span class="btn-text"><span>Scopri di più</span></span>
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