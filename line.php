
<?php
//connect ฐานข้อมูล
include('connection.php');

  $monthx = array(); // ตัวแปรแกน x
 $y2556 = array(); //ตัวแปรแกน y
//sql สำหรับดึงข้อมูล จาก ฐานข้อมูล
$sql = "SELECT line.`month`, line.`value` FROM line";
//จบ sql
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
//array_push คือการนำค่าที่ได้จาก sql ใส่เข้าไปตัวแปร array
 array_push($y2556,$row[value]);
 array_push($monthx,$row[month]);
}
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
                type: 'column' //รูปแบบของ แผนภูมิ ในที่นี้ให้เป็น line
            },
            title: {
                text: 'จำนวนลูกค้า' //
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: ['<?= implode("','", $monthx); //นำตัวแปร array แกน x มาใส่ ในที่นี้คือ เดือน?>']
            },
            yAxis: {
                title: {
                    text: 'จำนวนลูกค้า (ราย)'
                }
            },
            tooltip: {
                enabled: false,
                formatter: function() {
                    return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y +'ราย';
                }
            },
   legend: {
                            layout: 'vertical',
                            align: 'right',
                            verticalAlign: 'top',
                            x: -10,
                            y: 100,
                            borderWidth: 0
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                                name: 'พ.ศ.2556',
                                data: [<?= implode(',', $y2556) // ข้อมูล array แกน y ?>]
                            }]
        });
    });
        </script>
    </head>
    <body>
      <div id="container" style="min-width: 320px; height: 380px; margin: 0 auto"></div>
    </body>
</html>
