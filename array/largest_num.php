

<html>

	<body>
		<head>
			<title>Largest Number of Array</title>
		</head>
		
		<?php
			
			
			$array = array(12, 35, 1, 55, 34, 110);
			$max = 12;
 			for($i=0; $i< sizeof($array); $i++){
				if($array[$i] > $max){
					$max = $array[$i];
				}
			}
			echo 'The sum of even num is : '.$max;
		?>


	</body>
</html>