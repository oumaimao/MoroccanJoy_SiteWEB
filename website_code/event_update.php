<?php
require_once "connect/DataBase.php";

$sqlstate = $connection->prepare('SELECT * FROM `event` WHERE E_id=?');
$id = $_GET['id'];
$sqlstate->execute([$id]);
$data = $sqlstate->fetch(PDO::FETCH_ASSOC);


$message = "";
if (isset($_POST['modifier'])) {
    $titr = $_POST['titr'];
    $desc = $_POST['desc'];
    $categorie = $_POST['categorie'];
    $datee = $_POST['date'];
    $timee = $_POST['time'];
    $Duration = $_POST['Duration'];
    $Address1 = $_POST['Address1'];
    $Address2 = $_POST['Address2'];
    $City = $_POST['City'];
    $zip_cd = $_POST['zipcd'];
    $N_tickts = $_POST['N_tickts'];
    $P_tickts = $_POST['P_tickts'];
    $filename = "";

    if ($_FILES['image']['error'] == 0) {
        $image = $_FILES['image']['name'];
        $filename = uniqid() . $image;
        move_uploaded_file($_FILES['image']['tmp_name'], 'upload/images/' . $filename);
    } else {
        $filename = $data['Image'];
    }


    if (!empty($categorie) && !empty($datee) && !empty($timee) && !empty($Duration) && !empty($Address1) && !empty($Address2) && !empty($City) && !empty($zip_cd) && !empty($desc) && !empty($P_tickts) && !empty($N_tickts) && !empty($zip_cd)) {

        $sql = 'UPDATE `event` SET 
								Titre = :Titre,
                                `Description` = :Descr, 
                                `Image` = :img,
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

        if ($statement->execute([':Titre' => $titr, ':Descr' => $desc, ':img' => $filename, ':Heure_debut' => $timee, ':Date_debut' => $datee, 'Heure_fin' => $Duration, ':Prix_ticket' => $P_tickts, ':Nombre_tickets' => $N_tickts, ':Ville' => $City, ':Zip_cd' => $zip_cd, ':Categorie_id' => $categorie, ':adress1' => $Address1, ':adress2' => $Address2, ':EE_id' => $id])) {

            header('location: Events.php');
        } else {
            $message = '<div class="alert alert-danger" role="alert">
								somthing wrong
							</div>';
        }
    } else {
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

    <form method="post" enctype="multipart/form-data">
        <?php echo $message ?>
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
                                    <input class="form-control h_40" type="text" name="desc" placeholder="" value="<?php echo $data['Description']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group pt_30 pb_30">
                                    <label class="form-label fs-16">Ajoutez quelques images à votre bannière d'événement.</label>
                                    <div class="content-holder mt-4">
                                        <div class="default-event-thumb">
                                            <img src="upload/images/<?php echo $data['Image']; ?>" id="thumb-img">
                                            <div class="default-event-thumb-btn">
                                                <div class="thumb-change-btn">
                                                    <input type="file" id="file-input" onchange="loadFile(event)" name="image">
                                                    <label for="file-input">Changer l'image</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                var loadFile = function(event) {
                                    var image = document.getElementById('thumb-img');
                                    image.src = URL.createObjectURL(event.target.files[0]);
                                };
                            </script>

                            <div class="col-md-6">
                                <label class="form-label mt-3 fs-6">Date de début</label>
                                <div class="loc-group position-relative">
                                    <input class="form-control h_50" data-language="en" type="date" placeholder="YYYY/MM/DD" value="<?php echo $data['Date_debut']; ?>" name="date">
                                    <span class="absolute-icon"><i class="fa-solid fa-calendar-days"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="clock-icon">
                                     <label class="form-label mt-3 fs-6">Heure de début</label>
                                     <input class="form-control h_50" type="time" value="<?php echo $data['Heure_debut']; ?>" name="time">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label mt-3 Z">Durée</label>
                                <select class="selectpicker" data-size="5" data-live-search="true" name="Duration">
                                    <option value="<?php echo $data['Heure_fin']; ?>" selected="selected"><?php echo $data['Heure_fin']; ?></option>
                                    <option value="00:15:00">00:15:00</option>
                                    <option value="00:30:00">00:30:00</option>
                                    <option value="00:45:00">00:45:00</option>
                                    <option value="01:00:00">01:00:00</option>
                                    <option value="01:15:00">01:15:00</option>
                                    <option value="01:30:00">01:30:00</option>
                                    <option value="01:45:00">01:45:00</option>
                                    <option value="02:00:00">02:00:00</option>
                                    <option value="02:15:00">02:15:00</option>
                                    <option value="02:30:00">02:30:00</option>
                                    <option value="02:45:00">02:45:00</option>
                                    <option value="03:00:00">03:00:00</option>
                                    <option value="03:15:00">03:15:00</option>
                                    <option value="03:30:00">03:30:00</option>
                                    <option value="03:45:00">03:45:00</option>
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
                                    <label class="form-label">Ville </label>
                                    <input class="form-control h_40" type="text" name="City" placeholder="" value="<?php echo $data['Ville']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group mt-4">
                                    <label class="form-label">zip_code </label>
                                    <input class="form-control h_40" type="text" name="zipcd" placeholder="" value="<?php echo $data['Zip_code']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group mt-4">
                                    <label class="form-label fs-16">Modifier la categorie pour l'évènement</label>
                                    <select class="selectpicker" title="Select category" data-live-search="true" name="categorie">
                                        <?php
                                        $catid = $data['Categorie_id'];
                                        $catego = $connection->query("SELECT * FROM `categorie` WHERE Categorie_id = $catid ")->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <option value="<?php echo $catego['Categorie_id'] ?>" selected="selected"><?php echo $catego['Nom_cat'] ?></option>
                                        <?php
                                        $gategoriess = $connection->query('SELECT * FROM `categorie`')->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($gategoriess as $gatt) {
                                            if ($gatt['Nom_cat'] != $catego['Nom_cat']) {
                                        ?>
                                                <option value="<?php echo $gatt['Categorie_id'] ?>"><?php echo $gatt['Nom_cat'] ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mt-4">
                                    <label class="form-label fs-6">Address line 1</label>
                                    <input class="form-control h_50" type="text" placeholder="" value="<?php echo $data['adress1']; ?>" name="Address1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mt-4">
                                    <label class="form-label fs-6">Address line 2</label>
                                    <input class="form-control h_50" type="text" placeholder="" value="<?php echo $data['adress2']; ?>" name="Address2">
                                </div>
                            </div>
                        </div>
                        <div class="container step-footer step-tab-pager mt-4">
                            <input type="submit" data-direction="finish" class="main-btn min-width btn-hover h_40" style="color:black;" name="modifier" value="Modifier">
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