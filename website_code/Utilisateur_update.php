<?php
require_once "connect/DataBase.php";

$sqlstate=$connection->prepare('SELECT * FROM user WHERE User_id=?');
$id=$_GET['id'];
$sqlstate->execute([$id]);

$data = $sqlstate->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['modifier'])){
	$email = $_POST['email'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phone = $_POST['Phone'];
	$bdate = $_POST['Bdate'];
	$adresse = $_POST['adresse'];

    
	if(!empty($email) && !empty($firstname) && !empty($lastname) && !empty($phone) && !empty($bdate) && !empty($adresse)){
		$sql = 'UPDATE user SET 
								U_name = :lname , 
								U_Prenom = :fname, 
								U_email = :email, 
								U_telephone = :phone, 
								U_adresse = :adresse, 
								U_dateNaissance = :bdate
								WHERE User_id = :U_id';
		$statement = $connection->prepare($sql); 

		if($statement->execute([':lname'=>$firstname, ':fname'=>$lastname, ':email'=>$email, ':phone'=>$phone, 'adresse'=>$adresse, ':bdate'=>$bdate, ':U_id'=>$id	])){
			$message = '<div class="alert alert-success" role="alert">
								Donnée créée avec succès
							</div>';
			header('location: Utilisateur.php');
			
		}else{
			$message = '<div class="alert alert-danger" role="alert">
								somthing wrong
							</div>';
		}
		
	}else{
		$message = '<div class="alert alert-danger" role="alert">
						Touts les chanpts sont obligatoir
					</div>';
		
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
					<h4>Modifier les informations de facturation</h4>
				</div>
									
				<div class="bp-content bp-form">
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="form-group mt-4">
								<label class="form-label">Prénom*</label>
								<input class="form-control h_50" name="firstname" type="text" placeholder="" value="<?php echo $data['U_Prenom']; ?>">																								
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="form-group mt-4">
								<label class="form-label">Nom*</label>
								<input class="form-control h_50" name="lastname" type="text" placeholder="" value="<?php echo $data['U_name']; ?>">																								
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="form-group mt-4">
								<label class="form-label">Email*</label>
								<input class="form-control h_50" name="email" type="text" placeholder="" value="<?php echo $data['U_email']; ?>">																								
							</div>
						</div>
						
						<div class="col-lg-6 col-md-12">
							<div class="form-group mt-4">
								<label class="form-label">Phone*</label>
								<input class="form-control h_50" name="Phone" type="text" placeholder="" value="<?php echo $data['U_telephone']; ?>">																								
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="form-group mt-4">
								<label class="form-label">Date de naissance*</label>
								<input class="form-control h_50" name="Bdate" type="date"  value="<?php echo $data['U_dateNaissance']; ?>">																								
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="form-group mt-4">
								<label class="form-label">Adresse*</label>
								<input class="form-control h_50" name="adresse" type="text" placeholder="" value="<?php echo $data['U_adresse']; ?>">																								
							</div>
						</div>			
					</div>
				</div>
									
			</div>
				<div class="container step-footer step-tab-pager mt-4">									
					<input type="submit"  data-direction="finish" class="main-btn min-width btn-hover h_40" style="color:black;" name="modifier" value="Modifier">
					<a href="Utilisateur.php"><button type="button" class="co-main-btn min-width btn-hover h_40">Annuler</button></a>
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