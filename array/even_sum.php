

<html>

	<body>
		<head>
			<title>array even sum</title>
		</head>
		
		<?php
			
			$j=0;
			$sum = 0;
			
			$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
			
			for($i=0; $i<sizeof($array); $i++){
				if($array[$i]%2 ==0){
					$j++;
					$sum += $array[$i];
				}
			}
			echo 'The total num of of even is : '.$j.'<br>';
			echo 'The sum of even num is : '.$sum;
		?>


	</body>
</html>