<?php


class User{
    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $create_time;
    private $status;
    private $password;
   public function get_user($find){
     require_once 'Bai3/model/Connect.php';
     $connn = new ConnectDb('localhost', 'root', '');
     $conn = $connn->get_con();
            $stmt = $conn->prepare("SELECT * FROM user WHERE email= $find");
            $stmt->execute();
            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $info_user = $stmt->fetchAll();
            return $info_user;


        }


}
$user1 = new User();
print_r($user1->get_user("Phucuong200@gmail.com"));