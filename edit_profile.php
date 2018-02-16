<?php session_start();?>
<?php

if (!$_SESSION["ID"]){  //check session

	  Header("Location: form_login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{?>

	<?
  include("connection.php");
	$query = "SELECT * FROM user WHERE ID = '".$_SESSION['ID']."' ";
	$result = mysqli_query($con,$query);
	$row = mysql_fetch_array($result);

  //รับค่ามาจากฟอร์มก่อน
//ทดสอบแสดงผลค่าที่ได้ จากตัวแปร $name

?>
<html>
<head>
<title>ThaiCreate.Com Tutorials</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<form name="form1" method="post" action="save_profile.php">
  Edit Profile! <br>
  <table width="400" border="1" style="width: 400px">
    <tbody>
      <tr>
        <td width="125"> &nbsp;UserID</td>
        <td width="180">
          <?php echo $row["ID"];?>
        </td>
      </tr>
      <tr>
        <td> &nbsp;Username</td>
        <td>
          <?php echo $row["Username"];?>
        </td>
      </tr>
      <tr>
        <td> &nbsp;Password</td>
        <td><input name="txtPassword" type="password" id="txtPassword" value="<?php echo $row["Password"];?>">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Confirm Password</td>
        <td><input name="txtConPassword" type="password" id="txtConPassword" value="<?php echo $row["Password"];?>">
        </td>
      </tr>
      <tr>
        <td>&nbsp;Name</td>
        <td><input name="txtName" type="text" id="txtName" value="<?php echo $row["Firstname"];?>"></td>
      </tr>
      <tr>
        <td> &nbsp;Status</td>
        <td>
          <?php echo $row["Userlevel"];?>
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <?$Firstname = $_POST['Firstname'];
  echo $Firstname; ?> 
  <input type="submit" name="Submit" value="Save">
</form>
</body>
</html>
	<?php }?>
