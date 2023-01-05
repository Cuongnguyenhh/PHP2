<?php
class  ConnectDb{
    private $servername;
    private $username;
    private $password;

    public function __construct($servername,$username,$password)
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
    }
     public function get_con(){
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=lab1", $this->username, $this->password);
            // set the PDO error mode to exception
           
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $conn;
    }
}

$conn = new ConnectDb('localhost', 'root', '');
$conn->get_con();



