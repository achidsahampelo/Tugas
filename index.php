<?php 

	include 'koneksi.php';

 ?>

 <table border="1">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>Nama</th>
 			<th>NIM</th>
 			<th>Jenis Kelamin</th>
 			<th>Aksi</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php $nomor=1; ?>
 		<?php $ambil=$koneksi->query("SELECT * FROM mahasiswa"); ?>
 		<?php while($pecah = $ambil->fetch_assoc()){ ?>
 		<tr>
 			<td><?php echo $nomor; ?></td>
 			<td><?php echo $pecah['nama']; ?></td>
 			<td><?php echo $pecah['nim']; ?></td>
 			<td><?php echo $pecah['jenis_kelamin']; ?></td>
 			<td> 	<a href="hapus.php?hapus&id=<?php echo $pecah['no']; ?>">Hapus</a> |
 					<a href="ubah.php?ubah&id=<?php echo $pecah['no']; ?>">Ubah</a>
 			</td>
 		</tr>
 		<?php $nomor++; ?>
 		<?php } ?>
 	</tbody>

 </table>
 <br>
 	<a href="tambah.php">Tambah Data</a>