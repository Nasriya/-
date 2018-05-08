
<?php session_start();?>
<?php
include('connection.php');
if (!$_SESSION["UserID"]){  //check session

	  Header("Location: form_login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form
	//ลองทดสอบว่าหากเราเเก้ไขโค้ดบนนี้เเล้ว มันจะไปเปลี่ยนเเปลงโค้ดที่เครื่องเราหรือเปล่า

}else{?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ประวัติการสั่งซื้อ</title>
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
          <li><a href='upload.php'><span>อัพโหลดไฟล์</span></a></li>
					<li><a href='profile.php'><span>ข้อมูลส่วนตัว</span></a></li>


<button class="w3-button w3-round-xlarge w3-white w3-display-topright" style="width:150px"><a href='logout.php'>ออกจากระบบ</a></button>
				</ul>
			</div>
		</div>
	</div>
<br></br>
	<h1 class="w3-myfont w3-center">ประวัติการสั่งซื้อ</h1>

			<br></br>
			<?php

		include('connection.php');


		?>
		<br></br>
		<div style="overflow-x:auto;">
		<table align="center" width="100%" border="1">
		<tr bgcolor="#66CCCC">
		<td><center>ไฟล์งาน</td></center>
		<td><center>รูปแบบการสั่งพิมพ์</td></center>
		<td><center>ประเภทการสั่งพิมพ์</td></center>
		<td><center>ขนาดกระดาษ</td></center></center></center></center>
		<td><center>จำนวน</td></center></center></center>
		<td><center>วันที่นัดรับ</td></center></center>
		<td><center>เวลาที่นัดรับ</td></center>
		<td><center>สถานะ</td></center>
			<td><center></td></center>

		</tr>
		<?php

		$sql = "SELECT * FROM uploadfile
		WHERE Member_ID='{$_SESSION['UserID']}'
		ORDER BY dateup ASC ";
		$view = mysqli_query($con,$sql);
		while ($data = mysqli_fetch_array($view) ) {
		?>
		<tr bgcolor="#F0F8FF">
		<td><center><a href="fileupload/<?=$data["fileupload"]?>" target="_blank"><?php echo $data["fileupload"];?></a></center></td>
		<td><center><?php echo "$data[Format]"; ?></center></td>
		<td><center><?php echo "$data[ProductType]"; ?></center></td>
		<td><center><?php echo "$data[ProductDetail]"; ?></center></td>
		<td><center><?php echo "$data[Quanitity]"; ?></center></td>
		<td><center><?php echo "$data[DateReceip]"; ?></center></td>
		<td><center><?php echo "$data[TimeReceip]"; ?></center></td>
		<td><center><?php echo "$data[Status]"; ?></td></center>
		<td><center><?php echo "<a href='delete.php?fileupload=$data[1]'>";?><img src="images/bin.png" width="35" height="35" OnClick="return chkdel();"></td></center>
			<script language="JavaScript">
			function chkdel(){if(confirm('  กรุณายืนยันการลบอีกครั้ง !!!  ')){
				return true;
			}else{
				return false;
			}
			}
			</script -->

		<?php
		}
	}

		?>

		</div>
		</div>
		</tr>
		</html>
