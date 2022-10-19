<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Php Example</title>
	</head>
	<body>
		<?php 
			include("./menu.php");
		?>
		
		<h1>Arrays em PHP</h1>
		<?php 
		
		//definindo string
		$array = [1,2,3,7,6,4,9,7,11,27,54,32,23,44,12];
		$array_assoc = ["nome" => "joão", "idade" => 25, "morada" => "Funchal"];
				
		//print_r mostra toda a informação de uma variável
		
		$string = print_r($array,true);	//o segundo parametro (opcional) indica que o 
										//resultado é retornado para uma variável en vez 
										//de ser enviado para o output
										
		//ordenar array	- depois de fazer o sort, o array é alterado
		sort($array);
		$ordenado = print_r($array,true);	
										
		$string_assoc = print_r($array_assoc,true);
		
		$html = "<div>";
		$html.= "<p> array(s): <br/>$string <br/>/<br/> $string_assoc";			
		$html.= "<div>";
		$html.= "<div>";
		$html.= " tamanho dos arrays: ".count($array)." / ".count($array_assoc);	
		$html.= "<div>";		
		$html.= "<div>";
		$html.= " array ordenado: $ordenado ";
		$html.= "<div>";
		$html.= "<div>";
		$html.=	"<h1>array associativo:</h2><p>Nome:".$array_assoc['nome']."<br/>";
		$html.=	"Idade:".$array_assoc['idade']."<br/>";
		$html.=	"Morada:".$array_assoc['nome']."</p>";
		$html.= "<div>";
		
		print utf8_encode($html);
		
		?>
		
	</body>
</html>