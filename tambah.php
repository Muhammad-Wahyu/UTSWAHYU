<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: tampil-pemain.php");
} 

?>
<!doctype HTML>
<html>
<head>
	<title>INPUT PEMAIN</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center><h3> <b>Input Data Pemain</b></h3></center>
				<br>
				<form action="proses-tambah.php" method="POST">
					<div class="form-group">
						<label for="kode">Kode :</label>
						<input type="number" name="kode" class="form-control">
					</div>

					<div class="form-group">
						<label for="nama">Nama Pemain :</label>
						<input type="text" name="nama" class="form-control">
					</div>
	
					<div class="form-group">
						<label for="status">Status Pemain</label>
						<select name="status" class="form-control">
						<option value="aktif">Aktif</option>
						<option value="pensiun">Pensiun</option>
						</select>
					</div>

				     <div class="form-group">
						<label for="nama">Usia :</label>
						<input type="number" name="usia" class="form-control">
					</div>

					<div class="form-group">
						<label for="klub">Klub Saat ini :</label>
						<input type="text" name="klub" class="form-control">
						
					</div>

					<div class="form-group">
						<label for="negara">Kewarganegaraan :</label>
						<input type="text"name="negara" class="form-control">
						
					</div>
					<div class="form-group">
						<label for="harga">Market Value :</label>
						<input type="text" name="harga" class="form-control">
					</div>

					<input type="submit" name="kirim" value="Simpan" class="btn btn-info">
					<input type="reset" name="kosongkan" value="kosongkan" class="btn btn-danger">

		<script src="bootstrap/js/jQuery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>