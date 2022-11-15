<?php 
session_start();

include'class1.php';
$class1= new class1();
// code to insert new user into db
if(isset($_POST['submit']))
{
	$name= $_POST['name'];
	$email= $_POST['email'];
	$mobile= $_POST['mobile'];
	$dob= $_POST['dob'];
	$address= $_POST['address'];
	$pass1= $_POST['pass1'];
	$pass2= $_POST['pass2'];
	if($pass1==$pass2)
	{
		$status=$class1->newuser($name,$email,$mobile,$dob,$address,$pass1);
		header("location:login.php");
	}
	else
	{
		header("location:signup.php");
	}
}
// End code to insert new user into db

// Code to check user login
if(isset($_POST['login']))
{
	$userid= $_POST['userid'];
	$pass= $_POST['pass'];
	include'db.php';
	$query="SELECT * FROM `user` WHERE `email`='$userid' OR `mobile`='$userid'";
	$run= mysqli_query($connect,$query);
	$data= mysqli_fetch_array($run);
	if($pass==$data['password'])
	{
		$_SESSION["id"]= $data['id'];
		header("location:profile.php");
	}
	else
	{
		header("location:login.php");
	}
}
// end of check of user login

// send user news post to admin
	if(isset($_POST['send']))
	{
		$heading= $_POST['heading'];
		$content= $_POST['content'];
		$category= $_POST['category'];
		$user= $_POST['user'];
		$image= $_FILES['image']['name'];
		$photo= time().$image;
		$status= 0;
		include'db.php';
		$query="INSERT INTO `news`(`post_by`,`news_category`,`heading`, `content`,  `photo`, `status`) VALUES ('$user','$category','$heading','$content','$photo','$status')";
		$run= mysqli_query($connect,$query);
		if($run)
		{
			move_uploaded_file($_FILES['image']['tmp_name'], "news_pics/$photo");
			header("location:profile.php");
		}
	}

// end of send user news post to admin



 ?>