

<html>

	<body>
		<head>
			<title>Palindrom Check</title>
		</head>
		
		<?php
			
			function palindrom($array){
        		$a = sizeof($array);
       		 	$rev = 0;

        		for ($i = $a - 1; $i >= 0; $i--) {

           		$rev .= $array[$i];
        }
		
        	$j=implode($array) ;


        	if ($rev==$j) {
            	return "True";
        	} else {
            return "False";
        }
    }


    $string = "radar";

    echo "The Input string is : '" . $string . "'";
    echo "</br>";


    $chars = str_split($string);


    echo" Output (Palindrome) : ". palindrom($chars);
			
		?>


	</body>
</html>