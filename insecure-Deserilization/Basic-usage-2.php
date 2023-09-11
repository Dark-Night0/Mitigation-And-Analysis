<?php

class Person {
    public $name ;
    public $age ;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
      }
}

// O    -> Object
// s    -> String
// i    -> integer
// b    -> boolean
// a    -> array
// N    -> Null

$userObject = new Person("Mohammed" , 23) ;

$serialization = serialize($userObject) ;
echo $serialization ;

// In Case Desrilization 
$serialized_File = file_get_contents("serialize.txt") ;
$deseria = unserialize($serialized_File) ;

var_dump($deseria);
echo "<br>" ."After Desrialization <br>" ;
echo '$deseria->name : ' . $deseria->name  . "<br>" ;
echo '$deseria->age : '  . $deseria->age   . "<br>" ;



?>