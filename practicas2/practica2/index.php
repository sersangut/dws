<!doctype html>
<html lang="es">
	<head>		
		<meta charset="utf-8"/>
		<title> Titulo </title>		
	</head>	
	<body>
	<p align="center">
			
	<?php
		# semilla de aleatorio 
		
		srand((double)microtime()*1000000);

		# genero un aleatorio entre 1 y 6
		$dado=rand(1,6);

		switch($dado){
			case 1:	echo "<img src='./img/1.png'>"; break;
			case 2:	echo "<img src='./img/2.png'>"; break;
			case 3:	echo "<img src='./img/3.png'>"; break;
			case 4:	echo "<img src='./img/4.png'>"; break;
			case 5:	echo "<img src='./img/5.png'>"; break;
			case 6:	echo "<img src='./img/6.png'>"; break;					
		}		
	?>

	<br/><br/>
	<a href="index.php">Vuelve a tirar</a>
	</p>
	</body>
</html>
