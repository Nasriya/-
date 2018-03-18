<?<script type="text/javascript">
    function chk(){
        var fty=new Array(".gif",".jpg",".jpeg",".png"); // ประเภทไฟล์ที่อนุญาตให้อัพโหลด
        var a=document.form1.file.value; //กำหนดค่าของไฟล์ใหกับตัวแปร a
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
                alert("อัพโหลดได้เฉพาะไฟล์ gif jpg jpeg png");
                return false;
            }
        }
    }
</script>?>
