<?php session_start();?>
<?php

if (!$_SESSION["UserID"]){  //check session

	  Header("Location: form_login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{}?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ติดต่อเรา</title>
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
						<li><a href='service.php'><span>บริการของเรา</span></a></li>
				   <li><a href='upload.php'><span>อัพโหลดไฟล์</span></a></li>
					 <li><a href='profile.php'><span>ข้อมูลส่วนตัว</span></a></li>
					 <li><a href='history.php'><span>ประวัติการสั่งซื้อ</span></a></li>

					 <button class="w3-button w3-round-xlarge w3-white w3-display-topright" style="width:150px"><a href='logout.php'>ออกจากระบบ</a></button>

				</ul>
			</div>
		</div>

		<section class="content-box box-2">

			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<div class="wrapper">
							<h2 class="color-blue">ติดต่อเรา</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="portfolio-box">
									<center><img src="images/c1.png" class="img-responsive" alt=""></center>
									<div class="portfolio-box-caption">
										<div class="portfolio-box-caption-content">
											<div class="project-name">
												<p>xxxxxx</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="portfolio-box">
									<center><img src="images/c2.png" class="img-responsive" alt=""></center>
									<div class="portfolio-box-caption">
										<div class="portfolio-box-caption-content">
											<div class="project-name">
												<p>xxxxxx</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="portfolio-box">
									<center><img src="images/c3.png" class="img-responsive" alt=""></center>
									<div class="portfolio-box-caption">
										<div class="portfolio-box-caption-content">
											<div class="project-name">
												<p>xxxxxx</p>
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

			<center><h2>แผนที่</h2></center>
			<br></br>

		<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.970359318034!2d100.49751788560222!3d7.012768851632713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304d29a5cb773aed%3A0x99fc20269c0378bb!2z4LiE4LiT4Liw4Lin4Li04LiX4Lii4Liy4LiB4Liy4Lij4LiI4Lix4LiU4LiB4Liy4Lij!5e0!3m2!1sth!2sth!4v1511092438994" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></center>
		<br></br>
		</div>
	</body>
</html>
