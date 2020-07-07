<?php

?>

<!DOCTYPE html>
<html>
	<body>
		■session_question05<br>
		・contact.phpで入力した内容を表示して下さい<br>
		・送信するボタンをクリックしたら、送信完了ページ（complete.php）を表示するようにして下さい<br>
		・戻るボタンをクリックしたら、お問い合わせページ（contact.php）を表示するようにして下さい
		<div style="border: 1px; background-color: lightsteelblue;">
			<h2>確認画面</h2>
			<p>以下の内容でよろしければ「送信する」をクリックして下さい。</p>

			<div>
		    <table border="1" width="50%">
		      <tr>
		        <th width="200px">お名前: </th>
		        <td><!-- ここに埋め込んで表示する --></td>
		      </tr>
					<tr>
		        <th width="200px">種別: </th>
		        <td><!-- ここに埋め込んで表示する --></td>
		      </tr>
		      <tr>
		        <th width="200px">お問い合わせ内容: </th>
		        <td><!-- ここに埋め込んで表示する --></td>
		      </tr>
		    </table>
		  </div><br>

		  <button>戻る</button>
		  <button>送信する</button>
		</div>

		<script type="text/javascript">

		</script>
	</body>
</html>
