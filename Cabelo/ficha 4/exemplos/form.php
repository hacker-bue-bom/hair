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
		<h1><?php print utf8_encode("Formulários")?></h1>
		<div>
			<form action="submit.php" method="post">
				<input name="nome" type="text" placeholder="Nome">
				<input name="idade" type="number" placeholder="Idade">
				<input name="morada" type="text" placeholder="Morada">
				<input type="submit" value="Enviar">			
			</form>
		</div>
		
		
	</body>
</html>