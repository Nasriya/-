<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table width="599" border="1">
    <tr>
      <th>Keyword
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $_GET["txtKeyword"];?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>
<?php
if($_GET["txtKeyword"] != "")
	{
    include('connection.php');

	// Search By Name or Email
	$strSQL = "SELECT * FROM user WHERE (Username LIKE '%".$_GET["txtKeyword"]."%' or Telephone LIKE '%".$_GET["txtKeyword"]."%' )";
	$objQuery = mysqli_query($strSQL) or die ("Error Query [".$strSQL."]");
	?>
	<table width="600" border="1">
	  <tr>
		<th width="91"> <div align="center">CustomerID </div></th>
		<th width="98"> <div align="center">Name </div></th>
		<th width="198"> <div align="center">Email </div></th>
		<th width="97"> <div align="center">CountryCode </div></th>
		<th width="59"> <div align="center">Budget </div></th>
		<th width="71"> <div align="center">Used </div></th>
	  </tr>
	<?php
	while($objResult = mysqli_fetch_array($objQuery))
	{
	?>
	  <tr>
		<td><div align="center"><?php echo $objResult["Member_ID"];?></div></td>
		<td><?php echo $objResult["Username"];?></td>
		<td><?php echo $objResult["Lastname"];?></td>
		<td><div align="center"><?php echo $objResult["Address"];?></div></td>
		<td align="right"><?php echo $objResult["Telephone"];?></td>
		<td align="right"><?php echo $objResult["Email"];?></td>
	  </tr>
	<?php
	}
	?>
	</table>
	<?php
	mysqli_close($objConnect);
}
?>
</body>
</html>
