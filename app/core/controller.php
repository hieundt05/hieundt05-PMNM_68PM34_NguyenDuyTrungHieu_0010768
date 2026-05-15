<?php
// app/core/controller.php

class Controller {
    // Hàm dùng để gọi Model
    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    // Hàm dùng để gọi View (Giao diện)
    public function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }
}