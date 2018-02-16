<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include('connection.php');
$id = $_GET['Member_ID'];
$sql = "SELECT * FROM user WHERE Member_ID='$id' ";
$result = mysqli_query($con,$sql);
$data = mysqli_fetch_array($result);
?>
<a href="detail.php?id=<?=$data['Member_ID'];?>">ดูข้อมูลส่วนตัว</a>
</body>
</html>
