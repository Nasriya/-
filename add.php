<?for($i=1;$i<=10;$i++)
{
?>
<tr bgcolor="#999900">
<td align="	center"><?=$i ?></td>
<td>&nbsp;
<?=$q[$i] ?></td>
<td align="center">
<input type="radio" name="<? echo"ch".$i; ?>" value="5">
</td>
<td align="center">
<input type="radio" name="<? echo"ch".$i; ?>" value="4">
</td>
<td align="center">
<input type="radio" name="<? echo"ch".$i; ?>" value="3">
</td>
<td align="center">
<input type="radio" name="<? echo"ch".$i; ?>" value="2">
</td>
<td align="center">
<input type="radio" name="<? echo"ch".$i; ?>" value="1">
</td>
</tr>
-----------------------------------------------------------------------------------------------------------------

<?file save
$ch1=$_POST['ch1'];
$ch2=$_POST['ch2'];
$ch3=$_POST['ch3'];
$ch4=$_POST['ch4'];
$ch5=$_POST['ch5'];
$ch6=$_POST['ch6'];
$ch7=$_POST['ch7'];
$ch8=$_POST['ch8'];
$ch9=$_POST['ch9'];
$ch10=$_POST['ch10'];
$ip =$_SERVER['REMOTE_ADDR'];
$now=date("y-m-d H:i:s");
include"connect_pra.php";
$sql="insert into tb_assess values(null,'$ch1','$ch2','$ch3','$ch4','$ch5','$ch6','$ch7','$ch8','$ch9','$ch10','$ip','$now')";
$result=mysql_db_query($dbname,$sql);
?>
