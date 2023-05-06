<html>

	<head>
		<title>Negative Positive check</title>
	</head>
	
	<body>
		
		<?php 
			$a = $_POST['num2'];
			if($a<0){
				echo "This is a Negative Number";
			}elseif ($a>0){
				echo "This is a positive number";
			}else{
				echo "The number is Zero(0)";
			}
		?>
	
	
		<form action="" method="post">
			<input type="text" name="num2" id="num2" value="<?=$a?>">
			<input type="submit" name="submit" id="submit" value="Submit">
		</form>
	</body>

</html>