<?php

class Employees_Class_Color {
    public $name;
    private $hex ;

    function __construct( $inpout1  = "white" , $inpout2 = "#fff"){
       $this->name = $inpout1 ;
       $this->hex = $inpout2;
    }
    public function gitName($hex){

        echo $this->name;

    }

    public function printColor() {
        echo "<h1>" . $this -> name . "</h1><br>";
        echo "<h1>" . $this -> hex . "</h1><br>";
    }




}




 



?>