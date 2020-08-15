<!DOCTYPE html>
<html lang="en">
<head>
	<title> Registration form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" href="js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<h2>registration form</h2>
		
		<form id="name" action="" method="post" onsubmit="return go">
		<div class="form-group">
			<label for="name">Name:</label><br>

			<input type="text" name="name" class="form-contol" placeholder="enter name">
			


		</div>

		<div class="form-group">
			<label for="nationality">Nationality:</label><br>

			<input type="text" id="name" name=" nationality" class="form-contol" placeholder="enter nationality" >
			<span id="spname"></span>
			


		</div>

		<div class="form-group">
			<label for="age">Age:</label><br>

			<input type="age" class="form-contol" id="age" placeholder="enter age" name="age">
			
		</div>

		<div class="form-group">
			<label>Gender:</label><br>
			<input type="radio" name="gender" id="male" value="Male">Male
			<input type="radio" name="gender" id="female" value="Female">Female

		</div>
		<button type="login" name="submit" class="btn-success btn-block">Submit</button>
			</form>
	</div>

	<script type="text/javascript">
		function go(){
			// var name=document.getElementById('name').value;
			// var age=document.getElementById('age').value;
			// var nationality= document.getElementById('nationality').value;
			
			// var male = document.getElementById('male').checked;
			// var female = document.getElementById('female').checked;
			
			// var pattern = /^[A-Za-z]+$/i;
			
			
			// if (name=="") {
			// 	document.getElementById('spName').innerHTML="Name must be filled";
			// }else if(name.length>30){
			// 	document.getElementById('spName').innerHTML="Name characters should not be less than 20";
			// }else if(!pattern.test(name)){
			// 	document.getElementById('spName').innerHTML="Name should be only characters";
			// }else{
			// 	document.getElementById('spName').innerHTML="";
			// }
		 return false;
		 }
	</script>

</body>
</html>

<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $nationality=$_POST['nationality'];
    $age=$_POST['age'];
    
    $sql="INSERT INTO tourist(name,nationality,age) values(:name,:nationality,:age)";
    $run=$conn->prepare($sql);
    $sql_run=$run->execute(array(":name"=>$name,"nationality"=>$nationality,":age"=>$age));
   
    if($sql_run){
    echo '<script>alert("data successifully inserted")</script>';
    header('location:view.php');
}
else{
    echo "failed";
}
 echo '<script>alert("data successifully inserted")</script>';

}
?>
