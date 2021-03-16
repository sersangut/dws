<!doctype html>
<html lang="es">
	<head>		
		<meta charset="utf-8"/>
		<title> Titulo </title>		
	</head>	

	<body>
			
	<?php
		# Declaro las variables
		# un cambio
		# este es un cambio final

		$numero1=5;
		$numero2=2;			
	
		echo "La variable \$numero1 tiene 
						el valor <b> $numero1</b> <br/>";
		
		echo "La variable \$numero2 tiene el 
					valor <b> $numero2</b> <br/>";
	
		echo "
			<br/><br/>

				<table border='1'>
					<tr>
						<th align='center'>Operación</th> 
						<th align='center'>Resultado</th>
					</tr>
					<tr>
						<td align='center'>\$numero1+\$numero2</td> 
						<td align='center'>".($numero1+$numero2)."</td>
					</tr>
					<tr>
						<td align='center'>\$numero1-\$numero2</td> 
						<td align='center'>".($numero1-$numero2)."</td>
					</tr>
					<tr>
						<td align='center'>\$numero1*\$numero2</td> 
						<td align='center'>".($numero1*$numero2)."</td>
					</tr>
					<tr>
						<td align='center'>\$numero1/\$numero2</td> 
						<td align='center'>".($numero1/$numero2)."</td>
					</tr>
				</table>
			";
			
			?>
	</body>
</html>
