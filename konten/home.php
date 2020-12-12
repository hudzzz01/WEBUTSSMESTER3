	
<?php 

require 'function.php';

$query = "SELECT * FROM info WHERE p = 0";
	$info = query ($query);

 ?>

 <style type="text/css"

 >
 	img	{
 		width: 40%;
 		display: block;
 		margin-right: auto;
 		margin-left: auto;
 	}

 </style>

 	<img src="https://lh3.googleusercontent.com/proxy/QrfcaJo9wss7QexvKkuVZLHo7Bmrs83UUAnmEnzQ-4oe9tDmBEnMVmz0blV5GDLjEvpBpCWLUqDE7EL19TjoFq1RddBQ8erNO5imKHLBkRAidB0HMniU3eC9jG_7Grc9T0l9" >


	<table  id="tabelUmum" style="border: 1px dashed black;">
				
					<h3>INFORMASI SEPUTAR FAKULTAS SAINS DAN TEKNOLOGI</h3>
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