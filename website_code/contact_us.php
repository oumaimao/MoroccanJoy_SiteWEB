<?php 
session_start();

$message = '';
if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


 

	if(!empty($message) && !empty($phone) && !empty($email) && !empty($last_name) && !empty($first_name)){
		require 'connect/DataBase.php';
		$sql = 'INSERT INTO contact_us(c_nom,	c_prenom,	c_email,	c_message,c_phone	) VALUES(:nom, :prenom, :email, :phone, :mesage)'; 
		$statement = $connection->prepare($sql); 

			if($statement->execute([':nom'=> $last_name, ':prenom'=> $first_name, ':email'=> $email ,':phone'=> $phone, ':mesage'=>$message]))
			{ 
		
				$message = '<div class="alert alert-success" role="alert">
								Donnée créée avec succès
							</div>';
			}else{
				$message = '<div class="alert alert-danger" role="alert">
								Essayer à nouveau
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
		<div class="event-dt-block p-80">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-12 col-md-12">
						<div class="main-title checkout-title text-center">
							<h3>Contactez-nous</h3>
							<p class="mb-0">Avez-vous des questions?Nous aimerions recevoir de vos nouvelles.</p>
						</div>
					</div>
					<div class="col-lg-10">
						<div class="main-card mt-5">
							<div class="row">
								<div class="col-xl-7 col-lg-12 col-md-12 order-lg-2">
									<div class="contact-form bp-form p-lg-5 ps-lg-4 pt-lg-4 pb-5 p-4">
										<form method="post">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group mt-4">
													<label class="form-label">Prénom*</label>
													<input class="form-control h_50" type="text" name="first_name" placeholder="" value="">																								
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group mt-4">
													<label class="form-label">Nom de famille*</label>
													<input class="form-control h_50" type="text" name="last_name" placeholder="" value="">																								
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group mt-4">
													<label class="form-label">E-mail*</label>
													<input class="form-control h_50" type="Email" name="email" placeholder="" value="">																								
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group mt-4">
													<label class="form-label">Téléphone*</label>
													<input class="form-control h_50" type="text" name="phone" placeholder="" value="">																								
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group mt-4">
													<label class="form-label">message*</label>
													<textarea class="form-textarea" name="message" placeholder="About"></textarea>																								
												</div>
											</div>
											<div class="col-md-12">
												<div class="text-center mt-4">
													<button class="main-btn btn-hover h_50 w-100" type="submit" name="submit">Soumettre</button>
												</div>
											</div>
										</div>
										</form>
									</div>
								</div>
								<div class="col-xl-5 col-lg-12 col-md-12 order-lg-1 d-none d-xl-block">
									<div class="contact-banner-block">
										<div class="contact-hero-banner">
											<div class="contact-hero-banner-info">
												<h3>Coordonnées </h3>
												<p>Remplissez le formulaire et notre équipe vous répondra bientôt.</p>
												<ul>
													<li>
														<div class="contact-info d-flex align-items-center">
															<div class="contact-icon">
																<i class="fa-solid fa-square-phone fa-beat-fade" style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;"></i>
															</div>
															<a href="#">+1(000)00-00000</a>
														</div>
													</li>
													<li>
														<div class="contact-info d-flex align-items-center">
															<div class="contact-icon">
																<i class="fa-solid fa-envelope fa-beat-fade" style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;"></i>
															</div>
															<a href="#">contact@MorrocanJoy.com</a>
														</div>
													</li>
													<li>
														<div class="contact-info d-flex align-items-center">
															<div class="contact-icon">
																<i class="fa-solid fa-life-ring fa-beat-fade" style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;"></i>
															</div>
															<a href="#">Centre d'aide</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
					<div class="col-lg-10 col-md-12 d-block d-xl-none">
						<div class="main-card mt-4">
							<div class="contact-banner-block">
								<div class="contact-hero-banner p_30 min-h-auto">
									<div class="contact-hero-banner-info">
										<h3>Coordonnées </h3>
										<p>Remplissez le formulaire et notre équipe vous répondra bientôt.</p>
										<ul>
											<li>
												<div class="contact-info d-flex align-items-center">
													<div class="contact-icon">
														<i class="fa-solid fa-square-phone fa-beat-fade" style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;"></i>
													</div>
													<a href="#">+1(000)00-00000</a>
												</div>
											</li>
											<li>
												<div class="contact-info d-flex align-items-center">
													<div class="contact-icon">
														<i class="fa-solid fa-envelope fa-beat-fade" style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;"></i>
													</div>
													<a href="#">contact@barren.com</a>
												</div>
											</li>
											<li>
												<div class="contact-info d-flex align-items-center">
													<div class="contact-icon">
														<i class="fa-solid fa-life-ring fa-beat-fade" style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;"></i>
													</div>
													<a href="#">Centre d'aide </a>
												</div>
											</li>
										</ul>
									</div>
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
	<?php include "include/Footer.php";?>
	<!-- Footer End-->
	
	
	
	<script src="js/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>	
	<script src="js/custom.js"></script>
	<script src="js/night-mode.js"></script>
</body>
</html>