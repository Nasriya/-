
<?php
    $host = "localhost";
    $Username = "root";
    $Password = "";
    $db_name = "mydb";
$con= mysqli_connect($host,$Username,$Password,$db_name) or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
?>
