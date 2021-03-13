<?php

interface HumanTemplate
{
	public function walk($name);
}

class Human implements HumanTemplate
{
	public function walk($name)
	{
		echo $name . " is walking... ";
	}
	
	public function talk($name)
	{
		echo $name . " is talking... ";
	}
}

$man = new Human;

$man->walk("Anjum");
$man->talk("Anjum");

?>