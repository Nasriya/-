
<?php
session_start();

//1. เชื่อมต่อ database:
include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้



isset($fileupload);//รับค่าไฟล์จากฟอร์ม
$ProductType = $_POST['TP']; //เก็บค่าประเภทของสินค้า
$ProductDetail = $_POST['PD']; //เก็บค่าขนาดของสินค้า
$Format = $_POST['FM'];
$Quanitity = $_POST['Quanitity']; //เก็บค่าจำนวนของสินค้า
$DateReceip =$_POST['DateReceip'];//เก็บค่าวันที่ที่ลูกค้านัดรับสินค้า
$TimeReceip =$_POST['TimeReceip'];//เก็บค่าเวลาที่ลูกค้านัดรับสินค้า
$date = date("D/M/Y"); //กำหนดวันที่และเวลา
$UserID = $_SESSION["UserID"];
$file = strtolower($_FILES['fileupload']['name']);
$type= strrchr($file,".");

//จำกัดประเภทไฟล์เป็น PDF เท่านั้น
if(($type==".pdf"))
{
	echo "<script type='text/javascript'>";
		echo "alert('อัพโหลดไฟล์สำเร็จ');";
		echo "window.location = 'summary.php'; ";
		echo "</script>";
//เพิ่มไฟล์
$upload=$_FILES['fileupload'];

if($upload <> '') {   //not select file
//โฟลเดอร์ที่จะ upload file เข้าไป
$path="fileupload/";

//เอาชื่อไฟล์ที่มีอักขระแปลกๆออก
	$remove_these = array(' ','`','"','\'','\\','/','_');
	$newname = str_replace($remove_these, '', $_FILES['fileupload']['name']);

	//ตั้งชื่อไฟล์ใหม่โดยเอาUsernameไว้หน้าชื่อไฟล์เดิม
	$newname = $UserID.'-'.$newname;
	$path_copy=$path.$newname;
	$path_link="fileupload/".$newname;


//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);
	}
	// เพิ่มไฟล์เข้าไปในตาราง uploadfile

		$sql = "INSERT INTO uploadfile (fileupload,ProductType,ProductDetail,Quanitity,TimeReceip,DateReceip,Format,Member_ID)
		VALUES('$newname','$ProductType','$ProductDetail','$Quanitity','$TimeReceip','$DateReceip','$Format','$UserID')";

		$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
//  $_SESSION["fileID"] = $result["fileID"];

	mysqli_close($con);
	// javascript แสดงการ upload file


	}
	else{

	echo "<script type='text/javascript'>";
	echo "alert('อัพโหลดไฟล์ไม่สำเร็จ กรุณาเลือกเฉพาะไฟล์ PDF เท่านั้น !');";
echo "window.location = 'upload.php'; ";
	echo "</script>";
}




?>
