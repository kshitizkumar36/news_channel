<?php 
$id= $_GET['id'];
include'../db.php';
$query="DELETE FROM `location` WHERE `id`='$id'";
$run= mysqli_query($connect,$query);
if($run)
{
	header("location:location.php");
}

 ?>