<?php
class Login extends Controller {
    public function index() {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (isset($_SESSION['user_id'])) {
            header('Location: /PMNM-68PM34/public/Sinhvien');
            exit();
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

            $userModel = $this->model('User');
            $user = $userModel->checkLogin($username, $password);

            if ($user) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                
                header('Location: /PMNM-68PM34/public/Sinhvien'); 
                exit();
            } else {
                $data['error'] = "Tài khoản hoặc mật khẩu không đúng!";
                $this->view('login', $data);
                return;
            }
        }
        $this->view('login');
    }
    public function logout() {
        if (session_status() === PHP_SESSION_NONE) session_start();
        session_unset();
        session_destroy();
        header('Location: /PMNM-68PM34/public/Login');
        exit();
    }
}