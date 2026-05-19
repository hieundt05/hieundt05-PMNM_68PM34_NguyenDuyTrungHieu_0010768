<?php
class User {
    public function checkLogin($username, $password) {
        if ($username === '0010768' && $password === '123456') {
            return [
                'id' => 1,
                'username' => '0010768'
            ];
        }
        return false; 
    }
}