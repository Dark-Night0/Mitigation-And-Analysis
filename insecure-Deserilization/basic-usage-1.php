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

var_dump(serialize($userObject)) ;

// string(58) "O:6:"Person":2:{s:4:"name";s:8:"Mohammed";s:3:"age";i:23;}" 

?>