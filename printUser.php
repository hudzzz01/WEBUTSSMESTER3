<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
	}
	require 'function.php';
	$id	= $_GET['data'];




	$query = "SELECT * FROM user WHERE id=$id";
	$result2 = query ($query)[0];
	$id = $result2['id'];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Data Diri</title>
 	<link rel="stylesheet" type="text/css" href="style.css">

 	<style type="text/css">
 		#tampilan {
 			background: #f2f6ff;
 			width: 400px;
 			margin-left: auto;
 			margin-right: auto;
 			border: black dashed 1px;
 		}
 	</style>
 </head>
 <body>
 	<div id="header">
 		<div id="tampilan">

		<img src="https://upload.wikimedia.org/wikipedia/commons/6/62/Logo_UIN_Syarif_Hidayatullah_Jakarta.jpg" width="200px">
		
		<h3>PROGRAM STUDI TEKNIK INFORMATIKA</h3>
		<h4>UNIVERSITAS ISLAM NEGERI SYARIF HIDAYATULLAH JAKARTA</h4>
		<h4>REKAPITULASI DATA USER</h4>
 	<h3>Informasi Data Mahasiswa :</h3>
				<p>Nama : <?php echo $result2['namadep']; ?> <?php echo $result2['namabel']; ?></p>
				
				<p>Email : <?php echo $result2['email']; ?></p>
				<p>Username : <?php echo $result2['username']; ?></p>
				<p>Alamat : <?php echo $result2['alamat']; ?></p>
				</div>


 </div>

 <a class ="button"href="HalamanUtama.php?userId=<?= $id ?>">kembali</a>

 	

 <script>
 	
 	print();
 	

 </script>

 <?php $kembali = 1; ?>

 </body>
 </html>
 