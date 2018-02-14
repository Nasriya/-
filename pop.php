<?php
include('connection.php');

$ID = $_REQUEST['ID'];

$get = mysqli_query("SELECT * FROM user WHERE ID='$ID'");
$get2 = mysqli_fetch_assoc($get);
$Username = $get2['Username'];
?>
<html>
<body>
hello <b><? echo $Username;?></b>;
</body>
</html>
