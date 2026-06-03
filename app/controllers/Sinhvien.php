<?php
require_once '../app/core/Security.php';
class Sinhvien extends Controller {
    public function __construct() {
        Security::check();
    }
    public function index() {
        $svModel = $this->model('SinhvienModel');
        $data['danhsach'] = $svModel->getAll();
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