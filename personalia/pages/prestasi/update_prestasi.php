<?php

include "../../../config.php";
session_start();
$id 	= $_SESSION['id_user'];

$id_prestasi = $_GET['id_prestasi'];
$prestasi = $_POST['prestasi'];

$sqlPrestasi = "UPDATE PRESTASI SET nama_prestasi='$prestasi', updated_by='$id', updated_at=NOW() WHERE id_prestasi='$id_prestasi'";
$simpanPrestasi = mysqli_query($conn, $sqlPrestasi);

mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Edit Prestasi', NOW())");
header('location:../../?hal=prestasi');

 ?>
