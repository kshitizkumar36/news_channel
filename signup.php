<?php include'include/header.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div style="border-radius: 8px;" class="col-sm-4 shadow p-3 login border border-success">
			<div class="text-center">
				<i class="fa-sharp fa-solid fa-user"></i>
			</div>
			<hr>
			<form method="post" action="backend.php">
			<label>Enter  Name</label>
			<input type="text" class="form-control" placeholder="Enter  Name" name="name">
			<hr>
			<label>Enter Email</label>
			<input type="email" class="form-control" placeholder="Email ID" name="email">
			<hr>
			<label>Enter Mobile</label>
			<input type="number" class="form-control" placeholder="Mobile " name="mobile">
			<hr>
				<label>Enter DOB</label>
			<input type="date" class="form-control" placeholder="Mobile " name="dob">
			<hr>
				<label>Enter Address</label>
			<input type="text" class="form-control" placeholder="Address " name="address">
			<hr>
			<label>Enter Password</label>
			<input type="Password" class="form-control" placeholder="Password " name="pass1">
			<hr>
			<label>Enter Confirm-Password</label>
			<input type="Confirm-Password" class="form-control" placeholder="Confirm-Password " name="pass2">
			<hr>

			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Create Account" name="submit">
				<br>
				<small><a href="">Click Here</a> if you dont have your Account!!!</small>

			</div>
		</form>

		</div>
		<div class="col-sm-4"></div>
	</div>
</div>


<?php include'include/footer.php'; ?>