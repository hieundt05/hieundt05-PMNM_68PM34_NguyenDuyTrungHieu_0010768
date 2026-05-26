<?php

require_once '../app/core/Security.php';

class Test extends Controller {
    
    public function __construct() {

        Security::check();
    }
    public function index() {
        echo "<h1>Out đi e!</h1>";

    }
}