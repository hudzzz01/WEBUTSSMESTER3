<?php 

	session_start();

	require 'function.php';

	$id = $_GET['userId'];
	$query = "SELECT * FROM user WHERE id=$id";
	$result = query ($query);

	$query = "SELECT * FROM user WHERE id=$id ";
	$result2 = query ($query)[0];


	$query = "SELECT * FROM info WHERE p = 1";
	$info = query ($query);

	if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
	}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>TI UIN JKT</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="navigasi">
			
			<ul>
			<span id="tombolkanan">	<li><a href="loggout.php">loggout</a></li></span>
			</ul>

			</div>


	<div>
		<div id="header">
			<h1> Selamat datang <?= $result[0]['statusAkun'] . " " . $result[0]['namadep']; ?></h1>
		</div>
		<div id="main">
			<div id="page">
			
			<div id="content">
				<h3>Informasi Data User :</h3>
				<p>Nama : <?php echo $result2['namadep']; ?> <?php echo $result2['namabel']; ?></p>
				
				<p>Email : <?php echo $result2['email']; ?></p>
				<p>Username : <?php echo $result2['username']; ?></p>
				<p>Alamat : <?php echo $result2['alamat']; ?></p>

				<a class="button" href="printUser.php?data=<?= $id ?>">print</a>
				
				<table  id="tabelUmum" style="border: 1px dashed black;">
					
					
					<h3>INFORMASI PENTING UNTUK USER</h3>
					<tr>
						
						<th style="border: 1px dashed black;">Nama Info</th>
						<th>Isi Info</th>
						<th>Keterangan</th>
						
						<th>Gambar</th>
						
					</tr>
				<?php foreach ($info as $key): ?>
					<tr>
						
						<td style="border: 1px dashed black;"><?php echo $key['namaInfo']; ?></td>
						<td><?php echo $key['isiInfo']; ?></td>
						<td><?php echo $key['keterangan']; ?></td>
					
						<td><img  width="100px"  src="<?php echo $key['img']; ?>"></td>
						
					</tr>
				<?php endforeach ?>
</table>


			</div>
		</div>
		</div>
		
		<div id="footer">
			<h3>&copy; M Hudzaifah Assyahid 11190910000108</h3>
			
		</div>
</body>
</html>