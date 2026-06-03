<?php

class Controller {
    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }
    public function view($view, $data = []) {
        $page = $view;
        require_once '../app/views/layout_master.php'; 
    }
}