<?php

class mathematics
{
	public $num;

	public function increase()
	{
		return $this->num + 1;
	}
}

$math = new mathematics;

$math->num = 2;

echo $math->increase();

?>
