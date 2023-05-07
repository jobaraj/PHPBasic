
<htm>

	<head>
	
		<title>Divisible by 3 and 7</title>
		
		<body>
			
			<?php
				$a = $_POST['num1'];
				
				echo "Your number is : $a";
				echo "<br>";
				echo "<br>";
				
				if($a>0){
					for($i=1; $i<=$a; $i++){
						if($i%3==0 && $i%7==0){
							echo "The Divisible number is : $i <br>";
						}
					}
				}else {
					echo "Please enter a non-negative number";
				}
			?>
			
			
			<form action="" method="post">
				<input type="text" name="num1" id="num1" value="<?= $a?>">
				<input type="submit" name="submit" id="submit" value="Submit">
			</form>
		
		</body>
	
	</head>

</html>