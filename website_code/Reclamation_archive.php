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
		<title>Reclamation</title>
		
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
<form method="post">
<div class="wrapper wrapper-body">
    
	<div class="dashboard-wrap-content p-4">
		<h5 class="mb-4">Archive des reclamation</h5>
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
					<?php 
					require_once "connect/DataBase.php";
					$sqlState = $connection->prepare("SELECT * FROM `reclamation_archive`");
										$sqlState->execute();
										$np=$sqlState->rowCount();
										$nnp=5;
										$tp=ceil($np/$nnp);?>	
						<table class="table">
							<thead class="thead-dark">
								<tr>
									<th scope="col">Reclamation ID</th>
									<th scope="col">Email</th>

									<th scope="col" colspan="3" class="w-25">Opération</th>
								</tr>
							</thead>
							<tbody>
                            <?php 
							if(isset($_POST['sear'])){
								require_once "connect/DataBase.php";
								$sr = $_POST['crs'];
								$reclamtions= $connection->query("SELECT * FROM `reclamation_archive` WHERE Reclammation_id like '%$sr%' or Contact_Name like '%$sr%' or Email like '%$sr%' or `Subject` like '%$sr%' or `Description` like '%$sr%' or User_id like '%$sr%'")->fetchAll(PDO::FETCH_ASSOC);
							
							}
                            else{
                                require_once "connect/DataBase.php";
                                $reclamtions = $connection->query('SELECT * FROM `reclamation_archive`')->fetchAll(PDO::FETCH_ASSOC);
								if(isset($_GET['page'])){
									$page=$_GET['page'];
								}else {
									if(isset($_GET['next'])){
										if($_GET['next']==$tp){
											$page=$tp;
										}
										
									}else{
										$page=1;
									}
									
								}
								if(isset($_GET['next']) && $_GET['next']<$tp){
									$nexxt=$_GET['next']+1;
									$page=$nexxt;
								}
								if(isset($_GET['pre']) && $_GET['pre']>1){
									$pree=$_GET['pre']-1;
									$page=$pree;
								}
								
								
								$slimt=($page-1)*$nnp;
								$reclamtions= $connection->query("SELECT * FROM `reclamation_archive` limit $slimt,$nnp ")->fetchAll(PDO::FETCH_ASSOC);
                            }
                            foreach($reclamtions as $reclam){
  	
                                ?>
								<tr>										
									<td><?php echo $reclam['Reclammation_id'];?></td>	
									<td><?php echo $reclam['Email'];?></td>	


									<td><span class="action-btn btn btn-primary"><a href="Reclamation_archive_detaille.php?id=<?php echo $reclam['Reclammation_id']?>" >Détaille</a></span></td>
                                    <td><span class="action-btn btn btn-primary"><a href="Reclamation_return.php?id=<?php echo $reclam['Reclammation_id']?>" >Return</a></span>
                                    <td><span class="action-btn btn btn-danger" onclick= "return confirm( 'Voulez vous vraiment Refuser le event <?php echo $reclam['Email']?>');"><a href="Reclamation_archive_delete.php?id=<?php echo $reclam['Reclammation_id']?>">Supprimer</a></span></td>	

										
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
	<div class="container my-3 d-flex justify-content-center">
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link"href="Reclamation_archive.php?pre=<?php echo $page?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
	<?php
								
										for($btn=1;$btn<=$tp;$btn++){
											?>	
    <li class="page-item"><a class="page-link"href="Reclamation_archive.php?page=<?php echo $btn?>"><?php echo $btn?></a></li>
	<?php
										}


										?>
    <li class="page-item">
      <a class="page-link" href="Reclamation_archive.php?next=<?php echo $page?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
</div>
</div>
<form>
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