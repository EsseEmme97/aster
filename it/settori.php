<?
$lingua = 1;
require_once("../inc/global.php");
require_once("../inc/header.php");
require_once("../inc/mysqli.php");
// $database = new DB();
$titleseo = "Elettronica industriale: Settori | Aster Elettronica";
$descriptionseo = "Con assemblaggi elettronici conto terzi, costruiamo il futuro
della tua azienda: dalla videosorveglianza al controllo industriale, scopri i
settori serviti.";
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
				<section class="tj-page-header section-gap-x" data-bg-image="<?= $pathindex ?>assets/images/settori/settori-header.webp">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="tj-page-header-content text-center">
									<h1 class="tj-page-title">Settori</h1>
									<div class="tj-page-link">
										<span>
											<a href="<?= $pathindex ?>">Home</a>
										</span>
										<span><i class="tji-arrow-right text-blu-secondario"></i></span>
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
						<h1>Elettronica industriale per ogni settore</h1>
						<p class="mt-5">Da oltre trent’anni <a href="<?= $pathindex ?>aster-elettronica" class="text-link">Aster Elettronica</a> sviluppa e produce soluzioni di elettronica
							industriale, destinate a settori che richiedono affidabilità, continuità operativa
							e precisione. Nata nel 1990 come azienda specializzata negli <a href="<?= $pathindex ?>produzione-e-assemblaggio" class="text-link">assemblaggi</a>
							elettronici conto terzi, l’azienda è cresciuta sviluppando competenze
							avanzate, processi ottimizzati e una forte capacità di personalizzazione:
							elementi che oggi le permettono di supportare realtà produttive tra le più
							diverse.</p>
						<p>La nostra forza risiede in un approccio tecnico strutturato, alimentato da
							<strong>formazione continua, investimenti tecnologici e collaborazione diretta
								con i clienti.</strong> Questo metodo consente ad Aster Elettronica di adattarsi
							rapidamente ad ogni contesto applicativo, sviluppando schede ed apparecchi
							elettronici per applicazioni civili, industriali, scientifiche, medicali e
							professionali. Ogni progetto nasce da un confronto attivo con il committente e
							si traduce in soluzioni realizzate con attenzione alla qualità, all’innovazione
							dei processi e alla stabilità produttiva.
						</p>
						<p>
							Dalla sicurezza dei sistemi di videocitofonia alle prestazioni sportive
							professionali, dal controllo industriale al settore biomedicale, fino ai dispositivi
							per la ricerca scientifica: ovunque serva elettronica precisa, sicura e
							personalizzata, Aster è il partner che trasforma qualsiasi esigenza tecnica in
							una soluzione concreta.
						</p>
					</div>
				</section>
				<!-- start: Service Section -->
				<?
				$settori = [
					[
						"titolo" => "Edilizia civile/industriale, videocitofonia & sistemi antifurto",
						"testo" => "Produciamo elettronica per videocitofoni, sistemi di comunicazione e
									sicurezza per edifici residenziali, condominiali, industriali e navali.",
						"label-1" => "Sicurezza avanzata",
						"label-2" => "Sistemi di comunicazione",
						"label-3" => "Integrazione edificio",
						"icona" => "edilizia-civile.svg",
						"id" => "edilizia-civile-industriale"
					],
					[
						"titolo" => "Prestazioni sportive",
						"testo" => "Realizziamo dispositivi elettronici per il monitoraggio atletico e gestione
								  competizioni, con raccolta dati in tempo reale.",
						"label-1" => "Performance realtime",
						"label-2" => "Cronometraggio preciso",
						"label-3" => "Raccolta dati wireless",
						"icona" => "prestazioni-sportive.svg",
						"id" => "prestazioni-sportive"
					],
					[
						"titolo" => "Lighting",
						"testo" => "Sviluppiamo soluzioni elettroniche per il controllo dell’illuminazione, in
									applicazioni civili e industriali.",
						"label-1" => "Efficienza luminosa",
						"label-2" => "Controllo dinamico",
						"label-3" => "Gestione smart",
						"icona" => "illuminazione.svg",
						"id" => "lighting"
					],
					[
						"titolo" => "Meteo & traffico",
						"testo" => "Produciamo sistemi per il monitoraggio ambientale e stradale: sensori,
									centraline dati e pannelli informativi.",
						"label-1" => "Rilevazioni affidabili",
						"label-2" => "Gestione dati",
						"label-3" => "Sicurezza stradale",
						"icona" => "meteo-traffico.svg",
						"id" => "meteo-traffico"
					],
					[
						"titolo" => "Elettromedicale",
						"testo"=>"Forniamo elettronica per dispositivi biomedicali: monitor, stimolatori, sensori
								  medici.",
						"label-1"=>"Precisione clinica",
						"label-2"=>"Affidabilità continua",
						"label-3"=>"Sicurezza certificata",
						"icona" => "elettromedicale.svg",
						"id" => "elettromedicale"
					],
					[
						"titolo" => "Soluzioni audio professionali",
						"testo"=>"Realizziamo elettronica per audio professionale, destinata a broadcast, eventi
								  live e installazioni tecniche.",
						"label-1"=>"Qualità sonora",
						"label-2"=>"Stabilità operativa",
						"label-3"=>"Uso professionale",
						"icona" => "broadcast.svg",
						"id" => "audio-professionale"
					],
					[
						"titolo" => "Sistemi di controllo motore (inverter)",
						"testo"=>"Progettiamo soluzioni elettroniche per la gestione di motori industriali e
								  inverter ad alte prestazioni.",
						"label-1"=>"Efficienza motori",
						"label-2"=>"Controllo preciso",
						"label-3"=>"Uso industriale",
						"icona" => "controllo-motore.svg",
						"id" => "controllo-motore"
					],
					[
						"titolo" => "Sistemi di controllo industriale (automazione e processo)",
						"testo" => "Sviluppiamo schede elettroniche per automazione, controllo di processo,
									macchine industriali e interfacce HMI.",
						"label-1"=>"Processi continui",
						"label-2"=>"Automazione avanzata",
						"label-3"=>"Controllo preciso",
						"icona" => "controllo-industriale.svg",
						"id" => "controllo-industriale"
					],
					[
						"titolo" => "Vending machines",
						"testo"=>"Elettronica per distributori automatici: riconoscimento pagamenti,
								  termoregolazione, controllo motori e sensori.",
						"label-1"=>"Gestione credito",
						"label-2"=>"Affidabilità meccanica",
						"label-3"=>"Controllo temperatura",
						"icona" => "vending-machines.svg",
						"id" => "vending-machines"
					],
					[
						"titolo" => "Sistemi destinati alla ricerca scientifica",
						"testo"=>"Produciamo elettronica dedicata a strumenti scientifici, telescopi,
								  radiotelescopi e rilevatori di fotoni.",
						"label-1"=>"Misure complesse",
						"label-2"=>"Strumenti avanzati",
						"label-3"=>"Alta sensibilità",
						"icona" => "ricerca-scientifica.svg",
						"id" => "ricerca-scientifica"
					],
					[
						"titolo" => "Cantieri edili e navali",
						"testo"=>"Forniamo sistemi elettronici per gestione operativa, monitoraggio e sicurezza
								  in cantieri, a terra o in mare.",
						"label-1"=>"Controllo attivo",
						"label-2"=>"Robustezza ambientale",
						"label-3"=>"Operatività continua",
						"icona" => "cantieri-edili-navali.svg",
						"id" => "cantieri-edili-navali"
					],
					[
						"titolo" => "Sistemi APR di pilotaggio remoto",
						"testo"=>"Sviluppiamo elettronica per droni, sistemi APR e applicazioni di controllo
								  remoto avanzato.",
						"label-1"=>"Pilotaggio remoto",
						"label-2"=>"Stabilità di volo",
						"label-3"=>"Integrazione sensori",
						"icona" => "pilotaggio-remoto.svg",
						"id" => "sistemi-apr"
					],
				];

				$basePath = "assets/images/settori/"
				?>
				<section id="servizi" class="tj-service-section service-2 section-gap section-gap-x slidebar-stickiy-container">
					<div class="container">
						<div class="row">
							<div class="col-lg-4">
								<div class="content-wrap  slidebar-stickiy">
									<div class="sec-heading style-2">
										<span class="sub-title wow fadeInUp bg-carta-da-zucchero" data-wow-delay=".3s">I SETTORI</span>
										<h2 class="sec-title text-white text-anim">Assemblaggi elettronici evoluti, per qualsiasi
											<span>applicazione</span>
										</h2>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="service-wrapper-2">
									<? foreach ($settori as $settore): ?>
										<div id="<?= $settore["id"]  ?>" class="service-item-wrapper tj-fadein-right-on-scroll">
											<div class="service-item style-2 ">
												<div class="title-area">
													<div class="service-icon">
														<img src="<?= $pathindex . $basePath . $settore["icona"] ?>" alt="icona settore">
													</div>
													<span class="title d-block h3"><?= $settore["titolo"] ?></span>
												</div>
												<div class="service-content">
													<p class="desc"><?= $settore["testo"] ?></p>
													<ul class="list-items">
														<li><img style="display: inline-block; width:16px" src="<?= $pathindex ?>assets\images\settori\aster-punto-elenco.svg" alt="icona aster"></i><?= $settore["label-1"] ?></li>
														<li><img style="display: inline-block; width:16px" src="<?= $pathindex ?>assets\images\settori\aster-punto-elenco.svg" alt="icona aster"></i><?= $settore["label-2"] ?></li>
														<li><img style="display: inline-block; width:16px" src="<?= $pathindex ?>assets\images\settori\aster-punto-elenco.svg" alt="icona aster"></i><?= $settore["label-3"] ?></li>
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
											<a class="text-btn " href="<?= $pathindex ?>contatti">
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