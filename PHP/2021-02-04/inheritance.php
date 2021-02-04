<?php

class bankaccount
{
	public $balance = 0;

	public function withdraw($amount)
	{
		if ($this->balance < $amount)
		{
			echo 'Not enough money.<br>';
		}
		else
		{
			$this->balance = $this->balance - $amount;
		}	
	}

	public function deposite($amount)
	{
		$this->balance = $this->balance + $amount;
	}
}

class savings extends bankaccount
{
	public function display()
	{
		return 'Balance: '.$this->balance;
	}
}

$save = new savings();
$save->deposite(1000);
echo $save->display();

?>