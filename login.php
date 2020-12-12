<?php 

session_start();

require 'function.php';

if (isset($_POST['login'])) {
	
	$user = login($_POST);

	if ($user) {
		# code...
		
		$id = $user[0]['id'];

	


		if ($user[0]['statusAkun'] == 'admin' && $user[0]['keaktifan'] == 1) {

			
			$_SESSION['loginAdmin'] = "$user[0]['username']";
			

			

			header("Location: HalamanUtamaAdmin.php?userId=$id");

			


		}
		else if ($user[0]['statusAkun'] == 'user' && $user[0]['keaktifan'] == 1)
		{
			
			$_SESSION['login'] = "$user[0]['username']";
			header("Location: HalamanUtama.php?userId=$id");

		}
		else if ($user[0]['keaktifan'] == 0)
		{
			echo "
		<script>
			alert('Akun Anda Belum Aktif');
			document.location.href = 'login.php';
		</script>
		";
		}

		
	}
	else{
			echo "
		<script>
			alert('username/password Salah');
			document.location.href = 'login.php';
		</script>
		";
		}

	
	
}
if (isset($_POST['daftar'])) {
	header("Location: daftar.php?id=$id");
}



 ?>


<!DOCTYPE html>
<html>
<head>
	<title>TI UIN JKT</title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="page">
		<div id="sambutan">
			<h1>Silahkan Masuk</h1>
			  <h2><marquee>Wahai Para Calon Cendikiawan yang Luar Biasa</marquee></h2> 
		</div>

		<div id = "loginbg">
		
		<form method="post" action="">

			
			<ul>
				<li>
					<label for="username" >Username</label>
					<input type="Text" name="username" id="username">
				</li>
				<li>
					<label for="password" >Password</label>
					<input type="password" name="password" id="password">
				</li>
				<li>
					<button name="login">Login</button>
				</li>
				<li>
					<button name="daftar">daftar</button>
				</li>
			</ul>
			</div>
		</form>

		<br>

		<a href="index.php" class="button">Kembali</a>

	</div>
</body>
</html>