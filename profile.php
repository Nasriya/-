<?php session_start();?>

<?php
include('connection.php');
if (!$_SESSION["UserID"]){  //check session

	  Header("Location: form_login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{?>
	<?php
	//if(isset($_GET['ID']))
	//{
		//$ID = intval($_GET['ID']);
		$query = "SELECT * FROM user ORDER BY ID asc" or die("Error:" . mysqli_error());
		//$query = mysql_query('SELECT * from user where ID="'.$ID.'"');
		//$query="SELECT * FROM user Where Username='".$Username."' and Address='".$Address."' ";
		$result = mysqli_query($con,$query);
		//if(mysqli_num_rows($result)==0)
		//{
		//}
		while ($row = mysqli_fetch_array($result));{
			echo "<tr>";
  echo "<td>" .$row["ID"] .  "</td> ";
  echo "<td>" .$row["Username"] .  "</td> ";
  echo "<td>" .$row["Lastname"] .  "</td> ";
  echo "<td>" .$row["Address"] .  "</td> ";
  echo "<td>" .$row["Email"] .  "</td> ";
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
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
					 <li><a href='upload.php'><span>อัพโหลดไฟล์</span></a></li>

 					<button class="w3-button w3-round-xlarge w3-white w3-display-topright" style="width:150px"><a href='logout.php'>ออกจากระบบ</a></button>
				</ul>
			</div>
		</div>

<br></br>
		<h2 class="w3-myfont w3-center">แก้ไขข้อมูลส่วนตัว</h2>
		<br></br>
		<div class="w3-row">
		<div class="w3-col m3 "><p></p></div>
		<div class="w3-col m6 w3-round-xxlarge w3-light-blue w3-center w3-myfont">



		<tr><td><br>ชื่อ :</td>
		<td><?php echo $Username; ?></td></tr>
		<br>นามสกุล :  <?php echo $Username; ?></br>
		<br>ที่อยู่ : <?php echo $Lastname; ?></br>
		<br>เบอร์โทรศัพท์ : <?php echo $Telephone; ?></br>
		<br>E-mail : <?php echo $Email; ?></br>
		<br>Password: <?php echo $Password; ?></br>
	<br>เเต้มสะสม  :<?php echo $Username; ?></br>
	<br></br>

<center><a href='save_profile.php'><button class="w3-button w3-round-xxlarge w3-red w3-center" style="width:200px">บันทึก</a></button>

		<br></br>

<?php }?>
