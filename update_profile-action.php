<?php

session_start();
if (isset($_SESSION['checkSign']) == 'itoffside') {
if (isset($_SESSION['frmAction']) == isset($_POST['frmAction'])) {

/*
* include file
*/
include 'connection.php';

/*
* set var
*/
$Firstname = mysqli_real_escape_string(trim($_POST['Firstname']));
$Lastname = mysqli_real_escape_string(trim($_POST['Lastname']));
$Username = mysqli_real_escape_string(trim($_POST['Username']));
$Telephone = mysqli_real_escape_string(trim($_POST['Telephone']));
$Email = mysqli_real_escape_string(trim($_POST['Email']));

/*
* unset var
*/
unset($_SESSION['frmAction']);

/*
* logical programming&Database
*/
$meSQL = "UPDATE user ";
$meSQL .= "SET Firstname='{$Firstname}', ";
$meSQL .= "Lastname='{$Lastname}', ";
$meSQL .= "Telephone='{$Telephone}', ";
$meSQL .= "Email='{$Email}', ";
$meSQL .= "WHERE Member_ID='{$_SESSION['UserID']}' ";
$meQuery = mysqli_query($meSQL);
if ($meQuery == TRUE) {
echo "<meta charset=\"UTF-8\">";
echo "บันทึกข้อมูลสำเร็จ";
echo "<br/>";
echo "<a href='mainpage.php'>ไปหน้าจัดการข้อมูล</a>";
} else {
echo "<meta charset=\"UTF-8\">";
echo "มีปัญหาการบันทึกข้อมูล กรุณากลับไปบันทึกใหม่";
echo "<br/>";
echo "<a href='update_profile.php'>กลับไปหน้าเดิม</a>";
}
mysql_close();
} else {
echo "<meta charset=\"UTF-8\">";
echo "มีข้อผิดพลาดระหว่าง Session!";
echo "<br/>";
echo "<a href='update_profile.php'>กลับไปหน้าเดิม</a>";
}
}
?>
