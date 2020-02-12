<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
		<title>High&Lowゲーム</title>
	</head>
	<body>
	<div align="center">
	<font size="8">High&Lowゲーム</font>
	<hr>
	<br>
	<?php

		$cards = array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
						"07.png","08.png","09.png","10.png","11.png","12.png","13.png");
		$rightcard = mt_rand(0,13);

		$leftCard = $_POST[leftCard];
		$select = $_POST[select];

		echo '<img src ="../cards/',$cards[$leftCard],'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo '<img src ="../cards/',$cards[$rightcard],'"><br>';
		echo $select,'を選択しました。<br>';

		//ここから勝敗判定
		if ($leftCard < $rightcard){
			$result = "High";
		}elseif($leftCard > $rightcard){
			$result = "Low";
		}else{
			$result = "ラジオボタンの選択情報";
		}

		if($result == $select){
			echo "You Win!";
		}else{
			echo "You Lose...";
		}


	?>

	</div>
	</body>
</html>