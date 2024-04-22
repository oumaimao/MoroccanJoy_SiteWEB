<?php session_start(); ?>

<?php
    require_once './connect/DataBase.php';

    if (isset($_SESSION['user']['User_id'])) {
        $user_id = $_SESSION['user']['User_id'];
        echo $user_id;
    } else {
        echo "User not logged in";
        exit;
    }
?>

<?php
if (isset($_POST['checkout'])) {

	header('location:checkout.php' );
	
}
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
	<?php include "include/navindex.php";?>
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
    <!-- Body Start -->
	<div class="explore-events p-80">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="main-title">
							<h3>Liste d'Événements</h3>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12">
<form action="" method="post">
<div class="wrapper wrapper-body">
    
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
				<button class="pe-4 ps-4 main-btn h_40 w-100" type="submit" name="sear">Chercher</button>
			</div>
		</div>
	</div>
    
	<div class="tab-content">
		<div class="tab-pane fade active show" id="overview-tab" role="tabpanel">
			<div class="table-card mt-4">
				<div class="main-table">
					<div class="table-responsive">
						<table class="table">
							<thead class="thead-dark">
								<tr>
									<th scope="col">Titre</th>
									<th scope="col">Event image</th>
									
                                   
									<th scope="col" colspan="3" class="w-25">Opération</th>
								</tr>
							</thead>
							<tbody>
                          
							<?php 
								require_once "connect/DataBase.php";
								$demandes= $connection->query("SELECT * FROM event WHERE E_id in (select E_id from panier where User_id = $user_id)")->fetchAll(PDO::FETCH_ASSOC);
								foreach($demandes as $demande){
							?>

<tr>										
                               
								<td><?php echo $demande['Titre']?></td>										
									<td><div class="event-thumbnail-img">
											<img src="upload/images/<?php echo $sqlevent['Image'];
											$_SESSION['imageevent']=$sqlevent['Image']; ?>" alt="">
										</div></td>	
										
										
									<td><span class="action-btn btn btn-primary"><a href="Event_detaille.php?id=<?php echo $demande['E_id']?>" >Détaille</a></span></td>
                                    <td><span class="action-btn "><a href="#>" onclick= "return confirm( 'Voulez vous vraiment supprimer le eent <?php echo $demande['E_id']?>' );"><i class="fa-solid fa-trash-can " style="color: red;"></i></a>
									<td><span class="action-btn"><a href="#"><i class="fa-solid fa-pen-to-square" style="color: blue;"></i></a></span></td></td>		
								</tr>
								<?php
																} 
																	?>
							</tbody>									
						</table>
                        <div class="ocard-right">
                            <button class="pe-4 ps-4 main-btn h_40 w-100" type="submit" name="checkout">Checkout</button>
                        </div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
</form>
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