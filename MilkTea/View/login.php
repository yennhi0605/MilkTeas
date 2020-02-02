<?php
	require '../Database/database.php';
	session_start();

	$sql = "SELECT * FROM User";
	$result = $db->query($sql)->fetch_all();

	if (isset($_POST['login'])) {
		$uname = $_POST['uname'];
		$pass = $_POST['psw'];
		get_login($uname, $pass);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../Css/login.css">
</head>
<body>
	<form method="post">
		<div class="container" style="background-color: black">
			<h1 style="text-align: center; color: brown">Login</h1>
			<hr>
			<label><b style="margin-top: 30px">Username</b></label>
			<input type="text" placeholder="Enter Username" name="uname" required>

			<label><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="psw" required>
			<hr>
			<button type="submit" name="login" style="background-color: brown">Login</button>
		</div>
	</form>
</body>
</html>
