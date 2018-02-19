<?php session_start();?>
<?php

include('connection.php');
if (!$_SESSION["UserID"]){  //check session

	  Header("Location: form_login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{
	//$_SESSION['frmAction'] = md5('itoffside.com' . rand(1, 9999));
?>

<?php
$meSQL = "SELECT * FROM user WHERE Member_ID='{$_SESSION['UserID']}' ";
$meQuery = mysqli_query($con,$meSQL);
if ($meQuery == TRUE) {
$meResult = mysqli_fetch_assoc($meQuery);
} else {
echo 'error';
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ข้อมูลส่วนตัว</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | html5xcss3.com">
	<meta name="author" content="www.html5xcss3.com">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/lightbox.css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
					 <li><a href='upload.php'><span>อัพโหลดไฟล์</span></a></li>

 					<button class="w3-button w3-round-xlarge w3-white w3-display-topright" style="width:150px"><a href='logout.php'>ออกจากระบบ</a></button>
				</ul>
			</div>
		</div>

<br></br>
		<h2 class="w3-myfont w3-center">ข้อมูลส่วนตัว</h2>
		<br></br>
		<div class="w3-row">
		<div class="w3-col m3 "><p></p></div>
		<div class="w3-col m6 w3-round-xxlarge w3-light-blue w3-center w3-myfont">


			<form name=""  method="POST">
		<br><b>Username  :  </b><?php echo $meResult['Username']; ?></br>
		<br><b>ชื่อ  :  </b><?php echo $meResult['Firstname']; ?> </br>
		<br><b>นามสกุล  : </b><?php echo $meResult['Lastname']; ?> </br>
		<br><b>ที่อยู่  : </b><?php echo $meResult['Address']; ?></br>
		<br><b>เบอร์โทรศัพท์  : </b><?php echo $meResult['Telephone']; ?> </br>
		<br><b>E-mail  : </b><?php echo $meResult['Email']; ?></br>
	<br><b>เเต้มสะสม   :</b><?php echo"ยังไม่ตั้งค่า" ?></br>
	<br></br>
<a href="update_profile.php" class="w3-btn  w3-round-xxlarge w3-red" style="width:200px">แก้ไขข้อมูล</a>

		<br></br>

<?php }?>
