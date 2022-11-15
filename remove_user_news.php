<?php 
session_start();
$id= $_GET['uid'];
$nid= $_GET['nid'];


include'db.php';
$query="DELETE FROM `news` WHERE `id`='$nid' AND `post_by`='$id'";
$run= mysqli_query($connect,$query);
if($run)
{
	header("location:profile.php");
}


 ?>