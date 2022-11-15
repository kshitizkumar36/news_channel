<?php 
$page="dashboard";
include'header.php';
include'admin_class1.php';
$class1= new class1();
$data= $class1->get_news_user();

 ?>

<div style="background-color: #12365d;" class="container-fluid">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">News Category</th>
      <th scope="col">Post By</th>
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
  			?>	
  			<tr>
		      <th scope="row"><?php echo $key['id']; ?></th>
		      <td><?php echo $key['news_category']; ?></td>  
		      <td><?php echo $key['post_by']; ?></td>
		      <td><?php echo $key['heading']; ?></td>
		      <td><?php echo $key['content']; ?></td>
		      <td><?php echo $key['postdate']; ?></td>
		      <td><img style="height: 5vw;" src="../news_pics/<?php echo $key['photo']; ?>"></td>
		      <td>
		      	<form method="post" action="backend.php">
		      		<input type="hidden" value="<?php echo $key['id']; ?>" name="vid">
		      	<input type="submit" class="btn btn-success" value="Verify" name="verify">
		      </form>
		      <form>
		      	<input type="hidden" value="<?php echo $key['id']; ?>" name="rid">
		      	<input type="submit" class="btn btn-danger" value="Reject" name="reject">
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