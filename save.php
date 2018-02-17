<?php
	session_start();
	if($_SESSION['UserID'] == "")
	{
		Header("Location: form_login.php");
	}
	include('connection.php');

	/*if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		echo "Password not Match!";
		exit();
	}*/
	$strSQL = "UPDATE user SET Username = '".trim($_POST['Username'])."'
	,Firstname = '".trim($_POST['Firstname'])."' WHERE Member_ID = '".$_SESSION["UserID"]."' ";
	$objQuery = mysqli_query($strSQL);

	echo "Save Completed!<br>";

	/*if($_SESSION["Status"] == "ADMIN")
	{
		echo "<br> Go to <a href='admin_page.php'>Admin page</a>";
	}
	else
	{
		echo "<br> Go to <a href='user_page.php'>User page</a>";
	}*/


?>
