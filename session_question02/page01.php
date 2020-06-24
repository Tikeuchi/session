<?php
	session_start();
	$_SESSION['fruits'] = "apple";

?>

<!DOCTYPE html>
<html>
	<body>
		■session_question02<br>
		・セッション変数の 'fruits' を削除して下さい<br>
		・既存のdivで 'fruits' が表示されないことを確認して下さい<br>
		・確認できたらnextをクリックします<br>
		※元のコードは変更・削除しないで下さい<br><br>
		<div id="fruits">
			<?php
				echo $_SESSION['fruits'];		// 表示されないこと
			?>
		</div>
		<br>
		<a href="page02.php">next</a>

		<script type="text/javascript">
		</script>
	</body>
</html>
