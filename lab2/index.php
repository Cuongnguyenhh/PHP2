<?php
//
//use core\Database as DB;
//spl_autoload_register(function ($class){
//    var_dump($class);
//});
//$db = new DB();

require_once 'vendor/autoload.php';

use Core\Database;
use Core\Person;

$database = new Database();
//$database->HelloWorld();
$person = new Person();
$person->sayHi();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Home Page
</body>
</html>
