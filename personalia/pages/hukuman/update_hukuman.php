<?php

include "../../../config.php";
session_start();
$id 	= $_SESSION['id_user'];

$id_hukuman = $_GET['id_hukuman'];
$hukuman = $_POST['hukuman'];

$sqlHukuman = "UPDATE hukuman SET nama_hukuman='$hukuman', updated_by='$id', updated_at=NOW() WHERE id_hukuman='$id_hukuman'";
$simpanHukuman = mysqli_query($conn, $sqlHukuman);

mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Edit Hukuman', NOW())");
header('location:../../?hal=hukuman');

 ?>
