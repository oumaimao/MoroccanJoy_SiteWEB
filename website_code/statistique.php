<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Admins</title>
		
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
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<?php require_once "connect/DataBase.php";

$query=$connection->query("SELECT MONTHNAME(Purchase_Date) as monthname , count(*) as number_of_tickts from ticket ORDER BY monthname;");
foreach($query as $data){
  $month[]=$data['monthname'];
  $number_of_tickts[]=$data['number_of_tickts'];

}
$mo=['January','February','March','April','May','June','July','August','September','September','October','November','December'];
$n=array(0,0,0,0,0,0,0,0,0,0,0,0);
$c=count($month);
for($i=0;$i<12;$i++){
  for($j=0;$j<$c;$j++)
      if($mo[$i]==$month[$j]){
        $n[$i]=$number_of_tickts[$j];
      }

}

?>
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
<div class="wrapper wrapper-body">
<div class="dashboard-wrap-content p-4">
<h5 class="mb-4">Statistique </h5>
		<div class="d-md-flex flex-wrap align-items-center">

        <div style="width: 500px;">
          <canvas id="myChart"></canvas>
        </div>
        <script>
          const labels = <?php echo json_encode($mo)?>;
          const data = {
            labels: labels,
            datasets: [{
              label: 'Tickts sales by Month',
              data: <?php echo json_encode($n)?>,
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
              ],
              borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
              ],
              borderWidth: 1
            }]
          };
          const config = {
            type: 'bar',
            data: data,
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            },
          };
          // === include 'setup' then 'config' above ===

          var myChart = new Chart(
            document.getElementById('myChart'),
            config
          );
        </script>
     
  
  
        </div>
</div>
        </div>
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