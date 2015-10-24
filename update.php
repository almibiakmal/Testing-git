<?php
include 'koneksi.php';

$id = $_POST['user_id'];
$user = $_POST['username'];
$pass = $_POST['password'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$agama = $_POST['agama'];
$no_hp = $_POST['no_hp'];

if(empty($pass) || empty($fullname) || empty($email) || empty($agama) || empty($no_hp)){
	header('location:edit.php?error=101');
}

$sql = "UPDATE `user` SET `password`='$pass',`fullname`='$fullname',`email`='$email',`agama`='$agama',`no_hp`='$no_hp' WHERE user_id='$id'";
$result = mysql_query($sql);

if($result){
	header('location:view.php?status=sukses');
}
?>