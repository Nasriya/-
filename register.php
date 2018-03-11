<?php
session_start();

$_SESSION['message'] = ''; /*เเสดงข้อความ Error*/
$arrors = array();
$mysqli = new mysqli('localhost', 'root', '', 'mydb');
$mysqli->query("set names utf8");

if($_SERVER['REQUEST_METHOD'] == 'POST') {

		$Firstname = $mysqli->real_escape_string($_POST['Firstname']);
		$Lastname = $mysqli->real_escape_string($_POST['Lastname']);
		$Address = $mysqli->real_escape_string($_POST['Address']);
		$Email = $mysqli->real_escape_string($_POST['Email']);
		$Telephone = $mysqli->real_escape_string($_POST['Telephone']);
		$Username= $mysqli->real_escape_string($_POST['Username']);
		$Password = $mysqli->real_escape_string($_POST['Password']);
		$Password2 = $mysqli->real_escape_string($_POST['Password2']);
		$Password = md5($_POST['Password']); //การกำหนดให้แปลงรูปรหัสผ่าน



		if($_POST['Password']!==$_POST['Password2']) {

		echo "รหัสผ่านไม่ตรงกัน โปรดลองอีกครั้ง !";


		} else {
			header("location: Re_success.html");
			$sql = "INSERT INTO user (Firstname, Lastname, Address, Email, Telephone, Username, Password)"
			. "VALUES('$Firstname', '$Lastname', '$Address', '$Email', '$Telephone', '$Username', '$Password')";
//เก็บข้อมูลลง DB

			if($mysqli->query($sql) == true)
			{

			}
			else{

			}
		}

}

?>
<html>
<head>
	<meta charset="utf-8">
	<title>ลงทะเบียน</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | html5xcss3.com">
	<meta name="author" content="www.html5xcss3.com">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/lightbox.css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/form.css">
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
				     <li><a href='index.html'><span>หน้าแรก</span></a></li>
						<li><a href='service.html'><span>บริการของเรา</span></a></li>
				   <li><a href='contact.html'><span>ติดต่อเรา</span></a></li>
					 <li><a href='form_login.php'><span>เข้าสู่ระบบ</span></a></li>
				</ul>
			</div>
		</div>


		<center>



	<form method="post" action="register.php">
		<div class="container">
<h2 class="w3-myfont w3-center">ลงทะเบียน</h2>

			<div class="row">
      <div class="col-25 w3-center">
        <label >First Name</label>
      </div>
      <div class="col-75" style="width:40%" >
				<input class="w3-input w3-border w3-center"  type="text"  name="Firstname" required type="text" placeholder="First Name" >
      </div>
    </div>
		<div class="row">
		<div class="col-25 w3-center">
			<label >Last Name</label>
		</div>
		<div class="col-75" style="width:40%" >
			<input class="w3-input w3-border w3-center"  type="text"  name="Lastname" required type="text" placeholder="Last Name" >
		</div>
	</div>
	<div class="row">
	<div class="col-25 w3-center">
		<label >Address</label>
	</div>
	<div class="col-75" style="width:40%" >
		<input class="w3-input w3-border w3-center"  type="text"  name="Address" required type="text" placeholder="Address" >
	</div>
</div>
<div class="row">
<div class="col-25 w3-center">
	<label >E-mail</label>
</div>
<div class="col-75" style="width:40%" >
	<input class="w3-input w3-border w3-center"  type="text"  name="Email" required type="text" placeholder="E-mail" >
</div>
</div>
<div class="row">
<div class="col-25 w3-center">
	<label >Telephone</label>
</div>
<div class="col-75" style="width:40%" >
	<input class="w3-input w3-border w3-center"  type="text"  name="Telephone" required type="text" placeholder="Telephone" >
</div>
</div>
<div class="row">
<div class="col-25 w3-center">
	<label >Username</label>
</div>
<div class="col-75" style="width:40%" >
	<input class="w3-input w3-border w3-center"  type="text"  name="Username" required type="text" placeholder="ตั้ง Username เพื่อใช้ในการเข้าสู่ระบบ" >
</div>
</div>
<div class="row">
<div class="col-25 w3-center">
	<label >Password</label>
</div>
<div class="col-75" style="width:40%" >
	<input class="w3-input w3-border w3-center"  type="password"  name="Password" required type="text" placeholder="Password" >
</div>
</div>
<div class="row">
<div class="col-25 w3-center">
	<label >Comfirm Password</label>
</div>
<div class="col-75" style="width:40%" >
	<input class="w3-input w3-border w3-center"  type="password"  name="Password2" required type="text" placeholder="Comfirm Password" >
</div>
</div>
			<div class="w3-row w3-section w3-col">
			  <div class="w3-col" style="width:50px"></div>
			    <div class="w3-rest" style="width:300px">


					</div>
			</div>

			<div class="w3-row w3-section">
			  <div class="w3-col" style="width:50px"></div>
			    <div class="w3-rest" style="width:300px">
			      <button type="submit" name="register_btn" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding "style="width:200px">ลงทะเบียน</button></center>
			    </div>
			</div>
		</div>
	<div class = "alert alert-error"><?= $_SESSION['message']?>


</div>
</div>


</form>
</body>
</html>
