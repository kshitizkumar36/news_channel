 <?php session_start();
$nid= $_GET['sid'];

 include'include/header.php'; 
 include'class1.php';
 $class1= new class1();
 $data= $class1->get_story_by_id($nid);
 ?>

<!-- design start here -->
	<div class="container-fluid">

		<div style="border-radius: 8px;" class="row shadow border border-primary p-3">


			<div class="col-sm-4 photo ">
					<img src="admin/story_pic/<?php echo $data['pic']; ?>">
			</div>
			<div class="col-sm-8 section2 ">
			<h2><?php echo $data['heading']; ?></h2>

						<hr>
						<p><?php echo $data['story']; ?></p>
					

			</div>
		</div>
		<hr>
			<div class="container buttons">
				<div class="row">
					<div class="col-sm-4 col-4 text-center">
						<a href=""><i class="fa-brands fa-whatsapp"></i></a>
					</div>
					<div class="col-sm-4 col-4 text-center">
						<a href=""><i class="fa-brands fa-facebook"></i></a>
					</div>
					<div class="col-sm-4 col-4 text-center">
						<a href=""><i class="fa-brands fa-instagram"></i></a>
					</div>
				</div>
			</div>
			<hr>
	</div>

<!-- //design ends here -->

<?php include'include/footer.php'; ?>