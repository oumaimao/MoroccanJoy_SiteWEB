<?php
require_once "connect/DataBase.php";

$sqlstate = $connection->prepare('SELECT * FROM `ticket` WHERE Ticket_id=?');
$id = $_GET['id'];
$sqlstate->execute([$id]);

$data = $sqlstate->fetch(PDO::FETCH_ASSOC);

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

    <form method="post">
        <div class="container form-group">

            <div class="checkout-block">
            <div class="bp-title">
					<h4>Détaille du ticket</h4>
				</div>
                <div class="modal-body">
                    <div class="model-content main-form">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group mt-4">
                                    <label class="form-label">Tickete id</label>
                                    <input class="form-control h_40" readonly type="text" readonly name="titr" value="<?php echo $data['Ticket_id']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group mt-4">
                                    <label class="form-label">User id</label>
                                    <input class="form-control h_40" readonly type="text"readonly name="titr" value="<?php echo $data['User_id']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group mt-4">
                                    <label class="form-label">Event id</label>
                                    <input class="form-control h_40" readonly type="text" readonly name="titr" value="<?php echo $data['E_id']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group mt-4">
                                    <label class="form-label">Date d'achat</label>
                                    <input class="form-control h_40" readonly type="text" readonly name="titr" value="<?php echo $data['Purchase_Date']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group mt-4">
                                    <label class="form-label">prix du ticket</label>
                                    <input class="form-control h_40" readonly type="text" readonly name="titr" value="<?php echo $data['prix_tickt']; ?>">
                                </div>
                            </div>    
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group mt-4">
                                    <label class="form-label">Satue du ticket</label>
                                    <input class="form-control h_40" readonly type="text" readonly name="titr" value="<?php echo $data['Statu']; ?>">
                                </div>
                            </div>                                                                             
                        </div>
                        <div class="container step-footer step-tab-pager mt-4">
                            <a href="Billet.php"><button type="button" class="main-btn min-width btn-hover h_40" style="color:black;">Retourner</button></a>
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