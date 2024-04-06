<?php session_start(); ?>

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
	<?php
	include "include/navindex.php";
	?>

	<!-- Header End-->
	<!-- Body Start-->
	<div class="wrapper">
		<div class="hero-banner">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-8 col-lg-8 col-md-10">
						<div class="hero-banner-content">
							<h2>Découvrez des événements pour toutes les choses que vous aimez</h2>
							<form method="post">
								<div class="search-form main-form">
									<div class="row g-3">
										<div class="col-lg-5 col-md-12">
											<div class="form-group search-category">
												<select class="selectpicker" data-width="100%" data-size="5">
													<option value="browse_all" data-icon="fa-solid fa-tower-broadcast" selected>Voir tout</option>
													<option value="online_events" data-icon="fa-solid fa-video">Événements en ligne</option>
													<option value="venue_events" data-icon="fa-solid fa-location-dot">Événements Surpalce</option>
												</select>
											</div>
										</div>


										<?php
										require_once './connect/DataBase.php';

										$categories = $connection->query("SELECT * FROM categorie")->fetchAll(PDO::FETCH_ASSOC);

										?>

										<div class="col-lg-5 col-md-12">
											<div class="form-group">
												<select name="cat" class="selectpicker" data-width="100%" data-size="5" data-live-search="true">
													<option name="tot" value="0" selected>Tout</option>
													<?php foreach ($categories as $category) : ?>
														<option value="<?php echo $category['Categorie_id']; ?>"><?= $category['Nom_cat']; ?></option>
													<?php endforeach; ?>

												</select>
											</div>
										</div>



										<div class="col-lg-2 col-md-12">
											<button type="submit" name="nametrouve" class="main-btn btn-hover w-100">Trouver</button>
										</div>


									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="explore-events p-80">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="event-filter-items">
							<div class="featured-controls">

								<div class="row" data-ref="event-filter-content">
									<?php
									require_once './connect/DataBase.php';

									$Categorie_id = $_POST['cat'];
									if (isset($_POST['nametrouve']) && $Categorie_id != 0) {

										$sqlState = $connection->prepare("SELECT * FROM `event` WHERE Categorie_id=?");
										$sqlState->execute([$Categorie_id]);
										$events = $sqlState->fetchAll(PDO::FETCH_ASSOC);
									} else {
										$events = $connection->query("SELECT * FROM `event`")->fetchAll(PDO::FETCH_ASSOC);
									}

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
													<a href="venue_event_detail_view.html" class="event-title"><?php echo $row['Titre']; ?></a>
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
								<div class="browse-btn">
									<a href="#" class="main-btn btn-hover ">Voir plus </a>
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
	<?php include "include/Footer.php"; ?>
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