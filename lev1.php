<?php
session_start();
$okk = $_SESSION['us_id'];
$role =$_SESSION['role'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>INTELLIGENT BASED COURSE ALLOCATION FOR UNIVERSTIES</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="assets/js/lib/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
 <meta charset="UTF-8"> 
        

</head>
<body>
		<?php include "nav.php" ?>
<br>
		<div class="navvy"><?php include "good-nav.php" ?></div>
		<div class="dataclass"><?php include "data1.php"?></div>





		</body>
		</html>