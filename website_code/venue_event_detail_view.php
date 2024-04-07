<?php session_start(); ?>
<?php
if (isset($_POST['Booknow'])) {

	header('location:checkout.php');
	
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
					<?php
					require_once './connect/DataBase.php';

					$E_id = $_GET['event_id'];
					$_SESSION['E_id']=$E_id;
					$stmt = $connection->prepare("SELECT * FROM `event` WHERE E_id = :E_id");

					$stmt->bindParam(':E_id', $E_id);

					$stmt->execute();

					$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

					?>
					<?php foreach ($results as $row) : ?>
						<div class="col-xl-12 col-lg-12 col-md-12">
							<div class="event-top-dts">
								<div class="event-top-date">
									<span class="event-month"><?php $timestamp = strtotime($row['Date_debut']);
																$monthAbbreviation = date('M', $timestamp);
																echo $monthAbbreviation;
																?></span>
									<span class="event-date"><?php $timestamp = strtotime($row['Date_debut']);
																$monthName = date('d', $timestamp);
																echo $monthName;
																?></span>
								</div>
								<div class="event-top-dt">
									<h3 class="event-main-title"><?php echo $row['Titre'];
									$_SESSION['eventname'] =$row['Titre']?></h3>
									<div class="event-top-info-status">
										<span class="event-type-name"><i class="fa-solid fa-location-dot"></i>Venue Event</span>
										<span class="event-type-name details-hr">Starts on <span class="ev-event-date"><?php
																														$timestamp = strtotime($row['Date_debut']);
																														$dayAbbreviation = date('D', $timestamp);
																														$monthAbbreviation = date('M', $timestamp);
																														$day = date('d', $timestamp);
																														$year = date('Y', $timestamp);

																														echo "$dayAbbreviation, ";
																														echo "$monthAbbreviation ";
																														echo "$day, ";
																														echo "$year ";
																														
																														?>
												<?php echo $row['Heure_debut'];
												$_SESSION['date']=$dayAbbreviation.",  ".$monthAbbreviation."/".$day."/".$year." Durée: ".$row['Heure_fin']; ?> PM</span></span>
										<span class="event-type-name details-hr"><?php echo $row['Heure_fin']; ?>h</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-8 col-lg-7 col-md-12">
							<div class="main-event-dt">
								<div class="event-img">
									<img src="upload/images/<?php echo $row['Image']; ?>" alt="Event Image">
								</div>
								<div class="share-save-btns dropdown">
									<button class="sv-btn me-2"><i class="fa-regular fa-bookmark me-2"></i>Save</button>
									<button class="sv-btn" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-share-nodes me-2"></i>Share</button>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#"><i class="fa-brands fa-facebook me-3"></i>Facebook</a></li>
										<li><a class="dropdown-item" href="#"><i class="fa-brands fa-twitter me-3"></i>Twitter</a></li>
										<li><a class="dropdown-item" href="#"><i class="fa-brands fa-linkedin-in me-3"></i>LinkedIn</a></li>
										<li><a class="dropdown-item" href="#"><i class="fa-regular fa-envelope me-3"></i>Email</a></li>
									</ul>
								</div>
								<div class="main-event-content">
									<h4>About This Event</h4>
									<p><?php echo $row['Description']; ?></p>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-5 col-md-12">
							<div class="main-card event-right-dt">
								<div class="bp-title">
									<h4>Event Details</h4>
								</div>
								<div class="time-left">
									<div class="countdown">
										<div class="countdown-item">
											<span id="day"></span>days
										</div>
										<div class="countdown-item">
											<span id="hour"></span>Hours
										</div>
										<div class="countdown-item">
											<span id="minute"></span>Minutes
										</div>
										<div class="countdown-item">
											<span id="second"></span>Seconds
										</div>
									</div>
								</div>
								<div class="event-dt-right-group mt-5">
									<div class="event-dt-right-icon">
										<i class="fa-solid fa-circle-user"></i>
									</div>
									<div class="event-dt-right-content">
									<h4>Organised by</h4>
                                        <?php
                                        $stmt = $connection->prepare("SELECT U_name, U_Prenom FROM user WHERE User_id = :user_id");
                                        $stmt->bindParam(":user_id", $row['User_id']);
                                        $stmt->execute();
                                        $user = $stmt->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <h5><?php echo $user['U_name'] . " " . $user['U_Prenom']; ?></h5>
										<a href="attendee_profile_view.php">View Profile</a>
									</div>
								</div>
								<div class="event-dt-right-group">
									<div class="event-dt-right-icon">
										<i class="fa-solid fa-calendar-day"></i>
									</div>
									<div class="event-dt-right-content">
										<h4>Date and Time</h4>
										<h5><?php
											$timestamp = strtotime($row['Date_debut']);
											$dayAbbreviation = date('D', $timestamp);
											$monthAbbreviation = date('M', $timestamp);
											$day = date('d', $timestamp);
											$year = date('Y', $timestamp);

											echo "$dayAbbreviation, ";
											echo "$monthAbbreviation ";
											echo "$day, ";
											echo "$year ";
											?> <?php echo $row['Heure_debut']; ?> PM</h5>
										<div class="add-to-calendar">
											<a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="fa-regular fa-calendar-days me-3"></i>Add to Calendar
											</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#"><i class="fa-brands fa-windows me-3"></i>Outlook</a></li>
												<li><a class="dropdown-item" href="#"><i class="fa-brands fa-apple me-3"></i>Apple</a></li>
												<li><a class="dropdown-item" href="#"><i class="fa-brands fa-google me-3"></i>Google</a></li>
												<li><a class="dropdown-item" href="#"><i class="fa-brands fa-yahoo me-3"></i>Yahoo</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="event-dt-right-group">
									<div class="event-dt-right-icon">
										<i class="fa-solid fa-location-dot"></i>
									</div>
									<div class="event-dt-right-content">
										<h4>Location</h4>
										<h5 class="mb-0"><?php echo $row['adress1']; ?>,<?php echo $row['Zip_code']; ?>, <?php echo $row['Ville']; ?></h5>
										<a href="#"><i class="fa-solid fa-location-dot me-2"></i>View Map</a>
									</div>
								</div>

								<form action="" method="post">
									<div class="select-tickets-block">
										
										
										<div class="xtotel-tickets-count">
											<div class="x-title">Ticket</div>
											<h4>MAD <span><?php echo $row['Prix_ticket'];
											$_SESSION['Prix_ticket']= $row['Prix_ticket'];?></span></h4>
										</div>
										
									</div>
									<div class="booking-btn">
										<input type="submit" value="Book Now" name="Booknow" class="main-btn btn-hover w-100">
									</div>
								</form>
							</div>
						</div>
					<?php endforeach; ?>
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="more-events">
							<div class="main-title position-relative">
								<h3>More Events</h3>
								<a href="index.php" class="view-all-link">Browse All<i class="fa-solid fa-right-long ms-2"></i></a>
							</div>
							<div>
								<div class="row" data-ref="event-filter-content">
									<?php
									require_once './connect/DataBase.php';
									// $stmt = $connection->query("SELECT event_id, image, P_tickts, N_tickts, event_date, event_time, event_duration, n_event FROM demande");
									// $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
									$events = $connection->query("SELECT * FROM `event` limit 4 ")->fetchAll(PDO::FETCH_ASSOC);
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
													<a href="venue_event_detail_view.php" class="event-title"><?php echo $row['Titre']; ?></a>
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Body End-->
	<!-- Footer Start-->
	<?php include "include/Footer.php" ?>
	<!-- Footer End-->


	<script src="js/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/timer.js"></script>
	<script src="js/night-mode.js"></script>
</body>

</html>