<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
		<title>High&amp;Lowゲーム</title>
	</head>
	<body>
	<div align="center">
	<font size="8">High&amp;Lowゲーム</font>
	<hr>
	<form action="highAndLowS07.php" method="post">
	<?php

		$cards = array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
						"07.png","08.png","09.png","10.png","11.png","12.png","13.png");
		$leftCard = mt_rand(0,13);	//ランダムな整数値０～１３代入

		//ランダムなカードの画像表示
		echo '<img src ="../cards/',$cards[$leftCard],'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo '<img src ="../cards/bg.png"><br>';

		//隠しフィールド
		echo '<input type="hidden" name="leftCard"value="',$leftCard,'">';

	?>
		<input type="radio" name="select" value="High">High&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="select" value="Low">Low
		<br>
		<br>
		<input type="submit" value="決定">

	</form>
	</div>
	</body>
</html>