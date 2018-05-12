
<!DOCTYPE html>
<html lang="en">
<head>
    <title>edit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="csss/back-top.css">
    <link rel="stylesheet" href="csss/main.css">
    <link rel="stylesheet" href="csss/table.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <script src="js/back-top.js"></script>
    <link rel="stylesheet" media="all" type="text/css" href="js/time/jquery-ui.css" />
    <link rel="stylesheet" media="all" type="text/css" href="js/time/jquery-ui-timepicker-addon.css" />
    <script type="text/javascript" src="js/time/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/time/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/time/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript" src="js/time/jquery-ui-sliderAccess.js"></script>

</head>

<body>
    <div id="pagewrap">
        <div class="container" id="background">
            <img class="td-retina-data" data-retina="pic/logo.jpg" src="pic/logo.gif" alt="" width="12%" height="17%" style="margin-left:40px">
            <img class="td-retina-data" data-retina="pic/logo.jpg" src="pic/logo3.png" alt="" width="50%" height="10%" style="margin-top:50px" >

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header"></div>
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a  id="active1"><?php echo "ยินดีต้อนรับ $s_admin_username" ;?></a>
                        </li>
                        <li>
                            <a href="logout.php" id="active1">ออกจากระบบ</a>
                        </li>

                    </ul>
                </div>

            </nav>
            <div class="container-fluid">
                <div class="row content">

                    <div class="col-sm-12">
<script type="text/javascript">

$(function(){
    $("#dateStart").datepicker({
        dateFormat: 'yy-mm-dd',
        numberOfMonths: 1,
    });
});
$(function(){
    $("#dateEnd").datepicker({
        dateFormat: 'yy-mm-dd',
        numberOfMonths: 1,
    });
});

</script>
<?php
    ini_set('display_errors', 1);
    error_reporting(~0);

    $dateStart = null;
    $dateEnd = date("Y-m-d");

    if(isset($_POST["submit"]))
    {
        $dateStart = $_POST["dateStart"];
        $dateEnd = $_POST["dateEnd"];
    }
?>

<form class="form-inline" method="post" action="edit.php?Page=1">
<h3 style="text-align: center">ค้นหาจากวันที่</h><br><br>
<center><p>วันที่
<input type="text" name="dateStart" id="dateStart" value="" placeholder="เริ่มตั้งแต่"/> ถึง
<input type="text" name="dateEnd" id="dateEnd" value="" placeholder="สิ้นสุด"/></p> <br>
<input type="submit" name="submit" value="Search" class="btn btn-lg" style="background-color: #ffb84d;">
<input type="submit" name="reset" value="Reset" window.location="edit.php?Page=1" class="btn btn-lg" style="background-color: #ffb84d;">
</center>
</form><br>
<?php
include 'dbconnect.php';
ini_set('display_errors', 1);
error_reporting(~0);
$sql = "SELECT * FROM ncd WHERE date BETWEEN '$dateStart' AND '$dateEnd'";
$query = $con->query($sql);
$Num_Rows = $query->num_rows;


$Per_Page = 20;   // Per Page

$Page = $_GET["Page"];
if(!$_GET["Page"])
{
    $Page=1;
}

$Prev_Page = $Page-1;
$Next_Page = $Page+1;

$Page_Start = (($Per_Page*$Page)-$Per_Page);
if($Num_Rows<=$Per_Page)
{
    $Num_Pages =1;
}
else if(($Num_Rows % $Per_Page)==0)
{
    $Num_Pages =($Num_Rows/$Per_Page) ;
}
else
{
    $Num_Pages =($Num_Rows/$Per_Page)+1;
    $Num_Pages = (int)$Num_Pages;
}

$sql .=" order  by id ASC LIMIT $Page_Start , $Per_Page";
$query  = $con->query($sql);
?>
<table width="650" border="1">
  <tr>
    <th width="5%"> <div align="center">ID </div></th>
    <th width="7%"> <div align="center">Gender </div></th>
    <th width="10%"> <div align="center">Abogroup </div></th>
    <th width="7%"> <div align="center">Age </div></th>
    <th width="7%"> <div align="center">Weight </div></th>
    <th width="7%"> <div align="center">Height </div></th>
    <th width="7%"> <div align="center">SBP </div></th>
    <th width="7%"> <div align="center">DBP </div></th>
    <th width="7%"> <div align="center">Glucose </div></th>
    <th width="10%"> <div align="center">Date </div></th>
    <th width="10%"> <div align="center">Edit </div></th>
  </tr>
<?php
while($result = $query->fetch_array())
{
?>
<tr>
    <td><div align="center"><?php echo $result["id"];?></div></td>
    <td align="center"><?php echo $result["gender"];?></td>
    <td align="center"><?php echo $result["abogroup"];?></td>
    <td align="center"><?php echo $result["age"];?></td>
    <td align="center"><?php echo $result["weight"];?></td>
    <td align="center"><?php echo $result["height"];?></td>
    <td align="center"><?php echo $result["SBP"];?></td>
    <td align="center"><?php echo $result["DBP"];?></td>
    <td align="center"><?php echo $result["glucose"];?></td>
    <td align="center"><?php echo $result["date"];?></td>
    <td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='delete.php?id=<?php echo $result["id"];?>';}">Delete</a></td>
  </tr>
<?php
}
?>
</table>
<br>
<p>
พบ <?= $Num_Rows;?> Record : จำนวน <?=$Num_Pages;?> หน้า :
<?php
if($Prev_Page)
{
    echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page'><< Back</a> ";
}

for($i=1; $i<=$Num_Pages; $i++){
    if($i != $Page)
    {
        echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";
    }
    else
    {
        echo "<b> $i </b>";
    }
}
if($Page!=$Num_Pages)
{
    echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page'>Next>></a> ";
}
$con->close();
?>
</p><br></div>
                </div>
                <p id="back-top">
                    <a href="#top">
                        <span></span>
                    </a>
                </p>
            </div>
        </div>
    </div>


    <footer class="container-fluid">
        <div class="container">
            <img src="pic/ph.png">
            <p style="font-size:12px; color: white; font-weight: normal;">
                &nbsp;&nbsp;&nbsp;&nbsp;ต.ตลาดขวัญ อ.เมือง จ.นนทบุรี 11000
                <br> &nbsp;&nbsp;&nbsp;&nbsp;โทร.02-590-1000
                <br> &nbsp;&nbsp;&nbsp;&nbsp;e-mail : webmaster@health.moph.go.th</p>
        </div>
    </footer>

</body>

</html>
