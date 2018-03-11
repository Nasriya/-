<?
include('connection.php');

$sql = "select ์ Form uploadfile ";
$db_query=mysqli_query($sql);
$result = mysqli_fetch_array($db_query);
$image = $result['fileupload'];

$path = 'fileupload/'; //---->เช่น 'images/';

//เวลาจะแสดงก็เอาชื่อ+พาธที่อยู่ไฟล์มาต่อกัน

//---------------------- ส่วนของHTML อาจอยู่ในเพจเดียวกัน//-----------------------------

<img src="<? echo $path.$image ; ?>" width="เท่าไรก็ว่าไป" height="เช่นเดียวกัน" border="0" />
//---------- ถ้าไม่มี width height จะแสดงขนาดเท่าไฟล์จริง---------------//
?>
