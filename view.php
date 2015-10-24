<?php
include 'koneksi.php';
include 'cek_login.php';
?>

<html>
<head>
	<title>View Data</title>
</head>
<body>
	<h1>Data User</h1>
	<?php
		if(!empty($_GET['status'])){
			switch($_GET['status']){
				case 1:
					echo "<font color='red'><b><h4>Delete succes.</h4></b></font>";
				break;
				case "sukses":
					echo "<font color='green'><b><h4>Update succes.</h4></b></font>";
				break;
			}
			
		}
	?>
	<a href="index.php">+ Tambah Data</a>
	
	<table border=1 cellspacing="0" cellpadding="5">
	<br>
		<thead>
			<tr>
				<td>No.</td>
				<td>Username</td>
				<td>Password</td>
				<td>Fullname</td>
				<td>Email</td>
				<td>Agama</td>
				<td>Nomor HP</td>
				<td>Opsi</td>
			</tr>
		</thead>
		<tbody>
				<?php
					$sql = "select * from user;";
					$result = mysql_query($sql);
					$no = 1;
					while($data = mysql_fetch_array($result)){
						echo "<tr>
								<td>".$no."</td>".
								"<td>".$data['username']."</td>".
								"<td>".$data['password']."</td>".
								"<td>".$data['fullname']."</td>".
								"<td>".$data['email']."</td>".
								"<td>".$data['agama']."</td>".
								"<td>".$data['no_hp']."</td>".
								"<td><a href='edit.php?id=".$data['user_id']."'>Edit</a> || <a href='hapus.php?id=".$data['user_id']."'>Hapus</a>";
					$no++;
						echo"</tr>";
					}
				?>
			
		</tbody>
	</table>
	<a href="index.php"> X Back</a>
</body>
</html>