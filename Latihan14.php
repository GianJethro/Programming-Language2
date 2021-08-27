<h1>Input Nilai Mahasiswa</h1>

<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();

// Perintah insert data ke Database
if(isset($_POST['proses']))
{
$query=mysqli_query($con,"insert into nilai values(
'".$_POST['id']."',
'".$_POST['npm']."',
'".$_POST['Kode_Matkul']."',
'".$_POST['uts']."',
'".$_POST['uas']."',
'".$_POST['kuis']."',
'".$_POST['tugas']."',
'".$_POST['kehadiran']."',
'".$_POST['pertemuan']."'
)");

header('location:latihan13.php');
}
?>
<form action="" method="POST">
<input type="hidden" name="id">
NPM <br>
<input type="text" name="NPM"><br>
Kode Mata Kuliah <br>
<input type="text" name="KODE_MATKUL"><br>
<br>
Nilai UTS <br>
<input type="text" name="UTS"><br>
<br>
Nilai UAS <br>
<input type="text" name="UAS"><br>
<br>
Nilai Kuis <br>
<input type="text" name="KUIS"><br>
<br>
Nilai Tugas <br>
<input type="text" name="TUGAS"><br>
<br>
Jumlah Kehadiran <br>
<input type="text" name="kehadiran"><br>
<br>
Jumlah Pertemuan <br>
<input type="text" name="pertemuan"><br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='button' onclick=location.href='latihan13.php' value='Batal' />
</form>