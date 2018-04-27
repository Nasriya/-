<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<?php
include('connection.php');

$meSQL = "SELECT * FROM uploadfile  WHERE fileupload LIKE '21%'";
$meQuery = mysqli_query($con,$meSQL);
if ($meQuery == TRUE) {
$meResult = mysqli_fetch_array($meQuery);

} else {
echo 'error';
}

echo $_SERVER["REQUEST_URI"]."<br>"; // URL
echo "<hr>";
echo $_GET["fileID"]."<br>"; // Get txtName
 echo $meResult["fileupload"];// Get txtSiteName
 echo $meResult["ProductType"];
echo "<hr>";

foreach($_GET as $key => $val) // Get All Key & Value
{
	echo $key . " : " . $val . "<br>";
}
?>
</body>
</html>
