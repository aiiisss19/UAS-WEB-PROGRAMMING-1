<?php
	include "../../../config.php";
	session_start();
	$id 	= $_SESSION['id_user'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$nama=$_POST['nama'];
	$level=$_POST['level'];
	mysqli_query($conn,"insert into user (username, password, nama, level) values ('$username', md5('$password'), '$nama', '$level')");
  // header('location:/delta/admin/?hal=user');
	mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Tambah User', NOW())");
	header('location:../../?hal=user');
?>
