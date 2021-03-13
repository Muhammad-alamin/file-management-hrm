<?php
abstract class AbstractClass
{
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    public function printOut() {
        echo $this->getValue() . "_AB_POSTFIX ... <br />";
    }
}

class ConcreteClass1 extends AbstractClass
{
    protected function getValue() {
        return "From inside Concrete Class 1... ";
    }

    public function prefixValue($prefix) {
        return "{$prefix} Concrete Class1... ";
    }
}

$object1 = new ConcreteClass1;
$object1->printOut();
echo $object1->prefixValue('PREFIX1_') . "_NORMAL_POSTFIX ... <br/>";

# $object1 = new AbstractClass;

?>