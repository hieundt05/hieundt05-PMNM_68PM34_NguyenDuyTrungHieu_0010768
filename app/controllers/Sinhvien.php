<?php
class Sinhvien extends Controller {
    public function index() {
        $svModel = $this->model('SinhvienModel');
        $data['danhsach'] = $svModel->getAll();
        $this->view('sinhvien', $data);
    }
}