<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
</head>   
<body>
<form enctype="multipart/form-data" action="file_upload.php" method="POST">
   <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
   <input name="userfile" type="file" />
   <input type="submit" value="upload" />
</form>
</body>
</html>