<?php
class candy
{
	public function __set($index, $value)
	{
		echo 'The value of <b>'.$index.'</b> is <b>'.$value. '</b>';
	}
}
$candy = new candy;

$candy->name = 'Nirjhor Anjum';

?>
