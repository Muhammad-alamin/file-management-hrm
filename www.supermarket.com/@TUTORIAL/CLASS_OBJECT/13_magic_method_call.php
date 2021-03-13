<?php 
class my_class
{
	public function nirjhor() 
	{
		return "This is the nirjhor function";
	}
	
	public function __call($method, $parameter)
	{
		echo "Method: " . $method;
		
		echo "<br /><br />"; # Useless
		
		echo "Paramteres are: <br />";
		print_r($parameter);
	}
}

$obj = new my_class;

$obj->anjum("argument1", "argument2", "argument3");
?>
