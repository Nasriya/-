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

<center>
<div class="w3-row w3-border">



			<h2 class="w3-myfont w3-center">ข้อมูลส่วนตัว</h2>
			<div class="col-75">

				 <div class="col-25 w3-center">
					<label >Member_ID</label>
				</div>
				<div class="w3-round-xlarge w3-border w3-pale-green" style="width:40%" >
					<p><?php echo $meResult['Member_ID']; ?></p>
				</div>
		</div>
			<div class="col-75">

				 <div class="col-25 w3-center">
					<label >Username</label>
				</div>
				<div class="w3-round-xlarge w3-border w3-pale-green" style="width:40%" >
					<p><?php echo $meResult['Username']; ?></p>
				</div>
		</div>

		<div class="col-75" >
				 <div class="col-25 w3-center">
					<label >Firstname</label>
				</div>
				<div class="w3-round-xlarge w3-border w3-pale-green" style="width:40%" >
					<p><?php echo $meResult['Firstname']; ?></p>
				</div>
		</div>
		<div class="col-75" >
				 <div class="col-25 w3-center">
					<label >Lastname</label>
				</div>
				<div class="w3-round-xlarge w3-border w3-pale-green" style="width:40%" >
					<p><?php echo $meResult['Lastname']; ?></p>
				</div>
		</div>
		<div class="col-75" >
				 <div class="col-25 w3-center">
					<label >Address</label>
				</div>
				<div class="w3-round-xlarge w3-border w3-pale-green" style="width:40%" >
					<p><?php echo $meResult['Address']; ?></p>
				</div>
		</div>
		<div class="col-75" >
				 <div class="col-25 w3-center">
					<label >Email</label>
				</div>
				<div class="w3-round-xlarge w3-border w3-pale-green" style="width:40%" >
					<p><?php echo $meResult['Email']; ?></p>
				</div>
		</div>
		<div class="col-75" >
				 <div class="col-25 w3-center">
					<label >Telephone</label>
				</div>
				<div class="w3-round-xlarge w3-border w3-pale-green" style="width:40%" >
					<p><?php echo $meResult['Telephone']; ?></p>
				</div>
		</div>
		<div class="col-75" >
				 <div class="col-25 w3-center">
					<label >Password</label>
				</div>
				<div class="w3-round-xlarge w3-border w3-pale-green" style="width:40%" >
					<p><?php echo $meResult['Password']; ?></p>
				</div>
		</div>
		<div class="col-75" >
				 <div class="col-25 w3-center">
					<label >เเต้มสะสม</label>
				</div>
				<div class="w3-round-xlarge w3-border w3-pale-green" style="width:40%" >
					<p><?php echo"ยังไม่ได้ตั้งค่า"; ?></p>
				</div>
		</div>
		<br></br>
<a href="update_profile.php" class="w3-btn  w3-round-xxlarge w3-red" style="width:200px">แก้ไขข้อมูล</a>

</div>
</center>
<?php }?>
