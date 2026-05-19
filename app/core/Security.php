<?php

class Security {
    public static function check() {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /Login');
            exit();
        }
    }
}