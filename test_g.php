<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['รายชื่อ', 'Score1', 'Score2' ],
          ['นาย A', 650, 400 ],
          ['นาย B', 750, 460 ],
          ['นาย C', 120, 350 ],
          ['นาย D', 64, 540 ]
        ]);

        var options = {
          legend: { position: 'none' },
           width: 650,
           height: 350,
          chart: {
            title: 'กราฟสรุปผลแบบทดสอบ',
            subtitle: 'กราฟแท่งแสดงผลคะแนนแต่ละคน',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('deawxchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="deawxchart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
