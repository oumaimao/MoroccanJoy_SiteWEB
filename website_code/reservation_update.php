<?php
require_once "connect/DataBase.php";

$sqlstate=$connection->prepare('SELECT * FROM reservation WHERE Reservation_id=?');
$id=$_GET['id'];
$sqlstate->execute([$id]);

$data = $sqlstate->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['modifier'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$Country = $_POST['Country'];
	$ville = $_POST['ville'];
	$zip = $_POST['zip'];
	$adresse = $_POST['adresse'];

	if(!empty($fname) && !empty($lname) && !empty($email) && !empty($ville) && !empty($zip) && !empty($adresse)){
		$sql = 'UPDATE reservation SET 
								R_Fname = :fname , 
								R_Lname = :lname, 
								R_email = :email, 
								R_adresse = :adresse, 
								R_country = :country, 
								R_city = :ville, 
								R_Zipcode = :zip
								WHERE Reservation_id = :R_id';
		$statement = $connection->prepare($sql); 

		if($statement->execute([':fname'=>$fname, ':lname'=>$lname, ':email'=>$email, ':adresse'=>$adresse, 'country'=>$Country, ':ville'=>$ville, ':zip'=>$zip, ':R_id'=>$id	])){
			$message = '<div class="alert alert-success" role="alert">
								Donnée créée avec succès
							</div>';
			header('location: Resirvation.php');
			
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
								<label class="form-label">ID*</label>
								<input class="form-control h_50" name="fname" type="text" placeholder="" value="<?php echo $data['Reservation_id']; ?>">																								
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="form-group mt-4">
								<label class="form-label">Prénom*</label>
								<input class="form-control h_50" name="fname" type="text" placeholder="" value="<?php echo $data['R_Fname']; ?>">																								
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="form-group mt-4">
								<label class="form-label">Nom de famille*</label>
								<input class="form-control h_50" name="lname" type="text" placeholder="" value="<?php echo $data['R_Lname']; ?>">																								
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="form-group mt-4">
								<label class="form-label">Email*</label>
								<input class="form-control h_50" name="email" type="text" placeholder="" value="<?php echo $data['R_email']; ?>">																								
							</div>
						</div>
						
						
						<div class="col-lg-6 col-md-12">
							<div class="form-group main-form mt-4">
								<label class="form-label">Pays*</label>
								<select class="selectpicker" data-size="5" title="Nothing selected" name="Country">
									<option value="<?php echo $data['R_country'];?>"><?php echo $data['R_country'];?></option>
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
								<label class="form-label">Ville*</label>
								<input class="form-control h_50" name="ville" type="text" placeholder="" value="<?php echo $data['R_city']; ?>">																								
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="form-group mt-4">
								<label class="form-label">Zip / code postal*</label>
								<input class="form-control h_50" name="zip" type="text" placeholder="" value="<?php echo $data['R_Zipcode']; ?>">																								
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="form-group mt-4">
								<label class="form-label">Adresse*</label>
								<input class="form-control h_50" name="adresse" type="text" placeholder="" value="<?php echo $data['R_adresse']; ?>">																								
							</div>
						</div>			
					</div>
				</div>
									
			</div>
				<div class="container step-footer step-tab-pager mt-4">									
					<input type="submit"  data-direction="finish" class="btn btn-default btn-hover btn-primary p-3" name="modifier" value="Modifier">
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