<?php
	session_start();
	$_SESSION['username'] = "yamada";
	unset($_SESSION['username']);				// ここを追加すれば正解
?>

<!DOCTYPE html>
<html>
	<body>
		■session_question02<br>
		・セッション変数の 'username' を削除して下さい<br>
		※元のコードは変更・削除しないで下さい<br>
		・用意されているdivで 'username' が表示されないことを確認して下さい<br>
		・確認できたらnextをクリックします<br><br>
		<div id="username">
			<?php
				echo $_SESSION['username'];		// 表示されないこと
			?>
		</div>
		<br>
		<a href="page02.php">next</a>

		<script type="text/javascript">
		</script>
	</body>
</html>
