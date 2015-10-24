<?php
include 'cek_login.php';
?>
<html>
<head>
	<title>Index</title>
</head>
<body>
	<h1>Input Data</h1>
	<?php
		if(!empty($_GET['message']) && $_GET['message'] == 'sukses'){
			echo "<font color='green'><b>Data tersimpan.</b></font><br>";
		}
		
		echo "Selamat datang ".$_SESSION['valid_user'].".";
	?>
	<form action="insert.php" method="post">
		<table>
			<tr>
				<td><b>Username</b></td>
				<td><input type="text" name="username"/></td>
			</tr>
			<tr>
				<td><b>Password</b></td>
				<td><input type="password" name="password"/></td>
			</tr>
			<tr>
				<td><b>Fullname</b></td>
				<td><input type="text" name="fullname"/></td>
			</tr>
			<tr>
				<td><b>Email</b></td>
				<td><input type="email" name="email"/></td>
			</tr>
			<tr>
				<td><b>Agama</b></td>
				<td><input type="text" name="agama"/></td>
			</tr>
			<tr>
				<td><b>Nomor HP</b></td>
				<td><input type="text" name="no_hp"/></td>
			</tr>
			<tr align="right">
				<td colspan=3><input type="submit" name="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<a href="view.php">Lihat Data</a> || <a href="logout.php">Log Out</a>
</body>
</html>