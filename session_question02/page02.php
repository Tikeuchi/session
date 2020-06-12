<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<body>
		■session_question02<br>
		・このページでもセッション変数の 'username' が表示されなければ正解です<br>
		※確認用ページのため、コードは変更・削除しないで下さい<br><br>
		<div id="username">
			<?php
				echo $_SESSION['username'];		// 表示されないこと
			?>
		</div>

		<script type="text/javascript">
		</script>
	</body>
</html>
