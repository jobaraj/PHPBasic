

<html>

<head>

<title>N to 1 print</title>

<body>
	
	<?php
	
		$a=$_POST['num1'];
		
		for ($i=$a; $i>=1; $i--){
			echo "$i <br>";
		}
	
	?>
	
	
	<form action="" method="post">
	
		<input type="text" name="num1" id="num1" value="">
		<input type="submit" name="submit" id="submit" value="Submit">
	
	</form>

</body>

</head>


</html>