<!DOCTYPE>
<?php
if (!isset($_GET["name"])) {
  header("location:view.php");
}
?>
<html>
<head>
   
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" href="js/bootstrap.min.js"></script>
<title>edit tourist</title>
<body >
  
    
    <p>edit A tourist</p>

<table class="table-responsive">
<form method="POST" >
  <fieldset>
    <?php
    include 'connection.php';
    $sql = "SELECT * from tourist where name=:name";
    $s = $conn->prepare($sql);
    $s->execute(array('name' => $_GET['name']));
    if ($s->rowCount()==1){
       $row=$s->fetch();
    }else{
      header('Location: view.php');
    }
    if(isset($_POST['edittourist'])){
    $name=$_POST['name'];
    $nationality=$_POST['nationality'];
    $age=$_POST['age'];
    $name=$_GET['name'];
    $sql="UPDATE tourist set name=:name,nationality=:nationality,age=:age where name=:name";
    $run=$conn->prepare($sql);
    $run->execute(array(':name'=>$name,':nationality'=>$nationality,':age'=>$age));
    header("location:view.php");
  }
?>
<legend>edit tourist</legend>
<form id="log" action="" method="post">
    <div class="form-group">
      <label for="name">Name:</label><br>

      <input type="text" name="name" class="form-contol" placeholder="enter name" readonly="" value="<?php echo$row['name']?>">
      


    </div>

    <div class="form-group">
      <label for="nationality">Nationality:</label><br>

      <input type="text" id="name" name=" nationality" class="form-contol" placeholder="enter nationality" value="<?php echo$row['nationality']?>" >
      <span id="spname"></span>
      


    </div>

    <div class="form-group">
      <label for="age">Age:</label><br>

      <input type="age" class="form-contol" id="age" placeholder="enter age" name="age" value="<?php echo$row['age'] ?>">
      
    </div>

    <div class="form-group">
      <label>Gender:</label><br>
      <input type="radio" name="gender" id="male" value="Male">Male
      <input type="radio" name="gender" id="female" value="Female">Female

    </div>
    <button type="login" name="submit" class="btn-success btn-block">submit</button>
      </form>


</fieldset>
</form>
</table>
      </div>


    </div>
</div>
</BODY>
</HTML>