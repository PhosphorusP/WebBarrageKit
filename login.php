<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<style>
	* {
		transition-duration: 0.25s;
	}
	body {
		text-align: center;
	}
	.txtfield {
		font-size: 1.2em;
		text-align: center;
		border-style: solid;
		margin-top: 1em;
		border-color: gray;
		width: 30%;
		height: 2em;
	}
	.txtfield:focus {
		border-color: #09F;
		box-shadow: 0 0 1em #09F;
	}
	input {
		margin: 1em;
	}
</style>
</head>

<body>
<form action="" method="post">
<input type="password" hidden autocomplete="new-password" />
Username<br><input autocomplete="new-password" class="txtfield" type="text" name="username" /><br>
Password<br><input autocomplete="new-password" class="txtfield" type="password" name="password" /><br>
<input type="submit" name="sub" value="Submit">
</form>
<?php
if(isset($_POST["sub"])){
if( $_POST["username"]=="admin" && $_POST["password"]=="123456")
echo header("Location: http://.../manage.php");
else
echo "Wrong username or password!";
}
	?>
<!--Change "..." into the URL of your website.-->
</body>
</html>