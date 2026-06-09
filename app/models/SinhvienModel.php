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
    public function insert($masv, $hoten) {
        $sql = "INSERT INTO sinhvien (masv, hoten) VALUES (?, ?)";
        return $this->db->execute($sql, [$masv, $hoten]);
    }
    public function getTotalCount() {
        $sql = "SELECT COUNT(*) as total FROM sinhvien";
        $result = $this->db->query($sql);
        return $result[0]['total'];
    }
    public function getPaginated($limit, $offset) {
        $sql = "SELECT * FROM sinhvien LIMIT $limit OFFSET $offset";
        return $this->db->query($sql);
    }
}