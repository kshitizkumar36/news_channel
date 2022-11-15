<?php 
include'../db.php';
if(isset($_POST['submit_category']))
{
	$category= $_POST['category'];
	$query="INSERT INTO `news_category`( `category_name`) VALUES ('$category')";
	$run= mysqli_query($connect,$query);
	if($run)
	{
		header("location:category.php");
	}

}


if(isset($_POST['upload_story']))
{
	$heading= $_POST['story_heading'];
	$news= $_POST['news'];
	$image= $_FILES['image']['name'];
	$photo= time().$image;

	$query="INSERT INTO `story`(`heading`, `story`, `pic`) VALUES ('$heading','$news','$photo')";
	$run= mysqli_query($connect,$query);
	if($run)
	{
		move_uploaded_file($_FILES['image']['tmp_name'], "story_pic/$photo");
		header("location:stories.php");
	}
}



if(isset($_POST['post_location']))
{
	$area= $_POST['area'];
	$query="INSERT INTO `location`(`location`) VALUES ('$area')";
	$run= mysqli_query($connect,$query);
	if($run)
	{
		header("location:location.php");
	}
}

if(isset($_POST['add_event_news']))
{
	$event_heading= $_POST['event_heading'];
	$news= $_POST['news'];
	$image= $_FILES['image']['name'];
	$photo= time().$image;
	$query="INSERT INTO `event`(`heading`, `news`,`photo`) VALUES ('$event_heading','$news','$photo')";
	$run= mysqli_query($connect,$query);
	if($run)
	{
		move_uploaded_file($_FILES['image']['tmp_name'], "event_news_pic/$photo");
		header("location:event.php");
	}

}


if(isset($_POST['verify']))
{
	$vid= $_POST['vid'];
	$value=1;
	$query="UPDATE `news` SET `status`='$value' WHERE `id`='$vid'";
	$run= mysqli_query($connect,$query);
	if($run)
	{
		header("location:check_user_post.php");
	}
}

if(isset($_POST['reject']))
{
	$vid= $_POST['rid'];
	$value=3;
	$query="UPDATE `news` SET `status`='$value' WHERE `id`='$vid'";
	$run= mysqli_query($connect,$query);
	if($run)
	{
		header("location:check_user_post.php");
	}
}


if(isset($_POST['update_post']))
{
	include'../db.php';
	$id= $_POST['uid'];
	$heading= $_POST['heading'];
	$content= $_POST['content'];

	$query="UPDATE `news` SET `heading`='$heading',`content`='$content' WHERE `id`='$id'";
	$run= mysqli_query($connect,$query);
	if($run)
	{
		header("location:update_post.php");
	}

}
if(isset($_POST['change_photo']))
{
	include'../db.php';
	$id= $_POST['pid'];
	$image= $_FILES['image']['name'];
	$photo= time().$image;
	$query="UPDATE `news` SET `photo`='$photo' WHERE `id`='$id'";
	$run= mysqli_query($connect,$query);
	if($run)
	{
		move_uploaded_file($_FILES['image']['tmp_name'], "../news_pics/$photo");
		header("location:update_post.php");
	}
}

if(isset($_POST['delete']))
{
	include'../db.php';
	$did= $_POST['did'];
	$query="DELETE FROM `news` WHERE `id`='$did'";
	$run= mysqli_query($connect,$query);
	if($run)
	{
		header("location:update_post.php");
	}
}

?>
