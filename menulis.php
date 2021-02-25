<?php
session_start();
//menghubungkan database
include "koneksi.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menulis</title>
	<?php include "link.php"; ?>
</head>
<body>
<div class="container">
<div class="row">
	<h1 class="text-center">Menulis</h1>
	<hr>
	<a href="index.php" class="btn btn-default">Kembali</a>
	<form method="post" enctype="multipart">
		<div class="form_group">
		<label>Nama Penulis</label>
		<input type="text" name="nama" class="form-control">
		</div>
		<div class="form_group">
		<label>Judul</label>
		<input type="text" name="judul" class="form-control">
		<br>
		</div>
		<div class="form_group">
		<label><b>SILAHKAN MENULIS</b></label>
		<textarea style="height: 700px; border-color: blue;" type="text" name="isi"
		class="form-control"></textarea>
		</div>
		<br>
		<button class="btn btn-primary"  name="save">Simpan</button>
	</form>
	<?php 
	if (isset($_POST['save']))
	{
		$koneksi->query("INSERT INTO isi (penulis_isi,judul_isi,isi_isi) VALUES('$_POST[nama]','$_POST[judul]','$_POST[isi]')");
		echo "<div class='alert alert-info'>Berhasil menulis</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php'>";
	}
	?>
	</div>
</div>
</body>
</html>