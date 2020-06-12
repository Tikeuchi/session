<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Confirm</title>
	</head>
	<body>
		■session_question03<br>
		・form.phpで入力したcommentの値をdivタグ内で表示して下さい<br>
		・確認できたらbackをクリックします<br>
		<div style="border: 1px; background-color: lightsteelblue;">
			<h2>Confirm</h2>
			<div id="comment">
				<?php
					echo $_SESSION['comment'];
				?>
			</div>
			<br>
			<a href="form.php">back</a>
		</div>

		<script type="text/javascript">
		</script>
	</body>
</html>
