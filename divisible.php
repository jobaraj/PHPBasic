
<htm>

	<head>
	
		<title>Divisible by 3</title>
		
		<body>
			
			<?php
				$a = $_POST['num1'];
				
				echo "Your number is : $a";
				echo "<br>";
				
				if($a>0){
					if($a%3 == 0){
						echo "YES";
					}else{
						echo "NO";
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