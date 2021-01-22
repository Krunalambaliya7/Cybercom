<?php
	
	$age = 10;
	$a = 1;

	if ($age < 18) {
		echo "Person is unmature.";
	}
	else{
		echo "Person is mature.";
	}

	switch ($a) {
		case '1':
			echo "One.";
			break;

		case '2':
		echo "Two.";
		break;
		
		default:
			echo " ";
			break;
	}

	for ($i=0; $i < 10; $i++) { 
		echo $a;
	}

	while ($a <= 10) {
		echo $a;
		$a++;
	}

	do{
		echo $a;
		$a++;
	}while($a <= 10)
 ?>