<?php
	session_start();

	// ログイン処理

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		■session_question04<br>
		・usernameを入力してloginボタンをクリックしたら、welcome.phpを表示するようにして下さい<br>
		・その際にusernameの値がwelcome.phpでも利用できるようにセッション変数へ格納して下さい<br>
		<form method="post" action="" style="border: 1px; background-color: lightsteelblue;">
			<h2>Login</h2>
	    username: <input type="text" name="username" value="">
	    <input type="submit" value="login">
		</form>

		<script type="text/javascript">
		</script>
	</body>
</html>
