<?php session_start();?>


<?php
include('connection.php');
//เป็นไฟล์ของข้อมูลเเรก
 $_SESSION["fileID"] =$_SESSION["UserID"];
$meSQL = "SELECT * FROM uploadfile
WHERE fileID ";
$meQuery = mysqli_query($con,$meSQL);
if ($meQuery == TRUE) {
$meResult = mysqli_fetch_array($meQuery);
//$fileID = $meResult[$_SESSION['fileID']];
  $_SESSION["fileID"] = $meResult["fileID"];

} else {
echo 'error';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>รายละเอียด</title>
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
	<div class="wrap-body">
		<div class="header">
			<div id='cssmenu' >
				<ul>
				   <li><img src="images/f.png" width="150" height="150"></li>
					 <li><a href='check.php'><span>ตรวจสอบ</span></a></li>
					 <li><a href='admin_profile.php'><span>ข้อมูลส่วนตัว</span></a></li>
					 <li><a href='graph.php'><span>ข้อมูลการดำเนินงาน</span></a></li>

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

              <h4><b>รายละเอียด</b></h4>
<br></br>
<tr>
  <td><b>ไฟล์งาน :</b></td>
    <td><a href="#" ><?php echo $meResult['fileupload']; ?></td>
        <td></td>
</tr>
            <tr>
              <td><b>ประเภทการสั่งพิมพ์ :</b></td>
               <td><?php echo $meResult['ProductType']; ?></td>
              <td></td>

            </tr>
            <tr>
              <td><b>ขนาดกระดาษ :</b><td> <?php echo $meResult['ProductDetail']; ?></td>
              <td></td>
            </tr>
            <tr>
              <td><b>จำนวน : </b><td> <?php echo $meResult['Quanitity']; ?></td>
              <td></td>
            </tr>
            <tr>
              <td><b>วันที่นัดรับ :</b><td> <?php echo $meResult['DateReceip']; ?></td>
              <td></td>
            </tr>
            <tr>
              <td><b>เวลาที่นัดรับ :<b/><td><?php echo $meResult['TimeReceip']; ?></td>
                <td></td>
            </tr>
            <tr>
              <td><b>ราคารวม :</b></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><b>เเต้มสะสม :</b></td>
              <td></td>
              <td></td>
            </tr>
						<tr>
              <td><b>สถานะ :</b>

<td>
  สถานะตอนนี้ คือ
      <font color="red"><?php echo $meResult['Status']; ?></font>
      <br></br>
      <form method='post' action='1_status.php'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="w3-btn w3-white w3-border w3-border-red w3-round-large" style="width:150px" name="st1">กำลังดำเนินงาน</button></center></form>
      <form method='post' action='2_status.php'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="w3-btn w3-white w3-border w3-border-yellow w3-round-large" style="width:150px" name="st2">รอการชำระ</button></form>
      <form method='post' action='3_status.php'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="w3-btn w3-white w3-border w3-border-green w3-round-large" style="width:150px" name="st3">ชำระเเล้ว</button></form></form>
</td></tr>

						 </td>
            </tr>
          </table>
        </div>

<br></br>

    <a href="employee.php" class="w3-btn  w3-round-xxlarge w3-red" style="width:200px">close</a>


</div>
</div>
</body>
</html>
