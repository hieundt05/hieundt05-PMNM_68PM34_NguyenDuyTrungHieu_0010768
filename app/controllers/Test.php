<?php
// app/controllers/Test.php

class Test {
    public function index() {
        echo "test";
    }

    public function hello($name = "Guest") {
        echo "<h1>Xin chào " . htmlspecialchars($name) . "</h1>";
    }
}