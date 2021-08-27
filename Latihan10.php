<h1>Input Mata kuliah</h1>

<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();

// Perintah insert data ke Database
if(isset($_POST['proses']))
{
$query=mysqli_query($con,"insert into Mata_Kuliah values(
'".$_POST['Kode_Matkul']."',
'".$_POST['Nama_Matkul']."'
)");

header('location:latihan9.php');
}
?>
<form action="" method="POST">
Kode Mata Kuliah <br>
<input type="text" name="Kode_Matkul"><br>
Nama Mata Kuliah <br>
<input type="text" name="Nama_Matkul"><br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='button' onclick=location.href='latihan9.php' value='Batal' />
</form>