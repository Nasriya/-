
<?include("connection.php");?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return chk();">
  <input type="file" name="$fileupload" id="fileupload" />
  <input type="Submit" name="button" id="button" value="Upload" />
</form>
<script type="text/javascript">
    function chk(){
        var fty=new Array(".pdf"); // ประเภทไฟล์ที่อนุญาตให้อัพโหลด
        var a=document.form1.fileupload.value; //กำหนดค่าของไฟล์ใหกับตัวแปร a
        var permiss=0; // เงื่อนไขไฟล์อนุญาต
        a=a.toLowerCase();
        if(a !=""){
            for(i=0;i<fty.length;i++){ // วน Loop ตรวจสอบไฟล์ที่อนุญาต
                if(a.lastIndexOf(fty[i])>=0){  // เงื่อนไขไฟล์ที่อนุญาต
                    permiss=1;
                    break;
                }else{
                    continue;

                }
            }
            if(permiss==0){
                alert("อัพโหลดได้เฉพาะไฟล์ PDF");
                return false;
            }
        }
    }
</script>
<?php
//1. เชื่อมต่อ database:
include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$fileupload = $_REQUEST['fileupload']; //รับค่าไฟล์จากฟอร์ม
$date = date("d-m-Y"); //กำหนดวันที่และเวลา
//เพิ่มไฟล์
$upload=$_FILES['fileupload'];
if($upload <> '') {   //not select file
//โฟลเดอร์ที่จะ upload file เข้าไป
$path="fileupload/";

//เอาชื่อไฟล์ที่มีอักขระแปลกๆออก
	$remove_these = array(' ','`','"','\'','\\','/','_');
	$newname = str_replace($remove_these, '', $_FILES['fileupload']['name']);

	//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
	$newname = time().'-'.$newname;
$path_copy=$path.$newname;
$path_link="fileupload/".$newname;

//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);
	}
	// เพิ่มไฟล์เข้าไปในตาราง uploadfile

		$sql = "INSERT INTO uploadfile (fileupload)
		VALUES('$newname')";

		$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

	mysqli_close($con);
	// javascript แสดงการ upload file

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Upload File Succesfuly');";
	echo "window.location = 'upload.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to upload again');";
	echo "</script>";
}
?>
