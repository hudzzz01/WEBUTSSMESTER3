<?php 
	require 'function.php';

	session_start();

	// var_dump($_SESSION['loginAdmin']);
	// die();

	if (!isset($_SESSION['loginAdmin'])) {
	header("Location: login.php");
	exit;
	}



	$id = $_GET['userId'];
	$query = "SELECT * FROM user WHERE id=$id ORDER BY 'dsc'";
	$result = query ($query);

	$query = "SELECT * FROM user WHERE keaktifan=0";
	$userDaftar = query ($query);

	$query = "SELECT * FROM user WHERE keaktifan=1";
	$user = query ($query);

	$query = "SELECT * FROM info";
	$info = query ($query);



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
	<div id="page">
		<div id="header">
			<h1>Selamat datang <?php if (isset($result)) {
				echo $result[0]['statusAkun'] . " " . $result[0]['namadep'];
			}  ?></h1>
		</div>
		<div id="main">
			
			<div id="content">
				<h1><marquee>Mari Kita Bangun Bersama Fakultas Sains Teknologi UIN Jakarta Menuju Ke Arah Yang Lebih Baik</marquee></h1>

				<table border="1" id="tabelKusus">
					<h3>Tabel Informasi</h3>
					<tr>
						<th>id Informasi</th>
						<th>Nama Info</th>
						<th>Isi Info</th>
						<th>Keterangan</th>
						<th>InfoPenting/Umum</th>
						<th>Gambar</th>
						<th>Aksi</th>
					</tr>
				<?php foreach ($info as $key): ?>
					<tr>
						<td><?php echo $key['id']; ?></td>
						<td><?php echo $key['namaInfo']; ?></td>
						<td><?php echo $key['isiInfo']; ?></td>
						<td><?php echo $key['keterangan']; ?></td>
						<td><?php echo $key['p']; ?></td>
						<td><img  width="100px"  src="<?php echo $key['img']; ?>"></td>
						<td><a href="editInfo.php?infoId=<?=$key['id']?>&id=<?=$id?>">edit</a>|<a href="hapusInfo.php?infoId=<?=$key['id']?>&id=<?=$id?>">hapus</a></td>
					</tr>
				<?php endforeach ?>
				</table>
				<a href="tambahInfo.php?id=<?=$id?>">Tambah Info</a> ||
				<a href="Statistik.php?id=<?=$id?>">Statistik Web </a>




				<table border="1" id="tabelKusus">
					<h3>Tabel Pendaftar</h3>
					<tr>
						<th>Nama Depan</th>
						<th>Nama Belakang</th>
						<th>Email</th>
						<th>Jenis User</th>
						<th>Username</th>
						<th>Password</th>
						<th>Aksi</th>
					</tr>
			<?php foreach ($userDaftar as $key): ?>
					<tr>
						<td><?php echo $key['namadep']; ?></td>
						<td><?php echo $key['namabel']; ?></td>
						<td><?php echo $key['email']; ?></td>
						<td><?php echo $key['statusAkun']; ?></td>
						<td><?php echo $key['username']; ?></td>
						<td><?php echo $key['password']; ?></td>
						<td><a href="acc.php?userId=<?=$key['id']?>&id=<?=$id?>"> ACC</a>|<a href="hapus.php?userId=<?=$key['id']?>&id=<?=$id?>">REJECT</a></td>
					</tr>
			<?php endforeach ?>
				</table>


				<table border="1" id="tabelKusus">
					<h3>Tabel User Terdaftar</h3>
					<tr>
						<th>Nama Depan</th>
						<th>Nama Belakang</th>
						<th>Email</th>
						<th>Jenis User</th>
						<th>Username</th>
						<th>Password</th>
						<th>Aksi</th>
					</tr>
			<?php foreach ($user as $key): ?>
					<tr>
						<td><?php echo $key['namadep']; ?></td>
						<td><?php echo $key['namabel']; ?></td>
						<td><?php echo $key['email']; ?></td>
						<td><?php echo $key['statusAkun']; ?></td>
						<td><?php echo $key['username']; ?></td>
						<td><?php echo $key['password']; ?></td>
						<td><a href="deactive.php?userId=<?=$key['id']?>&id=<?=$id?>"> DEACTIVE</a>|<a href="hapus.php?userId=<?=$key['id']?>&id=<?=$id?>">REJECT</a></td>
					</tr>
			<?php endforeach ?>

				</table>
				<br>
				<form method="post" action="print.php?id=<?=$id?>">
					
				<button name="print">Print</button>
				</form>
				
			</div>
		</div>
		</div>
		
		<div id="footer">
			<h3>&copy; M Hudzaifah Assyahid 11190910000108</h3>
			
		</div>
</body>
</html>