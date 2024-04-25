<?php
$message = '';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $new_pass = $_POST['new_password']; // This seems incorrect; should it be 'password'?
    $hash = password_hash($new_pass, PASSWORD_DEFAULT);
    $conf_pass = $_POST['conf_password']; // Same here; should it be 'password'?

    if (!empty($email) && !empty($pass) && !empty($new_pass) && !empty($conf_pass)) {
        require 'connect/DataBase.php';
        $sql = 'SELECT * FROM `user` WHERE U_email = :email';
        $statement = $connection->prepare($sql);
        $statement->execute([':email' => $email]);
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if ($user !== false) {
            if (isset($user['U_password'])) {
                $decpass = password_verify($pass, $user['U_password']);

                if ($decpass) {
                    if ($new_pass === $conf_pass) {
                        $sql = 'UPDATE `user` SET U_password = :new_pass WHERE U_email = :email';
                        $statement = $connection->prepare($sql);
                        if ($statement->execute([':new_pass' => $hash , ':email'=>$email])) {
                            $message = '<div class="alert alert-success" role="alert">
                                            Mot de passe modifié avec succès
                                        </div>';
                            header('location: organiser_profile_view.php');
                        } else {
                            $message = '<div class="alert alert-danger" role="alert">
                                            Quelque chose ne va pas
                                        </div>';
                        }
                    } else {
                        $message = '<div class="alert alert-danger" role="alert">
                                        Confirmation est incorrecte
                                    </div>';
                    }
                } else {
                    $message = '<div class="alert alert-danger" role="alert">
                                    Les informations sont incorrectes
                                </div>';
                }
            } else {
                $message = '<div class="alert alert-danger" role="alert">
                                Cette utilisateur n\'existe pas
                            </div>';
            }
        } else {
            $message = '<div class="alert alert-danger" role="alert">
                            Cette itulisateur nexiste pas
                        </div>';
        }
    } else {
        $message = '<div class="alert alert-danger" role="alert">
                        Tous les champs sont obligatoires
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
    <title>Modifier mot de passe</title>

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
                    <h1>Modifier votre mot de passe</h1>
                </div>
            </div>
            <div class="app-form-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-7">
                            <h2>Modifier mot de passe</h2>
                            <div class="registration">
                                <?php echo $message ?>
                                <form method="post">
                                    <div class="form-group mt-5">
                                        <label class="form-label">Email*</label>
                                        <input class="form-control h_50" type="email" name="email" placeholder="Enter your email" value="">
                                    </div>
                                    <div class="form-group mt-5">
                                        <div class="field-password">
                                            <label class="form-label">Ancien mot de passe*</label>
                                        </div>
                                        <div class="loc-group position-relative">
                                            <input class="form-control h_50" type="password" id="passw" name="password" placeholder="Enter your password">
                                            <span class="pass-show-eye" onclick="pass()"><i class="fas fa-eye-slash" id="eye_slash"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group mt-4">
                                        <div class="field-password">
                                            <label class="form-label">Nouveau mot de passe*</label>
                                        </div>
                                        <div class="loc-group position-relative">
                                            <input class="form-control h_50" type="password" id="new_passw" name="new_password" placeholder="Enter your password">
                                            <span class="pass-show-eye" onclick="new_passw()"><i class="fas fa-eye-slash" id="new_eye_slash"></i></span>
                                        </div>
                                    </div>

                                    <div class="form-group mt-4">
                                        <div class="field-password">
                                            <label class="form-label">Confirmer Mot de passe*</label>
                                        </div>
                                        <div class="loc-group position-relative">
                                            <input class="form-control h_50" type="password" id="conf_passw" name="conf_password" placeholder="Enter your password">
                                            <span class="pass-show-eye" onclick="conf_pass()"><i class="fas fa-eye-slash" id="conf_eye_slash"></i></span>
                                        </div>
                                    </div>
                            </div>
                            <button class="main-btn btn-hover w-100 mt-4" type="submit" name="submit">Modifier mot de pass<i class="fas fa-sign-in-alt ms-2"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="copyright-footer mt-5">
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