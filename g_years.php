<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Free Responsive Html5 Css3 Templates | html5xcss3.com">
    <meta name="author" content="www.html5xcss3.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/zerogrid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/menu.css">
    <script src="js/jquery1111.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
    <title>รายงานในแบบกราฟรายปี</title>
</head>
<body class="home-page">
	<div class="wrap-body">
		<div class="header">
			<div id='cssmenu' >
				<ul>
				   <li><img src="images/f.png" width="150" height="150"></li>

					<button class="w3-button w3-round-xlarge w3-white w3-display-topright" style="width:150px"><a href='logout.php'>ออกจากระบบ</a></button>

				</ul>
			</div>
		</div>
	</div>
<?php
include('connection.php');

$query = "
SELECT COUNT(fileupload) AS totol, DATE_FORMAT(dateup, '%Y') AS dateup
FROM uploadfile
GROUP BY DATE_FORMAT(dateup, '%Y%')
";
$result = mysqli_query($con, $query);
$resultchart = mysqli_query($con, $query);


 //for chart
$datesave = array();
$totol = array();

while($rs = mysqli_fetch_array($resultchart)){
  $datesave[] = "\"".$rs['dateup']."\"";
  $totol[] = "\"".$rs['totol']."\"";
}
$datesave = implode(",", $datesave);
$totol = implode(",", $totol);

?>

<h1 class="w3-myfont w3-center">รายงานในแบบกราฟรายปี</h1>
<br></br>
<table width="200" border="1" cellpadding="0"  cellspacing="0" align="center">

  <tr>
    <th width="10%" bgcolor ="LightBlue"><center>ปี</th></center>
    <th width="10%" bgcolor ="LightBlue"><center>จำนวนไฟล์</th></center>
  </tr>


  <?php while($row = mysqli_fetch_array($result)) { ?>
    <tr>
      <td align="center" bgcolor ="LightCyan"><center><?php echo $row['dateup'];?></center></td>
      <td align="center" bgcolor ="LightCyan"><center><?php echo $row['totol'];?></center></td>
    </tr>
    <?php } ?>

</table>
<?php mysqli_close($con);?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
<hr>
<p align="center">

 <!--devbanban.com-->

<canvas id="myChart" width="1700px" height="300px"></canvas>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php echo $datesave;?>

        ],
        datasets: [{
            label: 'รายงานภาพรวม แยกตามรายปี (ไฟล์)',
            data: [<?php echo $totol;?>
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
</p>
<center><a href="graph.php" class="w3-btn w3-display-bottom middle w3-round-xxlarge w3-red" style="width:200px">ย้อนกลับ</a></center>

</html>
