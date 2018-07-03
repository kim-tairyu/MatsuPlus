<?php
require_once 'SuperDAO.class.php';

// User DAO
class CountryDAO extends SuperDAO {
  
  // コンストラクタ
  public function __construct() {
    parent::__construct();
  }
  
  // 国情報を取得
  public function getCountrysInfo() {
    try {
      $sql          = 'SELECT * FROM country';
      $pdo          = parent::getConnection(); // DB接続
      $this->stmt   = $pdo->prepare($sql);     // ステートメント
      $this->stmt->execute();                  // SQL文実行
      $this->result = $this->stmt;             // 結果を代入
      parent::closeDB($this->stmt, $pdo);      // DB切断
    } catch(PDOException $e) {
      $this->result = 'DB SELECT Error!'.$e->getMesseage;
      die();
    }
    return $this->result;
  }
}
