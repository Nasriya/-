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
	<title>แก้ไขข้อมูลส่วนตัว</title>
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
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
</head>

<body class="home-page">

		<div class="header">
			<div id='cssmenu' >
				<ul>
				   <li><img src="images/f.png" width="150" height="150"></li>


 					<button class="w3-button w3-round-xlarge w3-white w3-display-topright" style="width:150px"><a href='logout.php'>ออกจากระบบ</a></button>
				</ul>
			</div>
		</div>

      	<form method='post' action ='update_profile-action.php'>
						<div class="container">
							<h2 class="w3-myfont w3-center">แก้ไขข้อมูลส่วนตัว</h2>
							<br></br>
						<div class="row">
			      <div class="col-25 w3-center">
			        <h4 >Username</h4>
			      </div>
			      <div class="col-75">
							<input class="w3-input w3-hover-pale-red" type="text" style="width:50%" name="Username" value="<?php echo $meResult['Username']; ?>"  /></br></center>
			      </div>
			    </div>
					<div class="row">
					<div class="col-25 w3-center">
						<h4 >First Name</h4>
					</div>
					<div class="col-75" >
						<input class="w3-input w3-hover-pale-red" type="text" style="width:50%" name="Firstname" value="<?php echo $meResult['Firstname']; ?>"  /></br></center>
					</div>
				</div>
				<div class="row">
				<div class="col-25 w3-center">
					<h4 >Last Name</h4>
				</div>
				<div class="col-75" >
					<input class="w3-input w3-hover-pale-red" type="text" style="width:50%"  name="Lastname" value="<?php echo $meResult['Lastname']; ?>"  /></br></center>
				</div>
			</div>
			
			<div class="row">
			<div class="col-25 w3-center">
				<h4 >Address</h4>
			</div>
			<div class="col-75" >
				<input class="w3-input w3-hover-pale-red" type="text" style="width:50%" name="Address" value="<?php echo $meResult['Address']; ?>"  /></br></center>
			</div>
		</div>
		<div class="row" >
		<div class="col-25 w3-center">
			<h4 >E-mail</h4>
		</div>
		<div class="col-75">
			<input class="w3-input w3-hover-pale-red" type="text" style="width:50%" name="Email" value="<?php echo $meResult['Email']; ?>"  /></br></center>
		</div>
	</div>
	<div class="row">
	<div class="col-25 w3-center">
		<h4>Telephone</h4>
	</div>
	<div class="col-75">
		<input class="w3-input w3-hover-pale-red" type="text" style="width:50%" name="Telephone" value="<?php echo $meResult['Telephone']; ?>"  /></br></center>
	</div>
</div>
<!--<div class="row">
<div class="col-25 w3-center">
	<h4>Password</h4>
</div>
<div class="col-75" >
	<input class="w3-input w3-hover-pale-red" type="text" style="width:50%" name="password" value="<?php echo $meResult['Password']; ?>"  /></br></center>
</div>
</div>-->







<br></br>
<center>
<button class="w3-button w3-green w3-round" style="width:20%" name="submit">Save</button>


	<a class="w3-btn w3-red w3-round"style="width:20%" onClick='window.history.back()' >Cancle</a>
	</form>




		<br></br>
	</center>
</div>
<?php }?>

</div>
</div>
</body>
</html>
