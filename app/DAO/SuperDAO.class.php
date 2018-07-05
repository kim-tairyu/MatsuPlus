<?php
// DB Connection
class SuperDAO {
  // DBプロパティ
  private $dsn;    // Data Source Name
  private $DBUser; // DB USER
  private $DBPass; // DB PASSWORD
  private $stmt;   // Statment
  private $result; // Statment Result
  
  // コンストラクタ
  public function __construct() {
    $this->dsn    = 'mysql:host=localhost; dbname=matsuri; charset=utf8;';
    $this->DBUser = 'root';
    $this->DBPass = '';
    $this->stmt   = '';
    $this->result = '';
  }
  
  // DB接続関数
  public function getConnection() {
    try {
      $pdo = new PDO(
        $this->dsn,
        $this->DBUser,
        $this->DBPass,
        [                                            // オプション
          PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, // 例外を投げる
          //PDO::ATTR_EMULATE_PREPARES => false,       // 静的プレースホルダ
        ]
      );
    } catch(PDOException $e) {
      $this->result = 'DB Connection Error!'.$e->getMesseage;
      die();
    }
    return $pdo;
  }
  
  // DB切断関数
  public function closeDB($stmt, $pdo) {
    $stmt = null;
    $pdo  = null;
  }
}
