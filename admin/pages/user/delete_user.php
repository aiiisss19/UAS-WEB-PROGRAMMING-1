<?php
include "../../../config.php";
session_start();
$id 	= $_SESSION['id_user'];
$mySql = "UPDATE user SET deleted=1 WHERE id_user='".$_GET['id_user']."'";
$myQry = mysqli_query($conn, $mySql);
mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Hapus User', NOW())");
// header('location:/delta/admin/?hal=user');
header('location:../../?hal=user');
?>
