<?php

class Students
{
    public $a;

    function __construct($name)
    {
        $this->a = $name;
    }

    function hi()
    {
        return "Hi ". $this->a;
    }

    public static function stMethod()
    {
        echo "Static Method...";
    }

}
Students::stMethod();
// $stuObj = new Students("Php");
// echo $stuObj->a;

//echo $stuObj->hi();



?>