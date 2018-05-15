<?php session_start();?>


<?php
include('connection.php');

$user = $_GET['Username']; //รับค่ามจากหน้า employee.php
$meSQL = "SELECT DISTINCT  * FROM user WHERE username LIKE '$user%'  " ;
$meQuery = mysqli_query($con,$meSQL);
if ($meQuery == TRUE) {
$meResult = mysqli_fetch_array($meQuery);

} else {
echo 'error';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ข้อมูลของลูกค้า</title>
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
					 <li><a href='check.php'><span>ค้นหา</span></a></li>
					 <li><a href='admin_profile.php'><span>ข้อมูลส่วนตัว</span></a></li>
					 <li><a href='graph.php'><span>ข้อมูลการดำเนินงาน</span></a></li>

 					<button class="w3-button w3-round-xlarge w3-white w3-display-topright" style="width:150px"><a href='logout.php'>ออกจากระบบ</a></button>
				</ul>
			</div>
		</div>


<div class="w3-container">

<div class="w3-myfont w3-center">
<div class="w3-row w3-container">
  <p></p>
  <div class="w3-col m3  w3-center">
    <p></p>
  </div>

  <div class="w3-col m6 w3-light-blue  w3-center">
		<div class="w3-responsive">
		<table align="center" width="100%" border="1" class="w3-table-all">
			<h3 class="w3-myfont w3-center">ข้อมูลลูกค้า</h3>
      <tr>
            <td><b>รหัสสมาชิก:</b></td>
               <td><?php echo $meResult['Member_ID']; ?></td>
              <td></td>
            </tr>
      <tr>
            <td><b>ชื่อ:</b></td>
               <td><?php echo $meResult['Firstname']; ?></td>
              <td></td>
            </tr>

            <tr>
                  <td><b>นามสกุล:</b></td>
                     <td><?php echo $meResult['Lastname']; ?></td>
                    <td></td>
                  </tr>
                  <tr>
                        <td><b>Username:</b></td>
                           <td><?php echo $meResult['Username']; ?></td>
                          <td></td>
                        </tr>
                        <tr>
                              <td><b>ที่อยู่:</b></td>
                                 <td><?php echo $meResult['Address']; ?></td>
                                <td></td>
                              </tr>
                              <tr>
                                    <td><b>E-mail:</b></td>
                                       <td><?php echo $meResult['Email']; ?></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                          <td><b>โทรศัพท์:</b></td>
                                             <td><?php echo $meResult['Telephone']; ?></td>
                                            <td></td>
                                          </tr>


</table>
<br></br>

<p><a href="employee.php" class="w3-btn  w3-round-xxlarge w3-red" style="width:200px">close</a></p>
</body>
</html>
