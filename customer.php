
<?php session_start();?>
<?php
include('connection.php');
if (!$_SESSION["UserID"]){  //check session

	  Header("Location: form_login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form


}else{?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>จัดการคิว</title>
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
          <li><a href='employee.php'><span>จัดการคิว</span></a></li>
				   <li><a href='check.php'><span>ค้นหา</span></a></li>
					 <li><a href='admin_profile.php'><span>ข้อมูลส่วนตัว</span></a></li>
					 <li><a href='graph.php'><span>ข้อมูลการดำเนินงาน</span></a></li>

<button class="w3-button w3-round-xlarge w3-white w3-display-topright" style="width:150px"><a href='logout.php'>ออกจากระบบ</a></button>
				</ul>
			</div>
		</div>
	</div>
<br></br>
	<h1 class="w3-myfont w3-center">ข้อมูลของลูกค้า</h1>

			<br></br>
			<?php
			//1. เชื่อมต่อ database:
			include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

			//2. query ข้อมูลจากตาราง tb_member:
			$query = "SELECT user.* FROM user	ORDER BY Member_ID ASC ";
			//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
			$result = mysqli_query($con, $query);
			//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
			echo "<table align='center' width='900' >";
			//หัวข้อตาราง
			echo " <tr align='center'>
			<td bgcolor='#61b4cf'><br>รหัสสมาชิก</br></td>
			<td bgcolor='#61b4cf'><br>ชื่อ</br></td>
			<td bgcolor='#61b4cf'><br>นามสกุล</br></td>
      	<td bgcolor='#61b4cf'><br>Username</br></td>
			<td bgcolor='#61b4cf'><br>ที่อยู่</br></td>
			<td bgcolor='#61b4cf'><br>เบอร์โทรศัพท์</br></td>
			<td bgcolor='#61b4cf'><br>E-mail</br></td>
			<td bgcolor='#61b4cf'><br></br></td>


			<td></br></br></td>
			<td><br></br></td></tr>";

			while($row = mysqli_fetch_array($result)) {
				  //$_SESSION["fileID"] =$_SESSION["UserID"];
				echo "<tr>";
			  echo "<td align='center'  bgcolor='#ffffff'>" .$row["Member_ID"] .  "</td> ";
				echo "<td align='center'  bgcolor='#ffffff'>" .$row["Firstname"] .  "</td> ";
			  echo "<td align='center'  bgcolor='#ffffff'>" .$row["Lastname"] .  "</td> ";
        	echo "<td align='center'  bgcolor='#ffffff'>" .$row["Username"] .  "</td> ";
        	echo "<td align='center'  bgcolor='#ffffff'>" .$row["Address"] .  "</td> ";
			echo "<td align='center'  bgcolor='#ffffff'>" .$row["Telephone"] .  "</td> ";
			 echo "<td align='center'  bgcolor='#ffffff'>" .$row["Email"] .  "</td> ";

			//	echo "<td align='center'  bgcolor='#61b4cf'>" ."</td> ";//ลบ

			//ลบข้อมูล
			 // echo "<td align='center' bgcolor='#def1f9'><a href='UserDelete.php?ID=$row[0]'><button class='w3-button w3-small w3-red' style='width:60px'>Delete</button></a></td> ";
			  echo "</tr>";
			}
			echo "</table>";
			//5. close connection
			mysqli_close($con);
}
			?>
			<br></br>
		<!--	<center><form action="clear.php"><button  class="w3-button w3-round-xlarge w3-green" style="width:200px" >ล้างข้อมูลทั้งหมด</button>
