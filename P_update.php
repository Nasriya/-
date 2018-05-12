
<?php
session_start();
error_reporting(0);
//1. เชื่อมต่อ database:
include('connection.php');  //ไฟล์เชื่อมต่อกับ database
$Price =$_POST["Price"];
$file = $_GET['fileupload'];
//มันสามารถเชื่อมฐานข้อมูลได้  เเต่ยังไม่เก็บค่า
$sql = "UPDATE uploadfile SET Price = '".$Price."' WHERE  fileID = $file ";
echo $sql;

$result = mysqli_query($con,$sql);
if($result){

echo "<script type='text/javascript'>alert('อัพเดทราคาเเล้วเป็น $Price บาท') </script>";
echo "<script type='text/javascript'>window.history.back() </script>";

}

mysqli_close($con);



?>
