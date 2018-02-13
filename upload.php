<?php session_start();?>
<?php

if (!$_SESSION["UserID"]){  //check session

	  Header("Location: form_login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>หน้าเเรกสมาชิก</title>

	<meta name="description" content="Free Responsive Html5 Css3 Templates | html5xcss3.com">
	<meta name="author" content="www.html5xcss3.com">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/lightbox.css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
</head>

<body class="home-page">
	<div class="wrap-body">
		<div class="header">
			<div id='cssmenu' >
				<ul>
				   <li><img src="images/f.png" width="150" height="150"></li>
				     <li><a href='index.html'><span>หน้าแรก</span></a></li>
						<li><a href='service.html'><span>บริการของเรา</span></a></li>
				   <li><a href='contact.html'><span>ติดต่อเรา</span></a></li>
					<li><a href='profile.php'><span>แก้ไขข้อมูลส่วนตัว</span></a></li>

					<button class="w3-button w3-round-xlarge w3-white w3-display-topright" style="width:150px"><a href='logout.php'>ออกจากระบบ</a></button>
							</div>
				</ul>

	</div>
	<div class="custom-banner">
		<center><img src="images/main.png" width="1500" height="100"></center>
	</div>
	<br></br>
	<h2 class="w3-myfont w3-center">อัพโหลดไฟล์</h2>
	<center>
		<form action="upload.php" method="post" enctype="multipart/form-data">
    กรุณาเลือกไฟล์:
    <input type="file" name="fileToUpload" id="fileToUpload">
		<button class="w3-button w3-round-xlarge w3-green" style="width:100px">ยืนยัน</button>

</form>

		<br></br>
		<select name="type_print">
      <option value="" selected>---Print---</option>
      <option value="color">สี</option>
      <option value="blackwhite">ขาว-ดำ </option>
     </select>

		<br></br>
		จำนวน:
		<input type="number" min="1">
		<br></br>
		<select name="type_print">
      <option value="" selected>---ขนาดกระดาษ---</option>
      <option value="A2">A2</option>
      <option value="A3">A3 </option>
			<option value="A4">A4</option>
      <option value="A5">A5 </option>
     </select>
		<br></br>
		<p>กรุณาเลือกวันเเละเวลาที่นัดรับเอกสาร</p>

<form action="/action_page.php">
  <input type="date" name="bdaytime">
	<input type="time" name="bday">
  <!--Start Box-<input type="submit" value="ตกลง"-->
</form>
<br></br>
<button class="w3-button w3-round-xlarge w3-blue" style="width:100px">ยืนยัน</button>&nbsp;&nbsp;<button class="w3-button w3-round-xlarge w3-red"style="width:100px" >ยกเลิก</button>

		<p>หมายเหตุ: เฉพาะไฟล์ PDF เท่านั้น </p>
		</center>
	<?php }?>
</body>
	</html>
