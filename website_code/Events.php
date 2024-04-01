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
		<title>Événements</title>
		
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
        
   <!-- Add Organisation Model Start-->
   <div class="modal fade" id="addorganisationModal" tabindex="-1" aria-labelledby="addorganisationLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addorganisationLabel">Détails d'admin</h5>
                <button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-multiply"></i></button>
            </div>
            <div class="modal-body">
                <div class="model-content main-form">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">ID</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">																								
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">User_ID</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">																								
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Titre</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">																								
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Description</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">																								
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group pt_30 pb_30">
								<label class="form-label fs-16">Ajoutez quelques images à votre bannière d'événement.</label>
								<p class="mt-2 fs-14 d-block mb-3 pe_right">Téléchargez des images colorées et dynamiques comme bannière de votre événement!Voir comment les images belles aident la page des détails de votre événement.<a href="#" class="a-link">Apprendre encore plus</a></p>
								<div class="content-holder mt-4">
									<div class="default-event-thumb">   
										<div class="default-event-thumb-btn">
											<div class="thumb-change-btn">
												<input type="file" id="thumb-img">
												<label for="thumb-img">Changer l'image</label>
											</div>
										</div>
										<img src="images/banners/custom-img.jpg" alt="">
									</div>
								</div>
							</div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">l'heure de début</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">																								
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Date de Début</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">																								
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Nombre de Tickets</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">																								
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Date de fin</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">																								
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Heure de fin</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">																								
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Prix de Ticket</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">																								
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Ville	</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">																								
                            </div>
                        </div>
                       <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">zip_code	</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">																								
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">categorie_id	</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">																								
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="main-btn min-width btn-hover h_40">ajouter</button>
            </div>
        </div>
    </div>
</div>
<!-- Add Organisation Model End-->
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
		<h5 class="mb-4">Liste d'Événements</h5>
		<div class="d-md-flex flex-wrap align-items-center">
			<div class="dashboard-date-wrap">
				<div class="form-group">
					<div class="relative-input position-relative">
						<input class="form-control h_40" type="text" placeholder="Search by name" value="">
						<i class="uil uil-search"></i>
					</div>
				</div>
			</div>
			<div class="ocard-right">
				<button class="pe-4 ps-4 main-btn h_40 w-100" data-bs-toggle="modal" data-bs-target="#addorganisationModal">Créer</button>
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
                                    <th scope="col">User_ID</th>
									<th scope="col">ID</th>
									<th scope="col">Titre</th>
                                    <th scope="col">Description</th>
									<th scope="col">image</th>
                                    <th scope="col">Date</th>
									<th scope="col">Heure</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col">Nombre Tickets</th>
									<th scope="col">Prix Ticket</th>
                                    <th scope="col">Ville</th>
                                    <th scope="col">zip_code</th>
									<th scope="col">categorie_id</th>
                                    <th scope="col">adress1</th>
									<th scope="col">adress2</th>
                                   
									<th scope="col" colspan="3">Opération</th>
								</tr>
							</thead>
							<tbody>
                            <?php 
								require_once "connect/DataBase.php";
						$demandes= $connection->query('SELECT * FROM `event`')->fetchAll(PDO::FETCH_ASSOC);
						foreach($demandes as $demande){ ?>

								<tr>										
                                <td><?php echo $demande['E_id']?></td>										
									<td><?php echo $demande['E_id']?></td>	
									<td><?php echo $demande['Titre']?></td>
									<td><?php echo $demande['Description']?></td>
									<td><?php echo $demande['Image']?></td>	
                                    <td><?php echo $demande['Date_debut']?></td>	
									<td><?php echo $demande['Heure_debut']?></td>	
                                    <td><?php echo $demande['Heure_fin']?></td>	
									<td><?php echo $demande['Nombre_tickets']?></td>	
									<td><?php echo $demande['Prix_ticket']?></td>
									<td><?php echo $demande['Ville']?></td>
                                    <td><?php echo $demande['Zip_code']?></td>
                                    <td><?php echo $demande['Categorie_id']?></td>
                                    <td><?php echo $demande['adress1']?></td>
                                    <td><?php echo $demande['adress2']?></td>
										
                                    <td><span class="action-btn "><a href="deleteevent.php?id=<?php echo $demande['E_id']?>" onclick= "return confirm( 'Voulez vous vraiment supprimer le eent <?php echo $demande['E_id']?>' );"><i class="fa-solid fa-trash-can " style="color: red;"></i></a>
									<td><span class="action-btn"><a href="event_update.php?id=<?php echo $demande['E_id']?>"><i class="fa-solid fa-pen-to-square" style="color: blue;"></i></a></span></td></td>		
								</tr>
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