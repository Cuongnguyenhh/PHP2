<?php
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

}