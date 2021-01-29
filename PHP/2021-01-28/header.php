<?php ob_start() ?>


<h1>This is my page.</h1>

<?php 

	//Header redirect
	
	header('Location: https://www.google.com/'); 
	
	//header is use to redirect or change the header information. 
  
 	//If we alredy define a header so it shows the error in older version of PHP. but in letest version it redirect the header.

 	//So to slove this problem it use output buffer.


ob_flush();


?>