

<?php session_start();?>
<?php
include('connection.php');
if (!$_SESSION["UserID"]){  //check session

	  Header("Location: form.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{?>


	<?php
	$meSQL = "SELECT * FROM user,uploadfile  ";
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





<button class="w3-button w3-round-xlarge w3-white w3-display-topright" style="width:150px"><a href='logout.php'>ออกจากระบบ</a></button>
				</ul>
			</div>
		</div>
	</div>
<br></br>
	<h2 class="w3-myfont w3-center">จัดการคิว</h2>

			<br></br>
			<div class="w3-container">
			  <table class="w3-table w3-striped">
			    <tr>
			      <th>ลำดับ</th>
			      <th>เบอร์โทรศัพท์</th>
			      <th>ชื่อสมาชิก</th>
						<th>ไฟล์งาน</th>
						<th>Note</th>
						<th></th>
						<th>สถานะการดำเนินงาน<th>
			    </tr>
			    <tr>
			      <td>xxx</td> <!--ลำดับ-->
			      <td><?php echo $meResult['Telephone']; ?></td><!--เบอร์โทรศัพท์-->
			      <td><?php echo $meResult['Username']; ?></td> <!--ผู้ใช้-->
						 <td><a href="#" ><?php echo $meResult['fileupload']; ?></td> <!--ไฟล์งาน-->
						 <td>xxx</td> <!--note-->
						 <td><a href="#" ><img src="images/pp2.png" width="30" class="img-responsive" alt=""></td>
						 <td>
							 <select name="P_Status">
				       <option value="" selected>--สถานะ--</option>
				       <option value="P_submit">รอการยืนยัน</option>
				       <option value="P_operate">กำลังดำเนินงาน</option>
				 			<option value="P_Payment">รอการชำระ</option>
							<option value="P_Money">ชำระเเล้ว</option>
				      </select></td>

			    </tr>
			    <tr>
						<td>xxx</td> <!--ลำดับ-->
			      <td><?php echo $meResult['Telephone']; ?></td><!--เบอร์โทรศัพท์-->
			      <td><?php echo $meResult['Username']; ?></td> <!--ผู้ใช้-->
						 <td><a href="#" ><?php echo $meResult['fileupload']; ?></td> <!--ไฟล์งาน-->
						 <td>xxx</td> <!--note-->
						 <td><a href="#" ><img src="images/pp2.png" width="30" class="img-responsive" alt=""></td>
							 <td>
								 <select name="P_Status">
					      <option value="" selected>--สถานะ--</option>
					       <option value="P_submit">รอการยืนยัน</option>
					       <option value="P_operate">กำลังดำเนินงาน</option>
					 			<option value="P_Payment">รอการชำระ</option>
								<option value="P_Money">ชำระเเล้ว</option>
					      </select></td>
			    </tr>
					<tr>
						<td>xxx</td> <!--ลำดับ-->
			      <td><?php echo $meResult['Telephone']; ?></td><!--เบอร์โทรศัพท์-->
			      <td><?php echo $meResult['Username']; ?></td> <!--ผู้ใช้-->
						 <td><a href="#" ><?php echo $meResult['fileupload']; ?></td> <!--ไฟล์งาน-->
						 <td>xxx</td> <!--note-->
						 <td><a href="#" ><img src="images/pp2.png" width="30" class="img-responsive" alt=""></td>
							 <td>
								 <select name="P_Status">
					       <option value="" selected>--สถานะ--</option>
					       <option value="P_submit">รอการยืนยัน</option>
					       <option value="P_operate">กำลังดำเนินงาน</option>
					 			<option value="P_Payment">รอการชำระ</option>
								<option value="P_Money">ชำระเเล้ว</option>
					      </select></td>
			    </tr><tr>
						<td>xxx</td> <!--ลำดับ-->
			      <td><?php echo $meResult['Telephone']; ?></td><!--เบอร์โทรศัพท์-->
			      <td><?php echo $meResult['Username']; ?></td> <!--ผู้ใช้-->
						 <td><a href="#" ><?php echo $meResult['fileupload']; ?></td> <!--ไฟล์งาน-->
						 <td>xxx</td> <!--note-->
						 <td><a href="#" ><img src="images/pp2.png" width="30" class="img-responsive" alt=""></td>
							 <td>
								 <select name="P_Status">
					       <option value="" selected>--สถานะ--</option>
					       <option value="P_submit">รอการยืนยัน</option>
					       <option value="P_operate">กำลังดำเนินงาน</option>
					 			<option value="P_Payment">รอการชำระ</option>
								<option value="P_Money">ชำระเเล้ว</option>
					      </select></td>
			    </tr>
			    <tr>
						<td>xxx</td> <!--ลำดับ-->
			      <td><?php echo $meResult['Telephone']; ?></td><!--เบอร์โทรศัพท์-->
			      <td><?php echo $meResult['Username']; ?></td> <!--ผู้ใช้-->
						 <td><a href="#" ><?php echo $meResult['fileupload']; ?></td> <!--ไฟล์งาน-->
						 <td>xxx</td> <!--note-->
						 <td><a href="#" ><img src="images/pp2.png" width="30" class="img-responsive" alt=""></td>
							 <td>
								 <select name="P_Status">
					       <option value="" selected>--สถานะ--</option>
					       <option value="P_submit">รอการยืนยัน</option>
					       <option value="P_operate">กำลังดำเนินงาน</option>
					 			<option value="P_Payment">รอการชำระ</option>
								<option value="P_Money">ชำระเเล้ว</option>
					      </select></td>
			    </tr>

			  </table>
			</div>
<center><button class="w3-button w3-round-xlarge w3-red" style="width:100px">ล้างข้อมูล</button></center>
<?php }?>
</body>
</html>
