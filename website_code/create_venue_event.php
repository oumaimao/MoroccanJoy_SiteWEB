﻿<?php
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
		<title>Barren - Système de billetterie d'événements en ligne simple</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/fav.png">
		
		<!-- Stylesheets -->
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
		<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
		<link href="css/style.css" rel="stylesheet">
		<link href="css/datepicker.min.css" rel="stylesheet">
		<link href="css/jquery-steps.css" rel="stylesheet">
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
	
	<!-- Header Start-->

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
				<div class="row justify-content-center">
					<div class="col-lg-12 col-md-12">
						<div class="main-title text-center">
							<h3>Créer un événement de lieu </h3>
						</div>
					</div>
					<div class="col-xl-8 col-lg-9 col-md-12">
						<div class="wizard-steps-block">
							<div id="add-event-tab" >
								
								<div class="step-content">
									<div class="step-tab-panel step-tab-info active" id="tab_step1"> 
										<div class="tab-from-content">
											<div class="main-card">
												<div class="bp-title">
													<h4><i class="fa-solid fa-circle-info step_icon me-3"></i>Détails</h4>
												</div>
												<div class="p-4 bp-form main-form">
													<div class="row">
														<div class="col-lg-12 col-md-12">
															<div class="form-group border_bottom pb_30">
																<label class="form-label fs-16"> Donnez un nom à votre événement.*</label>
																<p class="mt-2 d-block fs-14 mb-3">Découvrez comment votre nom apparaît sur la page de l'événement et une liste de tous les endroits où le nom de votre événement sera utilisé. <a href="#" class="a-link">Apprendre encore plus</a></p>
																<input class="form-control h_50" type="text" placeholder="Enter event name here" value="">
															</div>
															<div class="form-group border_bottom pt_30 pb_30">
																<label class="form-label fs-16">Choisissez une catégorie pour votre événement.*</label>
																<p class="mt-2 d-block fs-14 mb-3">Le choix des catégories pertinentes aide à améliorer la découverte de votre événement.<a href="#" class="a-link"> En savoir plus</a></p>
																<select class="selectpicker" multiple="" data-selected-text-format="count > 4" data-size="5" title="Select category" data-live-search="true">
																<option value="01">arts</option>
																	<option value="02">Entreprise</option>
																	<option value="03">Coaching et consultation </option>
																	<option value="04">Communauté et culture</option>
																	<option value="05">Entrepreneuriat</option>
																	<option value="06">Éducation et formation</option>
																	<option value="07">Famille et amis </option>
																	<option value="08">Mode et beauté</option>
																	<option value="09">Film et divertissement</option>
																	<option value="10">Nourriture et boisson</option>
																	<option value="11">Gouvernement et politique</option>
																	<option value="12">Santé et bien-être </option>
																	<option value="13">Passe-temps et intérêt</option>
																	<option value="14">Musique et théâtre </option>
																	<option value="15">Religion et spiritualité</option>
																	<option value="16">Science et technologie</option>
																	<option value="17">Sports et fitness </option>
																	<option value="18">Voyage et extérieur</option>
																	<option value="19">arts visuels</option>
																	<option value="20">Autres</option>
																</select>
															</div>
															<div class="form-group border_bottom pt_30 pb_30">
																<label class="form-label fs-16">Quand est votre événement?*</label>
																<p class="mt-2 fs-14 d-block mb-3">Dites à vos participants au début de votre événement afin qu'ils puissent se préparer à y assister.</p>
																<div class="row g-2">
																	<div class="col-md-6">
																		<label class="form-label mt-3 fs-6">Date de l'événement.*</label>																
																		<div class="loc-group position-relative">
																			<input class="form-control h_50 datepicker-here" data-language="en" type="text" placeholder="MM/DD/YYYY" value="">
																			<span class="absolute-icon"><i class="fa-solid fa-calendar-days"></i></span>
																		</div>
																	</div>
																	<div class="col-md-6">																		
																		<div class="row g-2">
																			<div class="col-md-6">
																				<div class="clock-icon">
																					<label class="form-label mt-3 fs-6">Temps</label>	
																					<select class="selectpicker" data-size="5" data-live-search="true">
																						<option value="00:00">12:00 AM</option>
																						<option value="00:15">12:15 AM</option>
																						<option value="00:30">12:30 AM</option>
																						<option value="00:45">12:45 AM</option>
																						<option value="01:00">01:00 AM</option>
																						<option value="01:15">01:15 AM</option>
																						<option value="01:30">01:30 AM</option>
																						<option value="01:45">01:45 AM</option>
																						<option value="02:00">02:00 AM</option>
																						<option value="02:15">02:15 AM</option>
																						<option value="02:30">02:30 AM</option>
																						<option value="02:45">02:45 AM</option>
																						<option value="03:00">03:00 AM</option>
																						<option value="03:15">03:15 AM</option>
																						<option value="03:30">03:30 AM</option>
																						<option value="03:45">03:45 AM</option>
																						<option value="04:00">04:00 AM</option>
																						<option value="04:15">04:15 AM</option>
																						<option value="04:30">04:30 AM</option>
																						<option value="04:45">04:45 AM</option>
																						<option value="05:00">05:00 AM</option>
																						<option value="05:15">05:15 AM</option>
																						<option value="05:30">05:30 AM</option>
																						<option value="05:45">05:45 AM</option>
																						<option value="06:00">06:00 AM</option>
																						<option value="06:15">06:15 AM</option>
																						<option value="06:30">06:30 AM</option>
																						<option value="06:45">06:45 AM</option>
																						<option value="07:00">07:00 AM</option>
																						<option value="07:15">07:15 AM</option>
																						<option value="07:30">07:30 AM</option>
																						<option value="07:45">07:45 AM</option>
																						<option value="08:00">08:00 AM</option>
																						<option value="08:15">08:15 AM</option>
																						<option value="08:30">08:30 AM</option>
																						<option value="08:45">08:45 AM</option>
																						<option value="09:00">09:00 AM</option>
																						<option value="09:15">09:15 AM</option>
																						<option value="09:30">09:30 AM</option>
																						<option value="09:45">09:45 AM</option>
																						<option value="10:00" selected="selected">10:00 AM</option>
																						<option value="10:15">10:15 AM</option>
																						<option value="10:30">10:30 AM</option>
																						<option value="10:45">10:45 AM</option>
																						<option value="11:00">11:00 AM</option>
																						<option value="11:15">11:15 AM</option>
																						<option value="11:30">11:30 AM</option>
																						<option value="11:45">11:45 AM</option>
																						<option value="12:00">12:00 PM</option>
																						<option value="12:15">12:15 PM</option>
																						<option value="12:30">12:30 PM</option>
																						<option value="12:45">12:45 PM</option>
																						<option value="13:00">01:00 PM</option>
																						<option value="13:15">01:15 PM</option>
																						<option value="13:30">01:30 PM</option>
																						<option value="13:45">01:45 PM</option>
																						<option value="14:00">02:00 PM</option>
																						<option value="14:15">02:15 PM</option>
																						<option value="14:30">02:30 PM</option>
																						<option value="14:45">02:45 PM</option>
																						<option value="15:00">03:00 PM</option>
																						<option value="15:15">03:15 PM</option>
																						<option value="15:30">03:30 PM</option>
																						<option value="15:45">03:45 PM</option>
																						<option value="16:00">04:00 PM</option>
																						<option value="16:15">04:15 PM</option>
																						<option value="16:30">04:30 PM</option>
																						<option value="16:45">04:45 PM</option>
																						<option value="17:00">05:00 PM</option>
																						<option value="17:15">05:15 PM</option>
																						<option value="17:30">05:30 PM</option>
																						<option value="17:45">05:45 PM</option>
																						<option value="18:00">06:00 PM</option>
																						<option value="18:15">06:15 PM</option>
																						<option value="18:30">06:30 PM</option>
																						<option value="18:45">06:45 PM</option>
																						<option value="19:00">07:00 PM</option>
																						<option value="19:15">07:15 PM</option>
																						<option value="19:30">07:30 PM</option>
																						<option value="19:45">07:45 PM</option>
																						<option value="20:00">08:00 PM</option>
																						<option value="20:15">08:15 PM</option>
																						<option value="20:30">08:30 PM</option>
																						<option value="20:45">08:45 PM</option>
																						<option value="21:00">09:00 PM</option>
																						<option value="21:15">09:15 PM</option>
																						<option value="21:30">09:30 PM</option>
																						<option value="21:45">09:45 PM</option>
																						<option value="22:00">10:00 PM</option>
																						<option value="22:15">10:15 PM</option>
																						<option value="22:30">10:30 PM</option>
																						<option value="22:45">10:45 PM</option>
																						<option value="23:00">11:00 PM</option>
																						<option value="23:15">11:15 PM</option>
																						<option value="23:30">11:30 PM</option>
																						<option value="23:45">11:45 PM</option>
																					</select>
																				</div>
																			</div>
																			<div class="col-md-6">
																				<label class="form-label mt-3 fs-6">Durée</label>	
																				<select class="selectpicker" data-size="5" data-live-search="true">
																					<option value="15">15m</option>
																					<option value="30">30m</option>
																					<option value="45">45m</option>
																					<option value="60" selected="selected">1h</option>
																					<option value="75">1h 15m</option>
																					<option value="90">1h 30m</option>
																					<option value="105">1h 45m</option>
																					<option value="120">2h</option>
																					<option value="135">2h 15m</option>
																					<option value="150">2h 30m</option>
																					<option value="165">2h 45m</option>
																					<option value="180">3h</option>
																					<option value="195">3h 15m</option>
																					<option value="210">3h 30m</option>
																					<option value="225">3h 45m</option>
																				</select>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="form-group pt_30 pb_30">
																<label class="form-label fs-16">Ajoutez quelques images à votre bannière d'événement.</label>
																<p class="mt-2 fs-14 d-block mb-3 pe_right">Téléchargez des images colorées et dynamiques comme bannière de votre événement!Voir comment les images belles aident la page des détails de votre événement.<a href="#" class="a-link">Apprendre encore plus</a></p>
																<div class="content-holder mt-4">
																	<div class="default-event-thumb">   
																		<div class="default-event-thumb-btn">
																			<div class="thumb-change-btn">
																				<input type="file" id="thumb-img">
																				<label for="thumb-img">Changer l'image</label>
																			</div>
																		</div>
																		<img src="images/banners/custom-img.jpg" alt="">
																	</div>
																</div>
															</div>
															<div class="form-group border_bottom pb_30">
																<label class="form-label fs-16">Veuillez décrire votre événement.</label>
																<p class="mt-2 fs-14 d-block mb-3">Écrivez quelques mots ci-dessous pour décrire votre événement et fournir des informations supplémentaires telles que les horaires, l'itinéraire ou toute instruction spéciale requise pour assister à votre événement.</p>
																<div class="text-editor mt-4">
																	<div id="pd_editor"></div>
																</div>
															</div>
															<div class="form-group pt_30 pb-2">
																<label class="form-label fs-16">Où est votre événement?*</label>
																<p class="mt-2 fs-14 d-block mb-3">Ajoutez un lieu à votre événement pour indiquer à vos participants où rejoindre l'événement.</p>
																<div class="stepper-data-set">
																	<div class="content-holder template-selector">
																		<div class="row g-4">
																			<div class="col-md-12">
																				<div class="venue-event">
																					<div class="map">
																						<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d27382.59422947023!2d75.84077125074462!3d30.919535510612153!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1534312417365" style="border:0" allowfullscreen></iframe>	
																					</div>
																				</div>
																			</div>
																			<div class="col-md-12">
																				<div class="form-group mt-1">
																					<label class="form-label fs-6">Lieu*</label>
																					<input class="form-control h_50" type="text" placeholder="" value="">
																				</div>
																			</div>
																			<div class="col-md-6">
																				<div class="form-group mt-1">
																					<label class="form-label fs-6">Adresse Ligne 1*</label>
																					<input class="form-control h_50" type="text" placeholder="" value="">
																				</div>
																			</div>
																			<div class="col-md-6">
																				<div class="form-group mt-1">
																					<label class="form-label fs-6">Adresse Ligne 2*</label>
																					<input class="form-control h_50" type="text" placeholder="" value="">
																				</div>
																			</div>
																			<div class="col-md-6">
																				<div class="form-group main-form mt-1">
																					<label class="form-label">Pays*</label>
																					<select class="selectpicker" data-size="5" title="Nothing selected" data-live-search="true">
																						<option value="Algeria">Algeria</option>
																						<option value="Argentina">Argentina</option>
																						<option value="Australia" selected="">Australia</option>
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
																			<div class="col-md-6">
																				<div class="form-group mt-1">
																					<label class="form-label">État*</label>
																					<input class="form-control h_50" type="text" placeholder="" value="Victoria">																								
																				</div>
																			</div>
																			<div class="col-lg-6 col-md-12">
																				<div class="form-group mt-1">
																					<label class="form-label">Ville*</label>
																					<input class="form-control h_50" type="text" placeholder="" value="Melbourne">																								
																				</div>
																			</div>
																			<div class="col-lg-6 col-md-12">
																				<div class="form-group mt-1">
																					<label class="form-label">Zip / code postal*</label>
																					<input class="form-control h_50" type="text" placeholder="" value="3000">																								
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
									</div>
								<div class="step-footer step-tab-pager mt-4">
									
									
									<button type="submit" class="btn btn-default btn-hover steps_btn">Créer</button>
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
	<script src="vendor/ckeditor5/ckeditor.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/night-mode.js"></script>
	<script src="js/jquery-steps.min.js"></script>
	<script src="js/datepicker.min.js"></script>
	<script src="js/i18n/datepicker.en.js"></script>
	<script>
		$('#add-event-tab').steps({
		  onFinish: function () {
			alert('Wizard Completed');
		  }
		});		
	</script>
	<script>
		ClassicEditor
		.create( document.querySelector( '#pd_editor' ), {
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