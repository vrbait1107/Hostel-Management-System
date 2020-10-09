<?php
//--------------------------------->> DB CONFIG
require_once "config/configPDO.php";

//--------------------------------->> SESSION START
session_start();

//--------------------------------->> CHECK USER
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="shortcut icon" href="img/nitrr.ico" />
	<title>HOSTEL MANAGEMENT SYSTEM | STUDENT COMMITEE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Include HeaderScripts -->
	<?php include_once "includes/headerScripts.php";?>

</head>

<body>

	<!-- Include User Navbar -->
	<?php include_once "includes/navbar.php";?>

	<div class="container">
		<div class="row my-5">
			<div class="col-md-10 offset-md-1">
				<h3 class="text-center font-Staatliches-heading">Hostel Student Commitee</h3>

				<ul class="mt-5">

					<li>CULTURAL COMMITTEE</li>
					<hr />

					<li>SPORTS COMMITTEE</li>
					<hr />

					<li>MESS COMMITTEE</li>
					<hr />

					<li>DISCIPLINE & ANTI-RAGGING COMMITTEE</li>
					<hr />

					<li> FIRST AID, HEALTH WATCH CLUB COUNSELLING & HEALTHY PRACTICES COMMITTEE</li>
					<hr />

					<li>LITERARY ASSOCIATION</li>
					<hr />

					<li>MAGAZINE COMMITTEE</li>
					<hr />

					<li>NATURE CLUB</li>
					<hr />

					<li>NATIONAL DAYS CELEBRATION COMMITTEE</li>
					<hr />

					<li> TRANSPORT COMMITTEE</li>
					<hr />

					<li>WOMEN CELL</li>
					<hr />

					<li> NEWS BULLETIN AND MEDIA COMMUNICATION COMMITTEE</li>
					<hr />

					<li> PUNCTUALITY & CURRICULUM VIGILANCE COMMITTEE</li>

				</ul>

			</div>
		</div>
	</div>


	<!-- Include FooterScripts -->
	<?php include_once "includes/footerScripts.php";?>

</body>

</html>