
<?php 
$fonts = "verdana";
?>
<!doctype html>
<html>
	<head>
		<title>PHP Syntax</title>
		<style>
			body{font-family:<?php echo $fonts;?>}
			.phpcoding{width:900px; margin:0 auto; background:#ddd;  }
			.headeroption, .footeroption {background:#444; color:#fff; text-align:center; padding:20px;}
			.headeroption h2, .footeroption h2 {margin:0}
			.maincontent {min-height:400px; padding:20px}
		</style>
		<body>
		<div class="phpcoding">
			<section class="headeroption">
				<h2>PHP FUNDAMENTALS TRAINING</h2>
			</section>
			<section class="maincontent">
				<?php
	
	
	$prblm1="Recently I heard that you've achieved </br> 95% marks in your exam.</br>
This is brilliant!</br>
I wish you'll shine in your life! &nbsp;&nbsp;&nbsp;&nbsp; Good </br> luck with all the barriers(/\) in your
life";
	echo "$prblm1";
		
?>

<hr/>

	
<?php 

	 $_POST['number1'];
	 $_POST['number2'];
	
	$sum = $_POST['number1'] + $_POST['number2'];
	$sub = $_POST['number1'] - $_POST['number2'];
	$mul = $_POST['number1'] * $_POST['number2'];
	if($_POST['number1']>0){
		$div = $_POST['number1'] / $_POST['number2'];
	}
	
	
	echo 'Your First Input is: '.$_POST['number1'].'<br>'.'Your Second Input is: '.$_POST['number2'].'<br>';
	echo "<br>";
	echo 'The Summation of '.$_POST['number1'].' and '.$_POST['number2'].' is : '.$sum.'<br>';
	echo 'The Subtraction of '.$_POST['number1'].' and '.$_POST['number2'].' is : '.$sub.'<br>';
	echo 'The Multiplication of '.$_POST['number1'].' and '.$_POST['number2'].' is : '.$mul.'<br>';
	echo 'The Division of '.$_POST['number1'].' and '.$_POST['number2'].' is : '.$div.'<br>';

?>	

			<form action="" method="post">
				<input type="text" name="number1" id="number1" value="<?=$_POST['number1']?>" >
				<input type="text" name="number2" id="number2" value="<?=$_POST['number2']?>">
				<input type="submit" name="submit" value="submit">
			</form>
			
		
		
		<hr/>
		
			</section>
			<section class="footeroption">
				<h2>www.erp.com.bd</h2>
			</section>
		</div>
		</body>
	</head>
</html>