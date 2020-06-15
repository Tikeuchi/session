<?php
	session_start();
	echo '$_GET' . '<br>';
	var_dump($_GET);
	echo '<br>';
	echo '<br>';

	$_SESSION['aaaa'] = $_GET['input_a'];
	$_SESSION['is_logged_in'] = true;
	echo '$_SESSION' . '<br>';
	var_dump($_SESSION);
	echo '<br>';
?>
<!DOCTYPE html>
<html>
	<body>

		<form action="" method="get" style="border: 1px; background-color: lightsteelblue;">

			<h2>FORM</h2>

			INPUT_HERE: <input type="text" name="input_a" value=""><br>

			<button type="submit">SUBMIT</button>
		</form>


		<script type="text/javascript">
		</script>
	</body>
</html>
