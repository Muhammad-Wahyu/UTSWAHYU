<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: tampil-pemain.php");
} 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DATA PEMAIN</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/style.css" rel="stylesheet">
</head>
<body>
	<style>
		body{
		background-repeat:no-repeat;
		background-size:cover;
		background-color:#f9dfdf;
}
	.navbar-inverse{
		background-color:#27605a;
		font-family:cursive;
		font-size:18px;


	}

		ul.nav-pills {
					top: 200px;
					position: fixed;
			}
		div.col-sm-8 div {
					height: 500px;
					font-size: 18px;
					padding: 30px;
		}
	</style>
</head>
<body>
	<nav class="navbar-fixed-top navbar-inverse" style=>
		<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle Nav</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><img src="th.png"></li>
		
			<li class="active"><a href="tampil-pemain.php">DATA PEMAIN</a></li>
			<li><a href="logout.php">LOGOUT</a></li>

			</ul>
		</div>
		</div>
	</nav>	
	<body>
	<nav class="navbar navbar-inverse" style=>
		<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle Nav</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><img src="images web/logo2.png"></li>
			
			<li><a href="tampil-pemain.php">DATA PEMAIN</a></li>
			<li><a href="logout.php">LOGOUT</a></li>

			</ul>
		</div>
		</div>
	</nav>	
<div class="container">
	<div class="row">
		<div class="col-md-12">	
		<h3>DATA PEMAIN</h3>
<?php

if(@$_GET['pesan']=="inputberhasil"){

?>
		<div class="alert alert-success">
					Penyimpanan Berhasil!
			</div>
<?php
}
?>

<?php

if(@$_GET['pesan']=="hapusBerhasil"){

?>
		<div class="alert alert-success">
					Data Berhasil Dihapus !
			</div>
<?php
}
?>

<?php

if(@$_GET['pesan']=="editberhasil"){

?>
		<div class="alert alert-success">
					Data Berhasil Terubah!!!
			</div>
<?php
}
?>
		



		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="list">					
			<table id="data-table" class="table table-bordered table-striped table-hover js-basic-example">
				<thead>
					<tr>
					
					<tr>
				<th>Kode</th>
				<th>Nama Pemain</th>
				<th>Status Pemain</th>
				<th>Usia</th>
				<th>Klub Saat ini</th>
				<th>Kewarganegaraan</th>
				<th>Market Value</th>
		
		<th>
					<a href ="tambah.php">
						<center><button type="add" name="btnAdd" class="btn btn-info">
							<span class=" glyphicon glyphicon-plus-sign"></span>Add
						</button></a></center></th>
					</tr>
				</thead>
				
			<?php
			include "koneksi.php";
			$sql=$koneksi->query("select * from pemain order by kode ASC");

			while($row= $sql->fetch_assoc()){
			?>
					
			<tr>
				<td><?php echo $row['kode']?> </td>
			<td><?php echo $row['nama']?></td>
			<td><?php echo $row['status']?></td>
			<td><?php echo $row['usia']?></td>
			<td><?php echo $row['klub']?></td>
			<td><?php echo $row['negara']?></td>
			<td><?php echo $row['harga']?></td>
				<td>
				<center><a href ="hapus.php? kode=<?php echo $row['kode']?>" onclick="return confirm('Apakah kamu yakin menghapus data ini?')">
					<button type="trash" name="btndrop" class="btn btn-xs btn-danger">
				<span class="glyphicon glyphicon-trash"></span>Hapus</button>

				<a href ="edit.php? kode=<?php echo $row['kode']?>">
				<button type="trash" name="btnedit" class="btn btn-xs btn-warning">
				<span class="glyphicon glyphicon-edit"></span>- Edit</button></a></a></td>
			</tr></center>
						
<?php
}
?>	
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/plugins/datatable/jquery.dataTables.js"></script>
<script src="bootstrap/plugins/datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="bootstrap/plugins/datatable/extensions/tables/jquery-datatable.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/buttons.flash.min.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/jszip.min.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/pdfmake.min.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/vfs_fonts.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/buttons.html5.min.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/buttons.print.min.js"></script>
</body>
</html>