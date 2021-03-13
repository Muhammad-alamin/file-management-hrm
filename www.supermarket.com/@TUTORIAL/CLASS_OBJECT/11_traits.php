<?php
trait CommonMethodTrait {
	public $name = "Nirjhor Anjum";
    public function getName() {
        return $this->name;
    }
}

class TestClass {
    use CommonMethodTrait;
}

class AnotherClass {
    use CommonMethodTrait;
}

$tc = new TestClass();
echo $tc->getName();

echo "<br />";

$ac = new AnotherClass();
echo $ac->getName();

?>