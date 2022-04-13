<?php
class database
{
    public function __construct()
    {
        
    }
    public function connectDb() {
        //Tham số để kết nối với cơ sở dữ liệu
        $dbHost = "localhost";
        $dbUser = "root";
        $dbPass = "";
        $dbName = "webtour";
        //Connect to database bằng mysql extension
        $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

        if (!$conn) {
            die("Database connection failed!");
        } else {
            //echo "Connected!";
        }
        return $conn;
    }
}
?>