<?php
	session_start();

	// ログインしていなければ、login.phpを表示する
	// if (!isset($_SESSION['username'])) {
	// 	header("Location: login.php");
	// 	exit();
	// }

	// セッション変数の初期化
	$_SESSION = array();

	// セッションファイルの削除
	session_destroy();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Logout</title>
	</head>
	<body>
		■session_question04<br>
		・logout.phpを表示したとき、セッションを完全に破棄するようにして下さい
		<div style="border: 1px; background-color: lightsteelblue;">
			<h2>Logout successfully.</h2>
			<div>
				<?php
					// セッションを確認
					if ($_SESSION === []) {
						echo 'セッション情報は破棄されました';
					} else {
						echo 'セッション情報が残っているです';
					}
				?>
			</div>
			<br>
			<a href="login.php">login</a>
		</div>

		<script type="text/javascript">
		</script>
	</body>
</html>
