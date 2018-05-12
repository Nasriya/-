


  <html>
  <head>
  <title>แก้ไขข้อมูลส่วนตัว</title>
  </head>
  <body>
  <?php
  	ini_set('display_errors', 1);
  	error_reporting(~0);
 session_start();
  		include("connection.php");

      $Firstname			= $_POST["Firstname"];
  		$Lastname 			= $_POST["Lastname"];
  		$Username 			= $_POST["Username"];
  		$Telephone			= $_POST["Telephone"];
  		$Email	       	= $_POST["Email"];
  		$Address			  = $_POST["Address"];
  		$id  			      = $_SESSION["UserID"];


  		$sql = "UPDATE user SET Firstname = '$Firstname' ,
      Lastname = '$Lastname',
      Username = '$Username',
      Telephone = '$Telephone' ,
      Email = '$Email',
      Address = '$Address'
      WHERE Member_ID = $id ";

    $query = mysqli_query($con,$sql);
    //
  	if($query) {
      echo "<script>";
          echo "alert(\"แก้ไขข้อมูลส่วนตัวเรียบร้อยเเล้ว\");";
            echo "window.location = 'admin_profile.php';"; //ไปหน้าเเรกของสมาชิก
      echo "</script>";
  	}

  	mysqli_close($con);
?>
  </body>
  </html>
