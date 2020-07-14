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

		case 'pegawai':
			$hlm="include 'pages/pegawai/pegawai.php';";
			break;

		case 'detail_pegawai':
			$hlm="include 'pages/pegawai/detail_pegawai.php';";
			break;

		case 'sk_kerja':
			$hlm="include 'pages/sk_kerja/sk_kerja.php';";
			break;

		case 'prestasi':
			$hlm="include 'pages/prestasi/prestasi.php';";
			break;

		case 'pilih_prestasi':
			$hlm="include 'pages/prestasi/list_pegawai.php';";
			break;

		case 'hukuman':
			$hlm="include 'pages/hukuman/hukuman.php';";
			break;

		case 'pilih_hukuman':
			$hlm="include 'pages/hukuman/list_pegawai.php';";
			break;
	}

	$content=$hlm;

 ?>
