


  <html>
  <head>
  <title>อัพเดตข้อมูล</title>
  </head>
  <body>
  <?php
  	ini_set('display_errors', 1);
  	error_reporting(~0);
 session_start();
  		include("connection.php");

      $Price		= $_POST["Price"];
      $file = $_GET['fileupload'];


  		$sql = "UPDATE user SET Price = '$Price' ,

      WHERE fileupload LIKE '$file%' ORDER BY dateup ASC ";

    $query = mysqli_query($con,$sql);
    //
  	if($query) {
      echo "<script>";
          echo "alert(\"แก้ไขข้อมูลส่วนตัวเรียบร้อยเเล้ว\");";
            echo "window.location = 'profile.php';"; //ไปหน้าเเรกของสมาชิก
      echo "</script>";
  	}

  	mysqli_close($con);
?>
  </body>
  </html>
