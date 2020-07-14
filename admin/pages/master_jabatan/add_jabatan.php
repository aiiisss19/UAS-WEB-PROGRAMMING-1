<?php
  include_once("../../../config.php");
  session_start();
	$id 	= $_SESSION['id_user'];
  $id_jabatan = $_POST['id_jabatan'];
  $nama_jabatan = $_POST['nama_jabatan'];
  $Query = mysqli_query($conn, "INSERT INTO jabatan (id_jabatan, nama_jabatan) VALUES ('$id_jabatan','$nama_jabatan')");
  mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Tambah Jabatan', NOW())");

	header('location:../../?hal=master_jabatan');

 ?>
