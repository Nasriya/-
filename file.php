<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
include 'connection.php';
$file_pdf="";
if(isset($_GET['fileID']) && $_GET['fileID']!=""){
    $myb = $_GET['fileID'];
    $sql = "SELECT * FROM uploadfile WHERE fileID='".$myb."'";
    $result = mysqli_query($sql);
    $row = mysqli_fetch_array($result);
    $file_pdf ="fileupload/".$row['fileupload'];
}
?>

<div id="pdfplace">
ไม่ได้ติดตั้งโปรแกรม Adobe Reader หรือบราวเซอร์ไม่รองรับการแสดงผล PDF
<a href="<?=$fileupload?>">คลิกที่นี้เพื่อดาวน์โหลดไฟล์ PDF</a>
</div>

<script type="text/javascript" src="js/pdfobject.js"></script>
 <script type="text/javascript">
  window.onload = function (){
    var myPDF = new PDFObject({
        url: "<?=$fileupload?>",
        id: "myPDF",
        width: "650px",
        height: "700px",
        pdfOpenParams: {
            navpanes: 1,
            statusbar: 0,
            view: "FitH",
            pagemode: "thumbs"
        }
      }).embed('fileupload');
  };
</script>
</body>
</html>
