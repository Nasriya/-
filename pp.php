<?php session_start();?>
<?php
include('connection.php');
if (!$_SESSION["UserID"]){  //check session

	  Header("Location: form_login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{
	$_SESSION['frmAction'] = md5('itoffside.com' . rand(1, 9999));
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
	<title>แก้ไขข้อมูลส่วนตัว</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | html5xcss3.com">
	<meta name="author" content="www.html5xcss3.com">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/lightbox.css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/register.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="home-page">

		<div class="header">
			<div id='cssmenu' >
				<ul>
				   <li><img src="images/f.png" width="150" height="150"></li>
				     <li><a href='index.html'><span>หน้าแรก</span></a></li>
						<li><a href='service.html'><span>บริการของเรา</span></a></li>
				   <li><a href='contact.html'><span>ติดต่อเรา</span></a></li>
					 <li><a href='upload.php'><span>อัพโหลดไฟล์</span></a></li>

 					<button class="w3-button w3-round-xlarge w3-white w3-display-topright" style="width:150px"><a href='logout.php'>ออกจากระบบ</a></button>
				</ul>
			</div>
		</div>

<br></br>
		<h2 class="w3-myfont w3-center">แก้ไขข้อมูลส่วนตัว</h2>
		<br></br>
		<div class="container">
					<div class="row">
		      <div class="col-25 w3-center">
		        <label >First Name</label>
		      </div>
		      <div class="col-75" style="width:30%" >
						<input class="w3-input w3-border w3-center" class="w3-xxlarge fa fa-user w3-center" type="text"  name="Firstname" required type="text" placeholder="First Name" >
		      </div>
		    </div>
				<div class="row">
				<div class="col-25 w3-center">
					<label >Last Name</label>
				</div>
				<div class="col-75" style="width:40%" >
					<input class="w3-input w3-border w3-center" class="w3-xxlarge fa fa-user w3-center" type="text"  name="Lastname" required type="text" placeholder="Last Name" >
				</div>
			</div>
			<div class="row">
			<div class="col-25 w3-center">
				<label >Address</label>
			</div>
			<div class="col-75" style="width:40%" >
				<input class="w3-input w3-border w3-center" class="w3-xxlarge fa fa-user w3-center" type="text"  name="Address" required type="text" placeholder="Address" >
			</div>
		</div>
		<div class="row">
		<div class="col-25 w3-center">
			<label >E-mail</label>
		</div>
		<div class="col-75" style="width:40%" >
			<input class="w3-input w3-border w3-center" class="w3-xxlarge fa fa-user w3-center" type="text"  name="Email" required type="text" placeholder="E-mail" >
		</div>
		</div>
		<div class="row">
		<div class="col-25 w3-center">
			<label >Telephone</label>
		</div>
		<div class="col-75" style="width:40%" >
			<input class="w3-input w3-border w3-center" class="w3-xxlarge fa fa-user w3-center" type="text"  name="Telephone" required type="text" placeholder="Telephone" >
		</div>
		</div>
		<div class="row">
		<div class="col-25 w3-center">
			<label >Username</label>
		</div>
		<div class="col-75" style="width:40%" >
			<input class="w3-input w3-border w3-center" class="w3-xxlarge fa fa-user w3-center" type="text"  name="Username" required type="text" placeholder="ตั้ง Username เพื่อใช้ในการเข้าสู่ระบบ" >
		</div>
		</div>
		<div class="row">
		<div class="col-25 w3-center">
			<label >Password</label>
		</div>
		<div class="col-75" style="width:40%" >
			<input class="w3-input w3-border w3-center" class="w3-xxlarge fa fa-user w3-center" type="password"  name="Password" required type="text" placeholder="Password" >
		</div>
		</div>
		<div class="row">
		<div class="col-25 w3-center">
			<label >Comfirm Password</label>
		</div>
		<div class="col-75" style="width:40%" >
			<input class="w3-input w3-border w3-center" class="w3-xxlarge fa fa-user w3-center" type="password"  name="Password2" required type="text" placeholder="Comfirm Password" >
		</div>
		</div>
					<div class="w3-row w3-section w3-col">
					  <div class="w3-col" style="width:50px"></div>
					    <div class="w3-rest" style="width:300px">


							</div>
					</div>

					<div class="w3-row w3-section">
					  <div class="w3-col" style="width:50px"></div>

					</div>
				</div>

</form>





	<a href="save.php" class="w3-btn w3-green" name ="Edit">บันทึก</a>
	<a href="profile.php" class="w3-btn w3-red">ยกเลิก</a>
		<br></br>

<?php }?>

</div>
</div>
</body>
</html>
