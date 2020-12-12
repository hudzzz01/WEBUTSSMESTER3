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
 	<title>DATA USER TI UIN JKT</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<style type="text/css">
 		#tUser{
 			margin-left: 30px;
 		}
 		#ttd{
 			margin-left: 100px;
 		}
 	</style>
 </head>
 <body>

<div id="page">
	<div id="header">
		<img src="https://upload.wikimedia.org/wikipedia/commons/6/62/Logo_UIN_Syarif_Hidayatullah_Jakarta.jpg" width="200px">
		
		<h3>PROGRAM STUDI TEKNIK INFORMATIKA</h3>
		<h4>UNIVERSITAS ISLAM NEGERI SYARIF HIDAYATULLAH JAKARTA</h4>
		<h4>REKAPITULASI DATA USER</h4>
		<h5>Data User Terdaftar</h5>
	</div>

 	<table border="1" id="tUser">
					
					<tr>
						<th>Nama Depan</th>
						<th>Nama Belakang</th>
						<th>Email</th>
						<th>Jenis User</th>
						<th>Username</th>
					
					</tr>

					<?php foreach ($user as $key ): ?>
						
					<tr>
						<td><?php echo $key['namadep']; ?></td>
						<td><?php echo $key['namabel']; ?></td>
						<td><?php echo $key['email']; ?></td>
						<td><?php echo $key['statusAkun']; ?></td>
						<td><?php echo $key['username']; ?></td>
					
					</tr>
					<?php endforeach ?>
				
				</table>
				<script>
					print();
				</script>

				

	</div>
	<div id="ttd">
		
		<h5>Mengetuahui Admin</h5>
		<br>
		<br>
		<br>
		<br>
		<br>
		<h5><?php echo date("Y/m/d"); ?></h5>

	</div>

	<a href="HalamanUtamaAdmin.php?userId=<?= $id ?>" class="button">Kembali</a>
 </body>
 </html>