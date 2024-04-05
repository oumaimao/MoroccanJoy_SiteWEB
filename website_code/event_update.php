<?php
require_once "connect/DataBase.php";

$sqlstate=$connection->prepare('SELECT * FROM `event` WHERE E_id=?');
$id=$_GET['id'];
$sqlstate->execute([$id]);

$data = $sqlstate->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['modifier'])){
    $titr=$_POST['titr'];
    $desc=$_POST['desc'];
	$categorie=$_POST['categorie'];
    $datee=$_POST['date'];
    $timee=$_POST['time'];
    $Duration=$_POST['Duration'];
    $Address1=$_POST['Address1'];
    $Address2=$_POST['Address2'];
    $City=$_POST['City'];
    $zip_cd=$_POST['zipcd'];
    $N_tickts=$_POST['N_tickts'];
    $P_tickts=$_POST['P_tickts'];
    $filename="";    

    // if(isset($_FILES['image'])){
    //     $image=$_FILES['image']['name'];
    //     $filename=uniqid().$image;
    //     echo "$filename";
    //     move_uploaded_file($_FILES['image']['tmp_name'],'upload/images/'.$filename);
        
    // }

	if(!empty($categorie) && !empty($datee) && !empty($timee) && !empty($Duration) && !empty($Address1) && !empty($Address2) && !empty($City) && !empty($zip_cd) && !empty($arr) && !empty($P_tickts) && !empty($N_tickts)){
		$sql = 'UPDATE `event` SET 
								Titre = :Titre,
                                `Description` = :Descr, 
								Heure_debut = :Heure_debut, 
								Date_debut = :Date_debut, 
								Heure_fin = :Heure_fin, 
								Prix_ticket = :Prix_ticket,
                                Nombre_tickets = :Nombre_tickets, 
								Ville = :Ville, 
								Zip_code = :Zip_cd, 
								Categorie_id = :Categorie_id,
                                adress1 = :adress1, 
								adress2 = :adress2
								WHERE E_id = :EE_id';
		$statement = $connection->prepare($sql); 

		if($statement->execute([':Titre'=>$titr, ':Descr'=>$desc, ':Heure_debut'=>$timee, ':Date_debut'=>$datee, 'Heure_fin'=>$Duration, ':Prix_ticket'=>$P_tickts, ':Nombre_tickets'=>$N_tickts, ':Ville'=>$City, ':Zip_cd'=>$zip_cd, ':Categorie_id'=>$categorie, ':adress1'=>$Address1, ':adress2'=>$Address2, ':EE_id'=>$id ])){
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
<!-- <header class="header">
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
</header> -->

<form method="post">
	<div class="container form-group">
		<div class="checkout-block">
        <div class="modal-body">
                <div class="model-content main-form">
                    <div class="row">
                        
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Titre</label>
                                <input class="form-control h_40" type="text" name="titr" placeholder="" value="<?php echo $data['Titre']; ?>">																								
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Description</label>
                                <input class="form-control h_40" type="text" name="desc" placeholder="" value="<?php echo $data['Titre']; ?>">																								
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
                        <div class="col-md-6">
                            <label class="form-label mt-3 fs-6">Date de début*</label>																
                            <div class="loc-group position-relative">
                                <input class="form-control datepicker-here" data-language="en" type="text" placeholder="MM/DD/YYYY" value="<?php echo $data['Date_debut']; ?>" name="date">
                                <span class="absolute-icon"><i class="fa-solid fa-calendar-days"></i></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                                <div class="clock-icon">
                                    <label class="form-label mt-3 fs-6">Heure de début</label>	
                                    <select class="selectpicker" data-size="5" data-live-search="true" name="time">
                                        <option value="00:00"><?php echo $data['Heure_debut']; ?></option>
                                        <option value="00:00">12:00 AM</option>
                                        <option value="00:15">12:15 AM</option>
                                        <option value="00:30">12:30 AM</option>
                                        <option value="00:45">12:45 AM</option>
                                        <option value="01:00">01:00 AM</option>
                                        <option value="01:15">01:15 AM</option>
                                        <option value="01:30">01:30 AM</option>
                                        <option value="01:45">01:45 AM</option>
                                        <option value="02:00">02:00 AM</option>
                                        <option value="02:15">02:15 AM</option>
                                        <option value="02:30">02:30 AM</option>
                                        <option value="02:45">02:45 AM</option>
                                        <option value="03:00">03:00 AM</option>
                                        <option value="03:15">03:15 AM</option>
                                        <option value="03:30">03:30 AM</option>
                                        <option value="03:45">03:45 AM</option>
                                        <option value="04:00">04:00 AM</option>
                                        <option value="04:15">04:15 AM</option>
                                        <option value="04:30">04:30 AM</option>
                                        <option value="04:45">04:45 AM</option>
                                        <option value="05:00">05:00 AM</option>
                                        <option value="05:15">05:15 AM</option>
                                        <option value="05:30">05:30 AM</option>
                                        <option value="05:45">05:45 AM</option>
                                        <option value="06:00">06:00 AM</option>
                                        <option value="06:15">06:15 AM</option>
                                        <option value="06:30">06:30 AM</option>
                                        <option value="06:45">06:45 AM</option>
                                        <option value="07:00">07:00 AM</option>
                                        <option value="07:15">07:15 AM</option>
                                        <option value="07:30">07:30 AM</option>
                                        <option value="07:45">07:45 AM</option>
                                        <option value="08:00">08:00 AM</option>
                                        <option value="08:15">08:15 AM</option>
                                        <option value="08:30">08:30 AM</option>
                                        <option value="08:45">08:45 AM</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="09:15">09:15 AM</option>
                                        <option value="09:30">09:30 AM</option>
                                        <option value="09:45">09:45 AM</option>
                                        <option value="10:00" selected="selected">10:00 AM</option>
                                        <option value="10:15">10:15 AM</option>
                                        <option value="10:30">10:30 AM</option>
                                        <option value="10:45">10:45 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="11:15">11:15 AM</option>
                                        <option value="11:30">11:30 AM</option>
                                        <option value="11:45">11:45 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="12:15">12:15 PM</option>
                                        <option value="12:30">12:30 PM</option>
                                        <option value="12:45">12:45 PM</option>
                                        <option value="13:00">01:00 PM</option>
                                        <option value="13:15">01:15 PM</option>
                                        <option value="13:30">01:30 PM</option>
                                        <option value="13:45">01:45 PM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="14:15">02:15 PM</option>
                                        <option value="14:30">02:30 PM</option>
                                        <option value="14:45">02:45 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="15:15">03:15 PM</option>
                                        <option value="15:30">03:30 PM</option>
                                        <option value="15:45">03:45 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="16:15">04:15 PM</option>
                                        <option value="16:30">04:30 PM</option>
                                        <option value="16:45">04:45 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                        <option value="17:15">05:15 PM</option>
                                        <option value="17:30">05:30 PM</option>
                                        <option value="17:45">05:45 PM</option>
                                        <option value="18:00">06:00 PM</option>
                                        <option value="18:15">06:15 PM</option>
                                        <option value="18:30">06:30 PM</option>
                                        <option value="18:45">06:45 PM</option>
                                        <option value="19:00">07:00 PM</option>
                                        <option value="19:15">07:15 PM</option>
                                        <option value="19:30">07:30 PM</option>
                                        <option value="19:45">07:45 PM</option>
                                        <option value="20:00">08:00 PM</option>
                                        <option value="20:15">08:15 PM</option>
                                        <option value="20:30">08:30 PM</option>
                                        <option value="20:45">08:45 PM</option>
                                        <option value="21:00">09:00 PM</option>
                                        <option value="21:15">09:15 PM</option>
                                        <option value="21:30">09:30 PM</option>
                                        <option value="21:45">09:45 PM</option>
                                        <option value="22:00">10:00 PM</option>
                                        <option value="22:15">10:15 PM</option>
                                        <option value="22:30">10:30 PM</option>
                                        <option value="22:45">10:45 PM</option>
                                        <option value="23:00">11:00 PM</option>
                                        <option value="23:15">11:15 PM</option>
                                        <option value="23:30">11:30 PM</option>
                                        <option value="23:45">11:45 PM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label mt-3 Z">Durée</label>	
                                <select class="selectpicker" data-size="5" data-live-search="true" name="Duration">
                                    <option value="15"><?php echo $data['Heure_fin']; ?></option>
                                    <option value="15">15m</option>
                                    <option value="30">30m</option>
                                    <option value="45">45m</option>
                                    <option value="60" selected="selected">1h</option>
                                    <option value="75">1h 15m</option>
                                    <option value="90">1h 30m</option>
                                    <option value="105">1h 45m</option>
                                    <option value="120">2h</option>
                                    <option value="135">2h 15m</option>
                                    <option value="150">2h 30m</option>
                                    <option value="165">2h 45m</option>
                                    <option value="180">3h</option>
                                    <option value="195">3h 15m</option>
                                    <option value="210">3h 30m</option>
                                    <option value="225">3h 45m</option>
                                </select>
                            </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Nombre de Tickets</label>
                                <input class="form-control h_40" type="text" name="N_tickts" placeholder="" value="<?php echo $data['Nombre_tickets']; ?>">																								
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Prix de Ticket</label>
                                <input class="form-control h_40" type="text" name="P_tickts" placeholder="" value="<?php echo $data['Prix_ticket']; ?>">																								
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Ville	</label>
                                <input class="form-control h_40" type="text" name="City" placeholder="" value="<?php echo $data['Ville']; ?>">																								
                            </div>
                        </div>
                       <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">zip_code	</label>
                                <input class="form-control h_40" type="text" name="zipcd" placeholder="" value="<?php echo $data['Ville']; ?>">																								
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label fs-16">Modifier la categorie pour l'évènement*</label>
                                <select class="selectpicker " data-selected-text-format="count > 4"  title="Select category" data-live-search="true" name="categorie">
                                    <option value="15"><?php echo $data['Categorie_id']; ?></option>

                                    <?php 
                                        $gategoriess= $connection->query('SELECT * FROM `categorie`')->fetchAll(PDO::FETCH_ASSOC);
                                        foreach($gategoriess as $gatt){

                                        
                                    
                                    ?>

                                    <option value=<?php echo $gatt['Categorie_id']?>><?php echo $gatt['Nom_cat']?></option>
                                    <?php
                                        } 
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-4">
                                <label class="form-label fs-6">Address line 1*</label>
                                <input class="form-control h_50" type="text" placeholder="" value="<?php echo $data['adress1']; ?>" name="Address1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-4">
                                <label class="form-label fs-6">Address line 2*</label>
                                <input class="form-control h_50" type="text" placeholder="" value="<?php echo $data['adress2']; ?>" name="Address2">
                            </div>
                        </div>
                    </div>
                    <div class="container step-footer step-tab-pager mt-4">									
					<input type="submit"  data-direction="finish" class="main-btn min-width btn-hover h_40" style="color:black;" name="modifier" value="Modifier">
					<a href="Events.php"><button type="button" class="co-main-btn min-width btn-hover h_40">Annuler</button></a>
				</div>
                </div>
                
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