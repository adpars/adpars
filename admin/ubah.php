<?php
session_start();
//menghubungkan database
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah</title>
	<!--menghubungkan bootstrap.css-->
	<?php include "link.php"; ?>
</head>
<body>
<div class="container">
<div class="row">
	<h1 class="text-center">Menulis</h1>
	<hr>
	<a href="index.php" class="btn btn-default">Kembali</a>
	<!--mengambil data dari isi sesuai id-->
	<?php $ambil = $koneksi->query("SELECT * FROM isi WHERE id_isi='$_GET[id]'"); ?>
			<?php $pecah = $ambil->fetch_assoc(); ?>
			<?php
			echo "<pre>";
print_r($pecah);
echo "</pre>";
?>
	<form method="post" enctype="multipart">
		<div class="form_group">
		<label>Nama Penulis</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah['penulis_isi'] ?>">
		</div>
		<div class="form_group">
		<label>Judul</label>
		<input type="text" name="judul" class="form-control" value="<?php echo $pecah['judul_isi'] ?>">
		<br>
		</div>
		<div class="form_group">
		<label><b>SILAHKAN MENULIS</b></label>
		<textarea style="height: 700px; border-color: blue;" type="text" name="isi"
		class="form-control"><?php echo $pecah['isi_isi']; ?></textarea>
		</div>
		<br>
		<button class="btn btn-primary"  name="save">Simpan</button>
	</form>
	<?php
	if (isset($_POST['save'])) {
		//mengupdate database isi
		$koneksi->query("UPDATE isi SET penulis_isi='$_POST[nama]',judul_isi='$_POST[judul]',isi_isi='$_POST[isi]' WHERE id_isi='$_GET[id]'");
		echo "<div class='alert alert-info'>Tulisan Berubah</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php'>";
	};
	?>
</body>
</html>