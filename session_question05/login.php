<?php
	session_start();

	// ログイン処理
	if (isset($_POST['username'])) {
		if ($_POST['username'] !== "") {
			$_SESSION['username'] = $_POST['username'];
			header("Location: welcome.php");
			exit();
		}
	};
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		■session_question05<br>
		<form method="post" action="" style="border: 1px; background-color: lightsteelblue;">
			<h2>Login</h2>
	    username: <input type="text" name="username" value="">
	    <input type="submit" value="login">
		</form>

		<script type="text/javascript">
		</script>
	</body>
</html>
