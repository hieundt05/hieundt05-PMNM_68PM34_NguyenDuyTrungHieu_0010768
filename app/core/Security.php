<?php

class Security {
    public static function check() {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /PMNM-68PM34/public/Login');
            exit();
        }
    }
}