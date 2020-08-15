<?php
require 'connection.php';

if (isset($_GET['name'])) {
	$id = $_GET['name'];
	$sql="DELETE FROM tourist WHERE name=:name";
	$run = $conn->prepare($sql);
    $run->execute(array(':name' => $_GET['name']));

}
header('location:view.php');
?>