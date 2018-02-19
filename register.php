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
				//$_SESSION['message'] = 'เข้าสู่ระบบไม่สำเร็จ';
			}
			else{
				//$_SESSION['message'] ="เข้าสู่ระบบสำเร็จ";
			}
		}

}

?>
<!DOCTYPE html>
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body class="home-page" id="fontlag">


		<div class="header">
			<div id='cssmenu' >
				<ul>
				   <li><img src="images/f.png" width="150" height="150"></li>
				     <li><a href='index.html'><span>หน้าแรก</span></a></li>
						<li><a href='service.html'><span>บริการของเรา</span></a></li>
				   <li><a href='contact.html'><span>ติดต่อเรา</span></a></li>
					 <li><a href='login.html'><span>เข้าสู่ระบบ</span></a></li>
				</ul>
			</div>
		</div>


		 <body>

			<center>


<div class="w3-card-4">
<form method="post" action="register.php" class="w3-container w3-text-blue">


</div>
		<h2 class="w3-myfont w3-center">ลงทะเบียน</h2>


		<div class="w3-row w3-section w3-col">
		  <div class="w3-col" style="width:50px"></div>
		    <div class="w3-rest" style="width:300px">

		     <input class="w3-input w3-border w3-center" class="w3-xxlarge fa fa-user w3-center" type="text"  name="Firstname" required type="text" placeholder="First Name" >

				</div>
		</div>

		<div class="w3-row w3-section">
		  <div class="w3-col" style="width:50px"></div>
		    <div class="w3-rest" style="width:300px">
		      <input class="w3-input w3-border w3-center" name="Lastname" required type="text" placeholder="LastName">
		    </div>
		</div>

		<div class="w3-row w3-section">
		  <div class="w3-col" style="width:50px"></div>
		    <div class="w3-rest" style="width:300px">
		      <input class="w3-input w3-border w3-center" name="Address" required type="text" placeholder="Address">
		    </div>
		</div>

		<div class="w3-row w3-section">
		  <div class="w3-col" style="width:50px"></div>
		    <div class="w3-rest" style="width:300px">
		      <input class="w3-input w3-border w3-center" name="Email" required type="text" placeholder="E-mail">
		    </div>
		</div>

		<div class="w3-row w3-section">
		  <div class="w3-col" style="width:50px"></div>
		    <div class="w3-rest" style="width:300px">
		      <input class="w3-input w3-border w3-center" name="Telephone" required type="text" placeholder="Phone">
		    </div>
		</div>
		<div class="w3-row w3-section">
		  <div class="w3-col" style="width:50px"></div>
		    <div class="w3-rest" style="width:300px">
		      <input class="w3-input w3-border w3-center" name="Username" required type="text" placeholder="ตั้งIDเพื่อใช้ในการเข้าสู่ระบบ">
		    </div>
		</div>

		<div class="w3-row w3-section">
		  <div class="w3-col" style="width:50px"></div>
		    <div class="w3-rest" style="width:300px">
		      <input class="w3-input w3-border w3-center" name="Password" required type="password" placeholder="Password">
		    </div>
		</div>

		<div class="w3-row w3-section">
		  <div class="w3-col" style="width:50px"></div>
		    <div class="w3-rest" style="width:300px">
		      <input class="w3-input w3-border w3-center" name="Password2" required type="password" placeholder="comfirm Password">
		    </div>
		</div>
	</div>
<div class = "alert alert-error"><?= $_SESSION['message']?>

		<center><button type="submit" name="register_btn" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding "style="width:100px">ลงทะเบียน</button></center>
		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
		</form>

		</body>
		</html>
