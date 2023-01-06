<?php
    namespace Core;
    class Database{

        public function __construct()
        {
            $servername = "localhost";
            $username = "root";
            $password = "";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password);

    // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            echo "Connected successfully";
        }
        public function HelloWorld(){
            echo "Hello World";
        }
    }