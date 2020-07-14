<?php
	include "../../../config.php";

	$id_lokasi = $_GET['id_lokasi'];

	$nama_lokasi = $_POST['nama_lokasi'];
  $alamat = $_POST['alamat'];
  $telp = $_POST['telephone'];

	mysqli_query($conn,"update lokasi set nama_lokasi='$nama_lokasi', alamat='$alamat', telephone='$telp' where id_lokasi='$id_lokasi'");

	session_start();
	$id 	= $_SESSION['id_user'];
	mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Edit Lokasi', NOW())");

	header('location:../../?hal=master_lokasi');

?>
