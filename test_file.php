<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<div id="pdfplace">

<a href="fileupload/pop.pdf">เปิดไฟล์</a>
</div>

<script type="text/javascript" src="js/pdfobject.js"></script>
 <script type="text/javascript">
  window.onload = function (){
    var myPDF = new PDFObject({
        url: "fileupload/pop.pdf",
        id: "myPDF",
        width: "650px",
        height: "700px",
        pdfOpenParams: {
            navpanes: 1,
            statusbar: 0,
            view: "FitH",
            pagemode: "thumbs"
        }
        }).embed('pdfplace');
  };
</script>
</body>
</html>
