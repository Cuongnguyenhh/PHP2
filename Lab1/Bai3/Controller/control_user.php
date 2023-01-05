<?php


class User{
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



  // if(isset($_GET['find'])){
  //   $email = $_GET['email'];
  //   $user1 = new User();
  //   $info_user=$user1->get_user($email);
  //   return $info_user;
  // }else{
  //   $user1 = new User();
  //   $info_user=$user1->get_user('phucuong200@gmail.com');
  //   return $info_user;
  // }

  // print_r($info_user);
  echo 'hihi';

