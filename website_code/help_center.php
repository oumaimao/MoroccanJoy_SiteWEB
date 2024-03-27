<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Barren - Système de billetterie d'événements en ligne simple </title>
		
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
		<link href="vendor/ckeditor5/sample/css/sample.css" rel="stylesheet">
		
	</head>

<body class="d-flex flex-column h-100">
	<!-- Create Support Ticket Model Start-->
	<div class="modal fade" id="supportTicketModal" tabindex="-1" aria-labelledby="supportTicketModalLabel" aria-hidden="false">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="supportTicketModalLabel">Soumettre un ticket</h5>
					<button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-multiply"></i></button>
				</div>
				<div class="modal-body">
					<div class="model-content main-form">
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Nom du contact*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">																								
								</div>
								<div class="form-group mt-4">
									<label class="form-label">E-mail*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">																								
								</div>
								<div class="form-group mt-4">
									<label class="form-label">Sujette*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">																								
								</div>
								<div class="form-group mt-4">
									<label class="form-label">description*</label>
									<div class="text-editor">
										<div id="tk_editor"></div>
									</div>																								
								</div>
								<div class="form-group mt-4">
									<label class="form-label">Priorité*</label>
									<select class="selectpicker" title="None">
										<option value="High">Haut</option>
										<option value="Medium">Moyen</option>
										<option value="Low">Faible</option>
									</select>																							
								</div>
								<div class="form-group mt-4">
									<label class="form-label">classifications*</label>
									<select class="selectpicker" title="None">
										<option value="Question">question</option>
										<option value="Problem">Problème</option>
										<option value="Feature">Fonctionnalité</option>
										<option value="Others">Autres</option>
									</select>																							
								</div>
								<div class="form-group mt-4">
									<label class="form-label">Attachements*</label>
									<div class="upload-file-dt">
										<div class="upload-btn">													
											<input class="uploadBtn-input" type="file" accept="image/*, application/pdf" id="upload" multiple="">
											<label for="upload" title="Image">Télécharger des fichiers</label>
										</div>
										<span class="uploadBtn-file-name"> Joindre un fichier</span>
										<small>(Jusqu'à 20 Mo)</small>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-target="#aboutModal" data-bs-toggle="modal" data-bs-dismiss="modal">Annuler</button>
					<button type="button" class="main-btn min-width btn-hover h_40">Sauvegarder</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Create Support Ticket Model End-->
	<!-- Header Start-->
	<header class="header">
		<div class="header-inner">
			<nav class="navbar navbar-expand-lg bg-barren barren-head navbar fixed-top justify-content-sm-start pt-0 pb-0">
				<div class="container">	
					<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<span class="navbar-toggler-icon">
							<i class="fa-solid fa-bars"></i>
						</span>
					</button>
					<a class="navbar-brand d-flex align-center order-1 order-lg-0 ml-lg-0 ml-2 me-auto" href="index.html">
						<div class="res-main-logo">
							<img src="images/logo-icon.svg" alt="">
						</div>
						<div class="main-logo" id="logo">
							<img src="images/logo.svg" alt="">
							<img class="logo-inverse" src="images/dark-logo.svg" alt="">
						</div>
					</a>
					<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
						<div class="offcanvas-header">
							<div class="offcanvas-logo" id="offcanvasNavbarLabel">
								<img src="images/logo-icon.svg" alt="">
							</div>
							<button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
								<i class="fa-solid fa-xmark"></i>
							</button>
						</div>
						<div class="offcanvas-body">
							<div class="offcanvas-top-area">
								<div class="create-bg">
									<a href="#" class="offcanvas-create-btn" data-bs-toggle="modal" data-bs-target="#supportTicketModal">
										<i class="fa-solid fa-plus"></i>
										<span>Ajouter un billet</span>
									</a>
								</div>
							</div>
							<ul class="navbar-nav justify-content-end flex-grow-1 pe_5">
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="index.html">Home</a>
								</li>
								
							</ul>
						</div>
						<div class="offcanvas-footer">
							<div class="offcanvas-social">
								<h5>Suivez-nous</h5>
								<ul class="social-links">
									<li><a href="#" class="social-link"><i class="fab fa-facebook-square"></i></a>
									<li><a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
									<li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
									<li><a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
									<li><a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
								</ul>
							</div>
						</div>
					</div>
					<div class="right-header order-2">
						<ul class="align-self-stretch">
							<li>
								<a href="#" class="create-btn btn-hover" data-bs-toggle="modal" data-bs-target="#supportTicketModal">
									<i class="fa-solid fa-plus"></i>
									<span>Ajouter un billet</span>
								</a>
							</li>
							<li class="dropdown account-dropdown">
								<a href="#" class="account-link" role="button" id="accountClick" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="images/profile-imgs/img-13.jpg" alt="">
									<i class="fas fa-caret-down arrow-icon"></i>
								</a>
								<ul class="dropdown-menu dropdown-menu-account dropdown-menu-end" aria-labelledby="accountClick">
									<li>
										<div class="dropdown-account-header">
											<div class="account-holder-avatar">
												<img src="images/profile-imgs/img-13.jpg" alt="">
											</div>
											<h5>John Doe</h5>
											<p>johndoe@example.com</p>
										</div>
									</li>
									<li class="profile-link">
										<a href="my_organisation_dashboard.html" class="link-item">Mon organisation</a>
										<a href="organiser_profile_view.html" class="link-item"> Mon profil</a>																
										<a href="sign_in.html" class="link-item">Connectez-vous </a>									
									</li>
								</ul>
							</li>
							<li>
								<div class="night_mode_switch__btn">
									<div id="night-mode" class="fas fa-moon fa-sun"></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="overlay"></div>
		</div>
	</header>
	<!-- Header End-->
	<!-- Body Start-->
	<div class="wrapper">
		<div class="hero-banner">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8 col-md-12">
						<div class="hero-banner-content text-center">
							<h2>Comment pouvons-nous aider? </h2>
							<p class="ps-0">Recherchez notre base de connaissances ou soumettez un billet.</p>
							<div class="">
								<input class="form-control h_50 w-100" type="text" placeholder="Search articles">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="explore-events p-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12">
						<div class="main-card">
							<a href="help_section_detail_view.html" class="help-item d-flex align-center border_bottom">
								<div class="help-item-icon">
									<i class="fa-solid fa-calendar-days"></i>
								</div>
								<div class="help-item-content">
									<h4>ISuis organisateur</h4>
									<span>76 Des articles</span>
								</div>
							</a>
							<a href="help_section_detail_view.html" class="help-item d-flex align-center border_bottom">
								<div class="help-item-icon">
									<i class="fa-solid fa-user-tie"></i>
								</div>
								<div class="help-item-content">
									<h4>Je suis un participant </h4>
									<span>15 Des articles</span>
								</div>
							</a>
							<a href="help_section_detail_view.html" class="help-item d-flex align-center border_bottom">
								<div class="help-item-icon">
									<i class="fa-solid fa-microphone"></i>
								</div>
								<div class="help-item-content">
									<h4>Je suis un orateur </h4>
									<span>5 Des articles</span>
								</div>
							</a>
							<a href="help_section_detail_view.html" class="help-item d-flex align-center border_bottom">
								<div class="help-item-icon">
									<i class="fa-solid fa-paper-plane"></i>
								</div>
								<div class="help-item-content">
									<h4> Promouvoir un événement </h4>
									<span>12 Des articles</span>
								</div>
							</a>
							<a href="help_section_detail_view.html" class="help-item d-flex align-center border_bottom">
								<div class="help-item-icon">
									<i class="fa-solid fa-gear"></i>
								</div>
								<div class="help-item-content">
									<h4>Dépannage</h4>
									<span>9 Des articles</span>
								</div>
							</a>
							<a href="help_section_detail_view.html" class="help-item d-flex align-center border_bottom">
								<div class="help-item-icon">
									<i class="fa-solid fa-file-lines"></i>
								</div>
								<div class="help-item-content">
									<h4>J'utilise vieuxBarren</h4>
									<span>40 Des articles</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-8 col-md-12">
						<div class="help-center-title mt-5 mt-lg-0">
							<h4 class="border_bottom">Articles populaires </h4>
							<div class="main-card">
								<a href="help_article_detail_view.html" class="help-item-link">Créer un événement</a>
								<a href="help_article_detail_view.html" class="help-item-link">Comment accéder au backend de mon site Web (section Admin)?</a>
								<a href="help_article_detail_view.html" class="help-item-link">Où le nom de mon événement est-il utilisé?</a>
								<a href="help_article_detail_view.html" class="help-item-link">Comment construire ma propre enquête?</a>
								<a href="help_article_detail_view.html" class="help-item-link">Suppression et remboursement des billets</a>
								<a href="help_article_detail_view.html" class="help-item-link">Comment importer ou ajouter des participants au backend</a>
								<a href="help_article_detail_view.html" class="help-item-link">Comment configurer un compte Stripe</a>
								<a href="help_article_detail_view.html" class="help-item-link">Ma page d'événements peut-elle refléter la marque de mon entreprise?</a>
								<a href="help_article_detail_view.html" class="help-item-link">Mes clients doivent-ils faire un compte avec stérile?</a>
								<a href="help_article_detail_view.html" class="help-item-link">Comment savoir qui est arrivé à mon événement?</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Body End-->
	<?php include "include/Footer.php";?>
	<!-- Footer End-->
	
	
	
	<script src="js/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>	
	<script src="vendor/ckeditor5/ckeditor.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/night-mode.js"></script>
	<script>
		ClassicEditor
		.create( document.querySelector( '#tk_editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
	</script>
</body>
</html>