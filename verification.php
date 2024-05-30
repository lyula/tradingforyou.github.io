<?php
include ("controllertop.php");
if (!isset($_SESSION['email'])) {
    header("location: login.php");
}
$user_id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dompet.dexignlab.com/cakephp/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 May 2024 14:48:41 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>User Dashboard</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignLab">
    <meta name="robots" content="">
    <meta name="keywords"
        content="bootstrap admin, card, clean, credit card, dashboard template, elegant, invoice, modern, money, transaction, Transfer money, user interface, wallet">
    <meta name="description"
        content="Dompet is a clean-coded, responsive  template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
    <meta property="og:title" content="Dompet - Payment CakePHP Admin Dashboard Bootstrap Template">
    <meta property="og:description"
        content="Dompet is a clean-coded, responsive  template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
    <meta property="og:image" content="../social-image.png">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon icon -->
    <link rel="icon" href="final.png" type="image/x-icon">
    <link rel="icon" href="final.png" type="image/x-icon">
    <link rel="stylesheet" href="vendor/jquery-nice-select/css/nice-select.css"> <!-- Page level css : Dashboard  -->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css"> <!-- End Page level css : Dashboard  -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body data-theme-version="dark">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="waviy">
            <span style="--i:1">l</span>
            <span style="--i:2">o</span>
            <span style="--i:3">a</span>
            <span style="--i:4">d</span>
            <span style="--i:5">i</span>
            <span style="--i:6">n</span>
            <span style="--i:7">g</span>
            <span style="--i:8">.</span>
            <span style="--i:9">.</span>
            <span style="--i:10">.</span>
        </div>
    </div> <!--*******************
        Preloader end
    ********************-->
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper" class="wallet-open  active">

        <div class="nav-header">
            <a href="dashboard.php" class="brand-logo">
                <img src="final.png" alt=""
                    style="width: 100px;height:100px;border-radius:50%;display:flex;justify-content:center;padding:15px">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div> <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->
        <div class="chatbox">
            <div class="chatbox-close"></div>
            <div class="custom-tab-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
                    </li>
                </ul>
                <div class="tab-content">



                </div>
            </div>
        </div> <!--**********************************
            Chat box End
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item">

                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-theme-mode p-0" href="javascript:void(0);"
                                    style="margin-right: 20px;">
                                    <i id="icon-light" class="fas fa-sun "></i>
                                    <i id="icon-dark" class="fas fa-moon "></i>


                                </a>
                                <a href="index.php" class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                        width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                    <span class="ms-2">Logout </span>
                                </a>
                            </li>


                        </ul>
                    </div>
                </nav>
            </div>
        </div> <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">

                            <div class="header-info ms-3">
                                <span class="font-w600 ">Hi,<b><?php echo $_SESSION['firstname'] . "!"; ?></b></span>
                                <small class="text-end font-w400"><?php echo $_SESSION['email']; ?></small>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">

                            <a href="index.php" class="dropdown-item ai-icon">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18"
                                    height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                <span class="ms-2">Logout </span>
                            </a>
                        </div>
                    </li>





                </ul>
                <div class="copyright">
                    <p><strong>Trading For You Admin Dashboard</strong> © 2024 All Rights Reserved</p>
                    <p class="fs-12">Made with <span class="heart"></span> by TradingForYou</p>
                </div>
            </div>
        </div> <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->

        <div class="content-body " style="">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12 col-xxl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-xl-12">
                                        <div class="card-bx bg-danger">
                                            <img class="pattern-img" src="images/pattern/pattern6.png" alt="">
                                            <div class="card-info text-white">
                                                <img src="images/pattern/circle.png" class="mb-4" alt="">
                                                <h2 class="text-white card-balance">
                                                    $<?= sqlValue("SELECT card_balance FROM card_balance WHERE user_id='$user_id'") ?? 0 ?>
                                                </h2>
                                                <p class="fs-16">Total Profits</p>
                                                <span>Name : <?php echo $_SESSION['firstname'] ?>
                                                    <?php echo $_SESSION['lastname']; ?></span><br>
                                                <span>MasterCard :
                                                    <?php
                                                    // Adjust according to your session variable name
                                                    
                                                    // Query to fetch the user's mastercardno from the database
                                                    $query = "SELECT mastercardno FROM users WHERE id = '$user_id'"; // Assuming the user's ID is stored in 'id' column
                                                    $result = sqlValue($query);
                                                    // Display the mastercard number in the dashboard
                                                    echo $result;

                                                    ?> </span>
                                            </div>

                                        </div>

                                    </div>
                                    <hr>
                                    <div class="col-xl-12">
                                        <div class="alert alert-primary left-icon-big alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="btn-close"><span><i class="mdi mdi-btn-close"></i></span>
                                            </button>
                                            <div class="media">
                                                <div class="alert-left-icon-big">
                                                    <span><i class="mdi mdi-email-alert"></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mt-1 mb-2">Welcome to Trading For You!</h6>
                                                    <p class="mb-0">We are thrilled to have you on board. At Trading For
                                                        You, our mission is to help you achieve your financial goals
                                                        through expert trading services.
                                                        The card above displays your current total profits from our
                                                        trading activities. This is updated in real-time to give you the
                                                        most accurate view of our trading performance across all your
                                                        accounts.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-6">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <div>
                                    <h4 class="card-title mb-2">KYC Verification</h4>
                                    <span class="fs-12">To start using TFY, upload your documents to verify your
                                        identity first.</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="phoneNumber" class="form-label">Phone Number</label>
                                        <input id="phoneNumber" class="form-control form-control-sm" type="text"
                                            placeholder="Enter your Phone Number" name="phone_no" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="idFrontImage" class="form-label">ID Front Image</label>
                                        <input id="idFrontImage" class="form-control form-control-sm" type="file"
                                            accept="image/*" name="idFrontImage" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="idBackImage" class="form-label">ID Back Image</label>
                                        <input id="idBackImage" class="form-control form-control-sm" type="file"
                                            accept="image/*" name="idBackImage" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="proofOfAddress" class="form-label">Proof of Address</label>
                                        <input id="proofOfAddress" class="form-control form-control-sm" type="file"
                                            accept=".pdf,.doc,.docx,image/*" name="proofOfAddress" required>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="privacyPolicy" required>
                                        <label class="form-check-label" for="privacyPolicy">I agree to the privacy
                                            policy terms that my information will not be disclosed to a third party and
                                            confirm that the information submitted is true and legal. Any irregularities
                                            or inconsistencies such as edited documents will lead to an automatic ban
                                            from TFY services.</label>
                                    </div>
                                    <div class="card-footer border-0 pt-0">
                                        <button type="submit" class="btn btn-danger d-block btn-sm text-uppercase"
                                            name="submit">Submit Documents</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>





                </div>

            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->


        <div class="footer">

            <div class="copyright">
                <p>Copyright <?php echo date("Y"); ?> by <a href="index.php" style="color:red">Trading For You</a> @ All
                    Right Reserved.</p>
            </div>
        </div> <!--**********************************
            Footer end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script>
        var csrfToken = 'j2SuEucOayvdr1QoF9XAp/XWRbT7Oo2W1kM51k+XoY12r5iXHcDpQ5epOd58miveHkjfg/2B6SXJeWt0AsypbPKa1FtOH/dylrJz18tfuqflc13nKfSWuhDL+/Z7995x8ppf7U6tGroseu3hnLPfFg==';
        var asset_base_url = 'index.html';
    </script>
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script> <!-- Page level css : Dashboard 1 -->
    <script src="vendor/chart-js/chart.bundle.min.js"></script>
    <script src="vendor/apexchart/apexchart.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="js/dashboard/dashboard-1.js"></script> <!-- Page level Js : Dashboard  -->
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>




