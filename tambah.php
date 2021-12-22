<?php 

	include 'koneksi.php';

 ?>
<h1>Halaman Tambah Data</h1>

<form method="post" enctype="multipart/form-data">
	<div>
		<label>Nama :</label>
		<input type="text" name="nama">
	</div><br>
	<div>
		<label>NIM :</label>
		<input type="text" name="nim">
	</div><br>
	<div>
		<label>Jenis Kelamin :</label>
		<select name="jk">
			<option>Laki - Laki</option>
			<option>Perempuan</option>
		</select>
	</div><br>

	<button name="save">Save</button>
	
</form>

<?php if (isset($_POST['save'])) 
{
	$koneksi->query("INSERT INTO mahasiswa
		(nama,nim,jenis_kelamin)
		VALUES('$_POST[nama]','$_POST[nim]','$_POST[jk]')");

	echo "<div><h2>Data Tersimpan</h2></div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php'>";
} 
?>

<a href="index.php">Kembali</a>