<?php
$host = "localhost";
$Username = "root";
$Password = "";
$db_name = "mydb";
$con= mysqli_connect($host,$Username,$Password,$db_name) or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT  Firstname, Lastname, Username, Address, Email, Telephone, Password FROM user";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_array($result)) {
        echo "ชื่อจริง: " . $row["Firstname"]. " นามสกุล: " . $row["Lastname"].
        "Username " . $row["Username"].
        "ที่อยู่ " . $row["Address"].
        "Email " . $row["Email"].
        "Telephone " . $row["Telephone"].
        "รหัสผ่าน " . $row["Password"]. "<br>";

    }
} else {
    echo "0 results";
}

mysqli_close($con);
?>

</body>
</html>
