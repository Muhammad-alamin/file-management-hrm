<?php 

class Human
{
	public $work = "Working... ";
	
	public function __construct()
	{
		echo "I have born... ";
	}
	
	public function __destruct()
	{
		echo "I am dead... ";
	}
}

$man = new Human;

echo $man->work;

?>