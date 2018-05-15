
<?php
session_start();
error_reporting(0);
//1. เชื่อมต่อ database:
include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้

$file = $_GET['fileupload'];

$sql = "DELETE FROM uploadfile ";
$sql .="WHERE  fileupload LIKE '$file%' ";
$objQuery = mysqli_query($con,$sql);
if($objQuery)
{
	echo "<script type='text/javascript'>alert('ลบไฟล์ $file เเล้ว') </script>";
	echo "<script type='text/javascript'>window.location='history.php' </script>";

}
else
{
	echo "<script type='text/javascript'>alert('ลบ $file ไม่สำเร็จ กรุณาลองใหม่อีกครั้ง !') </script>";
	echo "<script type='text/javascript'>window.history.back(); </script>";

}


?>
