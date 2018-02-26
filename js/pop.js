
// <?include("connection.php");?>
// <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return chk();">
//   <input type="file" name="$fileupload" id="fileupload" />
//   <input type="Submit" name="button" id="button" value="Upload" />
// </form>
<script type="text/javascript">
    function chk(){
        var fty=new Array(".pdf"); // ประเภทไฟล์ที่อนุญาตให้อัพโหลด
        var a=document.form1.fileupload.value; //กำหนดค่าของไฟล์ใหกับตัวแปร a
        var permiss=0; // เงื่อนไขไฟล์อนุญาต
        a=a.toLowerCase();
        if(a !=""){
            for(i=0;i<fty.length;i++){ // วน Loop ตรวจสอบไฟล์ที่อนุญาต
                if(a.lastIndexOf(fty[i])>=0){  // เงื่อนไขไฟล์ที่อนุญาต
                    permiss=1;
                    break;
                }else{
                    continue;


                }
            }
            if(permiss==0){
                alert("อัพโหลดได้เฉพาะไฟล์ PDF");
                return false;
            }
        }
    }
</script>
