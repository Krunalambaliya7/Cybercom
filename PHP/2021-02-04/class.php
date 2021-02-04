<?php

/*class Account
{
	public $balance;
	public function display()
	{
		return $this->balance;
	}
}

$k = new Account;
$k->balance = 20;
echo $k->display();*/


//For the constant variables.
class area
{
	const pi = 3.14;
	public function cal($r)
	{
		return self::pi*($r*$r);
	}
}

$circle = new area();
echo $circle->cal(2);
?>