<h1>Ubah Data Mata Kuliah</h1>

<?php
// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
$kode_mk= $_GET['Kode_Matkul'];

// Mengambil data dari Database
$query=mysqli_query($con,"SELECT * FROM Mata_Kuliah WHERE Kode_Matkul='$Kode_Matkul'")or die(mysql_error());
while($data=mysqli_fetch_array($query)){

// Perintah update ke Database
if(isset($_POST['proses']))
{
$nama_mk= $_POST['nama_mk'];
$query=mysqli_query($con,"UPDATE mata_kuliah SET Kode_Matkul='$Kode_Matkul', Nama_Matkul='$Nama_Matkul' WHERE Kode_Matkul='$Kode_Matkul'");
header('location:latihan9.php');
}

?>

<form action="" method="POST">
Kode Mata Kuliah <br>
<input type="text" name="Kode_Matkul" value="<?php echo $data['Kode_Matkul'] ?>" disabled><br>
Nama Mata Kuliah <br>
<input type="text" name="Nama_Matkul" value="<?php echo $data['Nama_Matkul'] ?>"><br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='button' onclick=location.href='latihan9.php' value='Batal' />
</form>

<?php } ?>