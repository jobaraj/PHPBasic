
<html>
	<head>
		<title>multiply</title>
		
		<body>
			
			<?php
				$a = $_POST['num1'];
				$b = $_POST['num2'];
				
				$c = $a*$b;
				
				echo "your first number is: $a";
				echo "<br>";
				echo "your second number is : $b";
				echo "<br>";
				echo "Your desire multiplication is : $c";
			?>
		
		
			<form action="" method="post">
				<input type="text" name="num1" id="num1" value="<?= $a?>">
				<input type="text" name="num2" id="num2" value="<?= $b?>">
				<input type="submit" name="submit" id="submit" value="Subnit">
			</form>
		</body>
	
	</head>
</html>