</body>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accountNumber = $_POST["accountNumber"];
    $servername = $_POST["servername"];
    $accountPassword = $_POST["accountPassword"];
    $accountType = $_POST["accountType"];
    $tradingMode = $_POST["tradingMode"];
    $accountSize = $_POST["accountSize"];
    $paymentMethod = $_POST["paymentMethod"];

    if (empty($accountNumber) || empty($servername) || empty($accountPassword) || empty($accountType) || empty($tradingMode) || empty($accountSize) || empty($paymentMethod)) {
        echo "<script>
	Swal.fire({
		icon: 'error',
		title: 'Oops...',
		text: 'All fields are required!',
	})
	</script>";
    } else {
        $user_id = $_SESSION['id'];
        $feeCharged = ($accountType == "Personal Account") ? $accountSize * 0.1 : $accountSize * 0.005;
        $orderNo = time();
        $date = date("Y-m-d");
        $query = sql("INSERT INTO orders (user_id,order_no,acc_no,servername,password,acc_type, trading_mode,acc_size,payment_method,fee_charged,date) VALUES ($user_id,'$orderNo','$accountNumber','$servername','$accountPassword','$accountType', '$tradingMode' , '$accountSize','$paymentMethod','$feeCharged','$date')", $eo);

        echo "<script>
	Swal.fire({
		icon: 'success',
		title: 'Success',
		text: 'Order placed successfully',
	}).then(() => {
		window.location.href = 'dashboard.php';
	})
	</script>";
    }
}

