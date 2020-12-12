
<?php 
session_start();
if (!isset($_SESSION['loginAdmin'])) {
	header("Location: login.php");
	exit;
	}

require 'function.php';

$id = $_GET['id'];
$infoId = $_GET['infoId'];

$result = hapusInfo($infoId);


	if ($result) {
		echo "
		<script>
			alert('berhasil Hapus');
			document.location.href = 'HalamanUtamaAdmin.php?userId=$id';
		</script>
		";
	}

		


	

 ?>