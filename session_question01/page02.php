<?php
	// セッションの開始
	session_start();
?>

<!DOCTYPE html>
<html>
	<body>
		■session_question01<br>
		・このページでもセッション変数の 'name' を表示して下さい<br><br>
		<div id="name">
			<?php
				echo $_SESSION['name'];	// hogeが表示されること
			?>
		</div>

		<script type="text/javascript">
		</script>
	</body>
</html>
