<?php
require_once "connect/DataBase.php";

$sqlstate=$connection->prepare('SELECT * FROM reclamation WHERE Reclammation_id=?');
$id=$_GET['id'];
$sqlstate->execute([$id]);

$data = $sqlstate->fetch(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Utilisateurs</title>
		
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
<header class="header">
		<div class="header-inner">		
			<nav class="navbar  bg-barren barren-head navbar fixed-top justify-content-sm-start pt-0 pb-0 ps-lg-3 pe-2">
				<div class="container-fluid ps-0">
					<a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 me-auto" href="index.php">
						<div class="res-main-logo">
							<img src="images/logo-icon.svg" alt="">
						</div>
						<div class="main-logo" id="logo">
							<img src="images/logo.svg" alt="">
							<img class="logo-inverse" src="images/dark-logo.svg" alt="">
						</div>
					</a>
					<div class="right-header order-2">
						
                        <ul class="align-self-stretch">
                        <li>
							
                       
                        <div class="night_mode_switch__btn">
                            <div id="night-mode" class="fas fa-moon fa-sun"></div>
                        </div>
						
                    </ul>
                    </li>
					
				</div>
				
				</div>
			</nav>
			<div class="overlay"></div>
		</div>
</header>>

<form method="post">
	<div class="container form-group">
		<div class="checkout-block">
			<div class="main-card">
				<div class="bp-title">
					<h4>Détaille d'utilisateur</h4>
				</div>
									
				<div class="bp-content bp-form">
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="form-group mt-4">
								<label class="form-label">Reclamation ID</label>
								<input class="form-control h_50" readonly name="firstname" type="text" placeholder="" value="<?php echo $data['Reclammation_id']; ?>">																								
							</div>
						</div>
                        <div class="col-lg-6 col-md-12">
							<div class="form-group mt-4">
								<label class="form-label">User_ID</label>
								<input class="form-control h_50" name="adresse" type="text" placeholder="" value="<?php echo $data['User_id']; ?>">																								
							</div>
						</div>	
						<div class="col-lg-6 col-md-12">
							<div class="form-group mt-4">
								<label class="form-label">Nom du contact</label>
								<input class="form-control h_50" name="lastname" type="text" placeholder="" value="<?php echo $data['Contact_Name']; ?>">																								
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="form-group mt-4">
								<label class="form-label">Email</label>
								<input class="form-control h_50" name="email" type="text" placeholder="" value="<?php echo $data['Email']; ?>">																								
							</div>
						</div>
						
						<div class="col-lg-6 col-md-12">
							<div class="form-group mt-4">
								<label class="form-label">Subject</label>
								<input class="form-control h_50" name="Phone" type="text" placeholder="" value="<?php echo $data['Subject']; ?>">																								
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="form-group mt-4">
								<label class="form-label">Description</label>
								<input class="form-control h_50" name="Bdate" type="text"  value="<?php echo $data['Description']; ?>">																								
							</div>
						</div>
							
					</div>
				</div>
									
			</div>
				<div class="container step-footer step-tab-pager mt-4">									
					<a href="Reclamation.php"><button type="button" class="main-btn min-width btn-hover h_40" style="color:black;">Retourner</button></a>
				</div>
		</div>
							
	</div>
</form>
</body>
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
</html>