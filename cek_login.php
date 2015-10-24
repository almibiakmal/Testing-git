<?php
session_start();

if(!isset($_SESSION['valid_user']) || empty($_SESSION['valid_user'])){
	header('location:login.php');
}
?>