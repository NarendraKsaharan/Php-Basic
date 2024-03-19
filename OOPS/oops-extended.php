<?php

class school {

    protected function name(){
        return "Shubham";
    }

}

class student extends school {

    private function class(){
        return $this->name();
    }

    function str(){
        return $this->class();
    }

}


$stuobj = new student ;

$output = $stuobj;

echo $output->str();

?>



