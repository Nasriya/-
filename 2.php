<?include("connection.php");
$sql="insert into type_print (id,quest)";
$sql.="values(NULL,'$quest')";
$db_query=mysqli_db_query($db,$sql);?>
