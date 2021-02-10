<?php 

	require 'connection.php';
	$res = '';
	$obj = new DataBaseOperation();
	$query = 'SELECT * FROM category';
	$result = $obj->selectData($query);
		foreach ($result as $value) {
			$res .= "
			<tr>
				<td>$value[id]</td>
				<td>$value[image]</td>
				<td>$value[created at]</td>
				<td class='text-left'>
					$value[created] <br>
					<a class='btn bg-danger text-white float-right' 
					id='$value[id]' onclick='deleteContact(this.id)'><i class='fa fa-trash-o' aria-hidden='true'></i></a>
>
				</td>
			</tr> ";
		}
		return $res;


?>