<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/libs/css/style.css">
	<link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
	<style>
		html,
		body {
			height: 100%;
		}

		body {
			display: -ms-flexbox;
			display: flex;
			-ms-flex-align: center;
			align-items: center;
			padding-top: 40px;
			padding-bottom: 40px;
		}
	</style>
</head>
<?php
require "../resours/config.php";
$error_array = array();
if (isset($_SESSION['remember'])) {
	redirect("../public/index");
}

if (isset($_POST['login'])) {
	$name = escape_string($_POST['username']);
	$password = escape_string($_POST['pass']);


	$query = query("SELECT * FROM users WHERE log_name = '$name'");
	confirm($query);
	$row = fetch_array($query);
	if (mysqli_num_rows($query) == 0) {
		array_push($error_array, "Email or password was incorrect</span><br>");
	}
	if (password_verify($password, $row['password'])) {
		if (!empty($_POST['remember-me'])) {
			$_SESSION['remember'] = "true";
		}
		$_SESSION['roll'] = $row['roll'];
		$_SESSION['islogin'] = "true";
		$_SESSION['id_user'] = $row['id'];
		$_SESSION['is_firsttime'] = $row['id_firTime'];

		redirect("../public/index");
	} else {
		array_push($error_array, "Email or password was incorrect</span><br>");
	}
}

?>



<body>
	<!-- ============================================================== -->
	<!-- login page  -->
	<!-- ============================================================== -->
	<div class="splash-container">
		<div class="card ">
			<?php

			if (in_array("Email or password was incorrect</span><br>", $error_array)) {
				echo "<h1><span style='color: #ed3228;'>Email or password was incorrect . </span></h1>";
			}
			?>
			<div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="assets/images/logo.png" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
			<div class="card-body">
				<form action="login" method="post">
					<div class="form-group">
						<input class="form-control form-control-lg" id="username" type="text" name="username" placeholder="log key" autocomplete="off" required>
					</div>
					<div class="form-group">
						<input class="form-control form-control-lg" id="password" type="password" name="pass" placeholder="Password" required>
					</div>
					<div class="form-group">
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" name="remember-me" type="checkbox"><span class="custom-control-label">Remember Me</span>
						</label>
					</div>
					<button type="submit" class="btn btn-primary btn-lg btn-block" name="login" required>Sign in</button>
				</form>
			</div>
			<div class="card-footer bg-white p-0  ">

				<div class="card-footer-item card-footer-item-bordered">
					<a href="#" class="footer-link">Forgot Password</a>
				</div>
			</div>
		</div>
	</div>

	<!-- ============================================================== -->
	<!-- end login page  -->
	<!-- ============================================================== -->
	<!-- Optional JavaScript -->
	<script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>