<h1>Ubah Daftar Nilai Mahasiswa</h1>

<?php
// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();

$id= $_GET['id'];

// Mengambil data dari Database
$query=mysqli_query($con,"SELECT * FROM daftar nilai WHERE id='$id'")or die(mysql_error());
while($data=mysqli_fetch_array($query)){


// Perintah update ke Database
if(isset($_POST['proses']))
{

$uts= $_POST['UTS'];
$uas= $_POST['UAS'];
$kuis= $_POST['KUIS'];
$tugas= $_POST['TUGAS'];
$kehadiran= $_POST['kehadiran'];
$pertemuan= $_POST['pertemuan'];

$query=mysqli_query($con,"UPDATE daftar nilai SET uts='$uts', uas='$uas', kuis='$kuis', tugas='$tugas', kehadiran='$kehadiran', pertemuan='$pertemuan' WHERE id='$id'");
header('location:latihan13.php');
}

?>


<form action="" method="POST">
NPM <br>
<input type="text" name="npm" value="<?php echo $data['npm'] ?>" disabled><br>
Kode Mata Kuliah <br>
<input type="text" name="Kode_Matkul" value="<?php echo $data['Kode_Matkul'] ?>" disabled><br>
<br>
Nilai UTS <br>
<input type="text" name="UTS" value="<?php echo $data['UTS'] ?>"><br>
<br>
Nilai UAS <br>
<input type="text" name="UAS" value="<?php echo $data['UAS'] ?>"><br>
<br>
Nilai Kuis <br>
<input type="text" name="KUIS" value="<?php echo $data['KUIS'] ?>"><br>
<br>
Nilai Tugas <br>
<input type="text" name="TUGAS" value="<?php echo $data['TUGAS'] ?>"><br>
<br>
Jumlah Kehadiran <br>
<input type="text" name="kehadiran" value="<?php echo $data['kehadiran'] ?>"><br>
<br>
Jumlah Pertemuan <br>
<input type="text" name="pertemuan" value="<?php echo $data['pertemuan'] ?>"><br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='button' onclick=location.href='latihan13.php' value='Batal' />
</form>

<?php } ?>