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
}

?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ลงทะเบียน</title>
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

</head>

<body class="home-page">
	<div class="wrap-body">
		<div class="header">
			<div id='cssmenu' >
				<ul>
				   <li><img src="images/f.png" width="150" height="150"></li>
				     <li><a href='index.html'><span>หน้าแรก</span></a></li>
						<li><a href='service.html'><span>บริการของเรา</span></a></li>
				   <li><a href='contact.html'><span>ติดต่อเรา</span></a></li>
					 <li><a href='form_login.php'><span>เข้าสู่ระบบ</span></a></li>
				</ul>
			</div>
		</div>


		<center>

<h2 class="w3-myfont w3-center">ลงทะเบียน</h2>
<div class="container">
<div class="col-75" >
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




</body>
</html>
