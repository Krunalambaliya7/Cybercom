<?php 

$xml = simplexml_load_file('demo.xml');

//echo $xml ->producer[0] ->name." ".$xml ->producer[0] ->age;
	
foreach ($xml->producer as $key) {
	echo $key->name." ".$key->age."<br>";
}
?>