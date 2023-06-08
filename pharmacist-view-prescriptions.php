<?php include 'php/data-pharmacist-loggedin.php' ?>
<?php //include 'php/inc-pharmacist-dispense-prescription-search-data.php' ?>
<?php
$_SESSION['view_prescriptions_pat_id_num'] = "";

if(isset($_SESSION['view-prescriptions-pat-id-num'])) {
	$_SESSION['view_prescriptions_pat_id_num'] = $_SESSION['view-prescriptions-pat-id-num'];
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>View Prescriptions | E-Prescribing</title>
<?php include 'php-html/head-content.php'; ?>
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/internal-navbar.css">
<link rel="stylesheet" href="css/sign-up.css">
<link rel="stylesheet" href="css/table.css">
<link rel="stylesheet" href="css/footer.css">
</head>
<body>
<!-- Header -->
<div class="header">
	<h2>
		<a href="pharmacist-home.php"><i class="fa fa-plus-square"></i></a>
		<a href="pharmacist-home.php">E-Prescribing System</a>
		<form action="php/data-pharmacist-logout.php" method="POST">
			<button name="btnlogout" id="btnlogout">log out</button>
		</form>
	</h2>
</div>
<!-- Navigation Bar -->
<div class="topnav" id="myTopnav">
	<a href="pharmacist-home.php">Home</a>
	<a id="active" href="pharmacist-view-prescriptions.php">View Prescriptions</a>
	<a href="pharmacist-dispense-prescription.php">Dispense Prescription</a>
	<a href="javascript:void(0);" class="icon" onclick="ResponsiveNav()">&#9776;</a>
</div>
<script src="http://localhost/Rez-Online-App/js/responsiveNav.js"></script>
<!-- Main Content -->
<form class="form-content" action="php/data-view-prescriptions-search-patient.php" method="POST" enctype="multipart/form-data" autocomplete="on">
	<h2>View Prescriptions</h2>

	<fieldset>
		<legend>Search Patient</legend>
		<?php include 'php/inc-search-patient.php'; ?>
		<input type="submit" value="Search" id="btnSearch" name="btnSearch"><br>
	</fieldset>
</form>
<?php include 'php/inc-pharmacist-view-prescriptions-data-table.php'; ?>
<!-- Footer -->
<?php include 'php-html/footer.php'; ?>
<script src="js/form-validations.js"></script>
<script src="js/date.js"></script>
</body>
</html>