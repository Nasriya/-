
<html>
<head>
<title><?php echo $Firsname; ?></title>
</head>
<body>
<?php
//check for a form submission
if (isset ($_GET['Firstname'])) {
 $Firstname = $_GET['Firstname'];
 $conn = mysqli_connect("localhost", "root", "") or die("cannot connect");
 mysqli_select_db($conn, "mydb") or die("cannot select DB");
 $userquery = mysqli_query ($conn,"SELECT * FROM user WHERE Firstname='$Firstname'" ) or die ("The query was not  found");
 if (mysqli_num_rows($userquery) !=1 ) {
  die ("That username could not be found!");
 }
 while ($row = mysqli_fetch_array($userquery, MYSQLI_ASSOC)) {
 $Firstname = $row['Firstname'];
 $Lastname = $row['Lastname'];
 }

?>
<h2><?php echo $first_name; ?> s profile</h2><br>
<table>
 <tr><td>Firstname:</td><td><?php echo $Firstname; ?></td></tr>
 <tr><td>Lastname:</td><td><?php echo $Lastname; ?></td></tr>

</table>
