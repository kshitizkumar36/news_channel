<?php

$page="dashboard";
include'header.php';
include'admin_class1.php';
$class1= new class1();

$data= $class1->get_all_verified_post();

?>





<div style="background-color: #3db552;" class="container-fluid ">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category</th>
      <th scope="col">Post_by</th>
      <th scope="col">Heading</th>
      <th scope="col">Content</th>
      <th scope="col">Post Date</th>
      <th scope="col">Photo</th>
       <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  	<?php
  	if($data==0)
  	{
  		?>
  			 <tr>
		      <th scope="row">0</th>
		      <td>0</td>
		      <td>0</td>
		      <td>0</td>
		    </tr>
  		<?php
  	}
  	else
  	{

  		foreach ($data as $key ) {
  			# code...
  		
  		?>
  			 <tr>
  			 	<form method="post" action="backend.php" enctype="multipart/form-data">
		      <th scope="row"><?php echo $key['id']; ?></th>
		      <input type="hidden" value="<?php echo $key['id']; ?>" name="uid">
		      <td><?php 


		      $cid= $key['news_category'];
		      $category_name= $class1->know_category($cid);
		      echo $category_name['category_name'];


		       ?></td>
		      <td><?php $pidd= $key['post_by']; 
		      $user_name= $class1->who_posted($pidd);
		      echo $user_name['name'];
		      ?></td>
		      <td><textarea  value="<?php echo $key['heading']; ?>" class="form-control" name="heading"><?php echo $key['heading']; ?></textarea></td>
		      <td><textarea value="<?php echo $key['content']; ?>" name="content" placeholder="<?php echo $key['content']; ?>" class="form-control"><?php echo $key['content']; ?></textarea></td>
		      <td><?php echo $key['postdate']; ?></td>
		      <td><img style="height: 3vw;" src="../news_pics/<?php echo $key['photo']; ?>"></td>
		      <td>
		      	<input type="submit" class="btn btn-primary" value="Update" name="update_post">
		      </form>
		      <form method="post" action="backend.php" enctype="multipart/form-data">
		      	<input type="hidden" value="<?php echo $key['id']; ?>" name="pid">
		      	<input type="submit" class="btn btn-warning" value="Change Photo" name="change_photo">
		      </form>
		      	<form method="post" action="backend.php">
		      		<input type="hidden" value="<?php echo $key['id']; ?>" name="did">
		      	<input type="submit" class="btn btn-danger" value="Remove" name="delete">
		      </form>

		      	
		  </td>
		    </tr>

  		<?php
  	}
  	}

  	?>
   
  
  </tbody>
</table>
</div>















<?php include'footer.php'; ?>