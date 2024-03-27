﻿<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Barren - Système de billetterie d'événements en ligne simple</title>
		
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
	<?php include "include/nav.php";?>
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
						<div class="main-title checkout-title">
							<h3>Confirmation de commande</h3>
						</div>
					</div>
					<div class="col-xl-8 col-lg-12 col-md-12">
						<div class="checkout-block">
							<div class="main-card">
								<div class="bp-title">
									<h4>Informations de facturation</h4>
								</div>
								<div class="bp-content bp-form">
									<div class="row">
										<div class="col-lg-6 col-md-12">
											<div class="form-group mt-4">
												<label class="form-label">Prénom*</label>
												<input class="form-control h_50" type="text" placeholder="" value="John">																								
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group mt-4">
												<label class="form-label">Nom de famille*</label>
												<input class="form-control h_50" type="text" placeholder="" value="Doe">																								
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group mt-4">
												<label class="form-label">Email*</label>
												<input class="form-control h_50" type="text" placeholder="" value="johndoe@example.com" disabled>																								
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group mt-4">
												<label class="form-label">Adresse*</label>
												<input class="form-control h_50" type="text" placeholder="" value="">																								
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group main-form mt-4">
												<label class="form-label">Pays*</label>
												<select class="selectpicker" data-size="5" title="Nothing selected" data-live-search="true">
													<option value="Algeria">Algeria</option>
													<option value="Argentina">Argentina</option>
													<option value="Australia">Australia</option>
													<option value="Austria">Austria (Österreich)</option>
													<option value="Belgium">Belgium (België)</option>
													<option value="Bolivia">Bolivia</option>
													<option value="Brazil">Brazil</option>
													<option value="Canada">Canada</option>
													<option value="Chile">Chile</option>
													<option value="Colombia">Colombia</option>
													<option value="Costa Rica">Costa Rica</option>
													<option value="Cyprus">Cyprus</option>
													<option value="Czech Republic">Czech Republic</option>
													<option value="Denmark">Denmark</option>
													<option value="Dominican Republic">Dominican Republic</option>
													<option value="Estonia">Estonia</option>
													<option value="Finland">Finland</option>
													<option value="France">France</option>
													<option value="Germany">Germany</option>
													<option value="Greece">Greece</option>
													<option value="Hong Kong">Hong Kong</option>
													<option value="Iceland">Iceland</option>
													<option value="India">India</option>
													<option value="Indonesia">Indonesia</option>
													<option value="Ireland">Ireland</option>
													<option value="Israel">Israel</option>
													<option value="Italy">Italy</option>
													<option value="Japan">Japan</option>
													<option value="Latvia">Latvia</option>
													<option value="Lithuania">Lithuania</option>
													<option value="Luxembourg">Luxembourg</option>
													<option value="Malaysia">Malaysia</option>
													<option value="Mexico">Mexico</option>
													<option value="Nepal">Nepal</option>
													<option value="Netherlands">Netherlands</option>
													<option value="New Zealand">New Zealand</option>
													<option value="Norway">Norway</option>
													<option value="Paraguay">Paraguay</option>
													<option value="Peru">Peru</option>
													<option value="Philippines">Philippines</option>
													<option value="Poland">Poland</option>
													<option value="Portugal">Portugal</option>
													<option value="Singapore">Singapore</option>
													<option value="Slovakia">Slovakia</option>
													<option value="Slovenia">Slovenia</option>
													<option value="South Africa">South Africa</option>
													<option value="South Korea">South Korea</option>
													<option value="Spain">Spain</option>
													<option value="Sweden">Sweden</option>
													<option value="Switzerland">Switzerland</option>
													<option value="Tanzania">Tanzania</option>
													<option value="Thailand">Thailand</option>
													<option value="Turkey">Turkey</option>
													<option value="United Kingdom">United Kingdom</option>
													<option value="United States">United States</option>
													<option value="Vietnam">Vietnam</option>																					
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group mt-4">
												<label class="form-label">État*</label>
												<input class="form-control h_50" type="text" placeholder="" value="">																								
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group mt-4">
												<label class="form-label">Ville*</label>
												<input class="form-control h_50" type="text" placeholder="" value="">																								
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group mt-4">
												<label class="form-label">Zip / code postal*</label>
												<input class="form-control h_50" type="text" placeholder="" value="">																								
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="main-card mt-5">
								<div class="bp-title">
									<h4>Montant total payable: 50,00 $ AUD</h4>
								</div>
								<div class="bp-content bp-form">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="form-group mt-4">
												<label class="form-label">Numéro de carte*</label>
												<input class="form-control h_50" type="text" placeholder="" value="">																								
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group mt-4">
												<label class="form-label">Date d'expiration*</label>
												<input class="form-control h_50" type="text" placeholder="MM/YY" value="">																								
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group mt-4">
												<label class="form-label">CVV*</label>
												<input class="form-control h_50" type="text" placeholder="" value="">																								
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<button class="main-btn btn-hover h_50 w-100 mt-5" type="button" onclick="window.location.href='booking_confirmed.html'">Confirmer et payer </button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-12 col-md-12">
						<div class="main-card order-summary">
							<div class="bp-title">
								<h4>Informations de facturation</h4>
							</div>
							<div class="order-summary-content p_30">
								<div class="event-order-dt">
									<div class="event-thumbnail-img">
										<img src="images/event-imgs/img-7.jpg" alt="">
									</div>
									<div class="event-order-dt-content">
										<h5>Tutorial Canvas Peinture pour les débutants</h5>
										<span>Mer, 01 juin, 2022 5h30</span>
										<div class="category-type">Événement en ligne</div>
									</div>
								</div>
								<div class="order-total-block">
									<div class="order-total-dt">
										<div class="order-text">Billet total</div>
										<div class="order-number">1</div>
									</div>
									<div class="order-total-dt">
										<div class="order-text">Sous-total</div>
										<div class="order-number">$50.00</div>
									</div>
									<div class="divider-line"></div>
									<div class="order-total-dt">
										<div class="order-text">Totale</div>
										<div class="order-number ttl-clr">AUD $50.00</div>
									</div>
								</div>
								<div class="coupon-code-block">
									<div class="form-group mt-4">
										<label class="form-label">Code promo*</label>
										<div class="position-relative">
											<input class="form-control h_50" type="text" placeholder="Code" value="">
											<button class="apply-btn btn-hover" type="button">Appliquer</button>
										</div>
									</div>
								</div>
								<div class="confirmation-btn">
									<button class="main-btn btn-hover h_50 w-100 mt-5" type="button" onclick="window.location.href='booking_confirmed.html'">Confirmer et payer</button>
									<span>Le prix comprend toute la TPS applicable</span>
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