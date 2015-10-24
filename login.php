<?php
if (!empty($_SESSION['valid_user'])){
	header('location:index.php');
}
?>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body style="background:#eee;">
<?php
if(!empty($_GET['error'])){
	switch($_GET['error']){
		case 1:
			echo "<font color=\"red\"><b>Username dan Password anda kosong.</b></font>";
		break;
		case 2:
			echo "<font color=\"red\"><b>Password anda kosong.</b></font>";
		break;
		case 3:
			echo "<font color=\"red\"><b>Username anda kosong.</b></font>";
		break;
		case 4:
			echo "<font color=\"red\"><b>Username dan Password anda tidak terdaftar.</b></font>";
		break;
		default:
			echo "JANGAN BANDEL";
		break;
	};
}
?>
	<div class="container">
			<p><br/></p>
			<div class="row">
				<div class="col-md-8"></div>
				<div class="col-md-4">
					<div class= "panel panel-default">
						<div class="panel-body">
							<div class="page-header">
								<h1><b>Login Area</b></h1>
							</div> 	
							    <form role="form" action="proses_login.php" method="post">
									<div class="form-group">
										<label for="exampleInputEmail1">Username</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
											<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter username" name="username">
										</div>
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Password</label>										
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
											<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
										</div>
									</div>
									<hr/>
									<button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span>Back</button>
									<button type="submit" class="btn btn-primary" name="submit"><span class="glyphicon glyphicon-lock"></span>Login</button>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>


