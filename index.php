<?php session_start();?>
<?php

if (!$_SESSION["UserID"]){  //check session

	  Header("Location: form_login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{}?>
<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>พี่อี๊ด.com</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | html5xcss3.com">
	<meta name="author" content="www.html5xcss3.com">

    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
	================================================== -->
<link rel="stylesheet" href="css/zerogrid.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/lightbox.css">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="js/jquery1111.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>
</head>

<body class="home-page">
	<div class="wrap-body">
		<div class="header">
			<div id='cssmenu' >
				<ul>
					<li><img src="images/f.png" width="150" height="150"></li>
						<li><a href='service.php'><span>บริการของเรา</span></a></li>
				   <li><a href='contact.php'><span>ติดต่อเรา</span></a></li>
					 <li><a href='upload.php'><span>อัพโหลดไฟล์</span></a></li>
					 <li><a href='profile.php'><span>ข้อมูลส่วนตัว</span></a></li>
					 <li><a href='history.php'><span>ประวัติการสั่งซื้อ</span></a></li>


						 <button class="w3-button w3-round-xlarge w3-white w3-display-topright" style="width:150px"><a href='logout.php'>ออกจากระบบ</a></button>

				</ul>
			</div>
			<div class="custom-banner">
				<center><img src="images/main.png" width="1500" height="100"></center>
			</div>
		</div>
		<!--////////////////////////////////////Container-->
		<section class="content-box box-2">

			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="portfolio-box">
									<center><img src="images/i1.png" class="img-responsive" alt=""></center>
									<div class="portfolio-box-caption">
										<div class="portfolio-box-caption-content">
											<div class="project-name">
												<a href="service.html">บริการของเรา</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="portfolio-box">
									<center><img src="images/i2.png" class="img-responsive" alt=""></center>
									<div class="portfolio-box-caption">
										<div class="portfolio-box-caption-content">
											<div class="project-name">
												<a href="contact.html">ติดต่อเรา</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="portfolio-box">
									<center><img src="images/i3.png" class="img-responsive" alt=""></center>
									<div class="portfolio-box-caption">
										<div class="portfolio-box-caption-content">
											<div class="project-name">
												<a href="Login.html">เข้าสู่ระบบ</a>
											</div>
										</div>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--2-->
		<section id="container">
			<div class="wrap-container">

				<!-----------------ผลงานของเรา-------------------->
				<section class="content-box box-2">
					<div class="zerogrid">
						<div class="row wrap-box"><!--Start Box-->
							<div class="header">
								<div class="wrapper">
									<h2 class="color-blue">ผลงานของเรา</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-1-3">
									<div class="wrap-col">
										<div class="portfolio-box">
											<img src="images/test.png" class="img-responsive" alt="">
											<div class="portfolio-box-caption">
												<div class="portfolio-box-caption-content">
													<div class="project-name">
														<p>Project Name</p>
													</div>
												</div>
											</div>
										</div>
										<div class="portfolio-box">
											<img src="images/test.png" class="img-responsive" alt="">
											<div class="portfolio-box-caption">
												<div class="portfolio-box-caption-content">
													<div class="project-name">
														<p>Project Name</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-1-3">
									<div class="wrap-col">
										<div class="portfolio-box">
											<img src="images/test.png" class="img-responsive" alt="">
											<div class="portfolio-box-caption">
												<div class="portfolio-box-caption-content">
													<div class="project-name">
														<p>Project Name</p>
													</div>
												</div>
											</div>
										</div>
										<div class="portfolio-box">
											<img src="images/test.png" class="img-responsive" alt="">
											<div class="portfolio-box-caption">
												<div class="portfolio-box-caption-content">
													<div class="project-name">
														<p>Project Name</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-1-3">
									<div class="wrap-col">
										<div class="portfolio-box">
											<img src="images/test.png" class="img-responsive" alt="">
											<div class="portfolio-box-caption">
												<div class="portfolio-box-caption-content">
													<div class="project-name">
														<p>Project Name</p>
													</div>
												</div>
											</div>
										</div>
										<div class="portfolio-box">
											<img src="images/test.png" class="img-responsive" alt="">
											<div class="portfolio-box-caption">
												<div class="portfolio-box-caption-content">
													<div class="project-name">
														<p>Project Name</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</section>
	</div>
</body>
</html>
