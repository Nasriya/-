
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


<button class="w3-button w3-round-xlarge w3-white w3-display-topright" style="width:150px"><a href='logout.php'>ออกจากระบบ</a></button>
				</ul>
			</div>
		</div>
	</div>
<br></br>
	<h1 class="w3-myfont w3-center">ประวัติการสั่งซื้อ</h1>

			<br></br>
			<?php
			//1. เชื่อมต่อ database:
			include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
			//2. query ข้อมูลจากตาราง tb_member:
			$query = "SELECT * FROM uploadfile
			WHERE Member_ID='{$_SESSION['UserID']}'
			ORDER BY dateup ASC ";
			//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
			$result = mysqli_query($con, $query);
			//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
			echo "<table align='center' width='900' >";
			//หัวข้อตาราง
			echo " <tr align='center'>
			<td bgcolor='#61b4cf'><br>ไฟล์งาน</br></td>
			<td bgcolor='#b8b4b0'><br>ประเภทการสั่งพิมพ์</br></td>
			<td bgcolor='#61b4cf'><br>ขนาดกระดาษ</br></td>
			<td bgcolor='#b8b4b0'><br>จำนวน</br></td>
			<td bgcolor='#61b4cf'><br>วันที่นัดรับ</br></td>
      <td bgcolor='#b8b4b0'><br>เวลาที่นัดรับ</br></td>
      <td bgcolor='#61b4cf'><br>สถานะ</br></td>
			<td bgcolor='#61b4cf'><br></br><br></br></td>

			<td bgcolor='#61b4cf'><br></br></td>

			<td></br></br></td>
			<td><br></br></td></tr>";

			while($row = mysqli_fetch_array($result)) {
				echo "<tr>";
			  echo "<td align='center'  bgcolor='#def1f9'>" .$row["fileupload"] .  "</td> ";
				echo "<td align='center'  bgcolor='#e1dedc'>" .$row["ProductType"] .  "</td> ";
        echo "<td align='center'  bgcolor='#def1f9'>" .$row["ProductDetail"] .  "</td> ";
			  echo "<td align='center'  bgcolor='#e1dedc'>" .$row["Quanitity"] .  "</td> ";
			  echo "<td align='center'  bgcolor='#def1f9'>" .$row["DateReceip"] .  "</td> ";
			  echo "<td align='center'  bgcolor='#e1dedc'>".$row["TimeReceip"] .  "</td> ";
        echo "<td align='center'  bgcolor='#def1f9'>".$row["Status"] .  "</td> ";
				echo "<td align='center'  bgcolor='#61b4cf'>" ."</td> ";//ลบ


			  echo "</tr>";
			}
			echo "</table>";
			//5. close connection
			mysqli_close($con);
}
			?>
			<br></br>
			<center><form action="upload.php"><button  class="w3-button w3-round-xlarge w3-green" style="width:200px" > ย้อนกลับ</button>
