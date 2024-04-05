<?php 
session_start();
	if(!isset($_SESSION['admin'])){
		header('location:sign-in-admin.php');
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
		<title>Resérvation</title>
		
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
			<nav class="navbar navbar-expand-lg bg-barren barren-head navbar fixed-top justify-content-sm-start pt-0 pb-0 ps-lg-0 pe-2">
				<div class="container-fluid ps-0">
					<button type="button" id="toggleMenu" class="toggle_menu">
						<i class="fa-solid fa-bars-staggered"></i>
					</button>
					<button id="collapse_menu" class="collapse_menu me-4">
						<i class="fa-solid fa-bars collapse_menu--icon "></i>
						<span class="collapse_menu--label"></span>
					</button>
					
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
							<li style="list-style: none;">
								<a href="sign-out-admin.php" class="create-btn btn-hover">
									<span>Se déconnecter</span>
								</a>
							</li>
                        </div>
                    </ul>
                    </li></div>
					
				</div>
			</nav>
			<div class="overlay"></div>
		</div>
	</header>
    <!-- Verticale nav -->
	<?php include 'include/VerticaleNav.php' ?>
	<!-- Verticale nav -->

<!-- Body Start -->

<div class="wrapper wrapper-body">
    
	<div class="dashboard-wrap-content p-4">
		<form action="" method="post">
		<h5 class="mb-4">Liste de réservation</h5>
		<div class="d-md-flex flex-wrap align-items-center">
			<div class="dashboard-date-wrap">
				<div class="form-group">
					<div class="relative-input position-relative">
						<input class="form-control h_40" type="text" placeholder="Search by name" value="" name="crs">
						<i class="uil uil-search"></i>
					</div>
				</div>
			</div>
			<div class="ocard-right">
				<button class="pe-4 ps-4 main-btn h_40 w-100" type="submit" name="bbb">Search</button>
			</div>
		
		</div>
		</form>
	</div>
	<div class="tab-content">
		<div class="tab-pane fade active show" id="overview-tab" role="tabpanel">
			<div class="table-card mt-4">
				<div class="main-table">
					<div class="table-responsive">
						<table class="table">
							<thead class="thead-dark">
								<tr>
									<th scope="col">ID</th>
									<th scope="col" class="w-50">Email</th>
									<th scope="col" colspan="3" class="w-25">Opération</th>
								</tr>
							</thead>
							<tbody>
							<?php 
							if(isset($_POST['bbb'])){
								require_once "connect/DataBase.php";
								$hh = $_POST['crs'];
								$Reservations= $connection->query("SELECT * FROM reservation WHERE Reservation_id like '%$hh%' or R_Fname like '%$hh%' or R_Lname like '%$hh%' or R_adresse like '%$hh%' or R_country like '%$hh%' or R_city like '%$hh%' or R_Zipcode like '%$hh%' or Ticket_id like '%$hh%'")->fetchAll(PDO::FETCH_ASSOC);
								foreach($Reservations as $Reservation){
								

								
							?>
							
							<tr>
									<td><?php echo $Reservation['Reservation_id']?></td>										
									<td><?php echo $Reservation['R_email']?></td>


									<td><span class="action-btn btn btn-primary"><a href="reservation_detaille.php?id=<?php echo $Reservation['Reservation_id']?>" >Détaille</a></span></td>
									<td><span class="action-btn "><a href="delete_Reservation.php?id=<?php echo $Reservation['Reservation_id']?>" onclick= "return confirm( 'Voulez vous vraiment supprimer le admin <?php echo $Reservation['R_email']?>' );" ><i class="fa-solid fa-trash-can " style="color: red;"></i></a>
									<td><span class="action-btn"><a href="reservation_update.php?id=<?php echo $Reservation['Reservation_id']?>"><i class="fa-solid fa-pen-to-square" style="color: blue;"></i></a></span></td></td>
										
								</tr>
								<?php
																		} 
																	?>

<?php
							
							
							
							
							
							}else{

							
							
							
							?>














							<?php 
								require_once "connect/DataBase.php";
						$Reservations= $connection->query('SELECT * FROM `reservation`')->fetchAll(PDO::FETCH_ASSOC);
						foreach($Reservations as $Reservation){						
																	
																	?>
								<tr>
									<td><?php echo $Reservation['Reservation_id']?></td>										
									<td><?php echo $Reservation['R_email']?></td>


									<td><span class="action-btn btn btn-primary"><a href="reservation_detaille.php?id=<?php echo $Reservation['Reservation_id']?>" >Détaille</a></span></td>
									<td><span class="action-btn "><a href="delete_Reservation.php?id=<?php echo $Reservation['Reservation_id']?>" onclick= "return confirm( 'Voulez vous vraiment supprimer le admin <?php echo $Reservation['R_email']?>' );" ><i class="fa-solid fa-trash-can " style="color: red;"></i></a>
									<td><span class="action-btn"><a href="reservation_update.php?id=<?php echo $Reservation['Reservation_id']?>"><i class="fa-solid fa-pen-to-square" style="color: blue;"></i></a></span></td></td>
										
								</tr>
								<?php } ?>
								<?php
																		} 
																	?>
								
							</tbody>									
						</table>
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