<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
 
// Ambil data berdasarkan Kode Mata Kuliah
$kode_mk= $_GET['Kode_Matkul'];
 
// Perintah delete data berdasarkan Kode Mata Kuliah
$query=mysqli_query($con,"DELETE FROM Mata_Kuliah WHERE Kode_Matkul=$Kode_Matkul")or die(mysql_error());
 

header('location:latihan9.php');
?>