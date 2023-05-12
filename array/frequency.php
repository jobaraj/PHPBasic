

<html>

	<body>
		<head>
			<title>Frequency of Array</title>
		</head>
		
		<?php
			
			
			$array = array("Hello");
 			for($i=0; $i< sizeof($array); $i++){
				if($array[$i] > $max){
					$max = $array[$i];
				}
			}
			echo 'The Frequency of Letter : '.$max;
		?>


	</body>
</html>