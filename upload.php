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
				     <li><a href='index.php'><span>หน้าแรก</span></a></li>
						<li><a href='service.php'><span>บริการของเรา</span></a></li>
				   <li><a href='contact.php'><span>ติดต่อเรา</span></a></li>
					<li><a href='profile.php'><span>ข้อมูลส่วนตัว</span></a></li>
					<li><a href='history.php'><span>ประวัติการสั่งซื้อ</span></a></li>

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
		<form action="add_file_db.php" method="post" enctype="multipart/form-data" >
    <b>กรุณาเลือกไฟล์:</b>
    <input type="file" name="fileupload"  id ="fileupload" required >
<font color="red"><p>หมายเหตุ: เฉพาะไฟล์ PDF เท่านั้น </p></font>
<b>ขนาดกระดาษ</b>
<select name="PD" required>
	<option selected >---ขนาดกระดาษ---</option>
	<option name="PD" value="A2">A2</option>
	<option name="PD" value="A3">A3 </option>
	<option name="PD" value="A4">A4</option>
	<option name="PD" value="A5">A5 </option>
</select>
		<br></br>
		<b>รูปแบบการพิมพ์:</b>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="FM" value="หน้าเดียว" >หน้าเดียว &nbsp;&nbsp;
		<input type="radio" name="FM" value="หน้าหลัง" >หน้าหลัง
		<br></br>
		<b>ประเภทการพิมพ์:</b>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="TP" value="สี"  >สี &nbsp;&nbsp;
		<input type="radio" name="TP" value="ขาวดำ" >ขาว-ดำ
		<br></br>

		<b>จำนวน:</b>
		<input type="number"  name="Quanitity" min="1" required>

		<b><p>กรุณาเลือกวันเเละเวลาที่นัดรับเอกสาร</p></b>


  <input type="date" name="DateReceip" value="d-m-y" required>
	<!--<input type="time" name="TimeReceip"  value="d-m-Y" required>-->
  <!--Start Box-<input type="submit" value="ตกลง"-->
	<select name="TimeReceip" required>
		<option selected>---เวลารับเอกสาร---</option>
		<option name="TimeReceip" value="8.30-10.30 น.">8.30-10.30 น.</option>
		<option name="TimeReceip" value="10.31-12.00 น.">10.31-12.00 น.</option>
		<option name="TimeReceip" value="13.00-14.30 น.">13.00-14.30 น.</option>
		<option name="TimeReceip" value="14.31-16.00 น.">14.31-16.00 น. </option>
		<option name="TimeReceip" value="16.01-18.00 น.">16.01-18.00 น. </option>
	 </select>
<br></br>
<button type="submit" class="w3-button w3-round-xlarge w3-green" style="width:100px" name="button" id="button">ยืนยัน</button>

&nbsp;&nbsp;<button class="w3-button w3-round-xlarge w3-red"style="width:100px" >ยกเลิก</button>


		</center>

	</form>

	<?php }?>

</body>
	</html>
