<?php
	include "../../../config.php";

	$id_pangkat = $_GET['id_pangkat'];

	$nama_pangkat = $_POST['nama_pangkat'];
  $gaji = $_POST['gaji'];

	mysqli_query($conn,"update pangkat set nama_pangkat='$nama_pangkat', gaji='$gaji' where id_pangkat='$id_pangkat'");
	session_start();
  $id 	= $_SESSION['id_user'];
  mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Edit Pangkat', NOW())");
	header('location:../../?hal=master_pangkat');

?>
