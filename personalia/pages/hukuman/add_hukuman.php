<?php
	include "../../../config.php";

  session_start();
  $id   = $_SESSION['id_user'];

  // informasi pegawai
  $nip = $_GET['nip'];
  $nama_hukuman = $_POST['hukuman'];

  $sqlHukuman = "INSERT INTO hukuman(nip, nama_hukuman, tanggal_hukuman, created_by, created_at, updated_by, updated_at)
  VALUES('$nip', '$nama_hukuman', NOW(), '$id', NOW(), '$id', NOW())";
  $simpanHukuman = mysqli_query($conn, $sqlHukuman);

	mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Tambah Hukuman', NOW())");
  header('location:../../?hal=hukuman');
?>
