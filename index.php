<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tulis</title>
	<?php include 'link.php' ?>
</head>
<body>
<div class="container">
	<div class="row">
		<h1 class="text-center">Tulis</h1>
		<hr>
		<a href="menulis.php" class="btn btn-primary">Menulis</a>
		<br>
		<?php $ambil = $koneksi->query("SELECT * FROM isi"); ?>
		<?php while ($pecah = $ambil->fetch_assoc()) {?>
			<br>
			<div class="thumbnail" style="height: auto;">
				<h2 class="text-center"><?php echo $pecah['judul_isi']; ?></h2>
				<h5 style="margin-left: 80px;">Penulis : <?php echo $pecah['penulis_isi']; ?></h5>
				<br>
				<h4 class="text-justify" style="margin-left: 40px; margin-right: 40px;"><p><?php echo $pecah['isi_isi']; ?></p></h4>
			</div>
		<?php  } ?>
	</div>
</div>
</body>
</html>