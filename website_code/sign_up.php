<?php

$message = '';
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $passw = $_POST['password'];
	$hash = password_hash($passw, PASSWORD_DEFAULT);
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phone = $_POST['Phone'];
	$bdate = $_POST['Bdate'];
	$adresse = $_POST['adresse'];
	$Confpassword = $_POST['Confpassword'];


 

	if(!empty($email) && !empty($passw) && !empty($Confpassword) && !empty($firstname) && !empty($lastname) && !empty($phone) && !empty($bdate) && !empty($adresse)){
		require 'connect/DataBase.php';
		
		$sqlcnx = 'SELECT U_email FROM `user` WHERE U_email = :email';
        $statemail = $connection->prepare($sqlcnx);
        $statemail->execute([':email' => $email]);
        $useremail = $statemail->fetch(PDO::FETCH_ASSOC);


		if(!isset($useremail['U_email'])){
			
			$sql = 'INSERT INTO user(U_name, U_Prenom, U_email, U_password, U_telephone, U_adresse, U_dateNaissance) VALUES(:nom, :prenom, :email, :pass, :phone, :adresse, :datenaissance)'; 
			$statement = $connection->prepare($sql); 
		
				if($passw === $Confpassword){

					if($statement->execute([':nom'=> $lastname, ':prenom'=> $firstname, ':email'=> $email ,':pass'=> $hash, ':phone'=>$phone, ':adresse'=>$adresse, ':datenaissance'=>$bdate]))
					{ 
				
						$message = '<div class="alert alert-success" role="alert">
										Donnée créée avec succès
									</div>';
						echo '<script type="text/javascript">
						setTimeout(function () {
							window.location.href= \'sign_in.php\';
						},1000);
						</script>';
					}else{
						$message = '<div class="alert alert-danger" role="alert">
										Essayer à nouveau
									</div>';
						
					}
				}else{
					$message = '<div class="alert alert-danger" role="alert">
									Mot de passe est incorrecte
									</div>';
				}
		}else{
			$message = '<div class="alert alert-danger" role="alert">
							Cette utilisateur déjà existé
					</div>';		
		}
	
 	}else{
		$message = '<div class="alert alert-danger" role="alert">
						Tous les chants sont obligatoir
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
		<title>MoroccanJoy - Simple Online Event Ticketing System</title>
		
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

<body>				
	<div class="form-wrapper">
		<div class="app-form">
			<div class="app-form-sidebar">
				<div class="sidebar-sign-logo">
					<img src="images/sign-logo.svg" alt="">
				</div>
				<div class="sign_sidebar_text">
					<h1>The Easiest Way to Create Events and Sell More Tickets Online</h1>
				</div>
			</div>
			<div class="app-form-content">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10 col-md-10">
							<div class="app-top-items">
								<a href="index.html">
									<div class="sign-logo" id="logo">
										<img src="images/logo.svg" alt="">
										<img class="logo-inverse" src="images/dark-logo.svg" alt="">
									</div>
								</a>
								<div class="app-top-right-link">
									Already have an account?<a class="sidebar-register-link" href="sign_in.php">Sign In</a>
								</div>
							</div>
						</div>
						<div class="col-xl-5 col-lg-6 col-md-7">
							<div class="registration">
							
									<?php echo $message?>
							
								<form method="post">
									<h2 class="registration-title">Sign up to MoroccanJoy</h2>
									<div class="row mt-3">
										<div class="col-lg-6 col-md-12">
											<div class="form-group mt-4">
												<label class="form-label">First Name*</label>
												<input class="form-control h_50" type="text" name="firstname" placeholder="" value="">																								
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group mt-4">
												<label class="form-label">Last Name*</label>
												<input class="form-control h_50" type="text" name="lastname" placeholder="" value="">																								
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="form-group mt-4">
												<label class="form-label">Your Email*</label>
												<input class="form-control h_50" type="email" name="email" placeholder="" value="">																								
											</div>
										</div>
										<div class="col-lg-12 col-md-12">	
											<div class="form-group mt-4">
												<div class="field-password">
													<label class="form-label">Password*</label>
												</div>
												<div class="loc-group position-relative">
													<input class="form-control h_50" type="password" id="passw" name="password" placeholder="">
													<span class="pass-show-eye" onclick="pass()"><i class="fas fa-eye-slash" id="eye_slash"></i></span>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-md-12">	
											<div class="form-group mt-4">
												<div class="field-password">
													<label class="form-label">Confirme Password*</label>
												</div>
												<div class="loc-group position-relative">
												<input class="form-control h_50" type="password" id="conf_passw" name="password" placeholder="">
													<span class="pass-show-eye" onclick="conf_pass()"><i class="fas fa-eye-slash" id="conf_eye_slash"></i></span>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="form-group mt-4">
												<label class="form-label">Your Adresse*</label>
												<input class="form-control h_50" type="text" name="adresse" placeholder="" value="">																								
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="form-group mt-4">
												<label class="form-label">Your Phone*</label>
												<input class="form-control h_50" type="text" name="Phone" placeholder="" value="">																								
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="form-group mt-4">
												<label class="form-label">Your Birthdate*</label>
												<input class="form-control h_50" type="date" name="Bdate" placeholder="" value="">																								
											</div>
										</div>
										<div class="col-lg-12 col-md-12">		
											<button class="main-btn btn-hover w-100 mt-4" name="submit" type="submit">Sign Up</button>
										</div>
									</div>
								</form>
								<div class="agree-text">
									By clicking "Sign up", you agree to Morocconjoy <a href="#">Terms & Conditions</a> and have read the <a href="#">Privacy Policy</a>.
								</div>								
								
								<div class="new-sign-link">
									Already have an account?<a class="signup-link" href="sign_in.php">Sign In</a>
								</div>
							</div>							
						</div>
					</div>
				</div>
				
			</div>			
		</div>
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>	
	<script src="js/custom.js"></script>
	<script src="js/night-mode.js"></script>
	
	<script src="js/password_signup.js"></script>

</body>
</html>