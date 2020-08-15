<!DOCTYPE html>
<html>
<head>
	<title >LOGIN</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" href="js/bootstrap.min.js"></script>
</head>
<body background="photo 1.jpg" ><div>
		
</div>
		<div class="container" background="photo 1.jpg" > 
				<div class="row">
					<div class="col-md-4 col-md-4 col-xs-12"></div>
				</div>
				<div>
					<form id="log" action="" method="post" ><h2 id="login" style="text-align: center;">Login form</h2>
						<div class="form-group">
							<label>Username</label>
						
						<input type="text" name="username" class="form-control" placeholder="Username"></div>
						<div class="form-group">
							<label>password</label>
							
							<input type="password" name="password" class="form-control" placeholder="password"></div>
						<button type="login" name="submit" class="btn-success btn-block">login</button>

					</form>

				</div>
		</div>

</body>
</html>


<?php

include 'connection.php';

session_start();

if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql="select * from login where username=:username and password=:password";
	$query=$conn->prepare($sql);
	$hu=$query->execute(array(":username"=>$username, ":password"=>$password));
	$count=$query->rowCount();
	if($count>0){
		$data=$query->fetch();

		$_SESSION["username"]=$username;
		$_SESSION["role"]=$data["role"];
		header("location:view.php");
	}
}







?>