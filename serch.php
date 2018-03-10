<?
$dbhost = 'localhost';
$dbuser = 'root';
$passwd = '';
$dbname = 'yourdatabase';
mysql_connect("$dbhost", "$dbuser", "$passwd") or die  ('ไม่สามารถติดต่อ Database ได้');
mysql_db_query("$dbname","SET NAMES utf-8");
if($_POST[Submit]){
$sql = "INSERT INTO `uoc_std` ( `CITIZEN_ID` , `PREFIX_NAME` , `STD_FNAME` , `STD_LNAME` ) VALUES ('$_POST[citizen_id]', '$_POST[prefix_name]', '$_POST[std_fname]', '$_POST[std_lname]')";
mysql_query($sql);
}
if($_POST[search]){
 $result = mysql_query("SELECT * FROM uoc_std WHERE STD_FNAME LIKE '$_POST[keyword]%'  OR STD_LNAME LIKE '$_POST[keyword]%'");
}else{
 $result = mysql_query("SELECT *  FROM uoc_std");
}
?>
<html>
<head>
<title>Edit Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</head>
<body>
<div align="center">
  <form name="form1" method="post" action="">
    <input name="keyword" type="text" id="keyword">
    <input name="search" type="hidden" id="search" value="1">
    <input name="Search" type="submit" id="Search" value="Search...">
  </form>
  <div align="left"><br>
    <br>
    <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="23%">คำค้น <? echo $_POST[keyword] ?></td>
        <td width="53%">&nbsp;</td>
        <td width="24%"><a href="insert-student.php">แทรกข้อมูลใหม่</a></td>
      </tr>
    </table>
  </div>
  <table width="80%" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <td width="23%">หมายเลขบัตรประชาชน</td>
      <td width="53%">ชื่อ - นามสกุล</td>
      <td colspan="2">รายการ</td>
    </tr>
 <?
   $rows = mysql_num_rows($result);
   if($rows > 0){
   for ($i=0;$i<$rows; $i++){
     mysql_data_seek($result,$i);
         $data[$i] = mysql_fetch_array($result)
 ?>
    <tr>
      <td><? echo  $data[$i]['CITIZEN_ID'] ?></td>
      <td><? echo $data[$i]['PREFIX_NAME']; echo $data[$i]['STD_FNAME'].'    '.$data[$i]['STD_LNAME']; ?></td>
      <td width="12%"><a href="edit1.php?citizen_id=<? echo $data[$i][CITIZEN_ID] ?>">แก้ไข</a></td>
      <td width="12%"><a href="delete.php?citizen_id=<? echo $data[$i]['CITIZEN_ID'] ?>" onClick="return confirm('ต้องการลบข้อมูล<? echo $data[$i]['STD_FNAME'] ?>ใช่หรือไม่')">ลบ</a></td>
    </tr>
 <?
   }  // end for
 }  // end if rows > 0
 ?>
  </table>
</div>
</body>
</html>
