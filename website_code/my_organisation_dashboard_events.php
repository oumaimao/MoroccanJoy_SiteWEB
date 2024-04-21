<?php
session_start();
if (!isset($_SESSION['user']['U_email'])) {
	header('location:sign_in.php');
}


$userid = $_SESSION['user']['User_id'];
require 'connect/DataBase.php';
$sql = 'SELECT * FROM `event` WHERE User_id = :userid';
$statement = $connection->prepare($sql);
$statement->execute([':userid' => $userid]);
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

$users_att;
$users_rej;

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
							<h3><i class="fa-solid fa-calendar-days me-3"></i>Events</h3>
						</div>
					</div>
					<div class="col-md-12">
						<div class="main-card mt-5">
							<div class="dashboard-wrap-content p-4">
								<div class="d-md-flex flex-wrap align-items-center">
									<div class="rs ms-auto mt_r4">
										<div class="nav custom2-tabs btn-group" role="tablist">
											<button class="tab-link active" data-bs-toggle="tab" data-bs-target="#publier" type="button" role="tab" aria-controls="publier" aria-selected="false">Publier</button>
											<button class="tab-link" data-bs-toggle="tab" data-bs-target="#attente" type="button" role="tab" aria-controls="attente" aria-selected="false">En attente</button>
											<button class="tab-link" data-bs-toggle="tab" data-bs-target="#rejecter" type="button" role="tab" aria-controls="rejecter" aria-selected="false">Rejeter</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="event-list">
							<div class="tab-content">
								<?php
								if (isset($_POST['Chercher_published'])) {
									require_once "connect/DataBase.php";
									$Search = $_POST['chr_published'];
									$users = $connection->query("SELECT * FROM `event` WHERE  User_id = '$userid' and (E_id like '%$Search%' or Titre like '%$Search%' or `Description` like '%$Search%' or Date_debut like '%$Search%' or adress1 like '%$Search%' or Ville like '%$Search%' or Zip_code like '%$Search%' or Categorie_id like '%$Search%')")->fetchAll(PDO::FETCH_ASSOC);								
								}else {
									require 'connect/DataBase.php';
									// $sql = 'SELECT * FROM `event` WHERE User_id = :userid';
									//$statement = $connection->prepare($sql);

									$users = $connection->query("SELECT * FROM `event` WHERE User_id = '$userid'");
								}

								?>

								<!----- Publier ------>

								<div class="tab-pane fade show active" id="publier" role="tabpanel">

									<form action="" method="post">
										<div class="main-card mt-3">
											<div class="dashboard-wrap-content p-4">
												<div class="d-md-flex flex-wrap align-items-center">
													<div class="dashboard-date-wrap">
														<div class="form-group">
															<div class="relative-input position-relative">
																<input class="form-control h_40" type="text" placeholder="Search by event name, status" value="" name="chr_published">
																<i class="uil uil-search"></i>
															</div>
														</div>
													</div>
													<div class="rs ms-auto mt_r4">
														<div class="nav custom2-tabs btn-group" role="tablist">
															<button class="tab-link btn-hover" type="submit" role="tab" aria-controls="all-tab" aria-selected="true" name="Chercher_published">Chercher</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
									<?php 
									if (isset($_POST['Chercher_attente'])) {
										require_once "connect/DataBase.php";
										$Search_att = $_POST['chr_attente'];
										$users_att = $connection->query("SELECT * FROM `demande` WHERE  User_id = '$userid' and (event_id like '%$Search_att%' or n_event like '%$Search_att%' or `description` like '%$Search_att%' or event_date like '%$Search_att%' or adress1 like '%$Search_att%' or city like '%$Search_att%' or zip like '%$Search_att%' or gategorie like '%$Search_att%')")->fetchAll(PDO::FETCH_ASSOC);
									}else{
										require_once "connect/DataBase.php";
										$users_att = $connection->query("SELECT * FROM `demande` WHERE User_id = '$userid'");

									}
										foreach ($users as $user) { 
										?>
										<div class="main-card mt-4">
											<div class="contact-list">
												<div class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
													<div class="d-md-flex align-items-center event-top-info">
														<div class="card-event-img">
															<img src="upload/images/<?php echo $user['Image'] ?>" alt="">
														</div>
														<div class="card-event-dt">
															<h5><?php echo $user['Titre'] ?></h5>
														</div>
													</div>
													<div class="dropdown">

														<a href="QrCodeScanner.php?id=<?php echo $user['E_id'] ?>"><button type="button" class="main-btn  btn-hover h_40">Scanner</button></a>

														<button class="option-btn" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical"></i></button>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="event_update.php?id=<?php echo $user['E_id'] ?>" class="dropdown-item"><i class="fa-solid fa-gear me-3"></i>Modifier Event</a>
															<a href="Event_Cr_detaille.php?id=<?php echo $user['E_id'] ?>" class="dropdown-item"><i class="fa-solid fa-eye me-3"></i>Détaille</a>
															<a href="Event_Cr_Delete.php?id=<?php echo $user['E_id'] ?>" class="dropdown-item delete-event" onclick="return confirm( 'Voulez vous vraiment supprimer:  <?php echo $user['Titre'] ?>' );"><i class="fa-solid fa-trash-can me-3 text-danger"></i>supprimer</a>
														</div>
													</div>
												</div>
												<div class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
													<div class="icon-box ">
														<span class="icon">
															<i class="fa-solid fa-location-dot"></i>
														</span>
														<p>Status</p>
														<h6 class="coupon-status">Publier</h6>
													</div>
													<div class="icon-box">
														<span class="icon">
															<i class="fa-solid fa-calendar-days"></i>
														</span>
														<p>Starts on</p>
														<h6 class="coupon-status">
															<?php
															$timestamp = strtotime($user['Date_debut']);
															$dayAbbreviation = date('D', $timestamp);
															$monthAbbreviation = date('M', $timestamp);
															$day = date('d', $timestamp);
															$year = date('Y', $timestamp);

															echo "$dayAbbreviation, ";
															echo "$monthAbbreviation ";
															echo "$day, ";
															echo "$year ";
															?> <?php echo $user['Heure_debut']; ?> PM</h5>
														</h6>
													</div>
													<div class="icon-box">
														<span class="icon">
															<i class="fa-solid fa-ticket"></i>
														</span>
														<p>Ticket</p>
														<h6 class="coupon-status"><?php echo $user['Nombre_tickets'] ?></h6>
													</div>
													<div class="icon-box">
														<span class="icon">
															<i class="fa-solid fa-tag"></i>
														</span>
														<p>Tickets sold</p>
														<h6 class="coupon-status"><?php echo $user['Nombre_tickets'] ?></h6>
													</div>

												</div>
											</div>
										</div>
									<?php } ?>
								</div>

								<!----- Publier ------>
								<!----- En attente ------>

								<div class="tab-pane fade" id="attente" role="tabpanel">
									<form action="" method="post">
										<div class="main-card mt-3">
											<div class="dashboard-wrap-content p-4">
												<div class="d-md-flex flex-wrap align-items-center">
													<div class="dashboard-date-wrap">
														<div class="form-group">
															<div class="relative-input position-relative">
																<input class="form-control h_40" type="text" placeholder="Search by event name, status" value="" name="chr_attente">
																<i class="uil uil-search"></i>
															</div>
														</div>
													</div>
													<div class="rs ms-auto mt_r4">
														<div class="nav custom2-tabs btn-group" role="tablist">
															<button class="tab-link btn-hover" type="submit" role="tab" aria-controls="all-tab" aria-selected="true" name="Chercher_attente">Chercher</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
									<?php 
									if (isset($_POST['Chercher_rejected'])) {
										require_once "connect/DataBase.php";
										$Search_rej = $_POST['chr_reject'];
										$users_rej = $connection->query("SELECT * FROM `archive_demande` WHERE  User_id = '$userid' and (event_id like '%$Search_rej%' or n_event like '%$Search_rej%' or `description` like '%$Search_rej%' or event_date like '%$Search_rej%' or adress1 like '%$Search_rej%' or city like '%$Search_rej%' or zip like '%$Search_rej%' or gategorie like '%$Search_rej%')")->fetchAll(PDO::FETCH_ASSOC);
									}else{
										require_once "connect/DataBase.php";
										$users_rej = $connection->query("SELECT * FROM `archive_demande` WHERE User_id = '$userid'");
									}
										foreach ($users_att as $user_att) { 
										?>
										<div class="main-card mt-4">
											<div class="contact-list">
												<div class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
													<div class="d-md-flex align-items-center event-top-info">
														<div class="card-event-img">
															<img src="upload/images/<?php echo $user_att['image'] ?>" alt="">
														</div>
														<div class="card-event-dt">
															<h5><?php echo $user_att['n_event'] ?></h5>
														</div>
													</div>													
												</div>
												<div class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
													<div class="icon-box ">
														<span class="icon">
															<i class="fa-solid fa-location-dot" style="color:yellow;"></i>
														</span>
														<p>Status</p>
														<h6 class="coupon-status">En attente</h6>
													</div>
													<div class="icon-box">
														<span class="icon">
															<i class="fa-solid fa-calendar-days"></i>
														</span>
														<p>Starts on</p>
														<h6 class="coupon-status">
															<?php
															$timestamp = strtotime($user_att['event_date']);
															$dayAbbreviation = date('D', $timestamp);
															$monthAbbreviation = date('M', $timestamp);
															$day = date('d', $timestamp);
															$year = date('Y', $timestamp);

															echo "$dayAbbreviation, ";
															echo "$monthAbbreviation ";
															echo "$day, ";
															echo "$year ";
															?> <?php echo $user_att['event_time']; ?> PM</h5>
														</h6>
													</div>
													<div class="icon-box">
														<span class="icon">
															<i class="fa-solid fa-ticket"></i>
														</span>
														<p>Ticket</p>
														<h6 class="coupon-status"><?php echo $user_att['N_tickts'] ?></h6>
													</div>
													<div class="icon-box">
														<span class="icon">
															<i class="fa-solid fa-tag"></i>
														</span>
														<p>Tickets sold</p>
														<h6 class="coupon-status"><?php echo $user_att['N_tickts'] ?></h6>
													</div>

												</div>
											</div>
										</div>
									<?php } ?>
								</div>
								<!----- En attente ------>

								<!-- Rejecter -->
								<div class="tab-pane fade" id="rejecter" role="tabpanel">
									<form action="" method="post">
										<div class="main-card mt-3">
											<div class="dashboard-wrap-content p-4">
												<div class="d-md-flex flex-wrap align-items-center">
													<div class="dashboard-date-wrap">
														<div class="form-group">
															<div class="relative-input position-relative">
																<input class="form-control h_40" type="text" placeholder="Search by event name, status" value="" name="chr_reject">
																<i class="uil uil-search"></i>
															</div>
														</div>
													</div>
													<div class="rs ms-auto mt_r4">
														<div class="nav custom2-tabs btn-group" role="tablist">
															<button class="tab-link btn-hover" type="submit" role="tab" aria-controls="all-tab" aria-selected="true" name="Chercher_rejected">Chercher</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
									<?php foreach ($users_rej as $user_rej) { ?>
										<div class="main-card mt-4">
											<div class="contact-list">
												<div class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
													<div class="d-md-flex align-items-center event-top-info">
														<div class="card-event-img">
															<img src="upload/images/<?php echo $user_rej['image'] ?>" alt="">
														</div>
														<div class="card-event-dt">
															<h5><?php echo $user_rej['n_event'] ?></h5>
														</div>
													</div>													
												</div>
												<div class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
													<div class="icon-box ">
														<span class="icon">
															<i class="fa-solid fa-location-dot" style="color:red;"></i>
														</span>
														<p>Status</p>
														<h6 class="coupon-status">Rejecer</h6>
													</div>
													<div class="icon-box">
														<span class="icon">
															<i class="fa-solid fa-calendar-days"></i>
														</span>
														<p>Starts on</p>
														<h6 class="coupon-status">
															<?php
															$timestamp = strtotime($user_rej['event_date']);
															$dayAbbreviation = date('D', $timestamp);
															$monthAbbreviation = date('M', $timestamp);
															$day = date('d', $timestamp);
															$year = date('Y', $timestamp);

															echo "$dayAbbreviation, ";
															echo "$monthAbbreviation ";
															echo "$day, ";
															echo "$year ";
															?> <?php echo $user_rej['event_time']; ?> PM</h5>
														</h6>
													</div>
													<div class="icon-box">
														<span class="icon">
															<i class="fa-solid fa-ticket"></i>
														</span>
														<p>Ticket</p>
														<h6 class="coupon-status"><?php echo $user_rej['N_tickts'] ?></h6>
													</div>
													<div class="icon-box">
														<span class="icon">
															<i class="fa-solid fa-tag"></i>
														</span>
														<p>Tickets sold</p>
														<h6 class="coupon-status"><?php echo $user_rej['N_tickts'] ?></h6>
													</div>

												</div>
											</div>
										</div>
									<?php } ?>
								</div>
								<!-- Rejecter -->
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
	<script src="js/night-mode.js"></script>

</body>

</html>