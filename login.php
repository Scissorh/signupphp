<?php
session_start();

?>
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
	$email = $_POST['email'];
	$password = $_POST['pwd'];
	$email_search = "select * from registration where email='$email'";
	$query = mysqli_query($con,$email_search);
	$email_count = mysqli_num_rows($query);
	if($email_count){
		$email_pass = mysqli_fetch_assoc($query);
		$db_pass = $email_pass['pwd'];
		$_SESSION['username'] = $email_pass['uname'];
		$pass_decode = password_verify($password, $db_pass);
		if($pass_decode){
			echo "Login Successful";
			?>
			<script type="text/javascript">
				location.replace("match.php");
			</script>
			<?php
		}else{
			echo "Password incorrect";
		}
	}
	else{
		echo "email invalid";
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
				<input type="email" name="email" class="form-control" placeholder="Enter email" required>
			</div><!-- form group -->
			
			<div class="form-group class-group">
				<div class="input-gruop-prepend">
					<span class="input-gruop-text"><i class="fa fa-lock"></i></span>
				</div>
				<input type="password" name="pwd" class="form-control" placeholder="Enter Password" required>
			</div><!-- form group -->
			
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary btn-block"> Login now</button>
				<p class="text-center">Don't have an account?<a href="regis.php">Sign Up</a></p>
			</div>
			
		</form>
	</article>
</div>
</body>
</html>