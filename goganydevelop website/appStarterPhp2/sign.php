<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>







<!DOCTYPE html>
<html>
<head>
	<h2>GOGANY DEVELOP Sign in/up Form</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<link rel="stylesheet" href="css/sign.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

		<form action="#">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="https://myaccount.google.com/intro/profile" class="social"><i class="fa fa-google-plus"></i></a>
				<a href="https://tr.pinterest.com/" class="social"><i class="fa fa-pinterest"></i></a>
				<a href="https://www.linkedin.com/home/?originalSubdomain=tr" class="social"><i class="fa fa-linkedin"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button><a href="index.php"> Sign Up</a></button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#" method="_POST">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="http://www.facebook.com/my_page" class="social"><i class="fa fa-facebook"></i></a>
				<a href="https://www.instagram.com/?hl=tr" class="social"><i class="fa fa-instagram"></i></a>
				<a href="https://twitter.com/?lang=tr" class="social"><i class="fa fa-twitter"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			
			<button><a href="index.php"> Sign In</a></button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>


</head>
<body>

<script src="js/main.js"></script>
</body>
</html>