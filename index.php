<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="style.css">

	<style>
		.btn:hover{
			background: #03ffdd !important;
			color: #171735 !important;
		}

		.container .login-email .input-group input:focus, .container .login-email .input-group input:valid {
    border-color: #03ffdd !important;
	}

	body{
		background: #171735;
	}

	#particles-js{
		position: absolute;
		z-index: -1;
		width: 100%;
		height: 100vh;
	}

	#logo{
		height: 300px;
		width: 300px;
		background: white;
		padding: 5px;
		border-radius: 50%;
		margin-right: 50px;
	}
	</style>

	<title>Login Form - Pure Coding</title>
</head>
<body>
	<div id="particles-js"></div>

	<img src="idel.png" id="logo" data-tilt>

	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800; color: #171735">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn" style="background: #171735; color: #03ffdd;">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php" style="color:#03ffdd;">Register Here</a>.</p>
		</form>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="tilt.jquery.js"></script>
</script>
<script src="particles.js"></script>
<script src="app.js"></script>

</body>
</html>