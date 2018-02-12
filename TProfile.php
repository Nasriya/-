<?
$host = "localhost";
$Username = "root";
$Password = "";
$db_name = "mydb";// กำหนดชื่อฐานข้อมูล
$Conn = mysql_connect( $host,$Username,$Password) or die ("ติดต่อฐานข้อมูลไม่ได้");// ติดต่อฐานข้อมูล
mysql_query("SET NAMES utf8",$Conn); // set กำหนดมาตราฐาน
mysql_select_db($db) or die("เลือกฐานข้อมูลไม่ได้"); // เลือกฐานข้อมูล
$sql = "select * from user"; // คำสั่ง select * คือเีรียกข้อมูลของ field ทั้งหมด , คำสั่ง form customer คือ เีรียกข้อมูลจากตาราง customer
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result))
{
echo "รหัส $row[ID] ชื่อ $row[Username] นามสกุล $row[Lastname] ที่อยู่ $row[Address] โทร $row[Telephone] <br />";
}
?>
