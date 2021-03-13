<?php
function __autoload($className)
{
	require_once "classes/$className.php";
}

$human = new Human();
$member = new Member();

print_r( $human );
print_r( $member );

?>
