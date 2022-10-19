<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Php Example</title>
	</head>
	<body>
		<?php 
			include("./menu.php");
			
			//as funções estão definidas no ficheiro em anexo (include.php)
			include("./include.php");
		
			print utf8_encode("<h1>Funções em PHP</h1>");
		
		?>
		
		<div>
			<?php 
				print utf8_encode("função 'helloWorld:");
				//executando a função "helloWorld
				helloWorld();
			?>
		</div>
		<div>
			<?php 
				print utf8_encode("Hoje é ").todayIs();				
			?>	
		</div>
		
	</body>
</html>