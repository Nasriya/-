<?php session_start();?>
<?php

if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['Userlevel'] != "O") //Owner
	{
		echo "<script>";
				echo "alert(\" เฉพาะเจ้าของร้านเท่านั้น !\");";
				echo "window.history.back()";
		echo "</script>";
		exit();
	}	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>สรุปผลการดำเนินงาน</title>
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
					<li><a href='employee.php'><span>จัดการคิว</span></a></li>
					<li><a href='admin_profile.php'><span>ข้อมูลส่วนตัว</span></a></li>
					<li><a href='customer.php'><span>ข้อมูลของลูกค้า</span></a></li>

					<button class="w3-button w3-round-xlarge w3-white w3-display-topright" style="width:150px"><a href='logout.php'>ออกจากระบบ</a></button>

				</ul>
			</div>
		</div>
	</div>
<br></br>
	<h2 class="w3-myfont w3-center">สรุปผลการดำเนินงาน</h2>


<br></br>
<center>
		<select name="M_graph">
      <option value="" selected>---เดือน---</option>
      <option value="January">มกราคม</option>
      <option value="February">กุมภาพันธ์</option>
			<option value="March">มีนาคม</option>
			<option value="April">เมษายน</option>
			<option value="May">พฤษภาคม</option>
			<option value="June">มิถุนายน</option>
			<option value="July">กรกฎาคม</option>
			<option value="August">สิงหาคม</option>
			<option value="September">กันยายน</option>
			<option value="October">ตุลาคม</option>
			<option value="November">พฤศจิกายน</option>
			<option value="December">ธันวาคม</option>
     </select>

		 <select name="Y_graph">
       <option value="" selected>---ปี---</option>
       <option value="2560">2560</option>
       <option value="2561">2561</option>
 			<option value="2562">2562</option>
 			<option value="2563">2563</option>
 			<option value="2564">2564</option>
      </select>
<button class="w3-button w3-round-xlarge w3-blue" style="width:100px">เเสดงกราฟ</button>
			<br></br>
			<div class="w3-container">
			  <table class="w3-table w3-striped">
			    <tr>
			      <th>ลำดับ</th>
			      <th>รายได้</th>
			      <th>รายจ่าย</th>
						<th>Points</th>

			    </tr>
			    <tr>
			      <td>xxx</td>
			      <td>xxx</td>
			      <td>xxx</td>
						 <td>xxx</td>
			    </tr>
			    <tr>
			      <td>xxx</td>
			      <td>xxx</td>
			      <td>xxx</td>
						 <td>xxx</td>
			    </tr>
			    <tr>
			      <td>xxx</td>
			      <td>xxx</td>
			      <td>xxx</td>
						 <td>xxx</td>
			    </tr>
			  </table>
			</div>
			<br></br>
			<button class="w3-button w3-round-xlarge w3-blue" style="width:100px">เเสดงกราฟ</button>&nbsp;&nbsp;<button class="w3-button w3-round-xlarge w3-red"style="width:100px" >ยกเลิก</button>
<br></br>
</body>
</html>
