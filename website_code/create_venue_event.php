﻿<?php session_start(); ?>
<?php

if (!isset($_SESSION['user']['U_email'])) {
	header('location:sign_in.php');
}

require_once "connect/DataBase.php";

$chk = False;
$k = False;
if (isset($_POST['envoyer'])) {
	if (!empty($_POST['event_name']) && !empty($_POST['categorie']) && !empty($_POST['date']) && !empty($_POST['time']) && !empty($_POST['Duration']) && !empty($_POST['Address1']) && !empty($_POST['Address2']) && !empty($_POST['State']) && !empty($_POST['Country']) && !empty($_POST['City']) && !empty($_POST['State']) && !empty($_POST['arr']) && !empty($_POST['Zip']) && !empty($_POST['P_tickts']) && !empty($_POST['N_tickts'])) {
		$event_name = $_POST['event_name'];
		$categorie = $_POST['categorie'];
		$datee = $_POST['date'];
		$timee = $_POST['time'];
		$Duration = $_POST['Duration'];
		$Address1 = $_POST['Address1'];
		$Address2 = $_POST['Address2'];
		$Country = $_POST['Country'];
		$Statee = $_POST['State'];
		$City = $_POST['City'];
		$Zip = $_POST['Zip'];
		$arr = $_POST['arr'];
		$N_tickts = $_POST['N_tickts'];
		$P_tickts = $_POST['P_tickts'];
		$user_id = $_SESSION['user']['User_id'];
		$filename = "";

		if (isset($_FILES['image'])) {
			$image = $_FILES['image']['name'];
			$filename = uniqid() . $image;
			echo "$filename";
			move_uploaded_file($_FILES['image']['tmp_name'], 'upload/images/' . $filename);
		}
		if ($sql = $connection->prepare("INSERT INTO `demande` VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)")) {
			$sql->execute([$event_name, $datee, $timee, $Duration, $Address1, $Address2, $Country, $Statee, $City, $Zip, $arr, $filename, $categorie, $P_tickts, $N_tickts, $user_id]);
			$chk = True;
		} else {
			$chk = True;
		}
	} else {

		$k = True;
	}
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
	<title>Barren - Simple Online Event Ticketing System</title>

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

	<!-- Start Header-->
	<?php
	include "include/navindex.php";
	?>
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
		<form action="" method="post" enctype="multipart/form-data">
			<div class="event-dt-block p-80">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12 col-md-12">
							<div class="main-title text-center">
								<h3>Create Venue Event</h3>
							</div>
						</div>
						<div class="col-xl-8 col-lg-9 col-md-12">
							<div class="wizard-steps-block">
								<div id="add-event-tab">
									<?php if ($chk) {
										echo '<div class="alert alert-success" role="alert">
  demande est envoyer
</div>';
									} else {
										if ($k) {
											echo '<div class="alert alert-danger" role="alert">
	les champs sont obligatoire
  </div>';
										}
									} ?>
									<div class="step-content">
										<div class="step-tab-panel step-tab-info active" id="tab_step1">
											<div class="tab-from-content">
												<div class="main-card">
													<div class="bp-title">
														<h4><i class="fa-solid fa-circle-info step_icon me-3"></i>Details</h4>
													</div>
													<div class="p-4 bp-form main-form">
														<div class="row">
															<div class="col-lg-12 col-md-12">
																<div class="form-group border_bottom pb_30">
																	<label class="form-label fs-16">Give your event a name.</label>
																	<p class="mt-2 d-block fs-14 mb-3">See how your name appears on the event page and a list of all places where your event name will be used. <a href="#" class="a-link">Learn more</a></p>
																	<input class="form-control h_50" type="text" placeholder="Enter event name here" value="" name="event_name">
																</div>
																<div class="form-group border_bottom pb_30">
																	<label class="form-label fs-16">Give your prix_tickes.</label>

																	<input class="form-control h_50" type="text" placeholder="Enter event name here" value="" name="P_tickts">
																</div>
																<div class="form-group border_bottom pb_30">
																	<label class="form-label fs-16">Give your number_tickes.</label>

																	<input class="form-control h_50" type="text" placeholder="Enter event name here" value="" name="N_tickts">
																</div>
																<div class="form-group border_bottom pt_30 pb_30">
																	<label class="form-label fs-16">Choose a category for your event.*</label>
																	<p class="mt-2 d-block fs-14 mb-3">Choosing relevant categories helps to improve the discoverability of your event. <a href="#" class="a-link">Learn more</a></p>
																	<select class="selectpicker" data-selected-text-format="count > 4" title="Select category" data-live-search="true" name="categorie">
																		<?php
																		$gategoriess = $connection->query('SELECT * FROM `categorie`')->fetchAll(PDO::FETCH_ASSOC);
																		foreach ($gategoriess as $gatt) {



																		?>
																			<option value=<?php echo $gatt['Categorie_id'] ?>><?php echo $gatt['Nom_cat'] ?></option>
																		<?php
																		}
																		?>
																	</select>
																</div>
																<div class="form-group border_bottom pt_30 pb_30">
																	<label class="form-label fs-16">When is your event?*</label>
																	<p class="mt-2 fs-14 d-block mb-3">Tell your attendees when your event starts so they can get ready to attend.</p>
																	<div class="row g-2">
																		<div class="col-md-6">
																			<label class="form-label mt-3 fs-6">Event Date.*</label>
																			<div class="loc-group position-relative">
																				<input class="form-control h_50 datepicker-here" data-language="en" type="text" placeholder="MM/DD/YYYY" value="" name="date">
																				<span class="absolute-icon"><i class="fa-solid fa-calendar-days"></i></span>
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="row g-2">
																				<div class="col-md-6">
																					<div class="clock-icon">
																						<label class="form-label mt-3 fs-6">Time</label>
																						<select class="selectpicker" data-size="5" data-live-search="true" name="time">
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
																					<label class="form-label mt-3 fs-6">Duration</label>
																					<select class="selectpicker" data-size="5" data-live-search="true" name="Duration">
																						<option value="00:15:00">00:15</option>
																						<option value="00:30:00">00:30</option>
																						<option value="00:45:00">00:45</option>
																						<option value="01:00:00">01:00</option>
																						<option value="01:15:00">01:15</option>
																						<option value="01:30:00">01:30</option>
																						<option value="01:45:00">01:45</option>
																						<option value="02:00:00">02:00</option>
																						<option value="02:15:00">02:15</option>
																						<option value="02:30:00">02:30</option>
																						<option value="02:45:00">02:45</option>
																						<option value="03:00:00">03:00</option>
																						<option value="03:15:00">03:15</option>
																						<option value="03:30:00">03:30</option>
																						<option value="03:45:00">03:45</option>
																					</select>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="form-group pt_30 pb_30">
																	<label class="form-label fs-16">Add a few images to your event banner.</label>
																	<p class="mt-2 fs-14 d-block mb-3 pe_right">Upload colorful and vibrant images as the banner for your event! See how beautiful images help your event details page. <a href="#" class="a-link">Learn more</a></p>
																	<div class="content-holder mt-4">
																		<div class="default-event-thumb">
																			<div class="default-event-thumb-btn">
																				<div class="thumb-change-btn">
																					<input type="file" id="thumb-img" name="image">
																					<label for="thumb-img">Change Image</label>
																				</div>
																			</div>
																			<img src="images/banners/custom-img.jpg" alt="">

																		</div>
																	</div>
																</div>
																<div class="form-group border_bottom pb_30">
																	<label class="form-label fs-16">Please describe your event.</label>
																	<p class="mt-2 fs-14 d-block mb-3">Write a few words below to describe your event and provide any extra information such as schedules, itinerary or any special instructions required to attend your event.</p>
																	<textarea class="form-control p-2" id="exampleFormControlTextarea1" rows="10" name="arr"></textarea>
																</div>
																<div class="form-group pt_30 pb-2">
																	<label class="form-label fs-16">Where is your event taking place? *</label>
																	<p class="mt-2 fs-14 d-block mb-3">Add a venue to your event to tell your attendees where to join the event.</p>
																	<div class="stepper-data-set">
																		<div class="content-holder template-selector">
																			<div class="row g-4">


																				<div class="col-md-6">
																					<div class="form-group mt-1">
																						<label class="form-label fs-6">Address line 1*</label>
																						<input class="form-control h_50" type="text" placeholder="" value="" name="Address1">
																					</div>
																				</div>
																				<div class="col-md-6">
																					<div class="form-group mt-1">
																						<label class="form-label fs-6">Address line 2*</label>
																						<input class="form-control h_50" type="text" placeholder="" value="" name="Address2">
																					</div>
																				</div>
																				<div class="col-md-6">
																					<div class="form-group main-form mt-1">
																						<label class="form-label">Country*</label>
																						<select class="selectpicker" data-size="5" title="Nothing selected" data-live-search="true" name="Country">
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
																							<option value="Morocco">Morocco</option>
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
																						<label class="form-label">State*</label>
																						<input class="form-control h_50" type="text" placeholder="" value="Victoria" name="State">
																					</div>
																				</div>
																				<div class="col-lg-6 col-md-12">
																					<div class="form-group mt-1">
																						<label class="form-label">City/Suburb*</label>
																						<input class="form-control h_50" type="text" placeholder="" value="Melbourne" name="City">
																					</div>
																				</div>
																				<div class="col-lg-6 col-md-12">
																					<div class="form-group mt-1">
																						<label class="form-label">Zip/Post Code*</label>
																						<input class="form-control h_50" type="text" placeholder="" value="3000" name="Zip">
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

											<input type="submit" data-direction="finish" class="btn btn-default btn-hover steps_btn" name="envoyer" value="Demande">


										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- Body End-->
		<!-- Start Footer-->
		<?php include "include/Footer.php"; ?>
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
				onFinish: function() {
					alert('Wizard Completed');
				}
			});
		</script>
		<script>
			ClassicEditor
				.create(document.querySelector('#pd_editor'), {
					// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
				})
				.then(editor => {
					window.editor = editor;
				})
				.catch(err => {
					console.error(err.stack);
				});
		</script>
</body>

</html>