<?php
session_start();

$id= "".$_SESSION["id"]  ."";
include'class1.php';
$class1= new class1();
$data= $class1->getuserbyid($id);
$get_category= $class1->get_category();
 include'include/header.php';

  ?>
<div class="container">
	<div class="row">
		<div class="col-sm-3 col-6 profile text-right">
			<i style="border-style: solid;border-radius: 100px; padding: 30px;" class="fa-sharp fa-solid fa-user"></i>
		</div>
		<div class="col-sm-9 col-6 profile">
			<h2><?php echo $data['name']; ?></h2>
			<br>
		</div>
	</div>
	<hr>

</div>


<section style="background-color: #00877a;">
	<div class="container-fluid">
		<div class="row profile_section">
			<div class="col-sm-4 ">
				
				<a href=""><h2 class="text-center"> <i class="fa-solid fa-pencil"></i>&emsp;Create Post</h2></a>
				<hr>
				<form class="profile_section border border-white p-3" method="post" action="backend.php" enctype="multipart/form-data">
					<label>Choose News Category</label>
					<select class="form-control" name="category">
						<option>Choose News Category</option>
						<?php
						foreach ($get_category as $key) {
							?>
							<option value="<?php echo $key['id']; ?>"><?php echo $key['category_name']; ?></option>

							<?php
						}

						?>
						<option>
					</select>
					<hr>
					<label >Enter Heading of the News</label>
					<input type="text" class="form-control" placeholder="Heading of the News" name="heading">
					<hr>
					<label>Enter Content of the News</label>
					<textarea class="form-control" placeholder="Enter Complete News" name="content"></textarea>
					<hr>
					<input type="hidden" value="<?php echo $id; ?>" name="user">
					<label>Upload Picture </label>
					<input type="file" class="form-control" name="image">
					<div class="text-center">
						<hr>
					<input type="submit" class="btn btn-primary" value="Send News to Admin" name="send">
					</div>
				</form>
			</div>
			<div class="col-sm-4 ">
				<a href=""><h2 class="text-center"><i class="fa-solid fa-signs-post"></i> &emsp;My Post</h2></a>
				<hr>
				<div class="border border-white p-3 posts">
					<ul style="color: white;">

						<?php
						$un_post= $class1->get_non_verified_post($id);
						if($un_post==0)
						{
							?> <li> <i class="fa-solid fa-arrow-right "></i>&emsp; No News Posts to show</li> <?php
						}
						else
							{		
								foreach ($un_post as $key) {

									?>

						        			<li> <i class="fa-solid fa-arrow-right "></i>&emsp; <a href="newsindetail.php?nid=<?php echo $key['id']; ?>"><?php echo $key['heading']; ?></a>  &emsp;<a class="text-white" href="remove_user_news.php?uid=<?php echo $id; ?>&nid=<?php echo $key['id']; ?>">X (Remove)</a></li>


									<?php
								}
							}		

						?>
				    </ul>
				</div>
			</div>
			<div class="col-sm-4 ">
				<a href=""><h2 class="text-center"><i class="fa-solid fa-thumbs-up"></i> &emsp;Verified Posts</h2></a>
				<hr>
				<div class="border border-white p-3 posts">
					<ul style="color: white;">
						<?php
						$ver_post= $class1->get_verified_post($id);
						if($ver_post==0)
						{

							?> <li> <i class="fa-solid fa-arrow-right "></i>&emsp; No News Posts to show</li> <?php
						}
						else
						{
								foreach ($ver_post as $key ) {
									?>

						        			<li> <i class="fa-solid fa-arrow-right "></i>&emsp; <a href=""><?php echo $key['heading']; ?></a></li>


									<?php
								}
						}	

						?>
				        
				    </ul>
				</div>
			</div>
			

		</div>
		<hr class="bg-white">
	</div>
</section>

<?php include'include/footer.php'; ?>