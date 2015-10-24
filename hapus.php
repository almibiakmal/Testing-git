<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "delete from user where user_id='".$id."';";
$result = mysql_query($sql);
if($result){
	header('location:view.php?status=1');
}
?>