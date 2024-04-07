<?php
include "include/nav_session.php";
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
                            <h3><i class="fa-solid fa-circle-info me-3"></i>About My Organisation</h3>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6 col-md-12">
                        <div class="conversion-setup">
                            <div class="main-card mt-5">
                                <div class="bp-title position-relative">
                                    <h4>About</h4>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.4/html5-qrcode.min.js" integrity="sha512-k/KAe4Yff9EUdYI5/IAHlwUswqeipP+Cp5qnrsUjTPCgl51La2/JhyyjNciztD7mWNKLSXci48m7cctATKfLlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                            <style>
                                main {
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                }

                                #reader {
                                    width: 600px;
                                }

                                #result {
                                    text-align: center;
                                    font-size: 1.5rem;
                                }
                            </style>
                            <form action="" method="post">
                                <div id="reader"></div>
                                <input id="result" name="r" hidden>
                                <input type="submit" name="s">
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

                                if(isset($_POST['r'])){
                                    $a = $_POST['r'];
                                    // Prepare a select statement
                                    $sql = "SELECT * FROM ticket WHERE QR_code = ?";
        
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
                                            echo "<h1>WA waaaaaaa3 wa sir b7alk haadi ra bladna!</h1>";
                                        } else {
                                            // Update the 'verif' column to 'verified'
                                            $sql = "UPDATE ticket SET Statu = 'Valide' WHERE QR_code = ?";
                                            $stmt = $connection->prepare($sql);
                                            $stmt->execute([$a]);
                                            echo "<h2>Success!</h2>";
                                        }
                                    } else {
                                        echo "<h1>No ticket found with that QR code.</h1>";
                                    }
                                }
                           
                            }else{
                                echo "<h1>Scanner votre QR code et clicker en submit</h1>";
                            }

                            // $stmt->close();
                            // $connection->close();
                             ?>
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