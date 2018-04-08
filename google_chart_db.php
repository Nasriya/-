<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<div style="margin:auto;width:80%;">
<div id="chart_div" style="margin:auto;width: 850px; height: 400px;"></div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {

    // ตั้งค่าต่างๆ ของกราฟ
    var options = {
        title: "หัวข้อกราฟแนวตั้ง",
        hAxis: {title: 'ข้อความแนวนอน', titleTextStyle: {color: 'red'}},
        vAxis: {title: 'ข้อความแนวตั้ง', titleTextStyle: {color: 'blue'}},
        width: 850,
        height: 400,
        bar: {groupWidth: "70%"},
        legend: { position: 'right', maxLines: 3 },
        tooltip: { trigger: 'select' }
    };

    // ดึงข้อมูลจากฐานข้อมูลสร้างตัวแปร array ข้อมูลสำหรับใช้งาน
    $.getJSON( "gen_data_chart.php",{
        year:'2014' // ส่งค่าตัวแปร ไปถ้ามี ในที่นี้ ส่งปีไป เพราะจะดูข้อมูลรายเดือนของปีที่ก่ำหนด
    },function( data ) {
            dataArray=data; // รับค่าข้อมูล เก็บไว้ในตัวแปร array

            // แปลงข้อมูลจาก array สำหรับใช้ในการสร้าง กราฟ
            var data = google.visualization.arrayToDataTable(dataArray);

            // สร้างกราฟแนวตั้ง แสดงใน div id = chart_div
            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
            chart.draw(data, options);  // สร้างกราฟ

    });

}
</script>
</body>
</html>
