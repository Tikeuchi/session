<?php
	session_start();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		■session_question03<br>
		・commentを入力してsubmitボタンをクリックしたら、confirm.phpを表示するようにして下さい<br>
		・その際にcommentの値がconfirm.phpでも利用できるようにして下さい<br>
		・またconfirm.phpから移動してきた場合でもcommentに入力した値が消えないようにして下さい<br>
		<form method="post" action="form.php" style="border: 1px; background-color: lightsteelblue;">
			<h2>Form</h2>
	    comment: <input type="text" name="comment" value="">
	    <input type="submit" value="submit">
		</form>

		<script type="text/javascript">
		</script>
	</body>
</html>
