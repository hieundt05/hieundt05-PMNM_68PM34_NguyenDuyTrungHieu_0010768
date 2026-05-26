<?php
require_once '../app/core/Database.php';

class SinhvienModel {
    private $db;

    public function __construct() {
        $this->db = new Database(); 
    }

    public function getAll() {
        $sql = "SELECT * FROM sinhvien";
        return $this->db->query($sql);
    }
}