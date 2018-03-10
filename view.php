<?php
session_start();
$meSQL = "SELECT * FROM user,uploadfile WHERE Member_ID='{$_SESSION['UserID']}' ";
$meQuery = mysqli_query($meSQL);
if ($meQuery == TRUE) {
$meResult = mysqli_fetch_assoc($meQuery);
} else {
echo 'error';
}
?>
