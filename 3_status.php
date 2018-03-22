
<?php
session_start();
error_reporting(0);
//1. เชื่อมต่อ database:
include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้
$Status = $_POST['st3'];

//มันสามารถเชื่อมฐานข้อมูลได้  เเต่ยังไม่เก็บค่า
$sql = "UPDATE uploadfile SET Status = 'ชำระเเล้ว' WHERE  fileID ";


$result = mysqli_query($con,$sql) or die ("Error in query: $sql " . mysqli_error());
if($result){

  echo "<script type='text/javascript'>alert('เปลี่ยนสถานะเป็น ชำระเเล้ว เเล้ว') </script>";
  echo "<script type='text/javascript'>window.location='employee.php' </script>";

}

mysqli_close($con);



?>
