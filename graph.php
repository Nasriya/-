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
				echo "alert(\" ข้อมูลเฉพาะเจ้าของร้านเท่านั้น !\");";
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
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
</head>
<body class="home-page">
	<div class="wrap-body">
		<div class="header">
			<div id='cssmenu' >
				<ul>
				   <li><img src="images/f.png" width="150" height="150"></li>
					 <li><a href='check.php'><span>ค้นหา</span></a></li>
					<li><a href='employee.php'><span>จัดการคิว</span></a></li>
					<li><a href='admin_profile.php'><span>ข้อมูลส่วนตัว</span></a></li>
					<li><a href='customer.php'><span>ข้อมูลของลูกค้า</span></a></li>

					<button class="w3-button w3-round-xlarge w3-white w3-display-topright" style="width:150px"><a href='logout.php'>ออกจากระบบ</a></button>

				</ul>
			</div>
		</div>
	</div>
<br></br>

	<center><h2 class="w3-myfont w3-center">สรุปผลการดำเนินงาน</h2></cenetr>


<br></br>
	<div class="w3-container">

	  <div class="w3-dropdown-hover">
	    <button class="w3-button w3-blue">เเสดงกราฟ</button>
	    <div class="w3-dropdown-content w3-bar-block ">
	      <a href="g_day.php" class="w3-bar-item w3-button">รายวัน</a>
	      <a href="g_month.php" class="w3-bar-item w3-button">รายเดือน</a>
	      <a href="g_years.php" class="w3-bar-item w3-button">รายปี</a>
	    </div>
	  </div>
	</div>
	<?php
	include('connection.php');

	$query = "SELECT COUNT(fileupload) AS totol, DATE_FORMAT(dateup, '%D') AS dateup
	FROM uploadfile
	GROUP BY DATE_FORMAT(dateup, '%D%')";
	$result = mysqli_query($con, $query);
	$resultchart = mysqli_query($con, $query);


	 //for chart
	$datesave = array();
	$totol = array();

	while($rs = mysqli_fetch_array($resultchart)){
	  $datesave[] = "\"".$rs['dateup']."\"";
	  $totol[] = "\"".$rs['totol']."\"";
	}
	$datesave = implode(",", $datesave);
	$totol = implode(",", $totol);

	?>
<br>
</br>
	<h3 class="w3-myfont w3-center">รายงานรายวัน</h3>
	<br></br>
	<table>
	 <center> <tr>
	    <th width="10%" bgcolor ="LightBlue"><center>วันที่</th></center>
	    <th  width="10%" bgcolor ="LightBlue"><center>จำนวนไฟล์</th></center>
	  </tr></center>


	  <?php while($row = mysqli_fetch_array($result)) { ?>
	    <tr>
	      <td  bgcolor ="LightCyan"><center><?php echo $row['dateup'];?></center></td>
	      <td  bgcolor ="LightCyan"><center><?php echo $row['totol'];?></center></td>
	    </tr>
	    <?php } ?>

	</table>

</body>
</html>
