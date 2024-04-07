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
		<title>MoroccanJoy - Système en ligne de billetterie d'événements</title>
		
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
		<link href="vendor/ckeditor5/sample/css/sample.css" rel="stylesheet">		
		
	</head>

<body class="d-flex flex-column h-100">
	<!-- Add Contact List Model Start-->
	<div class="modal fade" id="addContactlistModal" tabindex="-1" aria-labelledby="addContactlistModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="addContactlistModalLabel">Create New List</h5>
					<button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-multiply"></i></button>
				</div>
				<div class="modal-body">
					<div class="model-content main-form">
						<div class="form-group mt-30">
							<label class="form-label">Name*</label>
							<input class="form-control h_40" type="text" placeholder="" value="">
						</div>
						<div class="form-group mt-30">
							<label class="form-label">How you know them*</label>
							<div class="text-editor mt-4">
								<div id="ld_editor"></div>
							</div>																						
						</div>
						<div class="add-contact-area mt-30">
							<div class="row">
								<div class="col-12">
									<div class="add-contact-title">
										<h4 class="border_bottom">Add Contacts</h4>
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group mt-30">
										<input class="form-control h_40" type="text" placeholder="Enter full name" value="">
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group mt-30">
										<input class="form-control h_40" type="email" placeholder="Enter email" value="">
									</div>
								</div>
								<div class="col-md-2">
									<button class="main-btn btn-hover h_40 mt-30 w-100">Add</button>
								</div>
								<div class="col-12">
									<div class="table-card mt-30">
										<div class="main-table">
											<div class="table-responsive">
												<table class="table">
													<thead class="thead-dark">
														<tr>
															<th scope="col">Name</th>
															<th scope="col">Email</th>
															<th scope="col">Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>										
															<td>Rock Smith</td>	
															<td>rocksmith@example.com</td>	
															<td><span class="action-btn"><i class="fa-solid fa-trash-can"></i></span></td>	
														</tr>
														<tr>										
															<td>Jassica William</td>	
															<td>jassicawilliam@example.com</td>	
															<td><span class="action-btn"><i class="fa-solid fa-trash-can"></i></span></td>	
														</tr>
													</tbody>									
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-dismiss="modal">Cancel</button>
					<button type="button" class="main-btn min-width btn-hover h_40">Save</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Add Contact List Model End-->
	<!-- Header Start-->

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
							<h3><i class="fa-regular fa-address-card me-3"></i>Contact Lists</h3>
						</div>
					</div>
					<div class="col-md-12">
						<div class="main-card mt-5">
							<div class="dashboard-wrap-content p-4">
								<h5 class="mb-4">Contact Lists (2)</h5>
								<div class="d-md-flex flex-wrap align-items-center">
									<div class="dashboard-date-wrap">
										<div class="form-group">
											<div class="relative-input position-relative">
												<input class="form-control h_40" type="text" placeholder="Search by name" value="">
												<i class="uil uil-search"></i>
											</div>
										</div>
									</div>
									<div class="rs ms-auto mt_r4">
										<button class="main-btn btn-hover h_40 w-100" data-bs-toggle="modal" data-bs-target="#addContactlistModal">Create Contact List</button>
									</div>
								</div>
							</div>
						</div>
						<div class="all-promotion-list">
							<div class="main-card mt-4">
								<div class="contact-list coupon-active">
									<div class="top d-flex flex-wrap justify-content-between align-items-center p-4 border_bottom">
										<div class="icon-box coupon-icon-box-8606">
											<span class="icon-big icon icon-purple">
												<i class="fa-solid fa-users"></i>
											</span>
											<h5 class="font-18 mb-1 mt-1 f-weight-medium">Custom Title</h5>
											<p class="text-gray-50 m-0">Custom Description</p>
										</div>
										<div class="d-flex align-items-center">
											<div class="dropdown dropdown-default dropdown-text dropdown-icon-item">
												<button class="option-btn-1" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fa-solid fa-ellipsis-vertical"></i>
												</button>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="fa-regular fa-address-card me-3"></i>View Contact List</a>
													<a href="#" class="dropdown-item"><i class="fa-solid fa-pen me-3"></i>Edit</a>
													<a href="#" class="dropdown-item"><i class="fa-solid fa-trash-can me-3"></i>Delete</a>
												</div>
											</div>
										</div>
									</div>
									<div class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
										<div class="icon-box">
											<span class="icon">
												<i class="fa-solid fa-address-card"></i>
											</span>
											<p>Contacts</p>
											<h6 class="coupon-status">0</h6>
										</div>
										<div class="icon-box">
											<span class="icon">
												<i class="fa-solid fa-calendar-days"></i>
											</span>
											<p>Created on</p>
											<h6 class="coupon-status">Apr 04 , 2022</h6>
										</div>
										<div class="icon-box">
											<span class="icon">
												<i class="fa-solid fa-envelope"></i>
											</span>
											<p>Unsubscribed contacts</p>
											<h6 class="coupon-status">0</h6>
										</div>
										<div class="icon-box">
											<span class="icon">
												<i class="fa-solid fa-certificate"></i>
											</span>
											<p>Quality</p>
											<h6 class="coupon-status">0</h6>
											<div class="progress">
												<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="main-card mt-4">
								<div class="contact-list coupon-active">
									<div class="top d-flex flex-wrap justify-content-between align-items-center p-4 border_bottom">
										<div class="icon-box coupon-icon-box-8606">
											<span class="icon-big icon icon-yellow">
												<i class="fa-solid fa-users"></i>
											</span>
											<h5 class="font-18 mb-1 mt-1 f-weight-medium">People I exclude from my email campaigns</h5>
											<p class="text-gray-50 m-0">People whom I do not wish to send out email from any of my email campaigns</p>
										</div>
										<div class="d-flex align-items-center">
											<div class="dropdown dropdown-default dropdown-text dropdown-icon-item">
												<button class="option-btn-1" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fa-solid fa-ellipsis-vertical"></i>
												</button>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="fa-regular fa-address-card me-3"></i>View Contact List</a>
													<a href="#" class="dropdown-item"><i class="fa-solid fa-pen me-3"></i>Edit</a>
													<a href="#" class="dropdown-item"><i class="fa-solid fa-trash-can me-3"></i>Delete</a>
												</div>
											</div>
										</div>
									</div>
									<div class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
										<div class="icon-box">
											<span class="icon">
												<i class="fa-solid fa-address-card"></i>
											</span>
											<p>Contacts</p>
											<h6 class="coupon-status">0</h6>
										</div>
										<div class="icon-box">
											<span class="icon">
												<i class="fa-solid fa-calendar-days"></i>
											</span>
											<p>Created on</p>
											<h6 class="coupon-status">Apr 04 , 2022</h6>
										</div>
										<div class="icon-box">
											<span class="icon">
												<i class="fa-solid fa-envelope"></i>
											</span>
											<p>Unsubscribed contacts</p>
											<h6 class="coupon-status">0</h6>
										</div>
										<div class="icon-box">
											<span class="icon">
												<i class="fa-solid fa-certificate"></i>
											</span>
											<p>Quality</p>
											<h6 class="coupon-status">0</h6>
											<div class="progress">
												<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
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
	<!-- Body End -->
	

	<script src="js/vertical-responsive-menu.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/ckeditor5/ckeditor.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/datepicker.min.js"></script>
	<script src="js/i18n/datepicker.en.js"></script>
	<script src="js/night-mode.js"></script>
	<script>
		ClassicEditor
		.create( document.querySelector( '#ld_editor' ), {
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