<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: tampil-pemain.php");
} 

?>

<?php

$kode=$_POST['kode'];
$nama=$_POST['nama'];
$status=$_POST['status'];
$usia=$_POST['usia'];
$klub=$_POST['klub'];
$negara=$_POST['negara'];
$harga=$_POST['harga'];

include "koneksi.php";

$simpan=$koneksi->query("insert into pemain (kode,nama,status,usia,klub,negara,harga)
						values('$kode', '$nama', '$status','$usia','$klub','$negara','$harga')");

if($simpan==true){

	header("location:tampil-pemain.php?pesan=inputberhasil");
} else{
	echo "Eror";
}

?>