<?php
include_once 'Animal.php';
include_once "Person.php";
include_once './App/thuvat.php';

use App\App\Animal as Thuvat;
use Core\Animal;

$animal1 = new Animal();
$animal1->sayMyName('Cuong');

$animal2 = new ThuVat();
$animal2->sayhi();

