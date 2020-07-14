<?php
include "../../../config.php";

$mySql = "UPDATE lokasi SET deleted=1 WHERE id_lokasi='".$_GET['id_lokasi']."'";
$myQry = mysqli_query($conn, $mySql);

session_start();
$id 	= $_SESSION['id_user'];
mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Hapus Lokasi', NOW())");

header('location:../../?hal=master_lokasi');
?>
