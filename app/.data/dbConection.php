<?php

class DatabaseConnection {
    private static $instance;
    private $connection;

    private function __construct() {
        include '.environments/dbConfig.php';
        $this->connection = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME) or die("Error al conectar: " . mysqli_connect_error());
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}

?>