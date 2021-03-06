<?php session_start();?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

	<!-- Custom Style CSS -->
	<link rel="stylesheet" href="css/style.css">

	<title>Landing Page with Counter</title>
</head>

<body>
	<header class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-lg-6 mx-auto p-0">
					<div class="content-box">
						<h1 class="main-heading">COMING SOON</h1>
						<p>Counter application in JavaScript</p>
						<div class="counter" id="countdown">
							<!--need to cut the code from here-->
							<div class="counter-box">
								<span class="counter-number"></span>
								<span class="counter-text">Days</span>
							</div>
							<div class="counter-box">
								<span class="counter-number"></span>
								<span class="counter-text">Hours</span>
							</div>
							<div class="counter-box">
								<span class="counter-number"></span>
								<span class="counter-text">Mins</span>
							</div>
							<div class="counter-box">
								<span class="counter-number"></span>
								<span class="counter-text">Seconds</span>
							</div>
							<!--need to cut the code till here-->
							<div class="clearfix"></div>
						</div>
						<p class="paragraph">
							<?php
								if(isset($_SESSION['message'])){
									echo $_SESSION['message'];
									unset($_SESSION['message']);
								}
							?>
						</p>
						<div class="form-box">
							<form action="includes/process.php" class="form" method="POST">
								<div class="input-group mb-2 mr-sm-2">
									<input type="email" name="email" class="form-control" placeholder="Get Notify by Email" required>
									<div class="input-group-prepend">
										<button class="input-group-text" id="subscribe-btn" type="submit" name="subscribe">Subscribe</button>
									</div>
								</div>
							</form>

						</div>
					</div>
				</div>
				<!-- /col-md-6 -->
				<div class="col-lg-6 hide-img p-0">
					<div class="landing-img"></div>
				</div>
				<!-- /col-md-6 -->
			</div>
			<!-- /row -->
		</div>
	</header>
	<script src="js/script.js"></script>
</body>

</html>