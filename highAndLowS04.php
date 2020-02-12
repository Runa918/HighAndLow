<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
		<title>High&Lowゲーム</title>
	</head>
	<body>
	<div align="center">
	<font size="8">High&Lowゲーム</font>
	<hr>
	<?php

		$cards = array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
						"07.png","08.png","09.png","10.png","11.png","12.png","13.png");

		$num1 = $_POST[leftCard];
		$select = $_POST[select];

		echo '送信カード番号:',$num1,'<br>';
		echo 'High/Low選択:',$select;

	?>

	</div>
	</body>
</html>