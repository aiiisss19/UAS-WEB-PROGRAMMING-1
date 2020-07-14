<?php
	include "../../../config.php";
	session_start();
	$id 	= $_SESSION['id_user'];
	$id_jabatan = $_GET['id_jabatan'];

	$nama_jabatan = $_POST['nama_jabatan'];

	mysqli_query($conn,"update jabatan set nama_jabatan='$nama_jabatan' where id_jabatan='$id_jabatan'");
	  mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Edit Jabatan', NOW())");
	// header('location:/delta/admin/?hal=master_jabatan');
	header('location:../../?hal=master_jabatan');

?>
