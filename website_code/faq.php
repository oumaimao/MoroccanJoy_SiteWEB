<?php session_start();?>

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
	<?php include "include/navindex.php";?>
	<!-- Header End-->
	<!-- Body Start-->
	<div class="wrapper">
		<div class="breadcrumb-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-10">
						<div class="barren-breadcrumb">
							<nav aria-label="breadcrumb">
								
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="event-dt-block p-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="main-title checkout-title text-center">
							<h3>Questions Fréquentes</h3>
							<p class="mb-0"> Trouvez des réponses aux questions communes posées sur stérile.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="main-card mt-5">
							<div class="bp-title">
								<h4>Table des matières</h4>
							</div>
							<div class="bp-content faq-widget-content">
								<ul class="faq-widget-links pt_30">
									<li><a href="#FAQforOrganisers">FAQ pour les organisateurs </a></li>
									<li><a href="#FAQforAttendees">FAQ pour les participants</a></li>
								</ul>
								<div class="cant-ans-box pt_30">
									<h4><i class="fa-solid fa-circle-question me-2 fs-18"></i>Vous ne trouvez pas de réponse? </h4>
									<a href="help_center.html">Visiter le centre d'aide</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-md-12">							
						<div class="faq-scrollspy">
							<div class="faq-accordion pt-0 p-2 mt-5" id="FAQforOrganisers">	
								<div class="faq-accordion-title">
									<h4>FAQ pour les organisateurs</h4>
								</div>
								<div class="accordion" id="accordionFAQforOrganisers">
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsOrgnaisersOpen-heading1">
											<button class="accordion-btn pe-0 ps-0" type="button" data-bs-toggle="collapse" data-bs-target="#panelsOrgnaisersOpen-collapse1" aria-expanded="true" aria-controls="panelsOrgnaisersOpen-collapse1">
												Quels types d'événements puis-je mettre en place par le biais de stériles?
											</button>
										</h2>
										<div id="panelsOrgnaisersOpen-collapse1" class="accordion-collapse collapse show" aria-labelledby="panelsOrgnaisersOpen-heading1" data-bs-parent="#accordionFAQforOrganisers">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsOrgnaisersOpen-heading2">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsOrgnaisersOpen-collapse2" aria-expanded="false" aria-controls="panelsOrgnaisersOpen-collapse2">
												MoroccanJoy propose-t-il une gestion d'événements ou un service client pour mon événement?
											</button>
										</h2>
										<div id="panelsOrgnaisersOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsOrgnaisersOpen-heading2" data-bs-parent="#accordionFAQforOrganisers">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsOrgnaisersOpen-heading3">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsOrgnaisersOpen-collapse3" aria-expanded="false" aria-controls="panelsOrgnaisersOpen-collapse3">
												La page de mon événement et mon profil peuvent-elles refléter la marque de mon entreprise?
											</button>
										</h2>
										<div id="panelsOrgnaisersOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsOrgnaisersOpen-heading3" data-bs-parent="#accordionFAQforOrganisers">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsOrgnaisersOpen-heading4">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsOrgnaisersOpen-collapse4" aria-expanded="false" aria-controls="panelsOrgnaisersOpen-collapse4">
												Combien de temps vous après mon événement dois-je m'attendre à être payé?
											</button>
										</h2>
										<div id="panelsOrgnaisersOpen-collapse4" class="accordion-collapse collapse" aria-labelledby="panelsOrgnaisersOpen-heading4" data-bs-parent="#accordionFAQforOrganisers">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsOrgnaisersOpen-heading5">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsOrgnaisersOpen-collapse5" aria-expanded="false" aria-controls="panelsOrgnaisersOpen-collapse5">
												Quelle plate-forme sera utilisée pour organiser mon événement en ligne et devrai-je payer des frais externes pour mon événement en ligne?
											</button>
										</h2>
										<div id="panelsOrgnaisersOpen-collapse5" class="accordion-collapse collapse" aria-labelledby="panelsOrgnaisersOpen-heading5" data-bs-parent="#accordionFAQforOrganisers">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsOrgnaisersOpen-heading6">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsOrgnaisersOpen-collapse6" aria-expanded="false" aria-controls="panelsOrgnaisersOpen-collapse6">
												Puis-je inviter des conférenciers à mon événement en ligne?
											</button>
										</h2>
										<div id="panelsOrgnaisersOpen-collapse6" class="accordion-collapse collapse" aria-labelledby="panelsOrgnaisersOpen-heading6" data-bs-parent="#accordionFAQforOrganisers">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsOrgnaisersOpen-heading7">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsOrgnaisersOpen-collapse7" aria-expanded="false" aria-controls="panelsOrgnaisersOpen-collapse7">
												Puis-je ajouter plusieurs sessions à mon événement en ligne?
											</button>
										</h2>
										<div id="panelsOrgnaisersOpen-collapse7" class="accordion-collapse collapse" aria-labelledby="panelsOrgnaisersOpen-heading7" data-bs-parent="#accordionFAQforOrganisers">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsOrgnaisersOpen-heading8">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsOrgnaisersOpen-collapse8" aria-expanded="false" aria-controls="panelsOrgnaisersOpen-collapse8">
												Puis-je ajouter des exigences spéciales au moment de la réservation?
											</button>
										</h2>
										<div id="panelsOrgnaisersOpen-collapse8" class="accordion-collapse collapse" aria-labelledby="panelsOrgnaisersOpen-heading8" data-bs-parent="#accordionFAQforOrganisers">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsOrgnaisersOpen-heading9">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsOrgnaisersOpen-collapse9" aria-expanded="false" aria-controls="panelsOrgnaisersOpen-collapse9">
												Puis-je réserver mon événement pour un groupe de personnes sélectionné?
											</button>
										</h2>
										<div id="panelsOrgnaisersOpen-collapse9" class="accordion-collapse collapse" aria-labelledby="panelsOrgnaisersOpen-heading9" data-bs-parent="#accordionFAQforOrganisers">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsOrgnaisersOpen-heading10">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsOrgnaisersOpen-collapse10" aria-expanded="false" aria-controls="panelsOrgnaisersOpen-collapse10">
												Puis-je limiter le nombre de billets disponibles pour chaque personne?
											</button>
										</h2>
										<div id="panelsOrgnaisersOpen-collapse10" class="accordion-collapse collapse" aria-labelledby="panelsOrgnaisersOpen-heading10" data-bs-parent="#accordionFAQforOrganisers">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsOrgnaisersOpen-heading11">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsOrgnaisersOpen-collapse11" aria-expanded="false" aria-controls="panelsOrgnaisersOpen-collapse11">
												Quel est le nombre maximum de personnes que je peux héberger?
											</button>
										</h2>
										<div id="panelsOrgnaisersOpen-collapse11" class="accordion-collapse collapse" aria-labelledby="panelsOrgnaisersOpen-heading11" data-bs-parent="#accordionFAQforOrganisers">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsOrgnaisersOpen-heading12">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsOrgnaisersOpen-collapse12" aria-expanded="false" aria-controls="panelsOrgnaisersOpen-collapse12">
												Puis-je facilement partager ma page d'événements?
											</button>
										</h2>
										<div id="panelsOrgnaisersOpen-collapse12" class="accordion-collapse collapse" aria-labelledby="panelsOrgnaisersOpen-heading12" data-bs-parent="#accordionFAQforOrganisers">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsOrgnaisersOpen-heading13">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsOrgnaisersOpen-collapse13" aria-expanded="false" aria-controls="panelsOrgnaisersOpen-collapse13">
												Comment savoir qui est arrivé à mon événement de site?
											</button>
										</h2>
										<div id="panelsOrgnaisersOpen-collapse13" class="accordion-collapse collapse" aria-labelledby="panelsOrgnaisersOpen-heading13" data-bs-parent="#accordionFAQforOrganisers">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsOrgnaisersOpen-heading14">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsOrgnaisersOpen-collapse14" aria-expanded="false" aria-controls="panelsOrgnaisersOpen-collapse14">
												Comment modifier mon événement après sa publication?
											</button>
										</h2>
										<div id="panelsOrgnaisersOpen-collapse14" class="accordion-collapse collapse" aria-labelledby="panelsOrgnaisersOpen-heading14" data-bs-parent="#accordionFAQforOrganisers">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsOrgnaisersOpen-heading15">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsOrgnaisersOpen-collapse15" aria-expanded="false" aria-controls="panelsOrgnaisersOpen-collapse15">
												SARREN facture-t-il des événements gratuits?
											</button>
										</h2>
										<div id="panelsOrgnaisersOpen-collapse15" class="accordion-collapse collapse" aria-labelledby="panelsOrgnaisersOpen-heading15" data-bs-parent="#accordionFAQforOrganisers">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsOrgnaisersOpen-heading16">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsOrgnaisersOpen-collapse16" aria-expanded="false" aria-controls="panelsOrgnaisersOpen-collapse16">
												Puis-je changer mon abonnement?
											</button>
										</h2>
										<div id="panelsOrgnaisersOpen-collapse16" class="accordion-collapse collapse" aria-labelledby="panelsOrgnaisersOpen-heading16" data-bs-parent="#accordionFAQforOrganisers">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsOrgnaisersOpen-heading17">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsOrgnaisersOpen-collapse17" aria-expanded="false" aria-controls="panelsOrgnaisersOpen-collapse17">
												Quelles options de paiement acceptez-vous?
											</button>
										</h2>
										<div id="panelsOrgnaisersOpen-collapse17" class="accordion-collapse collapse" aria-labelledby="panelsOrgnaisersOpen-heading17" data-bs-parent="#accordionFAQforOrganisers">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsOrgnaisersOpen-heading18">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsOrgnaisersOpen-collapse18" aria-expanded="false" aria-controls="panelsOrgnaisersOpen-collapse18">
												Où puis-je obtenir un rapport de mon événement?
											</button>
										</h2>
										<div id="panelsOrgnaisersOpen-collapse18" class="accordion-collapse collapse" aria-labelledby="panelsOrgnaisersOpen-heading18" data-bs-parent="#accordionFAQforOrganisers">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsOrgnaisersOpen-heading19">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsOrgnaisersOpen-collapse19" aria-expanded="false" aria-controls="panelsOrgnaisersOpen-collapse19">
												Puis-je organiser des articles imprimés tels que des billets et des programmes via stérile?
											</button>
										</h2>
										<div id="panelsOrgnaisersOpen-collapse19" class="accordion-collapse collapse" aria-labelledby="panelsOrgnaisersOpen-heading19" data-bs-parent="#accordionFAQforOrganisers">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsOrgnaisersOpen-heading20">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsOrgnaisersOpen-collapse20" aria-expanded="false" aria-controls="panelsOrgnaisersOpen-collapse20">
												Mes clients doivent-ils faire un compte avec stérile?
											</button>
										</h2>
										<div id="panelsOrgnaisersOpen-collapse20" class="accordion-collapse collapse" aria-labelledby="panelsOrgnaisersOpen-heading20" data-bs-parent="#accordionFAQforOrganisers">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsOrgnaisersOpen-heading21">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsOrgnaisersOpen-collapse21" aria-expanded="false" aria-controls="panelsOrgnaisersOpen-collapse21">
												Où dois-je obtenir de l'aide si j'en ai besoin?
											</button>
										</h2>
										<div id="panelsOrgnaisersOpen-collapse21" class="accordion-collapse collapse" aria-labelledby="panelsOrgnaisersOpen-heading21" data-bs-parent="#accordionFAQforOrganisers">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="faq-accordion faq-attendees-accordion pt-0 p-2" id="FAQforAttendees">	
								<div class="faq-accordion-title">
									<h4>FAQ pour les participants </h4>
								</div>
								<div class="accordion" id="accordionFAQforAttendees">
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsAttendeesOpen-heading1">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsAttendeesOpen-collapse1" aria-expanded="true" aria-controls="panelsAttendeesOpen-collapse1">
												Mes coordonnées seront-elles partagées avec des tiers?
											</button>
										</h2>
										<div id="panelsAttendeesOpen-collapse1" class="accordion-collapse collapse" aria-labelledby="panelsAttendeesOpen-heading1" data-bs-parent="#accordionFAQforAttendees">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordionpanelsAttendeesOpen-header" id="panelsAttendeesOpen-heading2">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsAttendeesOpen-collapse2" aria-expanded="false" aria-controls="panelsAttendeesOpen-collapse2">
												Ai-je besoin d'un compte pour acheter des billets chez stériles?
											</button>
										</h2>
										<div id="panelsAttendeesOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsAttendeesOpen-heading2" data-bs-parent="#accordionFAQforAttendees">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsAttendeesOpen-heading3">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsAttendeesOpen-collapse3" aria-expanded="false" aria-controls="panelsAttendeesOpen-collapse3">
												Comment acheter des billets pour un événement?
											</button>
										</h2>
										<div id="panelsAttendeesOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsAttendeesOpen-heading3" data-bs-parent="#accordionFAQforAttendees">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsAttendeesOpen-heading4">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsAttendeesOpen-collapse4" aria-expanded="false" aria-controls="panelsAttendeesOpen-collapse4">
												Pourquoi ne puis-je pas acheter plus d'un certain nombre de billets?
											</button>
										</h2>
										<div id="panelsAttendeesOpen-collapse4" class="accordion-collapse collapse" aria-labelledby="panelsAttendeesOpen-heading4" data-bs-parent="#accordionFAQforAttendees">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsAttendeesOpen-heading5">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsAttendeesOpen-collapse5" aria-expanded="false" aria-controls="panelsAttendeesOpen-collapse5">
												Comment informer mon organisateur de mes exigences spéciales pour un événement?
											</button>
										</h2>
										<div id="panelsAttendeesOpen-collapse5" class="accordion-collapse collapse" aria-labelledby="panelsAttendeesOpen-heading5" data-bs-parent="#accordionFAQforAttendees">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsAttendeesOpen-heading6">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsAttendeesOpen-collapse6" aria-expanded="false" aria-controls="panelsAttendeesOpen-collapse6">
												Quand vais-je recevoir mes billets?
											</button>
										</h2>
										<div id="panelsAttendeesOpen-collapse6" class="accordion-collapse collapse" aria-labelledby="panelsAttendeesOpen-heading6" data-bs-parent="#accordionFAQforAttendees">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsAttendeesOpen-heading7">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsAttendeesOpen-collapse7" aria-expanded="false" aria-controls="panelsAttendeesOpen-collapse7">
												Comment vais-je rejoindre mon événement en ligne?
											</button>
										</h2>
										<div id="panelsAttendeesOpen-collapse7" class="accordion-collapse collapse" aria-labelledby="panelsAttendeesOpen-heading7" data-bs-parent="#accordionFAQforAttendees">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsAttendeesOpen-heading8">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsAttendeesOpen-collapse8" aria-expanded="false" aria-controls="panelsAttendeesOpen-collapse8">
												Où vais-je obtenir la meilleure expérience de mon événement en ligne?
											</button>
										</h2>
										<div id="panelsAttendeesOpen-collapse8" class="accordion-collapse collapse" aria-labelledby="panelsAttendeesOpen-heading8" data-bs-parent="#accordionFAQforAttendees">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsAttendeesOpen-heading9">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsAttendeesOpen-collapse9" aria-expanded="false" aria-controls="panelsAttendeesOpen-collapse9">
												Dois-je imprimer mes billets?
											</button>
										</h2>
										<div id="panelsAttendeesOpen-collapse9" class="accordion-collapse collapse" aria-labelledby="panelsAttendeesOpen-heading9" data-bs-parent="#accordionFAQforAttendees">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsAttendeesOpen-heading10">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsAttendeesOpen-collapse10" aria-expanded="false" aria-controls="panelsAttendeesOpen-collapse10">
												Puis-je annuler ou changer ma réservation?
											</button>
										</h2>
										<div id="panelsAttendeesOpen-collapse10" class="accordion-collapse collapse" aria-labelledby="panelsAttendeesOpen-heading10" data-bs-parent="#accordionFAQforAttendees">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsAttendeesOpen-heading11">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsAttendeesOpen-collapse11" aria-expanded="false" aria-controls="panelsAttendeesOpen-collapse11">
												J'ai perdu mes billets, pouvez-vous les renvoyer?
											</button>
										</h2>
										<div id="panelsAttendeesOpen-collapse11" class="accordion-collapse collapse" aria-labelledby="panelsAttendeesOpen-heading11" data-bs-parent="#accordionFAQforAttendees">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="panelsAttendeesOpen-heading12">
											<button class="accordion-btn pe-0 ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsAttendeesOpen-collapse12" aria-expanded="false" aria-controls="panelsAttendeesOpen-collapse12">
												Où puis-je aller pour obtenir de l'aide?
											</button>
										</h2>
										<div id="panelsAttendeesOpen-collapse12" class="accordion-collapse collapse" aria-labelledby="panelsAttendeesOpen-heading12" data-bs-parent="#accordionFAQforAttendees">
											<div class="accordion-body pt-0 pe-0 ps-0">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor ex. Curabitur id odio in lectus molestie porttitor ac vel turpis. Integer tincidunt non felis et tincidunt. Duis eros leo, porta a felis vitae, facilisis blandit felis. Cras auctor nisl ut sem bibendum, non auctor magna ultrices. Etiam condimentum enim eu dui pharetra, eu sagittis ante mollis. Integer porttitor ultricies bibendum. Aenean mollis odio id ultrices pharetra. Quisque vitae mi nec enim viverra pellentesque.</p>
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
	</div>
	<!-- Body End-->
	<!-- Footer Start-->
	<?php include "include/Footer.php";?>
	<!-- Footer End-->
	
	
	
	<script src="js/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>	
	<script src="js/custom.js"></script>
	<script src="js/night-mode.js"></script>
</body>
</html>