<?php
	session_start();

	// リダイレクト処理
	// if (isset($_SESSION['login_status'])) {
	//   header("Location: welcome.php");
	//   exit();
	// };

	// ログイン処理
	if (isset($_POST['username'])) {
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['login_status'] = "true";
		header("Location: welcome.php");
		exit();
	};
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		■session_question04<br>
		・usernameを入力してloginボタンをクリックしたら、welcome.phpを表示するようにして下さい<br>
		・その際にusernameの値がwelcome.phpでも利用できるようにして下さい<br>
		・また、ログイン状態を示すセッション変数 'login_status' にtrueを入れて下さい<br>
		<form method="post" action="login.php" style="border: 1px; background-color: lightsteelblue;">
			<h2>Login</h2>
	    username: <input type="text" name="username" value="">
	    <input type="submit" value="login">
		</form>

		<script type="text/javascript">
		</script>
	</body>
</html>
