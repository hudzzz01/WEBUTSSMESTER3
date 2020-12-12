<?php 

	$conn = mysqli_connect('localhost','root','','uts');

	if (!$conn) {
		echo "koneksi db gagal";
		
	}

	function login ($POST){
		global $conn;

		$username = $POST['username'];
		$password = $POST['password'];

		$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

		return query($query);


	}

	function query ($query){
		global $conn;


		$result = mysqli_query($conn,$query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
				$rows [] = $row;
				}
		return $rows;


	}

	function daftar ($POST){
		global $conn;

		$username = htmlspecialchars($POST['username']);
		$password = htmlspecialchars($POST['password']);
		$namadep = htmlspecialchars($POST['namadepan']);
		$namabel = htmlspecialchars($POST['namaBelakang']);
		$email = htmlspecialchars($POST['email']);
		$alamat = htmlspecialchars($POST['alamat']);
		$statusAkun = htmlspecialchars($POST['status']);



		$query = "INSERT INTO user (id, namadep, namabel, username, password, alamat, email, statusAkun, keaktifan) VALUES (NULL, '$namadep', '$namabel', '$username', '$password', '$alamat', '$email', '$statusAkun','');";

		$result = mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
	}

	function acc ($id){
		global $conn;
		$query = "UPDATE user SET keaktifan=1 WHERE id=$id";
		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn); 
	}

	function deacc ($id){
		global $conn;
		$query = "UPDATE user SET keaktifan=0 WHERE id=$id";
		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn); 
	}

	function hapus ($id){
		global $conn;
		$query = "DELETE FROM user WHERE id=$id";
		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn); 
	}

	function tambahInfo($POST){

		global $conn;

		$namaInfo = $username = htmlspecialchars($POST['namaInfo']);
		$isiInfo = $username = htmlspecialchars($POST['isiInfo']);
		$keterangan = $username = htmlspecialchars($POST['keterangan']);
		$img =$username = htmlspecialchars($POST['img']);
		$p = $username = htmlspecialchars($POST['p']);

		$query = "INSERT INTO info (id, namaInfo, isiInfo, keterangan,p, img) VALUES ('', '$namaInfo', '$isiInfo', '$keterangan', $p, '$img');";

		$result = mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
	}

	function hapusInfo ($idInfo){
		global $conn;
		$query = "DELETE FROM info WHERE id=$idInfo";
		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn); 
	}

	function editInfo ($POST){
		global $conn;

		$id = $username = htmlspecialchars($POST['id']);
		$namaInfo = $username = htmlspecialchars($POST['namaInfo']);
		$isiInfo = $username = htmlspecialchars($POST['isiInfo']);
		$keterangan = $username = htmlspecialchars($POST['keterangan']);
		$img =$username = htmlspecialchars($POST['img']);
		$p = $username = htmlspecialchars($POST['p']);

		

		// $query = "INSERT INTO info (id, namaInfo, isiInfo, keterangan) VALUES ('', '$namaInfo', '$isiInfo', '$keterangan');";

		$query = "UPDATE info SET namaInfo = '$namaInfo',
		isiInfo = '$isiInfo',
		keterangan = '$keterangan',
		 img = '$img',
		  p=$p WHERE id=$id";

		$result = mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
	}

 ?>