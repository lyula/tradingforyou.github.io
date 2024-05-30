<?php
include ("controllertop.php");
if(!isset($_SESSION['email']))
{
	header("location: login.php");
}
elseif ($_SESSION['status'] == 'Pending') {
	header("location: verification.php");
} elseif ($_SESSION['status'] == 'Banned') {
	header("location: banned.php");
} 
elseif ($_SESSION["status"] == "Under Review") {
	header("location: under_review.php");
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
                <img src="final.png" alt="" style="width: 100px;height:100px;border-radius:50%;display:flex;justify-content:center;padding:15px">
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
								<a class="nav-link bell dz-theme-mode p-0" href="javascript:void(0);" style="margin-right: 20px;">
									<i id="icon-light" class="fas fa-sun "></i>
									<i id="icon-dark" class="fas fa-moon "></i>


								</a>
								<a href="index.php" class="dropdown-item ai-icon">
                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
								<span class="font-w600 ">Hi,<b><?php echo $_SESSION['firstname']."!"; ?></b></span>
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



					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-041-graph"></i>
							<span class="nav-text">Menu</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="dashboard.php">Dashboard</a></li>
							<li><a href="statistics.php">Statistics</a></li>
							<li><a href="payouts.php">Payouts</a></li>
							

						</ul>
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
												<h2 class="text-white card-balance">$<?=sqlValue("SELECT card_balance FROM card_balance WHERE user_id='$user_id'")??0?></h2>
												<p class="fs-16">Total Profits</p>
												<span>Name : <?php echo $_SESSION['firstname'] ?>  <?php echo $_SESSION['lastname']; ?></span><br>
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
														most accurate view of our trading performance across all your accounts.
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
									<h4 class="card-title mb-2">Reserve Booking</h4>
									<span class="fs-12">Provide the necessary details to let us trade for you</span>
								</div>
								<div class="dropdown">
									<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
										aria-expanded="false">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
												stroke="#575757" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round">
											</path>
											<path
												d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
												stroke="#575757" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round">
											</path>
											<path
												d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
												stroke="#575757" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round">
											</path>
										</svg>
									</a>

								</div>
							</div>
							<div class="card-body">
								<form action="" method="post">
								<div class="mb-3">
									
									<input id="accountNumber" class="form-control form-control-sm" type="text"
										placeholder="Account Number" name="accountNumber" required>
								</div>
								<div class="mb-2">
									
									<input id="servername" class="form-control form-control-sm" type="text" placeholder="Servername" name="servername" required>
								</div>
								<div class="mb-3">
									
									<input id="accountPassword" class="form-control form-control-sm" type="text"
										placeholder="Account Password" name="accountPassword" required>
								</div>
								

								<div class="mb-3">
									
									<select id="accountType" class="form-control form-control-sm" name="accountType" required>
										<option value="">Select Account Type</option>
										<option value="Personal Account">Personal Account</option>
										<option value="Prop Firm">Propfirm Account</option>
									</select>
								</div>
								<div class="mb-3">
									
									<select id="accountType" class="form-control form-control-sm" name="tradingMode" required>
										<option value="">Select Trading Mode</option>
										<option value="Manual Trading">Manual Trading</option>
										<option value="Automated Trading">Automated Trading</option>
									</select>
								</div>
								<div class="mb-3">
									
									<input id="accountSize" class="form-control form-control-sm" type="text"
										placeholder="Account size" name="accountSize" required>
								</div>
								<div class="mb-3">
									<label for="feeCharged" class="form-label">Fee Charged</label>
									<input id="feeCharged" class="form-control form-control-sm" type="text"
										placeholder="Fee charged" readonly>
								</div>
								<div class="mb-3">
									
									<select id="paymentMethod" class="form-control form-control-sm" name="paymentMethod" required>
										<option value="">Payment Method</option>
										<option value="Card Payment">Card Payment</option>
										<option value="Mobile Payment">Mobile Money</option>
									</select>
								</div>


								<script>
									document.getElementById('accountSize').addEventListener('input', calculateFee);
									document.getElementById('accountType').addEventListener('change', calculateFee);

									function calculateFee() {
										const accountType = document.getElementById('accountType').value;
										const accountSize = parseFloat(document.getElementById('accountSize').value);
										const feeCharged = document.getElementById('feeCharged');
										let fee = 0;

										if (!isNaN(accountSize) && accountSize >= 250) {
											if (accountType === 'Personal Account') {
												fee = accountSize * 0.10;
											} else if (accountType === 'Prop Firm') {
												fee = accountSize * 0.005;
											}
										}

										feeCharged.value = fee.toFixed(2);
									}
								</script>


                              
							</div>
							<div class="card-footer border-0 pt-0">
								<button type="submit"
									class="btn btn-danger d-block btn-sm text-uppercase" name="submit">CONFIRM AND PAY</button>
							</div>
						</form>
						</div>
					</div>
					




				</div>
				<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Your Orders</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table header-border table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>Invoice</th>
                                                <th>Date</th>
                                                <th>Account No.</th>
                                                <th>Status</th>
                                                <th class="">Account size</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $getorders = sql("SELECT * FROM orders WHERE user_id='$_SESSION[id]' ORDER BY id DESC LIMIT 4", $eo);
                                            foreach ($getorders as $order) { ?>
                                                <tr>
                                                    <td><a href="javascript:void();">Order #<?= $order['order_no'] ?></a>
                                                    </td>
                                                    <td><?= $order['date'] ?></td>
                                                    <td><span class="text-muted"><?= $order['acc_no'] ?></span>
                                                    </td>
                                                    <?php
                                                    if ($order['status'] == "Active") { ?>
                                                        <td><span class="badge badge-success">Active</span>
                                                            <?php
                                                    } else { ?>
                                                        <td><span class="badge badge-danger">Pending</span>
                                                            <?php
                                                    }
                                                    ?>
                                                    </td>
                                                    <td class=""><?= $order['acc_size'] ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
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
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$accountNumber = $_POST["accountNumber"];
	$servername= $_POST["servername"];
	$accountPassword= $_POST["accountPassword"];
	$accountType= $_POST["accountType"];
	$tradingMode= $_POST["tradingMode"];
	$accountSize= $_POST["accountSize"];
	$paymentMethod= $_POST["paymentMethod"];

  if(empty($accountNumber) || empty($servername) || empty($accountPassword) || empty($accountType) || empty($tradingMode) || empty($accountSize) || empty($paymentMethod)) {
	echo "<script>
	Swal.fire({
		icon: 'error',
		title: 'Oops...',
		text: 'All fields are required!',
	})
	</script>";
  } else {
	$user_id = $_SESSION['id'];
	$feeCharged=($accountType=="Personal Account")?$accountSize*0.1:$accountSize*0.005;
	$orderNo = time();
	$date = date("Y-m-d");
	$query = sql("INSERT INTO orders (user_id,order_no,acc_no,servername,password,acc_type, trading_mode,acc_size,payment_method,fee_charged,date) VALUES ($user_id,'$orderNo','$accountNumber','$servername','$accountPassword','$accountType', '$tradingMode' , '$accountSize','$paymentMethod','$feeCharged','$date')",$eo);

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