<?php
	include "../../../config.php";

	$id_unit_kerja = $_GET['id_unit_kerja'];

	$nama_unit_kerja = $_POST['nama_unit_kerja'];

	mysqli_query($conn,"update unit_kerja set nama_unit_kerja='$nama_unit_kerja' where id_unit_kerja='$id_unit_kerja'");


	session_start();
	$id 	= $_SESSION['id_user'];
	  mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Unit Kerja', NOW())");

	header('location:../../?hal=master_unit_kerja');

?>
