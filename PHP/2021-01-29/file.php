<?php 
	
	$a = fopen('demo.txt' , 'w');
	fwrite($a, 'Krunal'." ");
	fwrite($a, 'Ambaliya');
	fclose($a);


	$b = fopen('demo.txt', 'a');
	fwrite($b, 'Meet'." ");
	fwrite($b, 'Kapadiya');
	fclose($b);

	$read = file('demo.txt');
	foreach ($read as $key) {
		echo $key;
	}
?>