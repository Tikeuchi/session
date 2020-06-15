<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<body>
		■session_question02<br>
		・このページでもセッション変数の 'fruits' が表示されなければ正解です<br>
		※確認用ページのため、コードは変更・削除しないで下さい<br><br>
		<div id="fruits">
			<?php
				echo $_SESSION['fruits'];		// 表示されないこと
			?>
		</div>

		<script type="text/javascript">
		</script>
	</body>
</html>
