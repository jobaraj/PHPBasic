<html>


	<head>
		<title>Marketing</title>
		
		<body>
		
			<?php 
				$amount = $_GET['taka'];
				
				if($amount>= 10000){
					if($amount>20000){
						echo "Gucci Bag, Gucci Belt";
					}else{
						echo "Gucci Bag";
					}
				}elseif($amount>= 5000){
					echo "Levis Bag";
				}else{
					echo "Somthine";
				}
			?>	
		
			<form action="" method="get">
				<input type="text" name="taka" id="taka" value="<?=$amount?>">
				<input type="submit" name="submit" id="submit" value="Submit">
			</form>
		
		</body>
	
	</head>


</html>