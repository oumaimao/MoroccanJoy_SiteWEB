
<header class="header">
		<div class="header-inner">
			<nav class="navbar navbar-expand-lg bg-barren barren-head navbar fixed-top justify-content-sm-start pt-0 pb-0">
				<div class="container-fluid ">	
					<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<span class="navbar-toggler-icon">
							<i class="fa-solid fa-bars"></i>
						</span>
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
					<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
						<div class="offcanvas-header">
							<div class="offcanvas-logo" id="offcanvasNavbarLabel">
								<img src="images/logo-icon.svg" alt="">
							</div>
							<button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
								<i class="fa-solid fa-xmark"></i>
							</button>
						</div>
						<div class="offcanvas-body">
							<div class="offcanvas-top-area">
								<div class="create-bg">
									<a href=<?php session_start(); if(isset($_SESSION['user'])){echo 'sign-in.php';}else{echo 'create_venue_event.php';}?>class="offcanvas-create-btn">
										<i class="fa-solid fa-calendar-days"></i>
										<span>Créer un évènement</span>
									</a>
								</div>
							</div>							
							<ul class="navbar-nav justify-content-end flex-grow-1 pe_5">
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="index.php">Acceuil</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Découvrir les évènement
									</a>
									<ul class="dropdown-menu dropdown-submenu">
										<li><a class="dropdown-item" href="explore_events.php">Découvrir les évènement</a></li>
										<li><a class="dropdown-item" href="venue_event_detail_view.php">Vue détaillée  de l'événement </a></li>
										<li><a class="dropdown-item" href="online_event_detail_view.php">Vue détaillée de l'événement en ligne</a></li>
									</ul>
								</li>
								
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Support
									</a>
									<ul class="dropdown-menu dropdown-submenu">
										<li><a class="dropdown-item" href="faq.php">FAQ</a></li>
										<li><a class="dropdown-item" href="help_center.php">Centre de support</a></li>
										<li><a class="dropdown-item" href="contact_us.php">Contactez-nous</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="offcanvas-footer">
							<div class="offcanvas-social">
								<h5>suivez-nous</h5>
								<ul class="social-links">
									<li><a href="#" class="social-link"><i class="fab fa-facebook-square"></i></a>
									<li><a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
									<li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
									<li><a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
									<li><a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
								</ul>
							</div>
						</div>
					</div>
					<div class="right-header order-2">
						<ul class="align-self-stretch">
							<li>
								<a href="create_venue_event.php" class="create-btn btn-hover">
									<i class="fa-solid fa-calendar-days"></i>
									<span>Créer un évènement</span>
								</a>
							</li>
							<li>
								<a href="sign_up.php" class="create-btn btn-hover ">
									<span>Inscription</span>
								</a>
							</li>
							<li>
								<a href="sign_in.php" class="create-btn btn-hover">
									<span>Connexion</span>
								</a>
							</li>
							<li>
								<div class="night_mode_switch__btn">
									<div id="night-mode" class="fas fa-moon fa-sun"></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="overlay"></div>
		</div>
	</header>