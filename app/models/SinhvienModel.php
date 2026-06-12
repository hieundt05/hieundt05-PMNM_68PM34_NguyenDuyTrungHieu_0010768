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

    public function insert($masv, $hoten, $gioitinh, $lop_hoc) {
        $sql = "INSERT INTO sinhvien (masv, hoten, gioitinh, lop_hoc) VALUES (?, ?, ?, ?)";
        return $this->db->execute($sql, [$masv, $hoten, $gioitinh, $lop_hoc]);
    }

    // Đã thêm tìm kiếm theo từ khóa
    public function getTotalCount($keyword = '') {
        $sql = "SELECT COUNT(*) as total FROM sinhvien WHERE masv LIKE '%$keyword%' OR hoten LIKE '%$keyword%'";
        $result = $this->db->query($sql);
        return $result[0]['total'];
    }

    // Đã thêm tìm kiếm theo từ khóa
    public function getPaginated($limit, $offset, $keyword = '') {
        $sql = "SELECT * FROM sinhvien WHERE masv LIKE '%$keyword%' OR hoten LIKE '%$keyword%' LIMIT $limit OFFSET $offset";
        return $this->db->query($sql);
    }

    public function getById($id) {
        $id = (int)$id;
        $sql = "SELECT * FROM sinhvien WHERE id = $id";
        $result = $this->db->query($sql);
        return !empty($result) ? $result[0] : null;
    }

    public function update($id, $masv, $hoten, $gioitinh, $lop_hoc) {
        $sql = "UPDATE sinhvien SET masv = ?, hoten = ?, gioitinh = ?, lop_hoc = ? WHERE id = ?";
        return $this->db->execute($sql, [$masv, $hoten, $gioitinh, $lop_hoc, $id]);
    }

    public function delete($id) {
        $sql = "DELETE FROM sinhvien WHERE id = ?";
        return $this->db->execute($sql, [$id]);
    }
}