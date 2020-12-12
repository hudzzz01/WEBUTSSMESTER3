<?php 
session_start();
if (!isset($_SESSION['loginAdmin'])) {
	header("Location: login.php");
	exit;
	}
	require 'function.php';

	$query = "SELECT * FROM user WHERE id=$id";
	$user = query ($query);
	$namadep = $user[0]['namadep'];

	$id = $_GET['userId'];

	$result = deacc($id);

	$id = $_GET['id'];

	if ($result) {
		echo "
		<script>
			alert('User berhasil di nonaktifkan');
			document.location.href = 'HalamanUtamaAdmin.php?userId=$id';
		</script>
		";
	}



 ?>