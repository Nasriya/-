
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
$Firstname = $mysqli->real_escape_string($_POST['Firstname']);
$Lastname = $mysqli->real_escape_string($_POST['Lastname']);
$Address = $mysqli->real_escape_string($_POST['Address']);
$Email = $mysqli->real_escape_string($_POST['Email']);
$Telephone = $mysqli->real_escape_string($_POST['Telephone']);
$Username= $mysqli->real_escape_string($_POST['Username']);
$Password = $mysqli->real_escape_string($_POST['Password']);


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
$meSQL .= "WHERE Member_ID='{$_SESSION['Member_ID']}' ";
$meQuery = mysqli_query($meSQL);
if ($meQuery == TRUE) {
echo "<meta charset=\"UTF-8\">";
echo "บันทึกข้อมูลสำเร็จ";
echo "<br/>";
echo "<a href='index.html'>ไปหน้าหลัก</a>";
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
