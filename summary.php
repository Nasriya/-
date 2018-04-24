<?php session_start();?>
<?php

include('connection.php');

if (!$_SESSION["UserID"]){  //check session

	  Header("Location: form_login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{}

?>

<?php


$meSQL = "SELECT * FROM uploadfile WHERE Member_ID='{$_SESSION['UserID']}' ORDER BY dateup desc ";
$meQuery = mysqli_query($con,$meSQL);
if ($meQuery == TRUE) {
$meResult = mysqli_fetch_assoc($meQuery); //มีค่าตัวแปรเฉพาะที่เราเลือก
} else {
echo 'error';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>สรุปผลการสั่งซื้อ</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | html5xcss3.com">
	<meta name="author" content="www.html5xcss3.com">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/lightbox.css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/menu.css">

<link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>

</head>

<body class="home-page">
	<div class="wrap-body">
		<div class="header">
			<div id='cssmenu' >
				<ul>
					<li><a href='index.php'><span>หน้าแรก</span></a></li>
				 <li><a href='service.php'><span>บริการของเรา</span></a></li>
				<li><a href='contact.php'><span>ติดต่อเรา</span></a></li>
			 <li><a href='profile.php'><span>ข้อมูลส่วนตัว</span></a></li>
			 <li><a href='history.php'><span>ประวัติการสั่งซื้อ</span></a></li>
 					<button class="w3-button w3-round-xlarge w3-white w3-display-topright" style="width:150px"><a href='logout.php'>ออกจากระบบ</a></button>
				</ul>
			</div>
		</div>


<div class="w3-container">


<div class="w3-row w3-container">
  <p></p>
  <div class="w3-col m3  w3-center">
    <p></p>
  </div>
  <div class="w3-col m6 w3-sand  w3-center">
	<table class="w3-table w3-bordered">
			<h4>สรุปผลการสั่งซื้อ</h4>
<tr>
			<td><p><b>ไฟล์งาน :</b> </td>
				<td><a href="fileupload/<?=$meResult["fileupload"]?>" target="_blank"><?php echo $meResult['fileupload']; ?></p></td><td></td></tr>

				<td><p><b>ประเภทการสั่งพิมพ์ :</b>&nbsp;&nbsp;&nbsp; </td>
					<td><?php echo $meResult['ProductType']; ?></p></td><td></td></tr>
					<td><p><b>ขนาดกระดาษ :</b> </td>
						<td><?php echo $meResult['ProductDetail']; ?></p></td><td></td></tr>

						<td><p><b>จำนวน :</b>&nbsp;&nbsp;&nbsp; </td>
							<td><?php echo $meResult['Quanitity']; ?></p></td><td></td></tr>
							<td><p><b>วันที่นัดรับ :</b> </td>
								<td><?php echo $meResult['DateReceip']; ?></p></td><td></td></tr>

								<td><p><b>เวลาที่นัดรับ :</b>&nbsp;&nbsp;&nbsp; </td>
									<td><?php echo $meResult['TimeReceip']; ?></p></td><td></td></tr>
									<td><p><b>สถานะ :</b>&nbsp;&nbsp;&nbsp; </td>
										<td><?php echo $meResult['TimeReceip']; ?></p></td><td></td></tr>
										<td>
										  สถานะตอนนี้ คือ
										      <td><font color="red"><?php echo $meResult['Status']; ?></td><td></td></font></td>




  </div>
  <div class="w3-col m3  w3-center">
    <p></p>
  </div>
</div>
<tr>
<td>เปลี่ยนแปลงสถานะเป็น ..<td>
	<form method='post' action='1_status.php'><button class="w3-btn w3-white w3-border w3-border-red w3-round-large" style="width:150px" name="st1">กำลังดำเนินงาน</button></center></form>
<form method='post' action='2_status.php'><button class="w3-btn w3-white w3-border w3-border-yellow w3-round-large" style="width:150px" name="st2">รอการชำระ</button></form>
<form method='post' action='3_status.php'><button class="w3-btn w3-white w3-border w3-border-green w3-round-large" style="width:150px" name="st3">ชำระเเล้ว</button></form></form><br></br></td>
</tr>
</table>
<br></br>

<p><a href="upload.php" class="w3-btn  w3-round-xxlarge w3-red" style="width:200px">close</a></p>
</body>
</html>
