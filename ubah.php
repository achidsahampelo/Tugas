<?php 

	include 'koneksi.php';

	$ambil = $koneksi->query("SELECT * FROM mahasiswa WHERE no='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();

 ?>
<h1>Halaman Ubah Data</h1>

<form method="post" enctype="multipart/form-data">
	<div>
		<label>Nama :</label>
		<input type="text" name="nama" value="<?php echo $pecah['nama']; ?>">
	</div><br>
	<div>
		<label>NIM :</label>
		<input type="text" name="nim" value="<?php echo $pecah['nim']; ?>">
	</div><br>
	<div>
		<label>Jenis Kelamin :</label>
		<select name="jk">
			<option>Laki - Laki</option>
			<option>Perempuan</option> 
		</select>
	</div><br>

	<button name="change">Ubah</button>
	
</form>

<?php 

	if (isset($_POST['change'])) 
	{
		$koneksi->query("UPDATE mahasiswa SET nama='$_POST[nama]',
			nim='$_POST[nim]',jenis_kelamin='$_POST[jk]'
			WHERE no='$_GET[id]'");

			echo "<script>alert('Data Berhasil Di Ubah');</script>";
			echo "<script>location='index.php';</script>";
}
 ?>



 <a href="index.php">Kembali</a>