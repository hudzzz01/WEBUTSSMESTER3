<?php 
	require 'function.php';
	session_start();
	if (!isset($_SESSION['loginAdmin'])) {
	header("Location: login.php");
	exit;
	}

	$query = "SELECT * FROM user WHERE id=$id";
	$user = query ($query);
	$namadep = $user[0]['namadep'];

	$id = $_GET['userId'];

	$result = hapus($id);

	$id = $_GET['id'];

	if ($result) {
		echo "
		<script>
			alert('berhasil Hapus');
			document.location.href = 'HalamanUtamaAdmin.php?userId=$id';
		</script>
		";
	}



 ?>