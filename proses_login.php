<?php
include 'koneksi.php';
session_start();

$user = $_POST['username'];
$pass = $_POST['password'];

if(empty($user) && empty($pass)){
	header('location:login.php?error=1');
	break;
}else if(empty($pass)){
	header('location:login.php?error=2');
	break;
	}else if(empty($user)){
		header('location:login.php?error=3');
		break;
	}
	
$user_aman = mysql_real_escape_string($user);
$pass_aman = mysql_real_escape_string($pass);

$sql = "select * from user where username='".$user_aman."' && password='".$pass_aman."';";
$result = mysql_query($sql);

if(mysql_num_rows($result)==1){
	$_SESSION['valid_user'] = $user_aman;
	header('location:index.php');
}else{
	header('location:login.php?error=4');
}
?>