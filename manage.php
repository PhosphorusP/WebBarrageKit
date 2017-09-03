<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Manage</title>
<style>
input {
	float:left;
}
</style>
<script>
var s=setInterval("document.getElementById('deleteall').disabled=true;document.getElementById('sure').disabled=false;",5000);
</script>
</head>
<body onLoad="document.getElementById('deleteall').disabled=true;document.getElementById('sure').disabled=false;">
<h1>Data Visualization</h1>
<input type="button" onClick="alert('<?php echo file_get_contents("test.txt"); ?>');document.getElementById('deleteall').disabled=true;document.getElementById('sure').disabled=false;" value="Check All Barrages">
<br>
<h1>Delete</h1>
<form action="deleteall.php" method="post" id="deletebarrage">
<input type="submit" value="Delete All Barrages" class="button" disabled id="deleteall">
</form>
<input type="button" value="I'M SURE TO DO THAT" onclick="document.getElementById('deleteall').disabled=false;this.disabled=true" id="sure">
<br><br><br><br><br><br><br><br>
<form action="index.php" method="post" id="Index">
<input type="submit" value="Back to index.php" class="button" id="backtohome">
</form>
<?php
	if($_SERVER['HTTP_REFERER']!='http://.../login.php') header("Location: http://.../");
?>
<!--Change "..." into the URL of your website.-->
</body>
</html>