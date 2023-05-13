

<html>

	<body>
		<head>
			<title>The index of even number</title>
		</head>
		
		<?php
			
			
			$array = array(5, 2, 6, 1, 8,3,9,4);
			for($i=0; $i<sizeof($array); $i++){
				if($array[$i]%2 ==0){
				
					echo 'The Index of even num is : '.$i.'<br>';
				}
			}
			
		?>


	</body>
</html>