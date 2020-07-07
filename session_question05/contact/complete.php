<?php
	session_start();

	// リダイレクト処理
	if(!isset($_SESSION['username'])) {
		header("Location: login.php");
		exit;
	}

	unset($_SESSION['category']);
	unset($_SESSION['comment']);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Welcome</title>
	</head>
	<body>
		■session_question05<br>
		・この送信画面はダミーです<br>
		・セッション変数のcategoryとcommentは削除してください<br>
		・戻るをクリックしたら、welcome.phpを表示するようにしてください
		<div style="border: 1px; background-color: lightsteelblue;">
			<h2>送信完了</h2>
			<p>お問い合わせありがとうございます。</p>
		</div>
		<a href="../welcome.php">戻る</a>

		<script type="text/javascript">
		</script>
	</body>
</html>
