


<html>

<head>

<title>Name print</title>

<body>
	
	<?php
		$a=$_POST['num1'];
		
		for ($i=1; $i<=10; $i++){
			echo "My Name is : $a <br>";
		}
	
	?>
	
	
	<form action="" method="post">
	
		<input type="text" name="num1" id="num1" value="<?=$a?>">
		<input type="submit" name="submit" id="submit" value="Submit">
	
	</form>

</body>

</head>