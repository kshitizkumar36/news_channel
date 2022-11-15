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
			<label>Enter User Name</label>
			<input type="text" class="form-control" placeholder="Enter User Name" name="userid">
			<hr>
			<label>Enter Password</label>
			<input type="password" class="form-control" placeholder="**********" name="pass">
			<hr>
			<div class="text-center">
				<input type="submit" class="btn btn-success" value="Login" name="login">
				<br>
				<small><a href="signup.php">Click Here</a> if you Already have an account!!!</small>

			</div>
		</form>

		</div>
		<div class="col-sm-4"></div>
	</div>
</div>


<?php include'include/footer.php'; ?>