<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
<script language="">
	function OnUploadCheck()
	{
		var extall="pdf";

		file = document.form1.fileUpload.value;
		ext = file.split('.').pop().toLowerCase();
		if(parseInt(extall.indexOf(ext)) < 0)
		{
			alert('Extension support : ' + extall);
			return false;
		}
		return true;
	}
</script>
</head>
<body>
<form name="form1" method="post" action="add_file_db.php" enctype="multipart/form-data" onSubmit="return OnUploadCheck();">
	<input type="file" name="filupload">
	<input name="btnSubmit" type="submit" value="Submit">
</form>
</body>
</html>
