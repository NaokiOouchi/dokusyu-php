<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>画像のアップロード
</title>
</head>
<body>
<form method="POST" action="bindValue_process.php" enctype="multipart/form-data">
  <label for="photo">アップロードする画像：</label>
  <input id="photo" type="file" name="photo" size="50" />
  <input type="submit" value="アップロード"/>
</form>
</body>
</html>