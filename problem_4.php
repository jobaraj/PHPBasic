<html>
	
	<head>
		
		<title>Problem 4</title>
		
		<body>
			
			<?php 
				$a = $_POST['num1'];
				$b = $_POST['num2'];
				$c = $_POST['num3'];
				$d = $_POST['num4'];
				
				//echo 'Your First Input is: '.$a.'<br>'.'Your Second Input is: '.$b.'<br>'.'Your Third Input is: '.$c.'<br>'.'Your Foyrth Input is: '.$d.'<br>';
				
				echo "$a";
				
			?>
		
		
			<form action="" action="post">
				<input type="text" name="num1" id="num1" value="<?=$a?>"></br>
				<input type="text" name="num2" id="num2" value="<?=$b?>"></br>
				<input type="text" name="num3" id="num3" value="<?=$c?>"></br>
				<input type="text" name="num4" id="num4" value="<?=$d?>"></br>
				<input type="submit" name="submit" id="submit" value="Submit"> 
			</form>
		
		</body>
	
	</head>
	

</html>