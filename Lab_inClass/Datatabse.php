<?php 
Class Database{
    private $severname='localhost';
	private $username='root';
	private $password='';
	private $database='demo';
	private $conn=null;
	private $result=null;
    public function __construct(){
        // Thực thi câu lệnh kết nối CSDL ở đây
        $conn = new PDO("mysql:host=$this->severname;dbname=myDB", $this->username, $this->password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
        }


// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        return $conn;
    }
    // Hàm thực thi câu lênh SQL
    public function query($query){

    }
    // thực hiện câu lệnh select return data
    public function fetch(){
        // Return data
    }   
    // Thực hiện lệnh insert và trả về giá trị ID mới nhất
    public function insertGetNewID(){

    }
    // Số lượng các record
    public function num_rows(){
        // Return Number
    }
    public function __destruct(){
    $conn->close();
    }   
}

?>