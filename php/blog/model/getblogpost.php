<?php 
	session_start();
	require 'connection.php';
	if (isset($_SESSION['user'])) {
		
	$res = '';
	$userid = $_SESSION['user'];
	$obj = new DataBaseOperation();
	$query = "SELECT * FROM `post` where User id=$userid";
	$result = $obj->selectData($query);
		foreach ($result as $value) {

			$query = "SELECT * FROM `reletion` where postid='$value[id]'";
			$list = $obj->selectData($query);
			$categorylist = '';
			foreach($list as $val){
			$categorylist.=$val['categoryid'].',';
		}
			$res .= "
			<tr>
				<td>$value[id]</td>
				<td>$categorylist</td>
				<td>$value[title]</td>
				<td></td>
				<td class='text-left'>
					$value[created] <br>
					<a class='btn bg-danger text-white float-right' 
					id='$value[id]' onclick='deletedata(this.id)'><i class='fa fa-trash-o' aria-hidden='true'></i></a>
				</td>
			</tr> ";
		}
		return $res;
	}

?>