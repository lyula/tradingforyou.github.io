<?php
include("controllertop.php");

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dompet.dexignlab.com/cakephp/demo/dompet-admin/page-register by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 May 2024 14:50:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Trading For You Signup</title>

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
				<div class="col-lg-6 col-md-7 col-sm-12 mx-auto align-self-center">
	<div class="login-form">
		<div class="text-center">
			<p>Sign up to start using TFY!</p>
		</div>
		<form action="" method="post">
			<div class="mb-3">
				<label class="mb-1 text-dark">First Name</label>
				<input type="text" class="form-control form-control-sm" placeholder="Enter Firstname as per ID" name="firstname">
			</div>
			<div class="mb-3">
				<label class="mb-1 text-dark">Last Name</label>
				<input type="text" class="form-control form-control-sm" placeholder="Enter Lastname as per ID" name="lastname">
			</div>
			<div class="mb-3">
				<label class="mb-1 text-dark">Email</label>
				<input type="email" class="form-control form-control-sm" placeholder="Enter Email" name="email">
			</div>
			<div class="mb-3">
                    <label for="idNumber" class="form-label">ID Number</label>
                    <input id="idNumber" class="form-control form-control-sm" type="text" placeholder="Enter your ID number" name="id_no" required>
            </div>
			<div class="mb-3 position-relative">
				<label class="mb-1 text-dark">Password</label>
				<input type="password" id="dlab-password" class="form-control form-control-sm" placeholder="Enter Password" name="password">
				
			</div>
			<div class="form-row d-flex justify-content-between mt-4 mb-2">
				<div class="mb-3">
					<div class="form-check custom-checkbox mb-3">
						<input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
						<label class="form-check-label mt-1" for="customCheckBox1">I agree to the <a href="TNCs.php" style="color: #ff0000;">Terms and Conditions</a> </label>
					</div>
				</div>
				<div class="mb-4">
					<a href="login.php" class="btn-link text-danger">Log in</a>
				</div>
			</div>
			<div class="text-center mb-4">
				<button type="submit" class="btn btn-danger btn-block">Sign Up</button>
			</div>
			
		</form>
	</div>
</div>
		</div>	
		</div>	
	</div>	
	

	<script src="vendor/global/global.min.js"></script>	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>	<script src="js/custom.min.js"></script>	<script src="js/dlabnav-init.js"></script>	<script src="js/demo.js"></script>	<script src="js/styleSwitcher.js"></script></body>


<!-- Mirrored from dompet.dexignlab.com/cakephp/demo/dompet-admin/page-register by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 May 2024 14:50:38 GMT -->
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
	$id = $_POST['id_no'];
    $password = $_POST['password'];
    $salt = "wdfghjk7yhb3erfgb";
    $password_hash = md5($password . $salt);
    $date = date('Y-m-d');
    $status = 'Pending'; // Default status set to 'Pending'

    // Function to generate a random 16-digit number
    function generateCardNumber() {
        $number = '';
        for ($i = 0; $i < 16; $i++) {
            $number .= mt_rand(0, 9);
            if (($i + 1) % 4 == 0 && $i < 15) {
                $number .= ' '; // Add space after every 4 digits
            }
        }
        return $number;
    }

    // Generate a random card number
    $card_number = generateCardNumber();

    // Check if any of the fields are empty
    if(empty($firstname) || empty($lastname) || empty($email) || empty($password)) {
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'All fields are required!',
        })
        </script>";
    } else {
        $check_email = sqlValue("SELECT COUNT(*) FROM users WHERE email = '$email'");

        if($check_email >= 1) {
            echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Email Already Exists',
                text: 'Please use another email address',
            })
            </script>";
        } else {
            $query = "INSERT INTO users (firstname, lastname, email, id_no , password, mastercardno, date, status) VALUES ('$firstname', '$lastname', '$email', $id ,'$password_hash', '$card_number', '$date', '$status')";
            $result = sql($query, $eo);
            $user_id = db_insert_id(db_link());
            // Insert into wallets: user_id, wallet type, available balance
            sql("INSERT INTO card_balance (user_id, card_balance) VALUES('$user_id',0.00)", $eo);

            if($result) {
                echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Congratulations $firstname! Your account has been created. Proceed to login.',
                }).then(() => {
                    window.location.href = 'login.php';
                })
                </script>";
            }
        }
    }
}
?>
