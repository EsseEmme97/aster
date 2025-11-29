<?
$lingua = 1;
require_once("../inc/global.php");
require_once("../inc/header.php");
require_once("../inc/mysqli.php");
// $database = new DB();
$titleseo = "Produzione elettronica - Ricerca e Sviluppo | Aster Elettronica";
$descriptionseo = "Aster Elettronica realizza prototipazione elettronica
avanzata, con soluzioni innovative, tecnologie all’avanguardia e processi
ottimizzati secondo la filosofia Kaizen.";
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
				<section class="tj-page-header section-gap-x" data-bg-image="<?= $pathindex ?>assets/images/ricerca-sviluppo/ricerca-sviluppo-header.webp">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="tj-page-header-content text-center">
									<h1 class="tj-page-title">Ricerca & Sviluppo</h1>
									<div class="tj-page-link">
										<span>
											<a href="<?= $pathindex ?>">Home</a>
										</span>
										<span><i class="tji-arrow-right text-blu-secondario"></i></span>
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
							<h2 class="fw-bold">La ricerca nella produzione elettronica</h2>
							<p>In <a href="<?= $pathindex ?>azienda" class="text-link">Aster Elettronica</a> la ricerca e sviluppo è il cuore pulsante di ogni progetto:
								un’area strategica in cui competenze tecniche, visione innovativa e cultura
								del miglioramento continuo si incontrano ogni giorno. Dal 1990 lavoriamo al
								fianco dei nostri clienti per trasformare un’idea in un prodotto elettronico
								affidabile, sicuro e pronto per il mercato, seguendo ogni fase con precisione e
								metodo.</p>
							<p>
								<strong>Il nostro team, composto da professionisti specializzati, supporta
									aziende di diversi <a href="<?= $pathindex ?>settori" class="text-link">settori</a> nella prototipazione elettronica,</strong>
								nell’ottimizzazione delle architetture circuitali e nella definizione dei processi
								più efficaci per la <a href="" class="text-link">produzione elettronica</a> su piccola o larga scala.
							</p>
							<p>
								Attraverso un costante scambio di informazioni, strumenti tecnologici
								avanzati e processi certificati, garantiamo qualità, aggiornamento costante e
								risultati concreti.
							</p>
							<p>
								Ricerca, sviluppo e industrializzazione trovano in Aster Elettronica un partner
								affidabile, capace di affiancare il cliente dall’idea iniziale alla realizzazione
								finale, con dispositivi elettronici realizzati per evolvere insieme alle esigenze
								di mercato.
							</p>
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
										<h2 class="sec-title title-anim">Guidati dall’innovazione e dalla qualità, a servizio del tuo
											<span>business</span>
										</h2>
									</div>
								</div>
								<div class="about-bottom-area">
									<div class="mission-vision-box wow fadeInLeft" data-wow-delay=".5s">
										<span class="title h3">Formazione continua</span>
										<p class="desc mt-3">Formiamo costantemente i nostri professionisti per garantire competenze
											aggiornate, innovative e sempre allineate alle tecnologie più moderne.
										</p>
									</div>
									<div class="mission-vision-box wow fadeInRight" data-wow-delay=".5s">
										<span class="title h3">Tecnologie avanzate</span>
										<p class="desc mt-3">Adottiamo strumenti tecnologici d’avanguardia per garantire precisione,
											efficienza e risultati affidabili in ogni progetto elettronico.
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
										<img src="<?= $pathindex ?>assets\images\ricerca-sviluppo\ricerca-sviluppo-iso-9001.webp" alt="immagine certificazione ISO 9001">
										<div class="sec-heading style-2">
											<h2 class="sec-title title-anim mb-5">Noi siamo certificati ISO 9001:2015</h2>
											<p class="text-white">La qualità non è un obiettivo, ma un impegno quotidiano.
												Con la certificazione ISO 9001:2015, Aster Elettronica attesta l’efficacia del
												proprio Sistema di Gestione per la Qualità. Garantiamo processi controllati e
												costante attenzione alla soddisfazione del cliente, offrendo soluzioni
												elettroniche affidabili e conformi agli standard internazionali. Scegliere Aster
												Elettronica significa affidarsi a un partner certificato, che lavora secondo
												standard riconosciuti a livello globale.</p>
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
								<div class="testimonial-wrapper wow fadeInUp border-radius-12px p-4 bg-white" data-wow-delay=".5s">
									<h2 class="mb-5">Noi siamo <br> <span class="text-blu-primario">Kaizein People</span>.</h2>
									<p>
										La filosofia Kaizen guida ogni aspetto del nostro lavoro, in ottica di lead
										production: migliorare ogni giorno, in modo costante e misurabile, per offrire
										ai clienti un valore crescente. In Aster Elettronica questo approccio si traduce
										in processi ottimizzati, flussi produttivi più efficienti e soluzioni elettroniche
										progettate e realizzate con la <strong>massima attenzione alla qualità.</strong>
									</p>
									<p>
										Investiamo nella formazione, adottiamo nuove tecnologie e rafforziamo le
										nostre competenze, per garantire un servizio che evolva con la stessa
										velocità del settore elettronico.
									</p>
									<p>
										Essere Kaizen People significa non accontentarsi mai dell’esistente, ma
										immaginare ciò che può essere migliorato, rendendo ogni progetto più solido,
										affidabile e orientato al futuro.
									</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- end: Testimonial Section -->
				<!-- start: Project Section -->
				<?
				$images = array_slice(scandir($pathindex . "assets/images/ricerca-sviluppo/"), 3, 8);
				?>
				<section class="h6-project section-gap section-gap-x pt-0">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<div class="h6-project-inner wow fadeInUp" data-wow-delay="0.6s">
									<? foreach ($images as $image): ?>
										<div class=" project-item h6-project-item ">
											<div class="project-item-inner h6-project-item-inner"
												data-bg-image="<?= $pathindex . "assets/images/ricerca-sviluppo/" . $image ?>">
											</div>
										</div>
									<? endforeach; ?>
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