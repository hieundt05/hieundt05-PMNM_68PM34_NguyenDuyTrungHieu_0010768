<?php
class Database {
    private $host = 'localhost';
    private $user = 'root'; 
    private $pass = '';     
    private $dbname = 'qlsv'; 
    private $conn;
    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Lỗi kết nối CSDL: " . $e->getMessage();
        }
    }
    public function query($sql) {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function execute($sql, $params = []) {
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($params);
    }
}