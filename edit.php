<?php
include 'koneksi.php';
include 'cek_login.php';

?>
<html>
<head>
	<title>Edit</title>
</head>
<body>
<?php
	$id = $_GET['id'];
	$sql = "select * from user where user_id='$id'";
	$result = mysql_query($sql);
	$data = mysql_fetch_array($result);
?>
<h1>Edit Data</h1>
<?php
	if(!empty($_GET['error']) && $_GET['error'] == 101){
		echo "Data masih ada yang kosong.";
	}
?>
	<form action="update.php" method="post">
	<input type="hidden" name="user_id" value="<?php echo $id?>">
		<table>
			<tr>
				<td><b>Username</b></td>
				<td><input type="text" name="username" value="<?php echo $data['username']?>" disabled/></td>
			</tr>
			<tr>
				<td><b>Password</b></td>
				<td><input type="password" name="password" value="<?php echo $data['password']?>"/></td>
			</tr>
			<tr>
				<td><b>Fullname</b></td>
				<td><input type="text" name="fullname" value="<?php echo $data['fullname']?>"/></td>
			</tr>
			<tr>
				<td><b>Email</b></td>
				<td><input type="email" name="email" value="<?php echo $data['email']?>"/></td>
			</tr>
			<tr>
				<td><b>Agama</b></td>
				<td><input type="text" name="agama" value="<?php echo $data['agama']?>"/></td>
			</tr>
			<tr>
				<td><b>Nomor HP</b></td>
				<td><input type="text" name="no_hp" value="<?php echo $data['no_hp']?>"/></td>
			</tr>
			<tr align="right">
				<td colspan=3><input type="submit" name="submit" value="Simpan"></td>
			</tr>
		</table>
		<a href="view.php">#Lihat Data</a>
	</form>
</body>
</html>