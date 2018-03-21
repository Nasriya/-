<form action="add_file_db.php" method="post" enctype="multipart/form-data" >
<select name="status" required>
  <option selected>---ขนาดกระดาษ---</option>
  <option  value="A2">A2</option>
  <option  value="A3">A3 </option>
  <option  value="A4">A4</option>
  <option  value="A5">A5 </option>
 </select>

<button type="submit" class="w3-button w3-round-xlarge w3-green" style="width:100px" name="button" id="button">ยืนยัน</button>
</form>
 <?php
 session_start();
 error_reporting(0);
 //1. เชื่อมต่อ database:
 include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้
 $status = $_GET['status'];

 $sql = "UPDATE test SET status ='$status' WHERE Member_ID='{$_SESSION['UserID']}'"
 ;


 $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

 mysqli_close($con);



 ?>
