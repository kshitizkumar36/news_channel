<?php

include'db.php';
class class1
{
  
  // class to insert new user
	public function newuser($name,$email,$mobile,$dob,$address,$password)
	{
		include'db.php';
		$query="INSERT INTO `user`( `name`, `email`, `mobile`, `dob`, `address`, `password`) VALUES ('$name','$email','$mobile','$dob','$address','$password')";
		$run= mysqli_query($connect,$query);
		if($run)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}


// getting user data id wise
public function getuserbyid($id)
{	include'db.php';
	$query="SELECT * FROM `user` WHERE `id`='$id'";
	$run= mysqli_query($connect,$query);
	$count= mysqli_num_rows($run);
	if($count>0)
	{
		$data= mysqli_fetch_array($run);
		return $data;
	}
}


	// end of getting data id wise



// get all un-verified news by user

public function get_non_verified_post($id)
{
	include'db.php';
	$query="SELECT * FROM `news` WHERE `post_by`='$id' AND `status`= 0";
	$run= mysqli_query($connect,$query);
	$count= mysqli_num_rows($run);
	if($count>0)
	{
		while($data= mysqli_fetch_array($run))
		{
			$data2[]= $data;
		}

		return $data2;
	}
	else
	{
		return 0;
	}
}


// End get all un-verified news by user

// get all verified news by user
public function get_verified_post()
{
	include'db.php';
	$query="SELECT * FROM `news` WHERE `post_by`='$id' AND `status`= 1";
	$run= mysqli_query($connect,$query);
	$count= mysqli_num_rows($run);
	if($count>0)
	{
		while($data= mysqli_fetch_array($run))
		{
			$data2[]= $data;
		}

		return $data2;
	}
	else
	{
		return 0;
	}
}
// End of get all un-verified news by user


// get news in detail one by one
	public function get_detail_news($nid)
	{
		include'db.php';
		$query="SELECT * FROM `news` WHERE `id` ='$nid'";
		$run= mysqli_query($connect,$query);
		$count= mysqli_num_rows($run);
		if($count>0)
		{
			$data= mysqli_fetch_array($run);
			return $data;
		}
		else
		{
			return 0;
		}
	}
// end of get news in detail one by one


	// get data of all stories 
	public function get_story()
	{
		include'db.php';
		$query="SELECT * FROM `story`";
		$run= mysqli_query($connect,$query);
		$count= mysqli_num_rows($run);
		if($count>0)
		{
			while($data= mysqli_fetch_array($run))
			{
				$data2[]= $data;
			}
			return $data2;
		}
		else
		{
			return 0;
		}
	}


	// end of get data of all stories

	// get story one by one by id
	public function get_story_by_id($id)
	{
		include'db.php';
		$query="SELECT * FROM `story`WHERE `id`='$id'";
		$run= mysqli_query($connect,$query);
		$count= mysqli_num_rows($run);
		if($count>0)
		{
			$data= mysqli_fetch_array($run);
			return $data;
		}
		else
		{
			return 0;
		}
	}

	// end of get story one by one by id


	// get all event news
	public function get_all_event()
	{
		include'db.php';
		$query="SELECT * FROM `event`";
		$run= mysqli_query($connect,$query);
		$count= mysqli_num_rows($run);
		if($count>0)
		{
		 	while($data= mysqli_fetch_array($run))
		 	{
		 		$data2[]= $data;
		 	}
		 	return $data2;
		}
		else
		{
			return 0;
		}
	}

	// end of get all event news


	// get event detail one by one

	public function get_event_by_id($id)
	{
		include'db.php';
		$query="SELECT * FROM `event`WHERE `id`='$id'";
		$run= mysqli_query($connect,$query);
		$count= mysqli_num_rows($run);
		if($count>0)
		{
			$data= mysqli_fetch_array($run);
			return $data;
		}
		else
		{
			return 0;
		}
	}
	// end of get event detail one by one


	// get news category

	public function get_category()
	{
		include'db.php';
		$query="SELECT * FROM `news_category`";
		$run= mysqli_query($connect,$query);
		$count= mysqli_num_rows($run);
		if($count>0)
		{
			while($data= mysqli_fetch_array($run))
			{
				$data2[]= $data;
			}
			return $data2;
		}
		else

		{
			return 0;
		}
	}
	// end 



	// get all verified news

	public function get_all_verified_post()
{
	include'db.php';
	$query="SELECT * FROM `news` WHERE  `status`= 1";
	$run= mysqli_query($connect,$query);
	$count= mysqli_num_rows($run);
	if($count>0)
	{
		while($data= mysqli_fetch_array($run))
		{
			$data2[]= $data;
		}

		return $data2;
	}
	else
	{
		return 0;
	}
}
	// end

}
?>