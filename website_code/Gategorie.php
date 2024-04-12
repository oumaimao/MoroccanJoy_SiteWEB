<?php
session_start();
if (!isset($_SESSION['admin'])) {
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
	<title>Categorie</title>

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
		<form method="post" class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="addorganisationLabel">Catégorie détaille</h5>
					<button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-multiply"></i></button>
				</div>
				<div class="modal-body">
					<div class="model-content main-form">
						<div class="row">
							<!-- <div class="col-lg-6 col-md-12">
							<div class="form-group mt-4">
								<label class="form-label">ID</label>
								<input class="form-control h_40" type="text" placeholder="" value="">																								
							</div>
						</div> -->
							<div class="col-lg-12 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Nom</label>
									<input class="form-control h_40" type="text" name="category_name">
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" name="add" class="main-btn min-width btn-hover h_40">Add</button>
				</div>
			</div>
		</form>
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
								</div>
						</ul>
						</li>
					</div>

				</div>
			</nav>
			<div class="overlay"></div>
		</div>
	</header>
	<!-- Verticale nav -->
	<?php include 'include/VerticaleNav.php' ?>
	<?php
	require_once './connect/DataBase.php';

	if (isset($_POST['add'])) {
		$category_name = $_POST['category_name'];

		$sql = "INSERT INTO categorie (Nom_cat) VALUES (?)";
		$stmt = $connection->prepare($sql);

		$stmt->bindParam(1, $category_name);

		$stmt->execute();
	}

	?>
	<?php
	require_once './connect/DataBase.php';

	try {
		if (isset($_GET['Categorie_id'])) {
			$category_id = $_GET['Categorie_id'];

			$sql = "DELETE FROM categorie WHERE Categorie_id = ?";
			$stmt = $connection->prepare($sql);
			$stmt->execute([$category_id]);
				
		} else {
			echo "Category ID not provided!";
		}
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	?>
	<!-- Verticale nav -->

	<!-- Body Start -->

	<div class="wrapper wrapper-body">
	
		<div class="dashboard-wrap-content p-4">
			<h5 class="mb-4">Liste des catégories</h5>
			<div class="d-flex justify-content-end ocard-right my-3">
				<button class=" pe-4 ps-4 main-btn h_40 mw-25" data-bs-toggle="modal" data-bs-target="#addorganisationModal">Create</button>
			</div>
			<div class="d-md-flex flex-wrap align-items-center">
				<div class="dashboard-date-wrap">
				<form action="Gategorie.php" method="post">
				<div class="form-group">
					<div class="relative-input position-relative">
						<input class="form-control h_40" type="text" placeholder="Search by name" style=" display: inline-block;" value="" name="crs">
						<i class="uil uil-search"></i>
					</div>
					<div class="ocard-right">
				<button class="d-inline pe-4 ps-4 main-btn h_40 mw-25 m-3" type="submit" name="bbb">Chercher</button>
				
			</div>
			</form>
				</div>
				
			</div>
		</div>
		<div class="tab-content">
			<div class="tab-pane fade active show" id="overview-tab" role="tabpanel">
				<div class="table-card mt-4">
					<div class="main-table">
						<div class="table-responsive">
							<?php
							require_once './connect/DataBase.php';
							if(isset($_POST['bbb'])){
								require_once "connect/DataBase.php";
								$hh = $_POST['crs'];
								$categories= $connection->query("SELECT * FROM categorie WHERE Categorie_id like '%$hh%' or Nom_cat like '%$hh%'")->fetchAll(PDO::FETCH_ASSOC);
							}else{
								$categories = $connection->query('SELECT * FROM categorie')->fetchAll(PDO::FETCH_ASSOC);
							}
						

							if (!empty($categories)) {
								echo "<table class='table'>";
								echo "<thead class='thead-dark'>";
								echo "<tr>";
								echo "<th scope='col'>ID</th>";
								echo "<th scope='col'>Nom</th>";
								echo "<th scope='col'>Opération</th>";
								echo "</tr>";
								echo "</thead>";
								echo "<tbody>";
								foreach ($categories as $category) {
									echo "<tr>";
									echo "<td>{$category['Categorie_id']}</td>";
									echo "<td>{$category['Nom_cat']}</td>";
									echo "<td><a href='Gategorie.php?Categorie_id={$category['Categorie_id']}'><span class='action-btn'><i class='fa-solid fa-trash-can' style='color: red;' onclick='return confirmDelete(\"{$category['Nom_cat']}\")'></i></span></a></td>";
									echo "</tr>";
								}
								echo "</tbody>";
								echo "</table>";
							} else {
								echo "<h2>No categories found!</h2>";
							}
							?>
							<script>
								function confirmDelete(categoryName) {
									return confirm("Are you sure you want to delete the category '" + categoryName + "'?");
								}
							</script>
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