<?php
  include_once("../../../config.php");

  $id_unit_kerja = $_POST['id_unit_kerja'];
  $nama_unit_kerja = $_POST['nama_unit_kerja'];
  $Query = mysqli_query($conn, "INSERT INTO unit_kerja (id_unit_kerja, nama_unit_kerja) VALUES ('$id_unit_kerja','$nama_unit_kerja')");
  session_start();
  $id 	= $_SESSION['id_user'];
  mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Tambah Unit Kerja', NOW())");
	header('location:../../?hal=master_unit_kerja');

 ?>
