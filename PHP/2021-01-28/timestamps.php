<?php 

	$time = time();
	$actual_time = date('H:i:s' , $time); //H=hours i=minute s=seconds;
	$actual_date = date('d m y' , $time);
	//$actual_date = date('D M Y' , $time);
	echo $actual_time;
	echo $actual_date; 
?>