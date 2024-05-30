<?php
include("controllertop.php");

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dompet.dexignlab.com/cakephp/demo/dompet-admin/page-login by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 May 2024 14:49:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Trading For You Login</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignLab">
	<meta name="robots" content="">
	<meta name="keywords" content="bootstrap admin, card, clean, credit card, dashboard template, elegant, invoice, modern, money, transaction, Transfer money, user interface, wallet">
	<meta name="description" content="Dompet is a clean-coded, responsive  template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
	<meta property="og:title" content="Dompet - Payment CakePHP Admin Dashboard Bootstrap Template">
	<meta property="og:description" content="Dompet is a clean-coded, responsive  template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">		
	
	<link rel="stylesheet" href="vendor/jquery-nice-select/css/nice-select.css">	
	<link rel="stylesheet" href="css/style.css">	
	<link rel="icon" href="final.png" type="image/x-icon">
    <link rel="icon" href="final.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
				<div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
	<div class="login-form">
		<div class="text-center">
			<h3 class="title">Log In</h3>
			<p>Sign in to your account to start using TFY</p>
		</div>
		<form action="" method="post">
			<div class="mb-4">
				<label class="mb-1 text-dark">Email</label>
				<input type="email" class="form-control form-control" placeholder="Email" name="email">
			</div>
			<div class="mb-4 position-relative">
				<label class="mb-1 text-dark">Password</label>
				<input type="password" id="dlab-password" class="form-control form-control" placeholder="Password" name="password">
				<span class="show-pass eye">

					<i class="fa fa-eye-slash"></i>
					<i class="fa fa-eye"></i>

				</span>
			</div>
			<div class="form-row d-flex justify-content-between mt-4 mb-2">
				<div class="mb-4">
				</div>
				<div class="mb-4">
					<a href="page-forgot-password.html" class="btn-link text-danger">Forgot Password?</a>
				</div>
			</div>
			<div class="text-center mb-4">
				<button type="submit" class="btn btn-danger btn-block">Log in</button>
			</div>
			
		</form>
	</div>
</div>
			</div>	
		</div>	
	</div>	
	

	<script src="vendor/global/global.min.js"></script>	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>	<script src="js/custom.min.js"></script>	<script src="js/dlabnav-init.js"></script>	<script src="js/demo.js"></script>	<script src="js/styleSwitcher.js"></script></body>


<!-- Mirrored from dompet.dexignlab.com/cakephp/demo/dompet-admin/page-login by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 May 2024 14:49:32 GMT -->
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $salt = "wdfghjk7yhb3erfgb";
    $password_hash = md5($password . $salt);

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password_hash'";
    $result = sql($sql, $eo);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
		$_SESSION['status'] = $row['status'];

        if ($row['status'] == 'Pending') {
            header("location: verification.php");
        } elseif ($row['status'] == 'Verified') {
            header("location: dashboard.php");
        } elseif ($row['status'] == 'Banned') {
            header("location: banned.php");
        } 
		elseif ($row["status"] == "Under Review") {
			header("location: under_review.php");
		}
		else {
            echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Your account status is undefined.',
            })
            </script>";
        }
    } elseif (empty($email) || empty($password)) {
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Please fill in all fields',
        })
        </script>";
    } else {
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Invalid email or password',
        })
        </script>";
    }
}
?>    