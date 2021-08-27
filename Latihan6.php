<h1>Input Dosen</h1>

<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();

// Perintah insert data ke Database
if(isset($_POST['proses']))
{
$query=mysqli_query($con,"insert into dosen values(
'".$_POST['Kode_Dosen']."',
'".$_POST['Nama']."'
)");

header('location:latihan5.php');
}
?>
<form action="" method="POST">
Kode Dosen <br>
<input type="text" name="Kode_Dosen"><br>
Nama <br>
<input type="text" name="Nama"><br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='button' onclick=location.href='latihan5.php' value='Batal' />
</form>