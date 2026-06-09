<?php
require_once '../app/core/Security.php';

class Sinhvien extends Controller {
    public function __construct() {
        Security::check();
    }
    public function index() {
        $svModel = $this->model('SinhvienModel');
        $limit = 5;
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        if ($page < 1) $page = 1;
        $offset = ($page - 1) * $limit;
        $totalRecords = $svModel->getTotalCount();
        $data['totalPages'] = ceil($totalRecords / $limit);
        $data['currentPage'] = $page;
        $data['danhsach'] = $svModel->getPaginated($limit, $offset);
        $this->view('sinhvien', $data);
    }
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $masv = trim($_POST['masv']);
            $hoten = trim($_POST['hoten']);
            $svModel = $this->model('SinhvienModel');
            $svModel->insert($masv, $hoten); 
            header('Location: /PMNM-68PM34/public/Sinhvien');
            exit();
        }
        $this->view('create_sinhvien');
    }
}