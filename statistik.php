<?php 
session_start();
if (!isset($_SESSION['loginAdmin'])) {
	header("Location: login.php");
	exit;
	}
	require 'function.php';

	$query = "SELECT * FROM user WHERE keaktifan=1";
	$user = query ($query);

	$id = $_GET['id'];


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Statistik</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>

 	<div id="navigasi">
 		<ul>
 			<li>
 				 <a href="HalamanUtamaAdmin.php?userId=<?= $id ?>" id="tombolkanan">Kembali</a>
 			</li>
 		</ul>
 
  </div>
  <div id="page">

  <div id="header"> <h1>ini halaman statistik</h1></div>

  <?php 

include 'statistik/admin.php';

  ?>
 </div>
 </body>
 </html>



 
