<?php

class Student
{

    function __construct()
    {
        echo "Construct...<br>";
    }

    function hi()
    {
        return "Hi Students";
    }

    function hello() {
        return $this->hi();
    }

    function __destruct()
    {
        echo "<br>Destruct...";
    }

}

$stuObj = new Student;

// $output = $stuObj->hi();
// echo $output;

$output = $stuObj->hello();
echo $output;

?>