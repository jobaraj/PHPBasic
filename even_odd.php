<html>
	
	<head>
		<title>Even ODD Check</title>
		<body>
			
			<?php 
				$a= $_POST['num1'];
				
				if($a>0){
					if($a%2==0){
						echo "This is Even Number";
					}else{
						echo "This is Odd Number";
					}
				}else{
					echo "Please Enter a Valid Number";
				}
			?>
		
		
			<form action="" method="post">	
				<input type="text" name="num1" id="num1" value="<?=$a?>">
				<input type="submit" name="submit" id="submit" value="Submit">
			
			</form>
		
		</body>
	</head>

</html>