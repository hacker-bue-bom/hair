<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Php Example</title>
	</head>
	<body>
		<?php 
			include("./menu.php");
		?>
		
		<h1>Strings em PHP</h1>
		<?php 
		
		//definindo string
		$string = "esta é uma string";
		$string2 = "outra string";
		
		//html pode ser guardado numa string para ser posteriormente enviado para o browser
		
		$html = "<div>";
		//concatenação de strings feita com . (neste caso .= acrescenta no final de uma string existente
		$html.= " a minha string: $string / $string2";	//dentro de "" as variáveis são substituidas pelo seu valor		
		$html.= "<div>";
		$html.= "<div>";
		$html.= " tamanho da string: ".strlen($string)." / ".strlen($string2);	
		$html.= "<div>";
		$html.= "<div>";
		
		$cmp = strcmp($string, $string2);
		$res = ($cmp==0)?" as string são iguais":" as strings são diferentes";
		
		$html.= " str1 vs str2: $cmp - $res.";	 //0 = strings iguais
		$html.= "<div>";
		$html.= "<div>";
		$html.= " inverso: ".strrev($string)." / ".strrev($string2);
		$html.= "<div>";
		
		print utf8_encode($html);		
		?>
		
	</body>
</html>