<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>チェックボックス
</title>
</head>
<body>
<?php
  require_once './Encode.php'
?>
選択されたのは、<?=e(implode(',', $_POST['arch']))?>です。
</body>
</html>