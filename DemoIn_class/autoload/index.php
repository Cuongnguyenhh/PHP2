<?php
spl_autoload_register(function($class) {
    $prefix = 'Core\\';
    $base_dir = __DIR__ . '/core/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
//    echo $class;
    $relative_class = substr($class, $len);
//    echo  $relative_class;
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});


use Core\Animal;

$animal1 = new Animal();
$animal1->hello();

?>