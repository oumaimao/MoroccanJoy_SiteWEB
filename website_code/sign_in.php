﻿<?php
$message = '';
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$pass = $_POST['password'];

	if(!empty($email) && !empty($pass)){
		require 'connect/DataBase.php';
		$sql = 'SELECT * FROM `user` WHERE U_email = :email';
        $statement = $connection->prepare($sql);
        $statement->execute([':email' => $email]);
        $user = $statement->fetch(PDO::FETCH_ASSOC);
		
		if(isset($user['U_password'])){
			$decpass = password_verify($pass, $user['U_password']);		
			if ($user && $decpass){
				session_start();
				$_SESSION['user'] = $user;
				header('location: index.php');
				
			}else{
					$message = '<div class="alert alert-danger" role="alert">
										Les informations est incorecte
								</div>';						
				}
		}else if(!isset($user['U_password']) && !isset($user['U_email'])){
						$message = '<div class="alert alert-danger" role="alert">
										Cette utilisateur nexiste pas
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

<body>				
	<div class="form-wrapper">
		<div class="app-form">
			<div class="app-form-sidebar">
				<div class="sidebar-sign-logo">
					<img src="images/sign-logo.svg" alt="">
				</div>
				<div class="sign_sidebar_text">
					
					<h1>Créer des événements et vendre plus de billets en ligne facilement en quelque clicks</h1>
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
									Nouveau sur MoroccanJoy?<a class="sidebar-register-link" href="sign_up.php">Inscription</a>
								</div>
							</div>
						</div>
						<div class="col-xl-5 col-lg-6 col-md-7">
							<div class="registration">
								<?php echo $message?>
								<form method="post">
									<h2 class="registration-title">Connectez-vous </h2>
									<div class="form-group mt-5">
										<label class="form-label">Email*</label>
										<input class="form-control h_50" type="email" name="email" placeholder="Enter your email" value="">																								
									</div>
									<div class="form-group mt-4">
										<div class="field-password">
											<label class="form-label">Mot de passe*</label>
											<a class="forgot-pass-link" href="password_forget.php">Mot de passe oublié?</a>
										</div>
										<div class="loc-group position-relative">
											<input class="form-control h_50" type="password" id="passw" name="password"  placeholder="Enter your password">
											<span class="pass-show-eye" onclick="pass()"><i class="fas fa-eye-slash" id="eye_slash"></i></span>
										</div>
									</div>
									<button class="main-btn btn-hover w-100 mt-4" type="submit" name="submit">Connexion<i class="fas fa-sign-in-alt ms-2"></i></button>
								</form>
								
								<div class="new-sign-link">
									Nouveau sur MoroccanJoy?<a class="signup-link" href="sign_up.php">Inscription</a>
								</div>
							</div>							
						</div>
						<div class="copyright-footer mt-4">
					© 2024, MoroccanJoy. Tous les droits sont reservés.
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