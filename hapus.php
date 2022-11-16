<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index1.php");
} 

?>
<?php

$kode=$_GET['kode'];
include "koneksi.php";

$hapus=$koneksi->query("delete from pemain where kode='$kode'");

if($hapus==true){

		header("location:tampil-pemain.php?pesan=hapusBerhasil");
}else {
	echo"error";
}



?>
