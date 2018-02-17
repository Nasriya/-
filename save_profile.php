
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
$meSQL .= "WHERE Member_ID ='{$_SESSION['UserID']}' ";
$meQuery = mysqli_query($con,$meSQL);
if ($meQuery == TRUE) {
echo "<meta charset=\"UTF-8\">";
echo "บันทึกข้อมูลสำเร็จ";
echo "<br/>";
echo "<a href='profile.php'>ไปหน้าหลัก</a>";
} else {
echo "<meta charset=\"UTF-8\">";
echo "มีปัญหาการบันทึกข้อมูล กรุณากลับไปบันทึกใหม่";
echo "<br/>";
echo "<a href='update_profile.php'>กลับไปหน้าเดิม</a>";
}
mysqli_close();
} else {
echo "<meta charset=\"UTF-8\">";
echo "มีข้อผิดพลาดระหว่าง Session!";
echo "<br/>";
echo "<a href='update_profile.php'>กลับไปหน้าเดิม</a>";
}

}
?>
