<?php
  include_once("../../../config.php");

  $id_lokasi = $_POST['id_lokasi'];
  $nama_lokasi = $_POST['nama_lokasi'];
  $alamat = $_POST['alamat'];
  $telp = $_POST['telephone'];
  $Query = mysqli_query($conn, "INSERT INTO lokasi (id_lokasi, nama_lokasi, alamat, telephone) VALUES ('$id_lokasi','$nama_lokasi', '$alamat', '$telp')");

  session_start();
  $id 	= $_SESSION['id_user'];
  mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Tambah Lokasi', NOW())");

	header('location:../../?hal=master_lokasi');

 ?>
