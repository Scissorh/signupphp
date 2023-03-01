<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Landing Page</title>
	<?php include 'css/style2.php'  ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<header>
<nav class="navbar">
	<div class="logo">
		<a href="">SAKIB TECHNICAL</a>
	</div>
	<div class="menu">
		<ul>
			<li><a href="#" class="active">Home</a></li>
			<li><a href="#" >gallery</a></li>
			<li><a href="#" >Services</a></li>
			<li><a href="#" >Portfolia</a></li>
			<li><a href="#" >About</a></li>
		</ul>
	</div>
	<div class="contact_btn">
		<a href="logout.php">Logout</a>
	</div>

</nav>
<div class="center_content">
		<h1>Hello ,This is <?php echo $_SESSION['username']; ?></h1>
		<h2>Developer, full stack engineer and java</h2>

	</div>
	<div class="social_contact">
		<div class="fa-icons">
			<a href=""><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
		</div>
		<div class="fa-icons">
			<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
		</div>
		<div class="fa-icons">
			<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
		</div>
		<div class="fa-icons">
			<a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a>
		</div>
	</div>
</header>
</body>
</html>