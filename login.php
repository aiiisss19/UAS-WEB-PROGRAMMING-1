<?php
include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = "select * from user where username='$username' and password='$password'";
$result = mysqli_query($conn, $login);
$cek = mysqli_num_rows($result);

if($cek > 0){
	$c = mysqli_fetch_array($result, MYSQLI_ASSOC);
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['id_user'] = $c['id_user'];
	$_SESSION['nama'] = $c['nama'];
	$_SESSION['level'] = $c['level'];
	$_SESSION['status'] = "login";
	if($c['level']=="admin"){
		header("location:admin/?hal=dashboard");
	}elseif($c['level']=="personalia"){
		header("location:personalia/?hal=dashboard");
	}else{
		header("location:direktur/?hal=dashboard");
	}
}
	else{
	header("location:index.php");
}

?>
