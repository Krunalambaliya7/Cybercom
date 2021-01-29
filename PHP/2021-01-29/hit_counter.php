<?php 
	

	function hit_count()
	{
		$ip_address = $_SERVER['REMOTE_ADDR'];
		$flag = false;
		/*$filename = 'count.txt';
		$handle = fopen($filename, 'r');
		$cur = fread($handle, filesize($filename));
		fclose($handle);
		$cur_inc = $cur + 1;

		$handle = fopen($filename, 'w');
		fwrite($handle, $cur_inc);
		fclose($handle);
*/

		$ip_file = file('ip.txt');

		foreach ($ip_file as $key) {
			$ip_one = trim($key);

			if ($ip_one == $ip_address) {
				$flag = true;
				break;
			}
			else{
				$flag = false;
			}

		}


		if ($flag == false) {
			$filename = 'count.txt';
			$handle = fopen($filename, 'r');
			$cur = fread($handle, filesize($filename));
			fclose($handle);

			$cur_inc = $cur + 1;

			$handle = fopen($filename, 'w');
			fwrite($handle, $cur_inc);
			fclose($handle);

			$file_handle = fopen('ip.txt', 'a');
			fwrite($file_handle, $ip_address."\n");
			fclose($file_handle);
		}
		else{
			echo "IP address is already Here.";
		}
		
		
	}
?>