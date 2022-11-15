<?php 
$id= $_GET['id'];
include'../db.php';
$query="DELETE FROM `story` WHERE `id`='$id'";
$run= mysqli_query($connect,$query);
if($run)
{
	header("location:stories.php");
}

 ?>