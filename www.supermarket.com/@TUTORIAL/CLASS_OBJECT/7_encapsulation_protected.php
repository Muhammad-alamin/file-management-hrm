<?php
	
class mathematics
{
	protected $number; # private #
	
	public function setNum($var_num)
	{
		$this->number = $var_num;
	}
}

class divide extends mathematics
{

	public function divideByTwo()
	{
		$result = $this->number / 2;
		return round($result, 2);
	}
}

$divObject = new divide;
$divObject->setNum(14);
echo $divObject->divideByTwo();

?>
