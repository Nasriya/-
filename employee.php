
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

				   <li><a href='check.php'><span>ตรวจสอบ</span></a></li>
					 <li><a href='admin_profile.php'><span>ข้อมูลส่วนตัว</span></a></li>
					 <li><a href='graph.php'><span>ข้อมูลการดำเนินงาน</span></a></li>

<button class="w3-button w3-round-xlarge w3-white w3-display-topright" style="width:150px"><a href='logout.php'>ออกจากระบบ</a></button>
				</ul>
			</div>
		</div>
	</div>
<br></br>
	<h1 class="w3-myfont w3-center">จัดการคิว</h1>

			<br></br>
			<?php
			//1. เชื่อมต่อ database:
			include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
			//2. query ข้อมูลจากตาราง tb_member:
			$query = "SELECT user.*,uploadfile.* FROM user,uploadfile
			WHERE user.Member_ID = uploadfile.Member_ID
			ORDER BY dateup ASC ";
			//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
			$result = mysqli_query($con, $query);
			//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
			echo "<table align='center' width='900' >";
			//หัวข้อตาราง
			echo " <tr align='center'>
			<td bgcolor='#61b4cf'><br>Member_ID</br></td>
			<td bgcolor='#b8b4b0'><br>เบอร์โทรศัพท์</br></td>
			<td bgcolor='#61b4cf'><br>ชื่อสมาชิก</br></td>
			<td bgcolor='#b8b4b0'><br>ไฟล์งาน</br></td>
			<td bgcolor='#61b4cf'><br>Note</br></td>
			<td bgcolor='#61b4cf'><br></br><br></br></td>
			<td bgcolor='#b8b4b0'><br>สถานะ</br></td>
			<td bgcolor='#61b4cf'><br></br></td>
			<td bgcolor='#61b4cf'><br>ลบ</br></td>
			<td></br></br></td>
			<td><br></br></td></tr>";

			while($row = mysqli_fetch_array($result)) {
				echo "<tr>";
			  echo "<td align='center'  bgcolor='#def1f9'>" .$row["Member_ID"] .  "</td> ";
				echo "<td align='center'  bgcolor='#e1dedc'>" .$row["Telephone"] .  "</td> ";
			  echo "<td align='center'  bgcolor='#def1f9'>" .$row["Username"] .  "</td> ";
			  echo "<td align='center'  bgcolor='#e1dedc'><a href='file.php?ID=$row[0]'>" .$row["fileupload"] .  "</td> ";
			  echo "<td align='center'  bgcolor='#def1f9'><a href='note.php?UserID=$row[0]'>รายละเอียด" .  "</td> ";
				echo "<td align='center'  bgcolor='#def1f9'>" ."</td> ";//ลบ
				echo "<td align='center' bgcolor='#e1dedc' <td>

				<select name='status' required>
		      <option >รอการยืนยัน</option>
		      <option name='status'>A2</option>
		      <option name='status' value='A3'>A3 </option>
					<option name='status' value='A4'>A4</option>
		      <option name='status' value='A5'>A5 </option>
		     </select>

			&nbsp;&nbsp; <form method='post' action='action_employee.php'><button type='submit'  class='w3-button w3-small w3-green' style='width:55px' name='status' id='status'>Save</button><td>";//สถานะ

			//ลบข้อมูล
			  echo "<td align='center' bgcolor='#def1f9'><a href='UserDelete.php?ID=$row[0]'><button class='w3-button w3-small w3-red' style='width:60px'>Delete</button></a></td> ";
			  echo "</tr>";
			}
			echo "</table>";
			//5. close connection
			mysqli_close($con);
}
			?>
			<br></br>
			<center><button type="submit" class="w3-button w3-round-xlarge w3-green" style="width:200px" >ล้างข้อมูลทั้งหมด</button>
