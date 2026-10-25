<?php

class Person {
    public $name ;
    public $username ;

    public function profile() {
        echo "name : " . $this -> name . "<br>" ;
        echo "user name : " . $this -> username . "<br>";
    }

    public function __tostring() {
        return "name : " . $this -> name . "<br>" 
        . "user name : " . $this -> username . "<br>" ;
    }
}


class User extends Person{

 public $tepe = "user";
 public function pri(){
    echo "<h1>" . $this -> tepe . "</h1>";
 }

}

class Admin extends Person{
public $admin = "admin";

public function teip(){
     echo "<h1>" . $this -> admin . "</h1>";
}


}





?>