<?php
require_once('connection.php');
$ID=['ID'];
$result3 = mysqli_query("SELECT * FROM user where ID ='$ID'");
while($row3 = mysqli_fetch_array($result3))
{
$Firstname=$row3['Firstname'];
$Lastname=$row3['LastName'];
$Address=$row3['Address'];
$Email=$row3['Email'];
$Telephone=$row3['Telephone'];
$Username=$row3['Username'];
}
?>
<table width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2">Your Profile Information </td>  </tr>
  <tr>
    <td width="129" rowspan="5"></td>
    <td width="82" valign="top"><div align="left">FirstName:</div></td>
    <td width="165" valign="top"><?php echo $Firstname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">LastName:</div></td>
    <td valign="top"><?php echo $Lastname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Address:</div></td>
    <td valign="top"><?php echo $Address ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Telephone:</div></td>
    <td valign="top"><?php echo $Telephone ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Email </div></td>
    <td valign="top"><?php echo $Email ?></td>
  </tr>
</table>
