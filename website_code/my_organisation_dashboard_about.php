﻿<?php

session_start();
if(!isset($_SESSION['user']['U_email'])){
	header('location:sign_in.php');
}

?>

<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>MoroccanJoy - Système en ligne de billetterie d'événements </title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/fav.png">
		
		<!-- Stylesheets -->
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
		<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
		<link href="css/style.css" rel="stylesheet">
		<link href="css/vertical-responsive-menu.min.css" rel="stylesheet">
		<link href="css/datepicker.min.css" rel="stylesheet">
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
	<!-- Organisation Settings Model Start-->
	<div class="modal fade" id="orgSettings" tabindex="-1" aria-labelledby="orgSettingsLabel" aria-hidden="false">
		<div class="modal-dialog modal-medium-2 modal-dialog-scrollable modal-dialog-centered modal-sm-height modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="orgSettingsLabel">Paramètres de confidentialité</h5>
					<button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-multiply"></i></button>
				</div>
				<div class="modal-body p-bg">
					<div class="model-content main-form pt-2 p-4">
						<div class="mt-4">	
							<div class="setting-step main-card p-4">
								<div class="d-flex align-items-center justify-content-between">
									<h3 class="setting-title">permttre MoroccanJoy d'acceder à mon Organisation</h3>
									<label class="btn-switch m-0 ml-2">
										<input type="checkbox">
										<span class="checkbox-slider"></span>
									</label>
								</div>
								<p class="mt-1">Si vous activez ceci, Eventbookings will be able to manage your organisation(s)</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Organisation Settings Model End-->
	<!-- Organisation Privacy Settings Model Start-->
	<div class="modal fade" id="orgPrivacySettings" tabindex="-1" aria-labelledby="orgPrivacySettingsLabel" aria-hidden="false">
		<div class="modal-dialog modal-medium-2 modal-dialog-scrollable modal-dialog-centered modal-sm-height modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="orgPrivacySettingsLabel">Privacy Settings</h5>
					<button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-multiply"></i></button>
				</div>
				<div class="modal-body p-bg">
					<div class="model-content main-form pt-2 p-4">
						<div class="main-card p-4 mt-4">	
							<div class="setting-step border_bottom">
								<div class="d-flex align-items-center justify-content-between">
									<h3 class="setting-title">Lock Organisation Profile</h3>
									<label class="btn-switch m-0 ml-2">
										<input type="checkbox">
										<span class="checkbox-slider"></span>
									</label>
								</div>
								<p class="mt-1 mb-4">Locking profile hides all kinds of user information, activities and interaction from public profile</p>
							</div>
							<div class="setting-step border_bottom pt-4">
								<div class="d-flex align-items-center justify-content-between">
									<h3 class="setting-title">Hide address on my organisation profile</h3>
									<label class="btn-switch m-0 ml-2">
										<input type="checkbox" checked>
										<span class="checkbox-slider"></span>
									</label>
								</div>
								<p class="mt-1 mb-4">Hide the address of your organisation from your organisation's public profile</p>
							</div>
							<div class="setting-step border_bottom pt-4">
								<div class="d-flex align-items-center justify-content-between">
									<h3 class="setting-title">Allow people to contact my organisation</h3>
									<label class="btn-switch m-0 ml-2">
										<input type="checkbox" checked>
										<span class="checkbox-slider"></span>
									</label>
								</div>
								<p class="mt-1 mb-4">People will be able to send you emails through Barren who visits your organisation profile</p>
							</div>
							<div class="setting-step border_bottom pt-4">
								<div class="d-flex align-items-center justify-content-between">
									<h3 class="setting-title">Allow people to follow my organisation</h3>
									<label class="btn-switch m-0 ml-2">
										<input type="checkbox" checked>
										<span class="checkbox-slider"></span>
									</label>
								</div>
								<p class="mt-1 mb-4">People will be able to follow you</p>
							</div>
							<div class="setting-step border_bottom pt-4">
								<div class="d-flex align-items-center justify-content-between">
									<h3 class="setting-title">Hide reviews on my organisation profile</h3>
									<label class="btn-switch m-0 ml-2">
										<input type="checkbox">
										<span class="checkbox-slider"></span>
									</label>
								</div>
								<p class="mt-1 mb-4">No one will be able to see your organisation's reviews and rating. Hiding reviews do not allow others to give your organisation review or rating as well</p>
							</div>
							<div class="setting-step border_bottom pt-4">
								<div class="d-flex align-items-center justify-content-between">
									<h3 class="setting-title">Hide review interactions from public</h3>
									<label class="btn-switch m-0 ml-2">
										<input type="checkbox">
										<span class="checkbox-slider"></span>
									</label>
								</div>
								<p class="mt-1 mb-0">The review rating will be available in your Organisation's public profile but we will not show any activity in any public feed</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Organisation Privacy Settings Model End-->
	<!-- Organisation Profile Update Model Start-->
	<div class="modal fade" id="org-profile-update-pop" tabindex="-1" aria-labelledby="orgProfileUpdatepopLabel" aria-hidden="false">
		<div class="modal-dialog modal-medium-2 modal-dialog-scrollable modal-dialog-centered modal-sm-height modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="orgProfileUpdatepopLabel">Organisation details</h5>
					<button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-multiply"></i></button>
				</div>
				<div class="modal-body">
					<div class="model-content main-form">
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="form-group text-center mt-5">
									<span class="org_design_button btn-file">
										<span><i class="fa-solid fa-camera"></i></span>
										<input type="file" id="org_avatar" accept="image/*" name="Organisation_avatar">
									</span>																								
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Name*</label>
									<input class="form-control h_40" type="text" placeholder="" value="John Doe">																								
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Profile Link*</label>
									<div class="loc-group position-relative">
										<input class="form-control h_40" type="text" placeholder="" value="https://www.barren.com/b/organiser/john-doe">
										<span class="copy-link">Copy Link</span>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">About*</label>
									<textarea class="form-textarea" placeholder="About"></textarea>																							
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Email*</label>
									<input class="form-control h_40" type="text" placeholder="" value="Johndoe@example.com">																								
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Phone*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">																								
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Website*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">																								
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Facebook*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">																								
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Instagram*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">																								
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Twitter*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">																								
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">LinkedIn*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">																								
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Youtube*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">																								
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<h4 class="address-title">Address</h4>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Address 1*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">																								
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Address 2*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">																								
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group main-form mt-4">
									<label class="form-label">Country*</label>
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
									<label class="form-label">State*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">																								
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">City/Suburb*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">																								
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Zip/Post Code*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">																								
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-toggle="modal" data-bs-dismiss="modal">Cancel</button>
					<button type="button" class="main-btn min-width btn-hover h_40">Update</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Organisation Profile Update Model End-->
	<!-- Header Start-->
	<?php
		include "include/navcreateure.php";
	?>
	<!-- Header End-->
	<!-- Left Sidebar Start -->
	<?php include 'include/CreateureVerticaleNav.php' ?>
	<!-- Left Sidebar End -->
	<!-- Body Start -->
	<div class="wrapper wrapper-body">
		<div class="dashboard-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="d-main-title">
							<h3><i class="fa-solid fa-circle-info me-3"></i>À propos de mon organisation</h3>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="conversion-setup">
							<div class="main-card mt-5">
								<div class="bp-title position-relative">
									<h4>About</h4>
									<div class="profile-edit-btn">
										<a href="#" data-bs-toggle="modal" data-bs-target="#orgSettings" class="btn"><i class="fa-solid fa-user-gear"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#orgPrivacySettings" class="btn"><i class="fa-solid fa-gear"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#org-profile-update-pop" class="btn"><i class="fa-solid fa-pen"></i></a>
									</div>
								</div>
								<div class="about-details">
									<div class="about-step text-center">
										<div class="user-avatar-img">
											<img src="images/profile-imgs/img-13.jpg" alt="">
										</div>
										<div class="user-dts">
											<h4 class="user-name">John Doe<span class="verify-badge"><i class="fa-solid fa-circle-check"></i></span></h4>
											<span class="user-email">johndoe@example.com</span>
										</div>
									</div>
									<div class="about-step">
										<h5>Parlez-nous de vous et faites savoir aux gens qui vous êtes</h5>
										<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt interdum nunc et auctor. Phasellus quis pharetra sapien. Integer ligula sem, sodales vitae varius in, varius eget augue.</p>
									</div>
									<div class="about-step">
										<h5>Trouver moi sur</h5>
										<div class="social-links">
											<a href="#" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Facebook" aria-label="Facebook"><i class="fab fa-facebook-square"></i></a>
											<a href="#" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Instagram" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
											<a href="#" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Twitter" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
											<a href="#" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="LinkedIn" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
											<!--   <a href="#" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Youtube" aria-label="Youtube"><i class="fab fa-youtube"></i></a>-->
											<!--<a href="#" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Website" aria-label="Website"><i class="fa-solid fa-globe"></i></a>-->
										</div>
									</div>
									<div class="about-step">
										<h5>Address</h5>
										<p class="mb-0">00 Challis St, Newport, Victoria, 0000, Australia</p>
									</div>
									<div class="about-step">
										<a href="#" class="view-profile-link a-link">Afficher le profil public<i class="fa-solid fa-arrow-up-right-from-square ms-2"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Body End -->
	

	<script src="js/vertical-responsive-menu.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>	
	<script src="js/custom.js"></script>
	<script src="js/datepicker.min.js"></script>
	<script src="js/i18n/datepicker.en.js"></script>
	<script src="js/night-mode.js"></script>

</body>
</html>