<?php

class mathematics
{
	private $number;
	
	public function result()
	{
		return "Your number is: " . $this->number;
	}
}

$math = new mathematics;

$math->number = 10;

echo $math->result();

?>
