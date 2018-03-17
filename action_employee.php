
<?php
session_start();

//1. เชื่อมต่อ database:
include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้
$status = $_POST['status'];

$sql = "UPDATE uploadfile
SET status=''$status'


$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

mysqli_close($con);



?>
