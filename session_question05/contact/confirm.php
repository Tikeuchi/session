<?php
	session_start();

	// リダイレクト処理
	if(!isset($_SESSION['username'])) {
		header("Location: login.php");
		exit;
	}

	if (isset($_POST['category'])) {
		$_SESSION['category'] = $_POST['category'];
	};
	if (isset($_POST['comment'])) {
		$_SESSION['comment'] = $_POST['comment'];
	};
?>

<!DOCTYPE html>
<html>
	<body>
		■session_question05<br>
		・contact.phpで入力した内容を表示してください<br>
		・送信するボタンをクリックしたら、送信完了ページ（complete.php）を表示するようにしてください<br>
		・戻るボタンをクリックしたら、お問い合わせページ（contact.php）を表示するようにしてください
		<div style="border: 1px; background-color: lightsteelblue;">
			<h2>確認画面</h2>
			<p>以下の内容でよろしければ「送信する」をクリックしてください。</p>

			<div>
		    <table border="1" width="50%">
		      <tr>
		        <th width="200px">お名前: </th>
		        <td><?php echo $_POST['username'] ?></td>
		      </tr>
					<tr>
		        <th width="200px">種別: </th>
		        <td><?php echo $_POST['category'] ?></td>
		      </tr>
		      <tr>
		        <th width="200px">お問い合わせ内容: </th>
		        <td><?php echo $_POST['comment'] ?></td>
		      </tr>
		    </table>
		  </div><br>

		  <button onClick="location.href='contact.php'">戻る</button>
		  <button onClick="location.href='complete.php'">送信する</button>
		</div>

		<script type="text/javascript">

		</script>
	</body>
</html>
