<?php
	session_start();

	// リダイレクト処理

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Welcome</title>
	</head>
	<body>
		■session_question04<br>
		・login.phpで入力したusernameの値を使って、h2タグ内で「Welcome 'username' !!」のように表示して下さい<br>
		・セッション変数に格納したusernameがなければlogin.phpを表示するようにして下さい<br>
		※このページに直接URLを入力してアクセスした場合、ログイン無しで表示されてしまうことを阻止して下さい
		<div style="border: 1px; background-color: lightsteelblue;">
			<h2>Welcome 'username' !!</h2>
			<a href="logout.php">logout</a>
		</div>

		<script type="text/javascript">
		</script>
	</body>
</html>
