<?php
session_start();
if (!isset($_SESSION['user']['U_email'])) {
	header('location:sign_in.php');
}
$emaill = $_SESSION['user']['U_email'];
$namee = $_SESSION['user']['U_name'];
$Uid = $_SESSION['user']['User_id'];
require_once "connect/DataBase.php";



?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, shrink-to-fit=9">
	<meta name="description" content="Gambolthemes">
	<meta name="author" content="Gambolthemes">
	<title>MoroccanJoy - Système en ligne de billetterie d'événements</title>

	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="images/fav.png">

	<!-- Stylesheets -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
	<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/vertical-responsive-menu.min.css" rel="stylesheet">
	<link href="css/analytics.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/night-mode.css" rel="stylesheet">

	<!-- Vendor Stylesheets -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
	<link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="vendor/chartist/dist/chartist.min.css" rel="stylesheet">
	<link href="vendor/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.css" rel="stylesheet">

</head>

<body class="d-flex flex-column h-100">
	<!-- Add Organisation Model Start-->
	<div class="modal fade" id="addorganisationModal" tabindex="-1" aria-labelledby="addorganisationLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="addorganisationLabel">Organisation details</h5>
					<button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-multiply"></i></button>
				</div>
				<div class="modal-body">
					<div class="model-content main-form">
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="form-group text-center mt-4">
									<label class="form-label">Avatar*</label>
									<span class="org_design_button btn-file">
										<span><i class="fa-solid fa-camera"></i></span>
										<input type="file" id="org_avatar" accept="image/*" name="Organisation_avatar">
									</span>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Name*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Profile Link*</label>
									<input class="form-control h_40" type="text" placeholder="" value="https://www.barren.com/b/organiser/" disabled>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">About*</label>
									<textarea class="form-textarea" placeholder="">About</textarea>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Email*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Phone*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Website*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Facebook*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Instagram*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Twitter*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">LinkedIn*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Youtube*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<h4 class="address-title">Address</h4>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Address 1*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Address 2*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group main-form mt-4">
									<label class="form-label">Country*</label>
									<select class="selectpicker" data-size="5" title="Nothing selected" data-live-search="true">
										<option value="Algeria">Algeria</option>
										<option value="Argentina">Argentina</option>
										<option value="Australia">Australia</option>
										<option value="Austria">Austria (Österreich)</option>
										<option value="Belgium">Belgium (België)</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Brazil">Brazil</option>
										<option value="Canada">Canada</option>
										<option value="Chile">Chile</option>
										<option value="Colombia">Colombia</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Denmark">Denmark</option>
										<option value="Dominican Republic">Dominican Republic</option>
										<option value="Estonia">Estonia</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="Germany">Germany</option>
										<option value="Greece">Greece</option>
										<option value="Hong Kong">Hong Kong</option>
										<option value="Iceland">Iceland</option>
										<option value="India">India</option>
										<option value="Indonesia">Indonesia</option>
										<option value="Ireland">Ireland</option>
										<option value="Israel">Israel</option>
										<option value="Italy">Italy</option>
										<option value="Japan">Japan</option>
										<option value="Latvia">Latvia</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Malaysia">Malaysia</option>
										<option value="Mexico">Mexico</option>
										<option value="Nepal">Nepal</option>
										<option value="Netherlands">Netherlands</option>
										<option value="New Zealand">New Zealand</option>
										<option value="Norway">Norway</option>
										<option value="Paraguay">Paraguay</option>
										<option value="Peru">Peru</option>
										<option value="Philippines">Philippines</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Singapore">Singapore</option>
										<option value="Slovakia">Slovakia</option>
										<option value="Slovenia">Slovenia</option>
										<option value="South Africa">South Africa</option>
										<option value="South Korea">South Korea</option>
										<option value="Spain">Spain</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Tanzania">Tanzania</option>
										<option value="Thailand">Thailand</option>
										<option value="Turkey">Turkey</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="United States">United States</option>
										<option value="Vietnam">Vietnam</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">State*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">City/Suburb*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Zip/Post Code*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-dismiss="modal">Cancel</button>
					<button type="button" class="main-btn min-width btn-hover h_40">Add</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Add Organisation Model End-->
	<!-- Header Start-->
	<?php
	include "include/navcreateure.php";
	?>
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
							<h3><i class="fa-solid fa-gauge me-3"></i>Tableau de bord</h3>
						</div>
					</div>
					<div class="col-md-12">
						<div class="main-card add-organisation-card p-4 mt-5">
							<div class="ocard-left">
								<div class="ocard-avatar">
									<img src="images/profile-imgs/img-13.jpg" alt="">
								</div>
								<div class="ocard-name">
									<h4><?php echo $namee ?></h4>
									<span>Mon Organisation</span>
								</div>
							</div>
						
						</div>
						<div class="main-card mt-4">
							<div class="dashboard-wrap-content">
								<div class="d-flex flex-wrap justify-content-between align-items-center p-4">
									<div class="dashboard-date-wrap d-flex flex-wrap justify-content-between align-items-center">
										<div class="dashboard-date-arrows">
											<a href="#" class="before_date"><i class="fa-solid fa-angle-left"></i></a>
											<a href="#" class="after_date disabled"><i class="fa-solid fa-angle-right"></i></a>
										</div>
										<h5 class="dashboard-select-date">
											<span>1st April, 2022</span>
											-
											<span>30th April, 2022</span>
										</h5>
									</div>
									<form action="" method="post">
										<div class="rs">
											<div class="dropdown dropdown-text event-list-dropdown">
												<!-- <button class="dropdown-toggle event-list-dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
												<span>Selected Events (1)</span>
											</button> -->
												<!-- <ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">1</a></li>
											</ul> -->
												<?php
												$userid = $_SESSION['user']['User_id'];
												require 'connect/DataBase.php';
												$sql = 'SELECT * FROM `event` WHERE User_id = :userid';
												$statement = $connection->prepare($sql);
												$statement->execute([':userid' => $userid]);
												$users = $statement->fetchAll(PDO::FETCH_ASSOC); ?>
												<select class="d-inline form-select w-50 py-1 px-4 dark mx-0" name="ev" id="">
													<option selected value="0">All</option>
													<?php foreach ($users as $user) : ?>

														<option class="dropdown-item" value="<?php echo $user['E_id'] ?>"><?php echo $user['Titre'] ?></option>
													<?php endforeach; ?>
												</select>
												<input type="submit" class="btn btn-dark  " value="trouve" name="submiit">
											</div>
										</div>
									</form>
								</div>
								<div class="dashboard-report-content">
									<div class="row">
										<div class="col-xl-4 col-lg-6 col-md-6">
											<div class="dashboard-report-card purple">
												<div class="card-content">
													<div class="card-content">
														<?php
														if (isset($_POST['ev']) && $_POST['ev'] != 0) {

															if ($_POST['ev'] != 0) {
																$evv = $_POST['ev'];
																$sql = "SELECT sum(prix_tickt) as R FROM ticket WHERE  E_id = '$evv'";
																$result = $connection->query($sql);
																if ($result->rowCount() > 0) {

																	$rowr = $result->fetch(PDO::FETCH_ASSOC);
																}
															}
														} else {
															$sql = "SELECT sum(prix_tickt) as R FROM ticket WHERE E_id in (SELECT E_id FROM `event` WHERE User_id = '$userid')";
															$result = $connection->query($sql);
															if ($result->rowCount() > 0) {

																$rowr = $result->fetch(PDO::FETCH_ASSOC);
															}
														}

														?>
														<span class="card-title fs-6">Revenus (MAD)</span>
														<span class="card-sub-title fs-3"><?php if ($rowr['R'] > 0) {
																								echo $rowr['R'];
																							} else {
																								echo '0';
																							} ?></span>
														<div class="d-flex align-items-center">


														</div>
													</div>
													<div class="card-media">
														<i class="fa-solid fa-money-bill"></i>
													</div>
												</div>
											</div>
										</div>

										<div class="col-xl-4 col-lg-6 col-md-6">
											<div class="dashboard-report-card info">
												<div class="card-content">
													<?php
													if (isset($_POST['ev']) && $_POST['ev'] != 0) {
														$iddd = $_POST['ev'];
														// Query to fetch page views
														$sql = "SELECT vue as vew FROM event WHERE E_id = '$iddd'";
														$result = $connection->query($sql);

														if ($result->rowCount() > 0) {

															$row = $result->fetch(PDO::FETCH_ASSOC);
														}
													} else {
														$sql = "SELECT sum(vue) as vew FROM event WHERE User_id = '$userid'";
														$result = $connection->query($sql);

														if ($result->rowCount() > 0) {

															$row = $result->fetch(PDO::FETCH_ASSOC);
														}
													}





													?>
													<div class="card-content">
														<span class="card-title fs-6">Pages vues</span>
														<span class="card-sub-title fs-3"><?php if ($row['vew'] > 0) {
																								echo $row['vew'];
																							} else {
																								echo '0';
																							}







																							?>
														</span>
														<div class="d-flex align-items-center">


														</div>
													</div>
													<div class="card-media">
														<i class="fa-solid fa-eye"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-6 col-md-6">
											<div class="dashboard-report-card success">
												<div class="card-content">
													<div class="card-content">
														<?php
														if (isset($_POST['ev']) && $_POST['ev'] != 0) {
															if ($_POST['ev'] != 0) {
																$sql = "SELECT count(*) as ti FROM ticket WHERE  E_id = '$iddd'";
																$result = $connection->query($sql);
																if ($result->rowCount() > 0) {

																	$rowtt = $result->fetch(PDO::FETCH_ASSOC);
																}
															}
														} else {
															$sql = "SELECT count(*) as ti FROM ticket WHERE E_id in (SELECT E_id FROM `event` WHERE User_id = '$userid')";
															$result = $connection->query($sql);
															if ($result->rowCount() > 0) {

																$rowtt = $result->fetch(PDO::FETCH_ASSOC);
															}
														}




														?>
														<span class="card-title fs-6">Ticket Sales</span>
														<span class="card-sub-title fs-3"><?php echo $rowtt['ti']; ?></span>
														<div class="d-flex align-items-center">


														</div>
													</div>
													<div class="card-media">
														<i class="fa-solid fa-ticket"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="main-card mt-4">
							<div class="d-flex flex-wrap justify-content-between align-items-center border_bottom p-4">
								<div class="dashboard-date-wrap d-flex flex-wrap justify-content-between align-items-center">
									<div class="select-graphic-category">
										<div class="form-group main-form mb-2">
											<select class="selectpicker" name="mySelect" data-width="150px" id="tabSelect" role="tablist">
												<option disabled selected>Choisie</option>
												<option value="revenue">Revenue</option>
												<option value="ticketsales">Ticket Sales</option>
											</select>
										</div>
										<small class="mt-4">See the graphical representation below</small>
									</div>
								</div>
								<div class="rs">
									<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
										<input type="radio" class="btn-check" name="btnradio" id="btnradio3" checked>
										<label class="btn btn-outline-primary" for="btnradio3">Jour</label>
										<input type="radio" class="btn-check" name="btnradio" id="btnradio1">
										<label class="btn btn-outline-primary" for="btnradio1">Moi</label>
									</div>
								</div>
							</div>
							<div class="item-analytics-content p-4 ps-1 pb-2">
								<div>
									<div id="revenue"></div>
								</div>
								<div>
									<div>
										<div id="ticketsales" style="display: none;"></div>
									</div>
								</div>
							</div>
							<style>
								#revenue {
									height: 300px;
									position: relative;
								}

								#ticketsales {
									height: 300px;
									position: relative;
								}
							</style>
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
	<script src="vendor/chartist/dist/chartist.min.js"></script>
	<script src="vendor/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/night-mode.js"></script>
	<!-- REVENU -->
	<script>
		document.getElementById('tabSelect').addEventListener('change', function() {
			document.getElementById('revenue').style.display = 'none';
			document.getElementById('ticketsales').style.display = 'none';
			document.getElementById(this.value).style.display = 'block';

			Day_month_update(this.value);


		});
		<?php
		$purchasesMonthly = array('January' => 0, 'February' => 0, 'March' => 0, 'April' => 0, 'May' => 0, 'June' => 0, 'July' => 0, 'August' => 0, 'September' => 0, 'October' => 0, 'November' => 0, 'December' => 0);

		$purchasesDaily = array('Monday' => 0, 'Tuesday' => 0, 'Wednesday' => 0, 'Thursday' => 0, 'Friday' => 0, 'Saturday' => 0, 'Sunday' => 0);

		$purchasesMonthly_ticket = array('January' => 0, 'February' => 0, 'March' => 0, 'April' => 0, 'May' => 0, 'June' => 0, 'July' => 0, 'August' => 0, 'September' => 0, 'October' => 0, 'November' => 0, 'December' => 0);

		$purchasesDaily_ticket = array('Monday' => 0, 'Tuesday' => 0, 'Wednesday' => 0, 'Thursday' => 0, 'Friday' => 0, 'Saturday' => 0, 'Sunday' => 0);


		$queryDaily_revenu =  $connection->query("SELECT DAYNAME(t.Purchase_Date) AS Purchase_Month, SUM(t.prix_tickt) AS Total_Purchase 
				 FROM event AS e 
				 JOIN ticket AS t ON e.E_id = t.E_id 
				 WHERE e.User_id = $Uid AND WEEK(t.Purchase_Date, 1) = WEEK(CURDATE(), 1) 
				 GROUP BY Purchase_Month 
				 ORDER BY CASE 
					 WHEN Purchase_Month = 'Monday' THEN 1 
					 WHEN Purchase_Month = 'Tuesday' THEN 2 
					 WHEN Purchase_Month = 'Wednesday' THEN 3 
					 WHEN Purchase_Month = 'Thursday' THEN 4 
					 WHEN Purchase_Month = 'Friday' THEN 5 
					 WHEN Purchase_Month = 'Saturday' THEN 6 
					 WHEN Purchase_Month = 'Sunday' THEN 7 
				 END;");

		$queryMonthly_revenu =  $connection->query("SELECT MONTHNAME(t.Purchase_Date) AS Purchase_Month, SUM(t.prix_tickt) AS Total_Purchase
				 FROM event AS e
				 JOIN ticket AS t ON e.E_id = t.E_id
				 WHERE e.User_id = $Uid AND YEAR(t.Purchase_Date) = YEAR(CURDATE())
				 GROUP BY Purchase_Month
				 ORDER BY CASE
					 WHEN Purchase_Month = 'January' THEN 1
					 WHEN Purchase_Month = 'February' THEN 2
					 WHEN Purchase_Month = 'March' THEN 3
					 WHEN Purchase_Month = 'April' THEN 4
					 WHEN Purchase_Month = 'May' THEN 5
					 WHEN Purchase_Month = 'June' THEN 6
					 WHEN Purchase_Month = 'July' THEN 7
					 WHEN Purchase_Month = 'August' THEN 8
					 WHEN Purchase_Month = 'September' THEN 9
					 WHEN Purchase_Month = 'October' THEN 10
					 WHEN Purchase_Month = 'November' THEN 11
					 WHEN Purchase_Month = 'December' THEN 12
				 END;");

		$queryDaily_ticket =  $connection->query("SELECT DAYNAME(t.Purchase_Date) AS Purchase_Month, COUNT(t.ticket_id) AS Total_Tickets_Sold 
				 FROM event AS e 
				 JOIN ticket AS t ON e.E_id = t.E_id 
				 WHERE e.User_id = $Uid AND WEEK(t.Purchase_Date, 1) = WEEK(CURDATE(), 1) 
				 GROUP BY Purchase_Month 
				 ORDER BY CASE 
					 WHEN Purchase_Month = 'Monday' THEN 1 
					 WHEN Purchase_Month = 'Tuesday' THEN 2 
					 WHEN Purchase_Month = 'Wednesday' THEN 3 
					 WHEN Purchase_Month = 'Thursday' THEN 4 
					 WHEN Purchase_Month = 'Friday' THEN 5 
					 WHEN Purchase_Month = 'Saturday' THEN 6 
					 WHEN Purchase_Month = 'Sunday' THEN 7 
				 END;");

		$queryMonthly_ticket =  $connection->query("SELECT MONTHNAME(t.Purchase_Date) AS Purchase_Month, COUNT(t.ticket_id) AS Total_Tickets_Sold
				 FROM event AS e 
				 JOIN ticket AS t ON e.E_id = t.E_id 
				 WHERE e.User_id = $Uid AND YEAR(t.Purchase_Date) = YEAR(CURDATE()) 
				 GROUP BY Purchase_Month 
				 ORDER BY CASE 
					 WHEN Purchase_Month = 'January' THEN 1 
					 WHEN Purchase_Month = 'February' THEN 2 
					 WHEN Purchase_Month = 'March' THEN 3 
					 WHEN Purchase_Month = 'April' THEN 4 
					 WHEN Purchase_Month = 'May' THEN 5 
					 WHEN Purchase_Month = 'June' THEN 6 
					 WHEN Purchase_Month = 'July' THEN 7 
					 WHEN Purchase_Month = 'August' THEN 8 
					 WHEN Purchase_Month = 'September' THEN 9 
					 WHEN Purchase_Month = 'October' THEN 10 
					 WHEN Purchase_Month = 'November' THEN 11 
					 WHEN Purchase_Month = 'December' THEN 12 
				 END;");
		?>

		if (chartId === 'revenue') {
			<?php
			updatePurchases($queryDaily_revenu, $purchasesDaily);
			updatePurchases($queryMonthly_revenu, $purchasesMonthly);
			?>
			console.log("data = " + data_date)
		} else if (chartId === 'ticketsales') {
			<?php
			updatePurchases($queryDaily_ticket, $purchasesDaily_ticket);
			updatePurchases($queryMonthly_ticket, $purchasesMonthly_ticket);
			?>

		}
		<?php

		function updatePurchases($query, &$purchases)
		{
			foreach ($query as $data) {
				if (isset($data['Total_Purchase'])) {
					$purchases[$data['Purchase_Month']] = $data['Total_Purchase'];
				} else if (isset($data['Total_Tickets_Sold'])) {
					$purchases[$data['Purchase_Month']] = $data['Total_Tickets_Sold'];
				}
			}
		}
		?>

		function Day_month_update(chartId) {
			document.querySelectorAll('input[name="btnradio"]').forEach(function(radio) {
				radio.addEventListener('change', function() {
					document.getElementById(chartId).innerHTML = '';
					var timePeriod = this.nextElementSibling.textContent;
					updateChart(timePeriod, chartId);
				});
			})
			updateChart('Daily', 'revenue');
			updateChart('Daily', 'ticketsales');
		}

		function updateChart(timePeriod, chartId) {
			var month = ['Jan', 'Fév', 'Mar', 'Avr', 'May', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc']
			var day = ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'dim']
			var purchases;
			var data_date;

			if (chartId === 'revenue' && timePeriod === 'Daily') {
				var purchasesDaily = <?php echo json_encode($purchasesDaily) ?>;
				purchases = purchasesDaily;
				data_date = day;
				console.log(purchases)
			} else if (chartId === 'revenue' && timePeriod === 'Monthly') {
				var purchasesMonthly = <?php echo json_encode(array_values($purchasesMonthly)) ?>;
				purchases = purchasesMonthly;
				data_date = month;
				console.log("month 1 " + purchases)
			} else if (chartId === 'ticketsales' && timePeriod === 'Daily') {
				var purchasesDaily = <?php echo json_encode($purchasesDaily_ticket) ?>;
				purchases = purchasesDaily;
				data_date = day;
				console.log(purchases)
			} else if (chartId === 'ticketsales' && timePeriod === 'Monthly') {
				var purchasesMonthly = <?php echo json_encode(array_values($purchasesMonthly_ticket)) ?>;
				purchases = purchasesMonthly;
				data_date = month;
				console.log("month 2 " + purchases)
			}

			new Chartist.Line('#' + chartId, {
				labels: data_date,
				series: [Object.values(purchases)],
			}, {
				low: 0,
				showArea: true,
				fullWidth: true,
				distributeSeries: true,
				plugins: [
					Chartist.plugins.tooltip()
				]
			});
		}
	</script>

</body>

</html>