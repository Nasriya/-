<?php session_start();?>
<?php

if (!$_SESSION["UserID"]){  //check session

	  Header("Location: form_login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{?>

<?
	$strSQL = "UPDATE user SET Password = '".trim($_POST['Password'])."'
	,Username = '".trim($_POST['Username'])."' WHERE Member_ID = '".$_SESSION["UserID"]."' ";
	$objQuery = mysqli_query($con,$strSQL);

	echo "Save Completed!";


?>
<?php }?>
