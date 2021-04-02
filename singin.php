<?php
session_start();
if ( isset($_SESSION["login"])) {
	header("Location: master.php");
	exit;
}


require 'function/function.php';
if ( isset($_POST["login"])) {
	$user = $_POST["user"];
	$password = $_POST["password"];

$result = mysqli_query($conn, "SELECT * FROM admin WHERE user = '$user'");

	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_assoc($result);
		if( $password == $row["password"] ) {
			$_SESSION["login"] = true;
			header("Location: master.php");
			exit;
		}
	}
	$error = true;
}
?>

<<!DOCTYPE html>
<html>
<head>
	<title>Kuesioner-Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="container" style="margin-top: 100px">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<div class="panel panel-default text-center" >
			<h1><i class="glyphicon glyphicon-user"></i></h1>
			<h4> Login Master  </h4>
				<div class="panel-body">

				<?php if ( isset($error)) { ?>
					<div class="alert alert-warning alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <strong>Warning!</strong> User / passwor salah.
					</div>
				<?php } ?>




					<form action="" method="post">
						<div class="form-group">
						 <input type="text" name="user" class="form-control" placeholder="user">
						</div>
						<div class="form-group">
						 <input type="password" name="password" class="form-control" placeholder="password">
						</div>
						
						<div class="form-group">
						 <input type="submit" name="login" class="btn btn-success btn-lg btn-block" value="Login" >
						</div>	
					</form>
					
				</div>
				
			</div>
			
		</div>
		
	</div>

</div>


</body>
</html>