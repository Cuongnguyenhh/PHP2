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
    }
    // Hàm thực thi câu lênh SQL
    public function query($query){
        // Code 
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
        // Đóng kết nối
    }   
}

?>