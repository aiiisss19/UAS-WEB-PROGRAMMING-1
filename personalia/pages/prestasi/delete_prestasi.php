<?php
include "../../../config.php";
session_start();
$id 	= $_SESSION['id_user'];

$id_prestasi = $_GET['id_prestasi'];

$sqlPrestasi = "UPDATE prestasi SET deleted=1 WHERE id_prestasi='$id_prestasi'";
$simpanPrestasi = mysqli_query($conn, $sqlPrestasi);

mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Hapus Prestasi', NOW())");
header('location:../../?hal=prestasi');
?>
