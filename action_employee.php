
<?php
session_start();
error_reporting(0);
//1. เชื่อมต่อ database:
include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้
$Status = $_POST['st'];
<input type="hidden" name="id" value="<?=$id?>">
//มันสามารถเชื่อมฐานข้อมูลได้  เเต่ยังไม่เก็บค่า
$sql = "UPDATE uploadfile SET Status = '$Status'";


$result = mysqli_query($con,$sql) or die ("Error in query: $sql " . mysqli_error());
if($result){

echo "<script type='text/javascript'>alert('บันทึกเเล้ว เเต่ไม่ UPDATE')</script>";

}

mysqli_close($con);



?>