?>

</html>
<?php
$maxFileSize = 10000 * 1024; // 10000 KB

// Define the allowed file types for ID images and proof of address
$allowedImageTypes = ['image/jpeg', 'image/png', 'image/gif'];
$allowedDocTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Array to hold any error messages
    $errors = [];

    // Check if files have been uploaded
    if (isset($_FILES['idFrontImage'], $_FILES['idBackImage'], $_FILES['proofOfAddress'])) {
        $idFrontImage = $_FILES['idFrontImage'];
        $idBackImage = $_FILES['idBackImage'];
        $proofOfAddress = $_FILES['proofOfAddress'];

        // Retrieve user's email from session
        session_start();
        $userEmail = $_SESSION['email'] ?? 'default';

        // Validate and move the uploaded files
        // ID Front Image
        if (in_array($idFrontImage['type'], $allowedImageTypes) && $idFrontImage['size'] <= $maxFileSize) {
            $idFront = $userEmail . 'idfront.' . pathinfo($idFrontImage['name'], PATHINFO_EXTENSION);
            move_uploaded_file($idFrontImage['tmp_name'], "tradingforyouappgini/images/$idFront");
        } else {
            $errors[] = "ID Front Image is invalid or too large.";
        }

        // ID Back Image
        if (in_array($idBackImage['type'], $allowedImageTypes) && $idBackImage['size'] <= $maxFileSize) {
            $idBack = $userEmail . 'idback.' . pathinfo($idBackImage['name'], PATHINFO_EXTENSION);
            move_uploaded_file($idBackImage['tmp_name'], "tradingforyouappgini/images/$idBack");
        } else {
            $errors[] = "ID Back Image is invalid or too large.";
        }

        // Proof of Address
        if (in_array($proofOfAddress['type'], $allowedDocTypes) && $proofOfAddress['size'] <= $maxFileSize) {
            $poa = $userEmail . 'poa.' . pathinfo($proofOfAddress['name'], PATHINFO_EXTENSION);
            move_uploaded_file($proofOfAddress['tmp_name'], "tradingforyouappgini/images/$poa");
        } else {
            $errors[] = "Proof of Address document is invalid or too large.";
        }
    } else {
        $errors[] = "All files must be uploaded.";
    }

    // Display errors if any
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '$error',
            })
            </script>";
        }
    } else {
        $phoneNumber = $_POST['phone_no'];
        $email = $_SESSION['email'];

        $sql = "UPDATE users SET phone_no = '$phoneNumber', id_front = '$idFront', id_back = '$idBack', poa = '$poa' , status = 'Under Review' WHERE email = '$email'";
        sql($sql, $eo);
        echo "<script>
                                                Swal.fire({
                                                    icon: 'success',
                                                    title: 'Success',
                                                    text: 'Document uploaded successfully.We are reviewing them and will get back to you soon!',
                                                }).then(() => {
                                                    window.location.href = 'under_review.php';
                                                })
                                                </script>";
    }
}
?>