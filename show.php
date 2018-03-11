<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ข้อมูลผู้ใช้</title>
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
</head>

<body class="home-page">
	<div class="wrap-body">
		<div class="header">
			<div id='cssmenu' >
				<ul>
				   <li><img src="images/f.png" width="150" height="150"></li>
					 <li><a href='employee.php'><span>จัดการคิว</span></a></li>
				     <li><a href='check.php'><span>ตรวจสอบ</span></a></li>


 					<button class="w3-button w3-round-xlarge w3-white w3-display-topright" style="width:150px"><a href='logout.php'>ออกจากระบบ</a></button>
				</ul>
			</div>
		</div>


<?php
//1. เชื่อมต่อ database:
include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//2. query ข้อมูลจากตาราง tb_member:
$query = "SELECT * FROM uploadfile";
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
echo "<table border='1' align='center' width='1000'>";
//หัวข้อตาราง
echo "<tr align='center' bgcolor='#ffffff'><td>รหัส</td><td>Uername</td><td>ชื่อ</td><td>นามสกุล</td><td>Telephone</td><td>Email</td><td>แก้ไข</td><td>ลบ</td></tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" .$row["Member_ID"] .  "</td> ";
  echo "<td>" .$row["fileupload"] .  "</td> ";
  echo "<td>" .$row["TimeReceip"] .  "</td> ";
  echo "<td>" .$row["Quanitity"] .  "</td> ";
  echo "<td>" .$row["DateReceip"] .  "</td> ";
  echo "<td>" .$row["TimeReceip"] .  "</td> ";
  //แก้ไขข้อมูล
  echo "<td><a href='UserUpdateForm.php?ID=$row[0]'>edit</a></td> ";

  //ลบข้อมูล
  echo "<td><a href='UserDelete.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\">del</a></td> ";
  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($con);




?>
