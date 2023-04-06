<?php
namespace conection;

class DatabaseSingleton {
  // The singleton instance
  private static $instance;

  // The database connection
  private $connection;

  // Private constructor to prevent object instantiation from outside
  private function __construct() {
    $this->connection = new conection();
  }

  // The singleton method
  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new DatabaseSingleton();
    }
    return self::$instance;
  }

  // Get the database connection
  public function getConnection() {
    return $this->connection;
  }
}

  
?>

