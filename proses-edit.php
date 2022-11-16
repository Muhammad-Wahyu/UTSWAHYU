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
$id=$_POST['pemain_id'];


include "koneksi.php";

$ubah=$koneksi->query("update pemain set kode='$kode',nama='$nama',status='$status',usia='$usia',klub='$klub',negara='$negara',harga='$harga' where pemain_id='$id'");

if($ubah==true){

	header("location:tampil-pemain.php?pesan=editberhasil");
} else{
	echo "Eror";
}

?>