<?php
include 'koneksi.php';
$ambil = $koneksi->query("SELECT * FROM isi WHERE id_isi='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
//mengapus data dari database isi yang datanya ber-id yang ada
$koneksi->query("DELETE FROM isi WHERE id_isi='$_GET[id]'");
//memberi pop-up ketika program dijalankan
echo "<script>alert('Tulisan Terhapus');</script>";
echo "<script>location = 'index.php'; </script>";