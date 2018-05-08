<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<?php
		include("connection.php");
$strSQL = "UPDATE user SET ";
$strSQL .="Firstname = '".$_POST["Firstname"]."' ";
$strSQL .=",Lastname = '".$_POST["txtName"]."' ";
$strSQL .=",Email = '".$_POST["txtEmail"]."' ";
$strSQL .=",CountryCode = '".$_POST["txtCountryCode"]."' ";
$strSQL .=",Budget = '".$_POST["txtBudget"]."' ";
$strSQL .=",Used = '".$_POST["txtUsed"]."' ";
$strSQL .="WHERE CustomerID = '".$_GET["CusID"]."' ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{
	echo "Save Done.";
}
else
{
	echo "Error Save [".$strSQL."]";
}
mysql_close($objConnect);
?>
</body>
</html>
