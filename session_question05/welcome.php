<?php

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Welcome</title>
	</head>
	<body>
		■session_question05<br>
		・お問い合わせページ（contact.php）へのリンクを完成させて下さい
		<div style="border: 1px; background-color: lightsteelblue;">
			<h2>Welcome <?php echo $_SESSION['username']; ?> !!</h2>
			<a href="">お問い合わせ</a>
			<br><br>
			<a href="logout.php">logout</a>
		</div>

		<script type="text/javascript">
		
		</script>
	</body>
</html>
