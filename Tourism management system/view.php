
<!DOCTYPE>

<html>
<head>
  
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <script type="text/javascript" href="js/bootstrap.min.js"></script>
   <title>view list</title>
   <body >
    <div class="container-fluid">
     
<p>View tourist</p>

   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">s/n</th>
      <th scope="col"> name</th>
      <th scope="col"> nationality</th>
      <th scope="col">age</th>
      <th scope="col"> edit</th>
      <th scope="col"> delete</a></th>
    </tr>
  </thead>
  <tbody>
    <?php
     include  'connection.php';
    $sql = "SELECT * FROM tourist";
    
    $stmt = $conn->query($sql);
    $count=0;
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
      $count++;
      $name=$row['name'];
      $nationality=$row['nationality'];
      $age=$row['age'];

      echo"
    <tr>
      <td>".$count."</td>
      <td>".$name."</td>
      <td>".$nationality."</td>
      <td>".$age."</td>
      <td><a href='edit.php?name=".$name."'>edit</a></td>
      <td><a href='delete.php?name=".$name."''>delete</a></td>
    </tr>";
    }

?>

  </tbody>
</table>

<p><button type="submit" name="submit" class="btn btn-success btn-labeled pull-right"><a href="home.php">Cancel</a><span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>


</form>
                </div>  
            </div>
            <div class="col pt-2">                    
            
            </div>
        </div>
    </BODY>
</HTML>
