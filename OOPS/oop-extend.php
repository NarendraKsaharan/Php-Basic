<?php
class School
{
    private function sch() {
        return "PHP School";
    }

}


class Students extends School
{
    public $a;
    //const name = "TEST";
    function __construct($name)
    {
        $this->a = $name;
    }

    function hi()
    {
        return "Hi ". $this->a. ", from " . $this->sch();
    }

}

$stuObj = new Students("Php");
echo $stuObj->hi();



?>