<?php 

include("Library/Tools/Foo.php");
include("Library/Mools/Foo.php");

use \Library\Tools\Foo as ToolsFooClass;
use \Library\Mools\Foo as MoolsFooClass;

$foo1 = new ToolsFooClass;
$foo2 = new MoolsFooClass;

$foo1->getName();

echo "<br />";

$foo2->getName();

?>