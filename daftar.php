
<?php 

require 'function.php';

if (isset($_POST['daftar'])) {
	$result = daftar($_POST);

	if ($result) {
		echo "
		<script>
			alert('pendaftaran sukses');
			document.location.href = 'login.php';
		</script>
		";
	}else
	{
		echo "gagal";
		die();
	}

	//header("Location: index.php");
}
elseif (isset($_POST['login'])) {
	header("Location: login.php");
}

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>TI UIN JKT</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
			#kotakRegis {
				
				width: 400px;
				margin-right: auto;
				margin-left: auto;
			}
	</style>
</head>
<body>
	<div id="header">

		<div id="kotakRegis">
		
		<form method="post" action="">
			<h1>Selamat Mendaftar</h1>
			<ul>
				<li>
					<label for="namadepan" >Nama Depan</label>
					<input type="Text" name="namadepan" id="namadepan">
				</li>
				<li>
					<label for="namabelakang" >Nama Belakang</label>
					<input type="Text" name="namaBelakang" id="namaBelakang">
				</li>
				<li>
					<label for="email" >email</label>
					<input type="Text" name="email" id="email">
				</li>
					<li>
					<label for="alamat" >alamat</label>
					<input type="Text" name="alamat" id="alamat">
				</li>
				<li>
					<label for="username" >Username</label>
					<input type="Text" name="username" id="username">
				</li>
				<li>
					<label for="password" >Password</label>
					<input type="password" name="password" id="password">
				</li>
				<li>
					<label for="status" >Jabatan</label>
					<input type="radio" name="status" id="status1" value="user">
					<label for="status1" >User</label>
					<input type="radio" name="status" id="status2" value="admin">
					<label for="status2" >Admin</label>
				</li>
				<div>
				
					<button name="daftar">daftar</button>
				
				
				</div>
				<p>sudah daftar ? <button name="login">Login</button></p>

				<li>
					<a class="button" href="index.php">Kembali</a>
				</li>
				
			</ul>
			
		</form>

		</div>

	</div>
</body>
</html>