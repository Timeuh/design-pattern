<?php

namespace App;

class Config {
    private static $instance = null;
    private $config = [];

    private function __construct() {
        $this->config = require __DIR__ . '/../config/config.php';
    }

    public static function getInstance() {
        if (is_null(self::$instance)) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    public function get($key) {
        return $this->config[$key];
    }
}