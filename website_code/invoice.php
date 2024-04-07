<?php
session_start();
$evid = $_SESSION['E_id'];

$prtkt =$_SESSION['Prix_ticket'];
$nameevent=$_SESSION['eventname'];
$name=$_SESSION['user']['U_name'];
$imgevent=$_SESSION['imageevent'];
$qrcode=$_SESSION['qrcode'];
$devent=$_SESSION['date'];
$ndate=getdate();


?>



<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>MoroccanJoy - Système de billetterie d'événements en ligne simple </title>
		
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>	
		
	</head>

<body class="d-flex flex-column h-100">
<script>
window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 0.5,
                filename: 'Tickt.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}


</script>	
	<!-- Invoice Start-->
	<div class="invoice clearfix">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-lg-8 col-md-10">
					<div class="invoice-header justify-content-between">
						<div class="invoice-header-logo">
							<img src="images/dark-logo.svg" alt="invoice-logo">
						</div>
						<div class="invoice-header-text">
							<a href="#"  id="download"class="download-link">Télécharger</a>
						</div>
					</div>
					<div class="invoice-body" id="invoice">
						<div class="invoice_dts">
							<div class="row">
								<div class="col-md-12">
									<h2 class="invoice_title">Facture</h2>
								</div>
								<div class="col-md-6">
									<div class="vhls140">
										<ul>
											<li><div class="vdt-list">Facture à <?php echo $name ?></div></li>
											
										</ul>
									</div>
								</div>
								<div class="col-md-6">
									<div class="vhls140">
										<ul>
											
											<li><div class="vdt-list">Date de commande: <?php echo $ndate['mday']."/".$ndate['mon']."/".$ndate['year'] ;
											?></div></li>
											
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="main-table bt_40">
							<div class="table-responsive">
								<table class="table">
									<thead class="thead-dark">
										<tr>
											<th scope="col">#</th>
											<th scope="col">Détails de l'évènement</th>
										
											<th scope="col">Prix</th>
										
										</tr>
									</thead>
									<tbody>
										<tr>										
											<td>1</td>	
											<td><a href="#" target="_blank"><?php echo $nameevent ?></a></td>	
											
											<td><?php echo $prtkt?> MAD</td>
											
										</tr>
										<tr>
											<td colspan="1"></td>
											<td colspan="5">
												<div class="user_dt_trans text-end pe-xl-4">
													<div class="totalinv2">Total de facture: <?php echo $prtkt?> MAD</div>
													<p>Payé via paypal</p>
												</div>
											</td>
										</tr>
									</tbody>									
								</table>
							</div>
						</div>
						<div class="invoice_footer">
							<div class="cut-line">
								<i class="fa-solid fa-scissors"></i>
							</div>
							<div class="main-card">
								<div class="row g-0">
									<div class="col-lg-7">
										<div class="event-order-dt p-4">
											<div class="event-thumbnail-img">
												<img src="upload/images/<?php echo $imgevent;?>" alt="">
											</div>
											<div class="event-order-dt-content">
												<h5><?php echo $nameevent?></h5>
												<span><?php echo $devent?></span>
												<div class="buyer-name"><?php echo $name?></div>
												
												<div class="booking-total-grand">
													Prix : <span><?php echo $prtkt?> MAD</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-5">
										<div class="QR-dt p-4">
											<ul class="QR-counter-type">
										
											
												
											</ul>
											<div class="QR-scanner">
												<img src="<?php echo $qrcode; ?>" alt="QR-Ticket-Scanner">
											</div>
											<p>Alimenté par MoroccanJoy</p>
										</div>
									</div>
								</div>
							</div>
							<div class="cut-line">
								<i class="fa-solid fa-scissors"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Invoice End-->
	<?php
	
?>
	
	<script src="js/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>	
	<script src="js/custom.js"></script>
	<script src="js/night-mode.js"></script>
</body>
</html>