<h1>Daftar Mata Kuliah</h1>
<table border="1 px">
<tr>
<th> Kode Mata Kuliah </th>
<th> Nama Mata Kuliah </th>
<th> Aksi </th>
</tr>

<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();

// Mengambil data dari Database
$query=mysqli_query($con,"select * from Mata_Kuliah");
while($data=mysqli_fetch_array($query)){

// Menampilkan data dari Database	
echo "<tr>";
echo "<th>"; echo $data['Kode_Matkul']; echo "</th>";
echo "<th>"; echo $data['Nama_Matkul']; echo "</th>";
echo "<th>"; echo "<a href='latihan11.php?Kode_Matkul=$data[Kode_Matkul]'>Ubah</a> | <a href='latihan12.php?kode_mk=$data[Kode_Matkul]'>Hapus</a>"; echo "</th>";
echo "</tr>";
}
?>

</table>
<br>
<input type='button' onclick=location.href='latihan10.php' value='Tambah Data' />