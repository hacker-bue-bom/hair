<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Php Example</title>
	</head>
	<body>
		<?php 
			include("./menu.php");
		?>
		
		<h1>PHP - p&#225;gina inicial</h1>
		
		<?php 
			echo phpinfo();
		?>

		<?php 
			$a = "<p>";
			$ah = "Pokemon go";
			$aah = "a tua mae";
			$aaah = "string";
			$aaaah = [5,3,33,30];

			function boa() {
				$data = date("d/m/y");
				$check = date('w', strtotime($data));
				if ($check > 5) {
					echo "boa!";
				}
				else {
					echo "fuuuuck!";
				}
			}

			function arraythingy($x) {
				$arrlength = count($x);
				sort($x);
				for($i = 0; $i < $arrlength; $i++) {
					echo $x[$i];
					echo "<br>";
				}
			}
			   

			echo "I play " . $ah . " EvErYdAy <br>";
			echo $aah ;
			echo $a;
			echo strlen($aaah);
			echo $a;
			echo strcmp($ah,$aah);
			echo $a;
			echo strrev($aaah);
			echo $a;
			echo trim($aaah, $aaah[0].  $aaah[strlen($aaah) - 1]);
			echo $a;
			boa();
			echo $a;
			arraythingy($aaaah);

			
		?>
		
	</body>
</html>
	