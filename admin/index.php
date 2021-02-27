<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost","root","","tulis");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Tulisan</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
</head>
<body>
<div class="container">
	<div class="row">
	<h1 class="text-center">Admin Tulis</h1>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Penulis</th>
				<th>Judul</th>
				<th style="padding-left: 100px;">Isi</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor=1; ?>
			<!--mengambil data dari database isi-->
			<?php $ambil = $koneksi->query("SELECT * FROM isi"); ?>
			<?php while ($pecah = $ambil->fetch_assoc()) { ?>

			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['penulis_isi']; ?></td>
				<td><?php echo $pecah['judul_isi'];  ?></td>
				<td><?php echo $pecah['isi_isi']; ?></td>
				<td><a href="ubah.php?halaman&id=<?php echo$pecah['id_isi']; ?>" class="btn btn-warning btn-sm">Ubah</a> <a href="hapus.php?halaman&id=<?php echo $pecah['id_isi']; ?>" class="btn btn-danger btn-sm">Hapus</a></td>
			</tr>
			<?php $nomor++; ?>
		<?php } ?>
		</tbody>
	</table>	
	</div>
</div>
</body>
</html>