<?php
include "include/nav_session.php";

require_once "connect/DataBase.php";

$sqlstate=$connection->prepare('SELECT * FROM `event` WHERE E_id=?');
$id=$_GET['id'];
$sqlstate->execute([$id]);

$data = $sqlstate->fetch(PDO::FETCH_ASSOC);

$eventid =$data['E_id'];
?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>MoroccanJoy - Système en ligne de billetterie d'événements </title>

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
    <!-- Header Start-->

    <!-- Header End-->
    <!-- Left Sidebar Start -->
    <?php include 'include/CreateureVerticaleNav.php' ?>
    <!-- Left Sidebar End -->
    <!-- Body Start -->
    <div class="wrapper wrapper-body">
        <div class="dashboard-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-main-title">
                            <h3><i class="fa-solid fa-circle-info me-3"></i>Scanner Tickt My Organisation</h3>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="conversion-setup">
                            <div class="main-card mt-5">
                                <div class="bp-title position-relative QRCODE">

                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.4/html5-qrcode.min.js" integrity="sha512-k/KAe4Yff9EUdYI5/IAHlwUswqeipP+Cp5qnrsUjTPCgl51La2/JhyyjNciztD7mWNKLSXci48m7cctATKfLlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                                    <style>
                                        main {
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                        }

                                        #reader {
                                            width: 400px;
                                            background-color:  #CDC92C;
 
                                        }

                                        #result {
                                            text-align: center;
                                            font-size: 1.5rem;
                                        }

                                        .row {
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                        }

                                        .QRCODE {
                                            display: flex;
                                            flex-direction: column;
                                            justify-content: center;
                                            align-items: center;
                                            padding: 10px;
                                        }
                                        #html5-qrcode-button-camera-permission{
                                            background-color: black;
                                            color: white;
                                            border: 1px solid black;
                                            border-radius: 5px;
                                            padding :2px 4px;
                                            margin-bottom: 4px;
                                        }
                                        #html5-qrcode-button-camera-permission:hover{
                                            color: #CDC92C;
                                        }
                                        
                                        #html5-qrcode-anchor-scan-type-change{
                                            background-color: black;
                                            color: white;
                                            border: 1px solid black;
                                            border-radius: 5px;
                                            padding :2px 4px;
                                            margin-bottom: 2px;
                                            cursor: pointer;
                                            text-decoration: none;
                                        }
                                        #html5-qrcode-anchor-scan-type-change:hover{
                                            color: #CDC92C;
                                        }
                                        #html5-qrcode-button-file-selection{
                                              background-color: black;
                                            color: white;
                                            border: 1px solid black;
                                            border-radius: 5px;
                                            padding :2px 4px;
                                            margin-bottom: 2px;
                                            cursor: pointer;
                                            text-decoration: none;
                                        }
                                        #frm{
                                            display: flex;
                                            flex-direction: column;
                                            row-gap: 10px;
                                            justify-content: center;
                                            align-items: center;
                                        }
                                        .msg{
                                            padding: 10px;
                                        }
                                        #message, #utilise, #Success{
                                            padding: 3px 10px;
                                            margin-top:5px ;
                                        }
                                    </style>
                                    <form action="" method="post" id="frm">
                                        <div id="reader"></div>
                                        <input id="result" name="r" hidden>

                                        <button type="submit" name="s" class="main-btn btn-hover h_40 w-100" data-bs-toggle="modal" data-bs-target="#trackingModal">Scanne</button>

                                    </form>
                                    
                                    <?php


                                    echo "
                            <script>
                            const scanner = new Html5QrcodeScanner('reader', {
                                qrbox: {
                                    width: 250,
                                    height: 250,
                                },
                                fps: 20,
                            });
                            scanner.render(success, error);

                            function success(result) {
                                document.getElementById('result').value=result;

                                scanner.clear();
                                document.getElementById('reader').remove();
                            }


                            function error(err) {
                                console.error(err);
                            }
                            </script>";
                                    // <p><a href="${result}">${result}</a></p>

                                    require_once "connect/DataBase.php";
                                    if (isset($_POST['s'])) {

                                        if (isset($_POST['r'])) {
                                            $a = $_POST['r'];
                                            // Prepare a select statement
                                            $sql = "SELECT * FROM ticket WHERE QR_code = ? and E_id = '$eventid'";

                                            $stmt = $connection->prepare($sql);
                                            $stmt->execute([$a]);

                                            // $result = $stmt->fetch();
                                            // $tt = $stmt->rowCount();
                                            // var_dump($tt);

                                            if ($stmt->rowCount() > 0) {

                                                $sqlt = "SELECT * FROM ticket WHERE QR_code = ? AND Statu = 'Valide'";
                                                $stmtt = $connection->prepare($sqlt);
                                                $stmtt->execute([$a]);

                                                if ($stmtt->rowCount() > 0) {
                                                    echo '<div class="alert alert-danger" id="utilise" role="alert" >
                                                                    <h3 style="color:black;">Cette tickete est déjà utilisé!</h3>
                                                            </div>';                                                    
                                                    echo "<script>
                                                                setTimeout(function() {
                                                                    document.getElementById('utilise').style.display = 'none';
                                                                }, 5000);  
                                                             </script>";

                                                } else {
                                                    // Update the 'verif' column to 'verified'
                                                    $sql = "UPDATE ticket SET Statu = 'Valide' WHERE QR_code = ?";
                                                    $stmt = $connection->prepare($sql);
                                                    $stmt->execute([$a]);
                                                    echo '<div class="alert alert-success" id="Success" role="alert" >
                                                                    <h3 style="color:black;">Success!</h3>
                                                            </div>';
                                                    echo "<script>
                                                    setTimeout(function() {
                                                        document.getElementById('Success').style.display = 'none';
                                                    }, 5000);  
                                                </script>";
                                                }
                                            } else {

                                                echo '<div class="alert alert-danger" id="message" role="alert" >
                                                    <h3 style="color:black;">Cette tickete n`existe pas</h3>
                                                </div>';


                                                echo "<script>
                                                    setTimeout(function() {
                                                        document.getElementById('message').style.display = 'none';
                                                    }, 3000);  
                                                </script>";
                                            }
                                        }
                                    } else {
                                        echo "<h3 class='msg'>Scanner votre QR code et cliquer sur Scanner</h3>";
                                        
                                    }
                                    // $stmt->close();
                                    // $connection->close();
                                    ?>

                                </div>
                            </div>
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

</html>