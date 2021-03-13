<?php
 
class Person
{
	public $_name;
	
	public function walking()
	{
		return $this->name . " is a Faculty!";
	}
}

$p1 = new Person;

$p1->name = "Nirjhor Anjum";

# var_dump($p1->name);

# echo $p1->name;

echo $p1->walking();

?>