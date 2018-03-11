<?php session_start();?>
<?php

include('connection.php');

if (!$_SESSION["UserID"]){  //check session

	  Header("Location: form_login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{
	//$_SESSION['frmAction'] = md5('itoffside.com' . rand(1, 9999));
?>

<?php


$meSQL = "SELECT * FROM uploadfile WHERE Member_ID='{$_SESSION['UserID']}' ";
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
	<title>สรุปผลการสั่งซื้อ</title>
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
				     <li><a href='index.html'><span>หน้าแรก</span></a></li>
						<li><a href='service.html'><span>บริการของเรา</span></a></li>
				   <li><a href='contact.html'><span>ติดต่อเรา</span></a></li>
					 <li><a href='upload.php'><span>อัพโหลดไฟล์</span></a></li>

 					<button class="w3-button w3-round-xlarge w3-white w3-display-topright" style="width:150px"><a href='logout.php'>ออกจากระบบ</a></button>
				</ul>
			</div>
		</div>

<center>

		<div class="container" >

<br></br>
				<div class="w3-round-small w3-border w3-sand" style="width:40%" >
          <table class="w3-table w3-bordered">
            <center>

              <b>สรุปการสั่งซื้อ</b>
<br></br>
            <tr>
              <td>ไฟล์งาน :</td>
              <td><?php echo $meResult['fileupload']; ?></td>
            </tr>
            <tr>
              <td>ประเภทการสั่งพิมพ์ :</td>
              <td><?php echo $meResult['ProductType']; ?></td>
            </tr>
            <tr>
              <td>ขนาดกระดาษ :</td>
              <td><?php echo $meResult['ProductDetail']; ?></td>
            </tr>
            <tr>
              <td>จำนวน :</td>
              <td><?php echo $meResult['Quanitity']; ?></td>
            </tr>
            <tr>
              <td>วันที่นัดรับ :</td>
              <td><?php echo $meResult['DateReceip']; ?></td>

            </tr>
            <tr>
              <td>เวลาที่นัดรับ :</td>
              <td><?php echo $meResult['TimeReceip']; ?></td>
            </tr>
            <tr>
              <td>ราคารวม :</td>
              <td></td>
            </tr>
            <tr>
              <td>เเต้มสะสม :</td>
              <td></td>
            </tr>
          </table>
        </div>

<br></br>

    <a href="#" class="w3-btn  w3-round-xxlarge w3-red" style="width:200px">close</a>


</div>
</div>
</body>
</html>
<?php }?>
