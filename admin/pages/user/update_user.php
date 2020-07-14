<?php
	include "../../../config.php";

	$id_user=$_GET['id_user'];

	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$level=$_POST['level'];

	mysqli_query($conn,"update user set nama='$nama', username='$username', level='$level' where id_user='$id_user'");
	// header('location:/delta/admin/?hal=user');
	session_start();
	$id 	= $_SESSION['id_user'];
	mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Edit User', NOW())");

	header('location:../../?hal=user');
?>
