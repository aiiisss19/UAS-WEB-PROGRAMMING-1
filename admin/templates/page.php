<?php

	$hlm='';
	if (isset($_GET['hal'])) {
		$hlm=$_GET['hal'];
	}

	$current_page=$hlm;

	switch ($hlm) {
		case 'dashboard':
			$hlm="include 'pages/dashboard.php';";
			break;

		case 'user':
			$hlm="include 'pages/user/user.php';";
			break;

		case 'master_jabatan':
			$hlm="include 'pages/master_jabatan/master_jabatan.php';";
			break;

		case 'master_pangkat':
			$hlm="include 'pages/master_pangkat/master_pangkat.php';";
			break;

		case 'master_unit_kerja':
			$hlm="include 'pages/master_unit_kerja/master_unit_kerja.php';";
			break;

		case 'master_lokasi':
			$hlm="include 'pages/master_lokasi/master_lokasi.php';";
			break;
	}

	$content=$hlm;

 ?>
