

<html>

	<body>
		<head>
			<title>The index of even number</title>
		</head>
		
		<?php
			
			$j=0;
			$sum = 0;
			
			$array = array(5, 2, 6, 1, 8);
			for($i=0; $i<$array[$i]; $i++){
				if($array[$i]%2 ==0){
					$j++;
					$sum += $array[$i];
				}
			}
			echo 'The Index of even num is : '.$sum;
		?>


	</body>
</html>