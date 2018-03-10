
<?php
//1. เชื่อมต่อ database:
include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//2. query ข้อมูลจากตาราง tb_member:
$query = "SELECT * FROM user,uploadfile" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:

echo "<table border='1' align='center' width='500'>";
//หัวข้อตาราง
echo "<tr align='center' bgcolor='#CCCCCC'><td>ลำดับ</td><td>Username</td><td>ไฟล์งาน</td><td>Note</td></tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" .$row["Member_ID"] .  "</td> ";
  echo "<td>" .$row["Firstname"] .  "</td> ";
  echo "<td>" .$row["fileupload"] .  "</td> ";
  echo "<td>" .$row["ProductDetail"] .  "</td> ";
  echo "<td>" .$row["fileupload"] .  "</td> ";



}
echo "</table>";
//5. close connection
mysqli_close($con);
?>
