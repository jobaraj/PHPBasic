

<html>

	<body>
		<head>
			<title>The intersect</title>
		</head>
		
		<?php
			
			
			$input = "[1, 2, 3, 4, 5], [4, 5, 6, 7, 8]";
			
			$a = array(1, 2, 3, 4, 5);
			$b = array(4, 5, 6, 7, 8);
			
			$intersect = array_intersect($a,$b);
			
			echo 'The first array is : '.$a;
			
			echo "</br>";
			
			echo 'The second array is :' .$b;
			
			echo "</br>";
			
			echo 'The Sum of array is : '.$intersect;
			
		?>


	</body>
</html>