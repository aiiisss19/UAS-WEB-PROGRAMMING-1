<?php
	include "../../../config.php";
	session_start();
	$id 	= $_SESSION['id_user'];

  // informasi pegawai
  $nip = $_GET['nip'];
  $nama_prestasi = $_POST['prestasi'];

  $sqlPrestasi = "INSERT INTO prestasi(nip, nama_prestasi, tanggal_prestasi, created_by, created_at, updated_by, updated_at)
  VALUES('$nip', '$nama_prestasi', NOW(), '$id', NOW(), '$id', NOW())";
  $simpanPrestasi = mysqli_query($conn, $sqlPrestasi);


	mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Tambah Prestasi', NOW())");
  header('location:../../?hal=prestasi');
?>
