<?php
include "include/nav_session.php";
?>

<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>BArren - Système de billetterie d'événements en ligne simple</title>
		
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
	
	<!-- Header End-->
	<!-- Body Start-->
	<div class="wrapper">
		<div class="hero-banner">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-7 col-lg-9 col-md-10">
						<div class="hero-banner-content">
							<h2>Le système de réservation d'événements en ligne et de billetterie le plus simple et le plus puissant</h2>
							<p>Barren est une plate-forme de billetterie d'événements tout-en-un pour les organisateurs d'événements, les promoteurs et les gestionnaires.Créer, promouvoir et gérer facilement vos événements de tout type et taille.</p>
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
							<h3>Explorer Aymane les événements </h3>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="event-filter-items">
							<div class="featured-controls">
								<div class="filter-tag">
									<a href="explore_events_by_date.html" class="active">Toute</a>
									<a href="explore_events_by_date.html">Aujourd'hui</a>
									<a href="explore_events_by_date.html">Demain</a>
									<a href="explore_events_by_date.html">Cette semaine</a>
									<a href="explore_events_by_date.html">Ce week-end </a>
									<a href="explore_events_by_date.html">La semaine prochaine </a>
									<a href="explore_events_by_date.html">Le weekend prochain</a>
									<a href="explore_events_by_date.html">Ce mois-ci </a>
									<a href="explore_events_by_date.html">Le mois prochain </a>
									<a href="explore_events_by_date.html"> Cette année</a>
									<a href="explore_events_by_date.html">L'année prochaine</a>
								</div>
								<div class="controls">
									<button type="button" class="control" data-filter="all">Toute</button>
									<button type="button" class="control" data-filter=".arts">arts</button>
									<button type="button" class="control" data-filter=".business">Entreprise</button>
									<button type="button" class="control" data-filter=".concert">concert</button>
									<button type="button" class="control" data-filter=".workshops">Ateliers</button>
									<button type="button" class="control" data-filter=".coaching_consulting">Coaching et consultation</button>
									<button type="button" class="control" data-filter=".health_Wellness">Santé et bien-être</button>									
									<button type="button" class="control" data-filter=".volunteer">Bénévole</button>
									<button type="button" class="control" data-filter=".sports">Des sports</button>
									<button type="button" class="control" data-filter=".free">Gratuite</button>	
								</div>
								<div class="row" data-ref="event-filter-content">
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix arts concert workshops volunteer sports health_Wellness" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="venue_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-1.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="venue_event_detail_view.html" class="event-title">Un nouveau mode de vie</a>
												<div class="duration-price-remaining">
													<span class="duration-price">AUD $100.00*</span>
													<span class="remaining"></span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>15 avril </span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>GRATUIT, 15 h 45</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix business workshops volunteer sports health_Wellness" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="online_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-2.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="online_event_detail_view.html" class="event-title"> Atelier des boucles d'oreilles avec Bronwyn David</a>
												<div class="duration-price-remaining">
													<span class="duration-price">AUD $75.00*</span>
													<span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>6 Restante</span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>30 Avr</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Samedi, 23h20 </span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>2h</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix coaching_consulting free concert volunteer health_Wellness bussiness" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="venue_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-3.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="venue_event_detail_view.html" class="event-title">Spring Showcase samedi 30 avril 2022 à 19h </a>
												<div class="duration-price-remaining">
													<span class="duration-price">Gratuite*</span>
													<span class="remaining"></span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>1 Peut</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Sun, 4.30 PM</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>3h</span>
												</div>
											</div>
										</div>
									</div>
									<div class=" col-xl-3 col-lg-4 col-md-6 col-sm-12 mix health_Wellness concert volunteer sports free business" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="online_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-4.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="online_event_detail_view.html" class="event-title">Vie d'obturation</a>
												<div class="duration-price-remaining">
													<span class="duration-price">AUD $85.00</span>
													<span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>7 Restante</span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>1 Peut</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Sun, 5.30 PM</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix concert sports health_Wellness free arts" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="venue_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-5.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="venue_event_detail_view.html" class="event-title">Dîner du vendredi soir à l'ancienne gare 27 mai 2022 </a>
												<div class="duration-price-remaining">
													<span class="duration-price">AUD $41.50*</span>
													<span class="remaining"></span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>27 Peut</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Jeu, 16 h 30</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>5h</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix workshops concert arts volunteer sports" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="venue_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-6.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="venue_event_detail_view.html" class="event-title">ÉCHEUR DE MIM OUVERT</a>
												<div class="duration-price-remaining">
													<span class="duration-price">AUD $200.00*</span>
													<span class="remaining"></span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>30 Jun</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Jeu, 16 h 30</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix volunteer free health_Wellness" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="online_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-7.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="online_event_detail_view.html" class="event-title">Tutorial Canvas Peinture pour les débutants </a>
												<div class="duration-price-remaining">
													<span class="duration-price">AUD $50.00*</span>
													<span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>17 Restante</span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>17 Jul</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Jeu, 16 h 30</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix sports concert volunteer arts" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="venue_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-8.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="venue_event_detail_view.html" class="event-title">TProgramme Rainee sur le leadership '2022</a>
												<div class="duration-price-remaining">
													<span class="duration-price">AUD $120.00*</span>
													<span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>7 Restante</span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>20 Jul</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Wed, 11.30 PM</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>12h</span>
												</div>
											</div>
										</div>
									</div>
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
							<h3>Hôte de s'engager en ligne et des événements de lieu avec stérile</h3>
							<p>Organisez des événements de lieu et organisez des événements en ligne avec des possibilités illimitées à l'aide de notre plate-forme d'événements virtuelles intégrée.Construisez une expérience d'événement unique pour vous et vos participants.</p>
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
											<h4>Événements de lieu</h4>
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
											<h4>Séminaire en ligne</h4>
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
							<h3>Aucune surcharge de fonctionnalité, obtenez exactement ce dont vous avez besoin</h3>
							<p>En plus d'être l'outil d'enregistrement d'événements en ligne le plus abordable et l'un des meilleurs systèmes de billetterie d'événements en ligne en Australie, Barren est super facile à utiliser et construit avec une disposition simpliste qui est totalement pratique pour les organisateurs.</p>
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
										<h4>Événement de lieu</h4>
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
							<h3 >Être un animateur d'événement vedette en 3 étapes faciles</h3>
							<p>Utilisez des réductions sur les oiseaux précoces, des coupons et une billetterie de groupe pour doubler votre vente de billets.Être payé rapidement et en toute sécurité.</p>
						</div>
					</div>
					<div class="col-lg-12 text-center ">
						<div class="easy-steps-tab">
							<div class="nav step-tabs justify-content-md-center " role="tablist">
								<button class="step-link active" data-bs-toggle="tab" data-bs-target="#step-01" type="button" role="tab" aria-controls="step-01" aria-selected="true">Step 01<span>Create Your Event</span></button>
								<button class="step-link" data-bs-toggle="tab" data-bs-target="#step-02" type="button" role="tab" aria-controls="step-02" aria-selected="false">Step 02<span>Sell Tickets and  Get Paid</span></button>
								<button class="step-link" data-bs-toggle="tab" data-bs-target="#step-04" type="button" role="tab" aria-controls="step-04" aria-selected="false">Step 03<span>Repeat and Grow</span></button>
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
												<h4>Clone Past Event pour créer des événements similaires</h4>
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
	<?php include "include/Footer.php";?>
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