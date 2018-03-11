
<?php
session_start();

//1. เชื่อมต่อ database:
include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้



isset($fileupload);//รับค่าไฟล์จากฟอร์ม
$ProductType = $_POST['TP']; //เก็บค่าประเภทของสินค้า
$ProductDetail = $_POST['PD']; //เก็บค่าขนาดของสินค้า
$Quanitity = $_POST['Quanitity']; //เก็บค่าจำนวนของสินค้า
$DateReceip =$_POST['DateReceip'];//เก็บค่าวันที่ที่ลูกค้านัดรับสินค้า
$TimeReceip =$_POST['TimeReceip'];//เก็บค่าเวลาที่ลูกค้านัดรับสินค้า
$date = date("d-m-Y"); //กำหนดวันที่และเวลา
$UserID = $_SESSION["UserID"];



//เพิ่มไฟล์
$upload=$_FILES['fileupload'];
if($upload <> '') {   //not select file
//โฟลเดอร์ที่จะ upload file เข้าไป
$path="fileupload/";

//เอาชื่อไฟล์ที่มีอักขระแปลกๆออก
	$remove_these = array(' ','`','"','\'','\\','/','_');
	$newname = str_replace($remove_these, '', $_FILES['fileupload']['name']);



//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);
	}
	// เพิ่มไฟล์เข้าไปในตาราง uploadfile

		$sql = "INSERT INTO uploadfile (fileupload,ProductType,ProductDetail,Quanitity,TimeReceip,DateReceip,Member_ID)
		VALUES('$newname','$ProductType','$ProductDetail','$Quanitity','$TimeReceip','$DateReceip','$UserID')";

		$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

	mysqli_close($con);
	// javascript แสดงการ upload file

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('อัพโหลดไฟล์สำเร็จ');";
	echo "window.location = 'summary.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('อัพโหลดไฟล์ไม่สำเร็จ กรุณาลองใหม่อีกครั้ง !');";
	echo "</script>";
}
?>
