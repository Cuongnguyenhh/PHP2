<?php
function autoloadCoreClasses($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    $fileName = 'model/' . $fileName;
    require $fileName;
}

class Acc{
    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $create_time;
    private $status;
    private $password;
    public function get_user($get_email){
        require_once '../model/Connect.php';
        $connn = new ConnectDb('localhost', 'root', '');
        $conn = $connn->get_con();
        $stmt = $conn->prepare("SELECT * FROM `user` WHERE `email`= '$get_email'");
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $info_user = $stmt->fetchAll();
        return $info_user;
    }

    public function getAll_user(){
        require_once '../model/Connect.php';
        $connn = new ConnectDb('localhost', 'root', '');
        $conn = $connn->get_con();
        $stmt = $conn->prepare("SELECT * FROM `user`");
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $info_user = $stmt->fetchAll();
        return $info_user;
    }
    public function insert_user($id){

    }

}