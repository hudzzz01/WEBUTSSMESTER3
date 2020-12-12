
<?php 
session_start();
if (!isset($_SESSION['loginAdmin'])) {
	header("Location: login.php");
	exit;
	}

require 'function.php';

$id = $_GET['id'];
$infoId = $_GET['infoId'];

$query = "SELECT * FROM info WHERE id=$infoId";
$result = query ($query)[0];


if (isset($_POST['kirim'])) {
	$hasil = editInfo($_POST);

		if ($hasil) {
			echo "
		<script>
			alert('info berhasil ditambah');
			document.location.href = 'HalamanUtamaAdmin.php?userId=$id';
		</script>
		";
		}
		else{
			echo "
		<script>
			alert('Info Gagal ditambah');
			document.location.href = 'HalamanUtamaAdmin.php?userId=$id';
		</script>
		";
		}
		
}
elseif (isset($_POST['kembali'])) {
		header("Location: HalamanUtamaAdmin.php?userId=$id");
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
	<div id="page">
		
		<div id="kotakRegis">
		<form method="post" action="">
			<h1>Edit Info</h1>
			<ul>
				<input type="hidden" name="id" value="<?=$result['id']?>">

				<li>
					<label for="nama Info" >Nama Info</label>
					<input type="Text" name="namaInfo" id="nama Info" value="<?=$result['namaInfo']?>">
				</li>
				<li>
					<label for="info" >Isi Info</label>
					<textarea name="isiInfo" id="info" placeholder="Masukan Info" > <?=$result['isiInfo']?></textarea>
				</li>
				<li>
					<label for="keterangan" >Keterangan</label>
					<input type="Text" name="keterangan" id="keterangan" value="<?=$result['keterangan']?>">
				</li>
				<li>
					<label for="status" >Khusus Atau Umum</label><br><br>
					<input type="radio" name="p" id="status1" value="1">
					<label for="status1" >Khusus</label>
					<input type="radio" name="p" id="status2" value="0" checked="true">
					<label for="status2" >Umum</label>
				</li>
				<li>
					<label for="urlGambar" >url Gambar</label>
					<input type="Text" name="img" id="urlGambar" value="<?=$result['img']?>">
				</li>
				<li>
					<button name="kirim">kirim</button>
				</li>
				<li>
					<button name="reset">reset</button>
				</li>
				<li>
					<button name="kembali">Kembali</button>
				</li>
			</ul>
			
		</form>
		</div>

	</div>
</body>
</html>