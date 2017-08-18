<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete Barrages</title>
</head>
<body>
<?php
$file = "test.txt";
if (!unlink($file))
  {
  echo ("<h1>Failed.</h1>A possible cause: File doesn't exist.");
  }
else
  {
  echo ("<h1>Success。</h1>");
  }
?>
</body>
<form action="manage.php" method="post" id="sendbarrage">
<input type="submit" value="Back" class="button" id="deleteall">
</form>
</html>