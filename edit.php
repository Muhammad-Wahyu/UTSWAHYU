<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: tampil-pemain.php");
} 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Mengedit inputan form</title>

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center><h3> <b>Edit Data Pemain</b></h3></center>
				<br>
			<form action="proses-edit.php" method="POST">

				<?php
				$kode=$_GET['kode'];
				include "koneksi.php";
				$tampil=$koneksi->query("select * from pemain where kode = '$kode'");
				$row=$tampil->fetch_assoc();
			
				?>

				<div class="form-group">
					<label for="kode"><b>Kode :</b></label>
					<input type="hidden" name="pemain_id" value="<?php  echo $row['pemain_id']?>" class="form-control">
					<input type="number" name="kode" value="<?php  echo $row['kode']?>" class="form-control">
					
				</div>

				<div class="form-group">
					<br>
					<label for="nama"><b>Nama Pemain :</b></label>
					<input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
					<br>
				</div>

				<div class="form-group">
					<br>
					<label for="status"><b>Status Pemain</b></label>
					
					<select name="status" class="form-control">
						<option value="<?php  echo $row['status']?>" selected><?php  echo $row['status']?></option>
						<option value="aktif">Aktif</option>
						<option value="pensiun">Pensiun</option>
						<br>
				</select>
			</div>

			<div class="form-group">
				<br>
					<label for="usia"><b>Usia :</b></label>
					<input type="number" name="usia" value="<?php  echo $row['usia']?>" class="form-control">
					<br>
				</div>

			<div class="form-group">
					<br>
					<label for="klub"><b>Klub Saat ini :</b></label>
					<input type="text" name="klub" value="<?php  echo $row['klub']?>" class="form-control">
					<br>
				</div>

				<div class="form-group">
					<br>
					<label for="negara"><b>Kewarganegaraan :</b></label>
					<input type="text" name="negara" value="<?php echo $row['negara']?>" class="form-control">
					<br>
				</div>

				<div class="form-group">
				<br>
					<label for="harga"><b>Market Value :</b></label>
					<input type="text" name="harga" value="<?php echo $row['harga']?>" class="form-control">
					<br>
				</div>


			<input type="submit" name="kirim" value="Ubah" class="btn btn-info" >

<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>