<?php
$host = "localhost";
$user = "root";
$pwd = "042005477";
$db = "highcharts";
global $link;
include('connection.php');
//sql สำหรับดึงข้อมูล จาก jhcis
$sql = "SELECT COUNT(fileupload) AS totol, DATE_FORMAT(dateup, '%D') AS dateup
FROM uploadfile
GROUP BY DATE_FORMAT(dateup, '%D%')
";
//จบ sql
$result = mysqli_query($con,$sql);
?>
<!DOCTYPE HTML>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Highcharts Example</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script src="http://code.highcharts.com/highcharts.js"></script>
  <script src="http://code.highcharts.com/modules/exporting.js"></script>
        <script>
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'จำนวนลูกค้า'
        },
        tooltip: {
         pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#000000',
                    connectorColor: '#000000',
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'service',
            data: [
   <?php
   while($row=mysql_fetch_array($result)) {
     $monthx = $row[fileupload];
     $valuex = $row[Quanitity];
               $sss = "['". $monthx."',".$valuex."],";
      echo $sss;
   }
   ?>
            ]
        }]
    });
});
        </script>


    </head>
    <body>
      <div id="container" style="min-width: 320px; height: 380px; margin: 0 auto"></div>
    </body>
</html>
