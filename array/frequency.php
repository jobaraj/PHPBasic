

<html>

	<body>
		<head>
			<title>Frequency of Array</title>
		</head>
		
		<?php

			$array = "Hellow world";
			$n = strlen($array);
			$temp = 0;
			$temp = array();
		
			for ($i = 0; $i < $n; $i++) {
		
				for ($j = 0; $j < $n; $j++) {
					if ($array[$i] === $array[$j]) {
		
						$temp[$i]++;
					   
		
		
		
		
					}
				}
			}
		
			for ($i = 0; $i < $n; $i++) {
				$array[$i];
				$Dupli = false;
			
				
				for ($j = 0; $j < $i; $j++) {
					if ($array[$j] === $array[$i]) {
						$Dupli = true;
						break;
					}
				}
			
				
				if (!$Dupli) {
					echo $array[$i] .":".$temp[$i]. "<br>";
				}
			}

    ?>

	</body>
</html>