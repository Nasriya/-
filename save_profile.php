<?php session_start();?>
<?php

if (!$_SESSION["UserID"]){  //check session

	  Header("Location: form_login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{


	$strSQL = "UPDATE user SET Password = '".trim($_POST['Password'])."'
	,Firstname = '".trim($_POST['Firstname'])."' WHERE Member_ID = '".$_SESSION["UserID"]."' ";
	$objQuery = mysql_query($strSQL);

	echo "Save Completed!<br>";


?>
<?php }?>
