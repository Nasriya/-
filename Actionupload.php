<?php session_start();?>
<?php

include('connection.php');
if(isset($_POST['btn-upload']))
{
/*$file rand(1000,100000)."-".$_FILES['file']['name'];*/
$file_loc = $_FILES['file']['tmp_name'];
$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];
$folder="upload/";

/*file size*/
$new_size =$file_size/1024;

/*$new_file_name = strtolower($file);

$final_file=str_re*/


move_upload_file($file_loc,$folder.$file);
$sql ="INSERT INTO Order(file,type,size) VALUES('$File_name','$File_type', '$File_size')";
mysqli_query($sql);

 ?>
<script>
  alert('อัพโหลดไฟล์สำเร็จ !!');
        window.location.href='profile.php';
        </script>
  <?php
}
 else
 {
  ?>
  <script>
  alert('ไม่สามารถอัพโหลดไฟล์ได้ กรุณาลองใหม่อีกครั้ง');

        </script>
  <?php
 }

?>
