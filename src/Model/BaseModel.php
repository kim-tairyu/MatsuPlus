<?php
// Base Model Class
class BaseModel {
  
  protected $pdo;

  public function __construct() {
    $this->db_connect();
  }

  private function db_connect() {
    try {
      $this->pdo = new PDO(_DSN, _DB_USER, _DB_PASS, [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMessage());
    }
  }  
}
