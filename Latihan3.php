<h1>Ubah Data Mahasiswa</h1>

<?php
// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
$npm= $_GET['NPM'];

// Mengambil data dari Database
$query=mysqli_query($con,"SELECT * FROM mhs WHERE npm='$npm'")or die(mysql_error());
while($data=mysqli_fetch_array($query)){

// Perintah update ke Database
if(isset($_POST['proses']))
{
$nama= $_POST['nama'];
$query=mysqli_query($con,"UPDATE mhs SET npm='$npm', nama='$nama' WHERE npm='$npm'");
header('location:latihan1.php');
}

?>

<form action="" method="POST">
NPM <br>
<input type="text" name="npm" value="<?php echo $data['npm'] ?>" disabled><br>
Nama <br>
<input type="text" name="nama" value="<?php echo $data['nama'] ?>"><br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='button' onclick=location.href='latihan1.php' value='Batal' />
</form>

<?php } ?>