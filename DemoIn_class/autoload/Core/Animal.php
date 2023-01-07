<?php
namespace Core;
class Animal{
    public $name;
    public $age;
    public $gender;
    
    public function hello(){
        echo 'This is class Animal using namespace `Core`';
    }
}
?>