

<html>
<head>
			<title>Second Smallest Number of Array</title>
	<body>
		
		<p>
		
		
		<?php
			
			$temp = 0;
			$array = array(7, 5, 1, 3, 6,4);
			 $n = sizeof($array);
			for($j=0; $j<$n-1; $j++){
			
				for($i=0; $i< $n-1; $i++){
					if($array[$i] > $array[$i+1]){
						$temp = $array[$i];
						 $array[$i] = $array[$i+1];
						 $array[$i+1] = $temp;
					}
				}
			}
			
			
			
			echo '7, 5, 1, 3, 6,4 <br>';
			//for($i=0; $i< sizeof($array); $i++){
			echo $array[1].'<br>';
			//}
		?>

</p>
	</body>
	</head>
</html>