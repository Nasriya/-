
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

include("connection.php");
isset($Username);
isset($Firstname);
isset($Lastname);
isset($Address);
isset($Email);
isset($Telephone);

	$sql = 	"UPDATE user SET Firstname = '$Firstname' ,Lastname = '$Lastname',
	 Username = '$Username',
	  Lastname = '$Lastname'
	  , Address= '$Address'
		, Telephone = '$Telephone'
		, Email = '$Email'
		  WHERE Member_ID='{$_SESSION['UserID']}' ";

	$query = mysqli_query($con,$sql);

	if($query) {
	 echo "แก้ไขข้อมูลเรียบร้อยแล้ว";
	// echo "<meta http-equiv='refresh' content='1;URL=profile.php' />";
	}

	mysqli_close($con);
?>
</body>
</html>
