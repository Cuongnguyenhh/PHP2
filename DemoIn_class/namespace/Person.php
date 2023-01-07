<?php
namespace Core;
class  Person
{
static $name = "Cuong";
private $age;

//    function set_name($Person_name){
//        $this->name= $Person_name;
//        return $Person_name;
//    }
//    function  set_age($Person_age){
//        $this->age = $Person_age;
//        return $Person_age;
//    }
function getInfo()
{
echo $this->name;
echo $this->age;
}

public function __construct($name, $age)
{
$this->name = $name;
$this->age = $age;
}
public static function sayHi(){
echo "hello";
}

public static function Hello(){
echo "Hello,".self::$name;
}
}