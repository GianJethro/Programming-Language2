<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
 
// Ambil data berdasarkan ID
$id= $_GET['id'];
 
// Perintah delete data berdasarkan NPM Mahasiswa
$query=mysqli_query($con,"DELETE FROM daftar nilai WHERE id=$id")or die(mysql_error());
 

header('location:latihan13.php');
?>