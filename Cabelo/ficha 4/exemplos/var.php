<?php 
	//definindo variáveis:

$var = "minha var";
if(array_key_exists('p', $_GET))
	$var = $_GET['p'];


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Php Example</title>
	</head>
	<body>
		<?php 
			include("./menu.php");
		?>
		<h1>Vari&#225;veis em PHP</h1>
		<div>
			a minha vari&#225;vel: <?php 
				print $var; 
			?>
		</div>
		
		
	</body>
</html>
	