
<?php
session_start();

//1. เชื่อมต่อ database:
include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้
$status = $_POST['status'];

$sql = "INSERT INTO test (status)
VALUES('$status')";


$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

mysqli_close($con);



?>

<select name="status" required>
  <option selected>---เวลารับเอกสาร---</option>
  <option name="status" value="8.30-10.30">8.30-10.30 น.</option>
  <option name="status" value="10.31-12.00">10.31-12.00 น.</option>
  <option name="status" value="13.00-14.30">13.00-14.30 น.</option>
  <option name="status" value="14.31-16.00">14.31-16.00 น. </option>

 </select>
<button type='submit'  class='w3-button w3-small w3-green' style='width:55px' name='status' id='status'>Save</button>
