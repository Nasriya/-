<?php session_start();?>
<?php

if (!$_SESSION["UserID"]){  //check session

	  Header("Location: form_login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{?>

	<?
  include("connection.php");
	$query = "SELECT * FROM user WHERE Member_ID = '".$_SESSION['UserID']."' ";
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
        <td><input name="Password" type="Password" id="Password" value="<?php echo $row["Password"];?>">
        </td>
      </tr>

      <tr>
        <td>&nbsp;Name</td>
        <td><input name="Firstname" type="text" id="Firstname" value="<?php echo $row["Firstname"];?>"></td>
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
  <input type="submit" name="Edit" value="Edit">
	<input type=button onClick='window.history.back()' value='No'>

<input type="button" value=" BACK " onclick="goHist(-1)">

</form>
</body>
</html>
	<?php }?>
