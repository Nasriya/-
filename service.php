<?php session_start();?>
<?php

if (!$_SESSION["UserID"]){  //check session

	  Header("Location: form_login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{}?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>บริการของเรา</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | html5xcss3.com">
	<meta name="author" content="www.html5xcss3.com">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
				     <li><a href='index.php'><span>หน้าแรก</span></a></li>
				   <li><a href='contact.php'><span>ติดต่อเรา</span></a></li>
					 <li><a href='upload.php'><span>อัพโหลดไฟล์</span></a></li>
				 <li><a href='profile.php'><span>ข้อมูลส่วนตัว</span></a></li>
					 <button class="w3-button w3-round-xlarge w3-white w3-display-topright" style="width:150px"><a href='logout.php'>ออกจากระบบ</a></button>

				</ul>
			</div>
		</div>

				<!-----------------content-box-2-------------------->
				<section class="content-box box-2">
					<div class="zerogrid">
						<div class="row wrap-box"><!--Start Box-->
							<div class="header">
								<div class="wrapper">
									<h2 class="color-blue">บริการของเรา</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-1-3">
									<div class="wrap-col">
										<div class="portfolio-box">
											<img src="images/test.png" class="img-responsive" alt="">
											<div class="portfolio-box-caption">
												<div class="portfolio-box-caption-content">
													<div class="project-category text-faded">
														<p>ปริ้นงานขาว-ดำ</p>
														<p>ราคา XXX บาท</p>
													</div>
													<div class="project-name">
														<a href="single.html"></a>
													</div>
												</div>
											</div>
										</div>
										<div class="portfolio-box">
											<img src="images/test.png" class="img-responsive" alt="">
											<div class="portfolio-box-caption">
												<div class="portfolio-box-caption-content">
													<div class="project-category text-faded">
														<p>ปริ้นงานสี</p>
														<p>ราคา XXX บาท</p>
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
													<div class="project-category text-faded">
														<p>ถ่ายเอกสาร</p>
														<p>ราคา XXX บาท</p>
													</div>
												</div>
											</div>
										</div>
										<div class="portfolio-box">
											<img src="images/test.png" class="img-responsive" alt="">
											<div class="portfolio-box-caption">
												<div class="portfolio-box-caption-content">
													<div class="project-category text-faded">
														<p>จัดรูปเล่ม</p>
														<p>ราคา XXX บาท</p>
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
													<div class="project-category text-faded">
														<p>เคลือบบัตร</p>
														<p>ราคา XXX บาท</p>
													</div>
												</div>
											</div>
										</div>
										<div class="portfolio-box">
											<img src="images/test.png" class="img-responsive" alt="">
											<div class="portfolio-box-caption">
												<div class="portfolio-box-caption-content">
													<div class="project-category text-faded">
														<p>จำหน่ายอุปกรณ์</p>
														<p>ราคา XXX บาท</p>
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
