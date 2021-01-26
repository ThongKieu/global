<?php

// define('BASE_URL', 'https://globalleadership.vn/'); 
// địa chỉ trang chủ
define('BASE_URL', 'http://localhost:8080/global/'); 
date_default_timezone_set("Asia/Ho_Chi_Minh");// thời gian
// used to get mysql database connection
class Getdatabase{     
        
    // specify your own database credentials
    private $host = 'localhost';
    private  $dbname = 'kh';
   private $username = 'root';
    private  $password = '';  
    //  private $host = 'localhost';
    //  private  $dbname = 'admin_global';
    //  private $username = 'admin_global';
    //  private  $password = 'F3s4XJfnTs'; 
    public $pdo;
    public $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
    // get the database connection
    public function getConnection(){
 
        $this->pdo = null;
 
        try{
            $this->pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        }catch(PDOException $exception){
            echo "Lỗi Kết Nối " . $exception->getMessage();
        }
 
        return $this->pdo;
    }
    
}
