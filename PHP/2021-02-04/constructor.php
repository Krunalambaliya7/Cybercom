<?php 

class info
{
	public $name,$age,$city;
	public function __construct($name,$age,$city)
	{
		$this->name = $name;
		$this->age = $age;
		$this->city = $city;
	} 
	public function display()
	{
		echo $this->name." ".$this->age." ".$this->city."<br>";
	}
}

$student1 = new info('Krunal',20,'Rajkot');
$student1->display();
$student2 = new info('Meet',20,'Shapar-Veraval');
$student2->display();
?>