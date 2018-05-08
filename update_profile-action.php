
<?php
  session_start();
  error_reporting(0);



		//*** Update Record ***//
		include("connection.php");
		$Firstname		= $_POST["Firstname"];
		$Lastname 			= $_POST["Lastname"];
		$Address			= $_POST["Address"];
		$Telephone			= $_POST["Telephone"];
		$Email		= $_POST["Email"];
		$UserID = $_SESSION["UserID"];






		$sql = "UPDATE user SET Firstname = '$Firstname' , Lastname = '$Lastname',Address = '$Address',
		 Address = '$Addressr' , Telephone = '$Telephone', Email = '$Email'
			WHERE Member_ID='{$_SESSION['UserID']}' ";
			$result = mysqli_query($con,$sql) or die ("Error in query: $sql " . mysqli_error());
			if($result){

			echo "<script type='text/javascript'>alert('เปลี่ยนสถานะ $file เป็น กำลังดำเนินงาน เเล้ว') </script>";
			echo "<script type='text/javascript'>window.location='profile.php' </script>";

			}

			mysqli_close($con);



			?>










	echo "<script>alert('Update Complete'); location.href='profile.php';</script>";

















?>
