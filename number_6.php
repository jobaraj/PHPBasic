
<html>
	<head>
		<title>Number 6</title>
		
		<body>
			
			<?php
				$a = $_POST['num1'];
				$b = $_POST['num2'];
				
				$c = $a+$b;
				
				if($a>0 && $a<10 && $b>0 && $b<10){
					if ($a==1){
						echo "One, ";
						}elseif($a==2){
							echo "Two, ";
					}elseif($a==3){
							echo "Three, ";
					}elseif($a==4){
							echo "Four, ";
					}elseif($a==5){
							echo "Five, ";
					}elseif($a==6){
							echo "Six, ";
					}elseif($a==7){
							echo "Seven, ";
					}elseif($a==8){
							echo "Eight, ";
					}else{
						echo "Nine, ";
					}
					
					if ($b==1){
						echo "One";
						}elseif($b==2){
							echo "Two";
					}elseif($b==3){
							echo "Three";
					}elseif($b==4){
							echo "Four";
					}elseif($b==5){
							echo "Five";
					}elseif($b==6){
							echo "Six";
					}elseif($b==7){
							echo "Seven";
					}elseif($b==8){
							echo "Eight";
					}else{
						echo "Nine";
					}
				}elseif($a>=10 || $b>=10){
					echo "The Summation is : $c";
				}
				
			?>
		
		
			<form action="" method="post">
				<input type="text" name="num1" id="num1" value="<?=$a?>">
				<input type="text" name="num2" id="num2" value="<?=$b?>" >
				<input type="submit" name="submit" id="submit" value="Submit">
			</form>
		</body>
	
	</head>
</html>