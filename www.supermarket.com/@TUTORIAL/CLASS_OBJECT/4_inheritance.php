<?php

class ParentClass
{
    public $name;

    public function getName()
    {
        return $this->name;
    }
}


class ChildClass extends ParentClass
{

}

$child = new ChildClass();

$child->name = "Anjum";

echo $child->getName();

?>