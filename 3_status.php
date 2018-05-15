
<?php
session_start();
error_reporting(0);
//1. เชื่อมต่อ database:
include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้
$Price =$_POST["Price"]; //รับราคาจาก note.php
$file = $_GET['fileupload']; //รับชื่อไฟล์จาก note.php
//อัพเดทสถานะเป็นชำระเเล้ว
$sql = "UPDATE uploadfile SET Status = 'ชำระเเล้ว' WHERE  fileupload LIKE '$file%' ";


$result = mysqli_query($con,$sql) or die ("Error in query: $sql " . mysqli_error());
if($result){

  echo "<script type='text/javascript'>alert('เปลี่ยนสถานะ $file เป็น ชำระเเล้ว เเล้ว') </script>";
  echo "<script type='text/javascript'>window.location='employee.php' </script>";

}

mysqli_close($con);



?>
