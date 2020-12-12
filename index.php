<?php 

if (!isset($_GET['halaman'])) {
	$_GET['halaman'] = 'home';
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
				<li><a href="index.php?halaman=home">Home</a></li>
				<li><a href="index.php?halaman=struktur">Struktur Organisasi</a></li>
				<li><a href="index.php?halaman=sejarah">Sejarah</a></li>
				<li><a href="index.php?halaman=visidanmisi">Visi Misi</a></li>
				<li><a href="index.php?halaman=staff">Staff</a></li>
				<span id="tombolkanan">
				<li><a href="daftar.php">daftar</a></li>
				<li><a href="login.php">Login</a></li>
				</span>
			</ul>
			</div>
	<div id="container">
		
		
		<div id="main">
			
			<div id="header">
				<?php include 'statistik/index.php'; ?>
			<h1>Selamat Datang Di Fakultas Teknik Informatika UIN Jakarta</h1>
	

			<iframe 
			src="https://www.youtube.com/embed/ww3ugL9Xl38?controls=0&rel=0&disablekb=1&showinfo=0&modestbranding=0&html5=1&iv_load_policy=3&autoplay=0&end=0&loop=0&playsinline=0&start=0&nocookie=false&enablejsapi=1&origin=http%3A%2F%2Fsi.fst.uinjkt.ac.id&widgetid=2">
			</iframe>


			</div>
			<div id="content">


			<?php 


				if ($_GET['halaman']) {

					$halaman = $_GET['halaman'];

					if ($halaman == 'home') {
						include "konten/home.php";
					}
					elseif ($halaman =='sejarah') {
						include "konten/sejarah.php";
						
					}
					elseif ($halaman =='visidanmisi') {
						include "konten/visidanmisi.php";
						
					}
					elseif ($halaman =='staff') {
						include "konten/staff.php";
						
					}
					elseif ($halaman =='struktur') {
						include "konten/struktur.php";
						
					}


					
					
				}

				

			 ?>
			</div>
		</div>
		
		<div id="footer">
			<h3>&copy; M Hudzaifah Assyahid 11190910000108</h3>
			
		</div>
	</div>
</body>
</html>