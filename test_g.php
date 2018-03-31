<html>
<head>
<title>ทดลองกราฟ</title>
<script type="text/javascript" src="fusioncharts-suite-xt/js/fusioncharts.js"></script>
<script type="text/javascript" src="fusioncharts-suite-xt/js/themes/fusioncharts.theme.fint.js"></script>
<script type="text/javascript">
FusionCharts.ready(function(){
    var revenueChart = new FusionCharts({
        "type": "column2d",
        "renderAt": "chartContainer",
        "width": "1600",
        "height": "800",
        "dataFormat": "json",
        "dataSource":  {
          "chart": {
            "caption": "Total Price Software",
            "subCaption": "D  E  C  C",
            "xAxisName": "Software Name",
            "yAxisName": "Bath",
            "theme": "fint"
         },
         "data": [
            <?php
include('connection.php');
$strSQL = "SELECT * FROM uploadfile ORDER BY dateup desc";
$objQuery = mysqli_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<?php
while($objResult = mysqli_fetch_array($objQuery))
{
?>

{"label": "<?=$objResult["Decc_Sname"]?>" , "value": "<?=$objResult["Decc_Totalprice"]?>"},


<?php
}
?>

          ]
      }

  });
revenueChart.render();

})
</script>

</head>
<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("decc");
mysql_query("SET NAMES utf8", $objConnect);
$strSQL = "SELECT * FROM tblsoftwareprice ORDER BY Decc_SoftwareID desc";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>

{"label": "<?=$objResult["Decc_Sname"]?>" , "value": "<?=$objResult["Decc_Totalprice"]?>"},


<?php
}
?>
<body>
  <div id="chartContainer" style="height: 700px; width: 80%;">FusionCharts XT will load here!</div>
</body>
</html>
