<?php
include 'koneksi.php';
$id = $_GET["id"];

$query_delete_siswa = "DELETE FROM siswa WHERE id_spp='$id'";
$hasil_query_siswa = mysqli_query($koneksi, $query_delete_siswa);

if (!$hasil_query_siswa) {
  die("Gagal menghapus data siswa: " . mysqli_errno($koneksi) .
    " - " . mysqli_error($koneksi));
}

// Hapus data spp
$query_delete_spp = "DELETE FROM spp WHERE id_spp='$id'";
$hasil_query_spp = mysqli_query($koneksi, $query_delete_spp);

if (!$hasil_query_spp) {
  die("Gagal menghapus data spp: " . mysqli_errno($koneksi) .
    " - " . mysqli_error($koneksi));
}

echo "<script>alert('Data berhasil dihapus.');window.location='spp.php';</script>";
