<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php include 'css/style.php' ?>
	<?php include 'links/link.php' ?>
</head>
<body>


<?php 

include 'dbcon.php';

if(isset($_POST['submit'])){
	$username=$_POST['uname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['pwd'];
	$cpassword=$_POST['cpwd'];

	$pass = password_hash($password, PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

	$emailquery = "select * from registration where email='$email'";
	$q = mysqli_query($con,$emailquery);
	$emailcount = mysqli_num_rows($q);
	if($emailcount>0){
		echo "email already exists";
	}else{
		if($password===$cpassword){
			$insertquery = "insert into registration (uname, email, mobile, pwd, cpwd) values ('$username','$email','$phone','$pass','$cpass')";
			$iquery= mysqli_query($con,$insertquery);

			if($iquery){
	?>
	<script type="text/javascript">
		alert("insert Succesful");
	</script>
	<?php
}else{
	?>
	<script type="text/javascript">
		alert("No insert");
	</script>
	<?php
}

		}else{
			?>
	<script type="text/javascript">
		alert("Password is not match");
	</script>
	<?php
		}
	}
}

?>
<div class="card bg-light">
	<article class="card-body mx-auto" style="max-width: 400px;">
		<h4 class="card-title mt-3 text-center">Create Account</h4>		
		<p class="text-center">Get Started with your free account</p>
		<p>
			<a href="" class="btn btn-block btn-gmail"><i class="fa fa-google"></i>Login via Email</a>
			<a href="" class="btn btn-block btn-facebook"><i class="fa fa-facebook-f"></i>Login via facebook</a>
		</p>
		<p class="divider-text">
			<span class="bg-light">OR</span>
		</p>
		<form action="" method="POST">
			<div class="form-group class-group">
				<div class="input-gruop-prepend">
					<span class="input-gruop-text"><i class="fa fa-user"></i></span>
				</div>
				<input type="text" name="uname" class="form-control" placeholder="full name" required>
			</div><!-- form group -->
			<div class="form-group class-group">
				<div class="input-gruop-prepend">
					<span class="input-gruop-text"><i class="fa fa-envelope"></i></span>
				</div>
				<input type="email" name="email" class="form-control" placeholder="Enter Email" required>
			</div><!-- form group -->
			<div class="form-group class-group">
				<div class="input-gruop-prepend">
					<span class="input-gruop-text"><i class="fa fa-phone"></i></span>
				</div>
				<input type="number" name="phone" class="form-control" placeholder="Phone number" required>
			</div><!-- form group -->
			<div class="form-group class-group">
				<div class="input-gruop-prepend">
					<span class="input-gruop-text"><i class="fa fa-lock"></i></span>
				</div>
				<input type="password" name="pwd" class="form-control" placeholder="Create Password" required>
			</div><!-- form group -->
			<div class="form-group class-group">
				<div class="input-gruop-prepend">
					<span class="input-gruop-text"><i class="fa fa-lock"></i></span>
				</div>
				<input type="password" name="cpwd" class="form-control" placeholder="Confirm password" required>
			</div><!-- form group -->
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary btn-block"> Create Account</button>
				<p class="text-center">Have an account?<a href="login.php">Login</a></p>
			</div>
			
		</form>
	</article>
</div>
</body>
</html>