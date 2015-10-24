<?php
include 'koneksi.php';

$user = $_POST['username'];
$pass = $_POST['password'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$agama = $_POST['agama'];
$nohp = $_POST['no_hp'];

if(empty($user) || empty($pass) || empty($fullname) || empty($email) || empty($agama) || empty($no_hp)){
	echo "Silahkan lengkapi data anda.";
}

$sql = "insert into user values ('','".$user."','".$pass."','".$fullname."','".$email."','".$agama."',".$nohp.")";
$result = mysql_query($sql);

if($result){
	header('location:index.php?message=sukses');
}

?>