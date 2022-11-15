<?php 
$id= $_GET['id'];
include'../db.php';
$query="DELETE FROM `event` WHERE `id`='$id'";
$run= mysqli_query($connect,$query);
if($run)
{
	header("location:event.php");
}

 ?>