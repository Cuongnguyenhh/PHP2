<?php
require_once './UserClass.php';
   if(isset($_GET['find'])){
     $email = $_GET['search-input'];
     $user1 = new Acc();
     $info_user=$user1->get_user($email);
       foreach ($info_user as $info);
     include '../view/find_user.php';
   }



