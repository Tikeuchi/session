<?php
	// セッションの開始
	session_start();
	// セッションのnameにhogeを入れる
	$_SESSION['name'] = "hoge";
?>

<!DOCTYPE html>
<html>
	<body>
		■session_question01<br>
		・まずはセッションを開始して下さい<br>
		・セッション変数に 'name' という名前をつけて、文字列 "hoge" を入れて下さい<br>
		・既存のdivにセッション変数の 'name' を表示して下さい<br>
		・確認できたらnextをクリックします<br><br>
		<div id="name">
			<?php
				echo $_SESSION['name'];	// hogeが表示されること
			?>
		</div>
		<br>
		<a href="page02.php">next</a>

		<script type="text/javascript">
		</script>
	</body>
</html>
