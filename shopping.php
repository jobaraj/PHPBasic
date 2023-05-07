<html>


	<head>
		<title>Shopping</title>
		
		<body>
		
			<?php 
				$amount = $_GET['taka'];
				$next_amount = $amount-1000;
				
				if($amount>1000){
					echo "I will buy a Punjabi <br>";
					if($next_amount>=500){
						echo "I will buy new Shoes <br>";
						echo "Alisha will buy new Shoes";
					}
				}else{
					echo "Bad Luck (Amra fokir)";
				}
			?>	
		
			<form action="" method="get">
				<input type="text" name="taka" id="taka" value="<?=$amount?>">
				<input type="submit" name="submit" id="submit" value="Submit">
			</form>
		
		</body>
	
	</head>


</html>