<?php
	session_start();
	$_SESSION['username'] = "yamada";

?>

<!DOCTYPE html>
<html>
	<body>
		■session_question02<br>
		・セッション変数の 'username' を削除して下さい<br>
		・既存のdivで 'username' が表示されないことを確認して下さい<br>
		・確認できたらnextをクリックします<br>
		※元のコードは変更・削除しないで下さい<br><br>
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
