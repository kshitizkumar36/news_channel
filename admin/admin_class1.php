<?php 

class class1
{
	// get all user data
	public function getalluser()
	{
		include'../db.php';
		$query="SELECT * FROM `user`";
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

	// end of get all user data

	// get all data of weather
	public function weather()
	{
		include'../db.php';
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

	// end of getting data of weather


	// get story data
	public function get_story_data()
	{
		include('../db.php');
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


	// end of get story data


	// get location data
	public function get_location()
	{
		include'../db.php';
		$query="SELECT * FROM `location`";
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

	// end of get location data


	// get data of event 
	public function get_event_data()
	{
		include'../db.php';
		$query="SELECT * FROM `event` ";
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

	// end of get data of event

	// get news from user

	public function get_news_user()
	{
		include'../db.php';
		$query="SELECT * FROM `news`WHERE `status`=0";
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



	// get all verified post
		public function get_all_verified_post()
		{
			include'../db.php';
			$query="SELECT * FROM `news` WHERE `status`=1";
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


		// know category by id

		public function know_category($id)
		{
			include'../db.php';
			$query="SELECT * FROM `news_category` WHERE `id`='$id'";
			$run= mysqli_query($connect,$query);
			$data= mysqli_fetch_array($run);
			return $data;
		}

		// end


		// who posted
		public function who_posted($id)
		{
			include'../db.php';
			$query="SELECT * FROM `user` WHERE `id`='$id'";
			$run= mysqli_query($connect,$query);
			$data= mysqli_fetch_array($run);
			return $data;

		}
		// end
}

 ?>