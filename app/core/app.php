<?php
class App {
    // Thiết lập Controller, Method và Params mặc định
    protected $controller = "Test";
    protected $method = "index";
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        // 1. Kiểm tra Controller
        if (isset($url[0]) && file_exists('../app/controllers/' . ucfirst($url[0]) . '.php')) {
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        }
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // 2. Kiểm tra Method (Hàm) trong Controller
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // 3. Lấy các tham số còn lại (nếu có)
        $this->params = $url ? array_values($url) : [];

        // 4. Chạy hàm được yêu cầu
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    // Hàm cắt URL thành mảng
    private function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}