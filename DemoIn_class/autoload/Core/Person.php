<?php
namespace Core;
class Person{
    public $name;
    public $age;
    public $gender;
    
    public function hello(){
        echo 'This is Class Person using namespace `Core`';
    }
}
?>