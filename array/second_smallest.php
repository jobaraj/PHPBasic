

<html>

	<body>
		<head>
			<title>Second Smallest Number of Array</title>
		</head>
		
		<?php
			
			
			$array = array(3, 5, 1, 9, 6);
			$min = 3;
 			for($i=0; $i< sizeof($array); $i++){
				if($array[$i] < $min){
					$min = $array[$i];
				}
			}
			echo 'The second Smallest number is : '.$min;
		?>


	</body>
</html>