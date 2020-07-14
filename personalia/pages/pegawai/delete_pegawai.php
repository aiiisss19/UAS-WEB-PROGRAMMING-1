<?php
include "../../../config.php";
session_start();
$id 	= $_SESSION['id_user'];

$mySql = "UPDATE pegawai SET deleted = 1 WHERE nip='".$_GET['nip']."'";
$myQry = mysqli_query($conn, $mySql);

$mySql1 = "UPDATE sk_kerja SET deleted = 1 WHERE nip='".$_GET['nip']."'";
$myQry1 = mysqli_query($conn, $mySql1);

mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Hapus Pegawai', NOW())");
mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Hapus SK Kerja', NOW())");
header('location:../../?hal=pegawai');
?>
