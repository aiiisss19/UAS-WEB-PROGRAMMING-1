<?php
  include_once("../../../config.php");

  $id_pangkat = $_POST['id_pangkat'];
  $nama_pangkat = $_POST['nama_pangkat'];
  $gaji = $_POST['gaji'];
  $Query = mysqli_query($conn, "INSERT INTO pangkat (id_pangkat, nama_pangkat, gaji) VALUES ('$id_pangkat','$nama_pangkat', '$gaji')");
  session_start();
  $id 	= $_SESSION['id_user'];
  mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Tambah Pangkat', NOW())");
	header('location:../../?hal=master_pangkat');

 ?>
