<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, shrink-to-fit=9">
	<meta name="description" content="Gambolthemes">
	<meta name="author" content="Gambolthemes">
	<title>MoroccanJoy - Système de billetterie d'événements en ligne simple</title>

	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="images/fav.png">

	<!-- Stylesheets -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
	<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/night-mode.css" rel="stylesheet">

	<!-- Vendor Stylesheets -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
	<link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">

</head>

<body class="d-flex flex-column h-100">
	<!-- Header Start-->
	<?php
	include "include/navindex.php";
	?>

	<!-- Header End-->
	<!-- Body Start-->
	<div class="wrapper">
		<div class="hero-banner">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-7 col-lg-9 col-md-10">
						<div class="hero-banner-content">
							<h2>Le système de réservation d'événements en ligne et de billetterie le plus simple et le plus puissant</h2>
							<p>MoroccanJoy est une plate-forme de billetterie d'événements tout-en-un pour les organisateurs d'événements, les promoteurs et les gestionnaires.Créer, promouvoir et gérer facilement vos événements de tout type et taille.</p>
							<a href="create_venue_event.php" class="main-btn btn-hover">Créer un évènement <i class="fa-solid fa-arrow-right ms-3"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="explore-events p-80">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="main-title">
							<h3>Nouveauté</h3>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="event-filter-items">
							<div class="featured-controls">


								<!-- Categorie -->
								<?php
								require_once './connect/DataBase.php';
								$categoryId = $_GET['categorie_id'] ?? NULL;
								$categories = $connection->query("SELECT * FROM categorie")->fetchAll(PDO::FETCH_ASSOC);
								if (!is_null($categoryId)) {
									$sqlState = $connection->prepare("SELECT * FROM `event` WHERE Categorie_id=?");
									$sqlState->execute([$categoryId]);
									$events = $sqlState->fetchAll(PDO::FETCH_ASSOC);
								} else {
									$events = $connection->query("SELECT * FROM `event` limit 12 ")->fetchAll(PDO::FETCH_ASSOC);
								}
								?>

								<div class="controls">
									<a class="control" data-filter="all" href="index.php"><button type="button" class="control">Toute</button></a>
									<?php foreach ($categories as $category) : ?>
										<a href="?categorie_id=<?php echo $category['Categorie_id']; ?>"><button type="button" class="control data-filter=<?= $category['Nom_cat']; ?>">
												<?= $category['Nom_cat']; ?>
											</button></a>
									<?php endforeach; ?>
								</div>




								<!-- affiche event -->
								<div class="row" data-ref="event-filter-content">
									<?php
									require_once './connect/DataBase.php';
									// $stmt = $connection->query("SELECT event_id, image, P_tickts, N_tickts, event_date, event_time, event_duration, n_event FROM demande");
									// $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

									foreach ($events as $row) : ?>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix arts concert workshops volunteer sports health_Wellness " data-ref="mixitup-target">
											<div class="main-card mt-4">
												<div class="event-thumbnail">
													<a href="venue_event_detail_view.php?event_id=<?php echo $row['E_id']; ?>" class="thumbnail-img">

														<img src="upload/images/<?php echo $row['Image']; ?>" alt="Event Image">
													</a>
													<span class="bookmark-icon" title="Bookmark"></span>
												</div>
												<div class="event-content">
													<a href="venue_event_detail_view.php?event_id=<?php echo $row['E_id']; ?>" class="event-title"><?php echo $row['Titre']; ?></a>
													<div class="duration-price-remaining">
														<span class="duration-price">MAD <?php echo $row['Prix_ticket']; ?></span>
														<span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i><?php echo $row['Nombre_tickets']; ?> Restante</span>
													</div>
												</div>
												<div class="event-footer">
													<div class="event-timing">
														<div class="publish-date">
															<span><i class="fa-solid fa-calendar-day me-2"></i><?php
																												$timestamp = strtotime($row['Date_debut']);
																												$day = date('d', $timestamp);
																												$monthAbbreviation = date('M', $timestamp);

																												echo "$day ";
																												echo "$monthAbbreviation";

																												?></span>
															<span class="dot"><i class="fa-solid fa-circle"></i></span>
															<span><?php
																	$timestamp = strtotime($row['Date_debut']);
																	$dayAbbreviation = date('D', $timestamp);
																	echo "$dayAbbreviation ";


																	?><?php echo $row['Heure_debut']; ?> PM</span>
														</div>
														<span class="publish-time"><i class="fa-solid fa-clock me-2"></i><?php echo $row['Heure_fin']; ?>h</span>
													</div>
												</div>
											</div>
										</div>
									<?php endforeach; ?>


								</div>
								<div class="browse-btn">
									<a href="explore_events.html" class="main-btn btn-hover "> Parcourir tout</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="host-engaging-event-block p-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-10">
						<div class="main-title">
							<h3>Engagez-vous en ligne et organisez des événements mémorables avec notre équipe experte!</h3>
							<p>Des événements de lieu et des événements en ligne avec des possibilités illimitées à l'aide de notre plate-forme d'événements virtuelles .Construisez une expérience d'événement unique pour vous et vos participants.</p>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="engaging-block">
							<div class="owl-carousel engaging-slider owl-theme">
								<div class="item">
									<div class="main-card">
										<div class="host-item">
											<div class="host-img">
												<img src="images/icons/venue-events.png" alt="">
											</div>
											<h4>Événements Surplace</h4>
											<p>Créez une page d'événement exceptionnelle pour vos événements de lieu, attirez les participants et vendez plus de billets.</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<div class="host-item">
											<div class="host-img">
												<img src="images/icons/webinar.png" alt="">
											</div>
											<h4>Séminaire enligne</h4>
											<p>Les webinaires ont tendance à être des événements à sens unique.SARREN aide à les rendre plus engageants.</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<div class="host-item">
											<div class="host-img">
												<img src="images/icons/training-workshop.png" alt="">
											</div>
											<h4>Atelier de formation </h4>
											<p>Créer et organiser des ateliers rentables et des séances de formation en ligne, vendre des billets et gagner de l'argent.</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<div class="host-item">
											<div class="host-img">
												<img src="images/icons/online-class.png" alt="">
											</div>
											<h4>Classe en ligne</h4>
											<p>Essayez notre modèle d'apprentissage en ligne pour créer une page d'événements de learning fantastique et conduire l'engagement.</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<div class="host-item">
											<div class="host-img">
												<img src="images/icons/talk-show.png" alt="">
											</div>
											<h4>talkShow</h4>
											<p>Utilisez notre modèle d'événement intégré intuitif pour créer et héberger un talk-show engageant.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="feature-block p-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-10">
						<div class="main-title">
							<h3>Nos Services</h3>
							<p>Transformez vos rêves d'événements en réalité dès aujourd'hui avec notre expertise en organisation! Créez un moment inoubliable pour vous et vos invités avec notre équipe passionnée. Lancez-vous dès maintenant!</p>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="feature-group-list">
							<div class="row">
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="feature-item mt-46">
										<div class="feature-icon">
											<img src="images/icons/feature-icon-1.png" alt="">
										</div>
										<h4>Événements en ligne</h4>
										<p>Plateforme de conférence vidéo intégrée pour vous faire gagner du temps et du coût.</p>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="feature-item mt-46">
										<div class="feature-icon">
											<img src="images/icons/feature-icon-2.png" alt="">
										</div>
										<h4>Événement Surplace</h4>
										<p>Fonctionnalités faciles à utiliser pour créer et gérer vos événements de lieu.</p>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="feature-item mt-46">
										<div class="feature-icon">
											<img src="images/icons/feature-icon-3.png" alt="">
										</div>
										<h4>Page d'événement engageant</h4>
										<p>Créez des pages d'événements engageants avec votre logo et notre galerie de collage d'image de héros.</p>
									</div>
								</div>

								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="feature-item mt-46">
										<div class="feature-icon">
											<img src="images/icons/feature-icon-5.png" alt="">
										</div>
										<h4>Vendre des tickets</h4>
										<p>Commencez à monétiser vos événements en ligne et sur lieu, vendez des billets illimités *.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="host-step-block p-80">
			<div class="container ">
				<div class="row">
					<div class="col-lg-12">
						<div class="main-title text-center">
							<h3>Deviens un organisateur d'événement vedette en 3 étapes </h3>
							<p>Utilisez des réductions , des coupons et une billetterie de groupe pour doubler votre vente de billets.Le payment est en toute sécurité.</p>
						</div>
					</div>
					<div class="col-lg-12 text-center ">
						<div class="easy-steps-tab">
							<div class="nav step-tabs justify-content-md-center " role="tablist">
								<button class="step-link active" data-bs-toggle="tab" data-bs-target="#step-01" type="button" role="tab" aria-controls="step-01" aria-selected="true">Étape 01<span>Créer un évènement</span></button>
								<button class="step-link" data-bs-toggle="tab" data-bs-target="#step-02" type="button" role="tab" aria-controls="step-02" aria-selected="false">Étape 02<span>Vendre Vos tickets</span></button>
								<button class="step-link" data-bs-toggle="tab" data-bs-target="#step-04" type="button" role="tab" aria-controls="step-04" aria-selected="false">Étape 03<span>Répéter et progresser</span></button>
							</div>
							<div class="tab-content">
								<div class="tab-pane fade show active" id="step-01" role="tabpanel">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="step-text">Inscrivez-vous gratuitement et créez votre événement facilement en quelques minutes.</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="step-item">
												<div class="step-icon">
													<img src="images/icons/step-icon-1.png" alt="">
												</div>
												<h4>Inscrivez-vous gratuitement </h4>
												<p>Inscrivez-vous facilement en utilisant votre compte Google ou Facebook ou votre e-mail et créez vos événements en quelques minutes.</p>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="step-item">
												<div class="step-icon">
													<img src="images/icons/step-icon-2.png" alt="">
												</div>
												<h4>Utiliser le modèle de page d'événement intégré</h4>
												<p>Choisissez parmi nos modèles de pages personnalisés spécialement conçus pour attirer les participants.</p>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="step-item">
												<div class="step-icon">
													<img src="images/icons/step-icon-3.png" alt="">
												</div>
												<h4>Personnalisez votre page d'événement comme vous le souhaitez</h4>
												<p>Ajouter le logo, les images Collage Hero et ajouter des détails pour créer une page d'événement exceptionnelle.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="step-02" role="tabpanel">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="step-text">Utilisez nos multiples fonctionnalités de billetterie et outils d'automatisation du marketing pour stimuler les ventes de billets.</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="step-item">
												<div class="step-icon">
													<img src="images/icons/step-icon-4.png" alt="">
												</div>
												<h4>Promouvoir vos événements sur les réseaux sociaux et les e-mails</h4>
												<p>Utilisez nos outils de promotion d'événements intuitifs pour atteindre votre public cible et vendre des billets.</p>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="step-item">
												<div class="step-icon">
													<img src="images/icons/step-icon-5.png" alt="">
												</div>
												<h4>Utilisez des réductions sur les oiseaux précoces, les coupons et la billetterie de groupe </h4>
												<p>Doublez vos ventes de billets en utilisant nos remises intégrées, nos coupons et nos fonctionnalités de billetterie de groupe.</p>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="step-item">
												<div class="step-icon">
													<img src="images/icons/step-icon-6.png" alt="">
												</div>
												<h4>Être payé rapidement et en toute sécurité</h4>
												<p>Utilisez nos passerelles de paiement conformes PCI pour percevoir votre paiement en toute sécurité.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="step-04" role="tabpanel">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="step-text">Créez plus d'événements et gagnez plus d'argent.</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="step-item">
												<div class="step-icon">
													<img src="images/icons/step-icon-10.png" alt="">
												</div>
												<h4>Créez plusieurs sessions et gagnez plus</h4>
												<p>Utilisez nos fonctionnalités de planification d'événements pour créer plusieurs sessions pour vos événements et gagner plus d'argent.</p>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="step-item">
												<div class="step-icon">
													<img src="images/icons/step-icon-11.png" alt="">
												</div>
												<h4>cliquer des événements récents pour créer des événements similaires</h4>
												<p>Utilisez notre fonctionnalité de clonage d'événements pour cloner l'événement passé et en créer un nouveau facilement en quelques clics.</p>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="step-item">
												<div class="step-icon">
													<img src="images/icons/step-icon-12.png" alt="">
												</div>
												<h4>Obtenez un soutien comme nulle part ailleurs </h4>
												<p>Notre entraîneur embarqué dédié vous aidera à devenir un expert en un rien de temps.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="testimonial-block p-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-10">
						<div class="main-title">
							<h3>Transformer des milliers d'hôtes d'événements comme vous</h3>
							<p>Faites partie d'une équipe gagnante.Nous prospérons continuellement pour apporter le meilleur à nos clients.Soyez qu'une nouvelle fonctionnalité de produit, aidez à configurer vos événements ou même à soutenir vos clients afin qu'ils puissent facilement acheter des billets et participer à vos événements.Voici ce que certains clients ont à dire,</p>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="testimonial-slider-area">
							<div class="owl-carousel testimonial-slider owl-theme">
								<div class="item">
									<div class="main-card">
										<div class="testimonial-content">
											<div class="testimonial-text">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus arcu et ligula maximus vehicula. Phasellus at luctus lacus, quis eleifend nibh. Nam vitae convallis nisi, vitae tempus risus.</p>
											</div>
											<div class="testimonial-user-dt">
												<h5>Madeline S.</h5>
												<span>Coordonnatrice des événements</span>
												<ul>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
												</ul>
											</div>
											<span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<div class="testimonial-content">
											<div class="testimonial-text">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus arcu et ligula maximus vehicula. Phasellus at luctus lacus, quis eleifend nibh. Nam vitae convallis nisi, vitae tempus risus.</p>
											</div>
											<div class="testimonial-user-dt">
												<h5>Gabrielle B.</h5>
												<span>administration</span>
												<ul>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
												</ul>
											</div>
											<span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<div class="testimonial-content">
											<div class="testimonial-text">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus arcu et ligula maximus vehicula. Phasellus at luctus lacus, quis eleifend nibh. Nam vitae convallis nisi, vitae tempus risus.</p>
											</div>
											<div class="testimonial-user-dt">
												<h5>Piyush G.</h5>
												<span>Développeur d'applications</span>
												<ul>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
												</ul>
											</div>
											<span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<div class="testimonial-content">
											<div class="testimonial-text">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus arcu et ligula maximus vehicula. Phasellus at luctus lacus, quis eleifend nibh. Nam vitae convallis nisi, vitae tempus risus.</p>
											</div>
											<div class="testimonial-user-dt">
												<h5>Joanna P.</h5>
												<span>Gestionnaire d'événements </span>
												<ul>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
												</ul>
											</div>
											<span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<div class="testimonial-content">
											<div class="testimonial-text">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus arcu et ligula maximus vehicula. Phasellus at luctus lacus, quis eleifend nibh. Nam vitae convallis nisi, vitae tempus risus.</p>
											</div>
											<div class="testimonial-user-dt">
												<h5>Romo S.</h5>
												<span>Administrer</span>
												<ul>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
												</ul>
											</div>
											<span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<div class="testimonial-content">
											<div class="testimonial-text">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus arcu et ligula maximus vehicula. Phasellus at luctus lacus, quis eleifend nibh. Nam vitae convallis nisi, vitae tempus risus.</p>
											</div>
											<div class="testimonial-user-dt">
												<h5>Christopher F.</h5>
												<span>Directeur de marketing en ligne</span>
												<ul>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
												</ul>
											</div>
											<span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Body End-->
		<!-- Footer Start-->
		<?php include "include/Footer.php"; ?>
		<!-- Footer End-->



		<script src="js/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="vendor/OwlCarousel/owl.carousel.js"></script>
		<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
		<script src="vendor/mixitup/dist/mixitup.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/night-mode.js"></script>
		<script>
			var containerEl = document.querySelector('[data-ref~="event-filter-content"]');

			var mixer = mixitup(containerEl, {
				selectors: {
					target: '[data-ref~="mixitup-target"]'
				}
			});
		</script>
</body>

</html>