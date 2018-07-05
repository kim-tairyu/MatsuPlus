<?php
require_once 'SuperDAO.class.php';

// User DAO
class LanguegeDAO extends SuperDAO {
  
  // コンストラクタ
  public function __construct() {
    parent::__construct();
  }
  
  // 言語情報を取得
  public function getLanguegesInfo() {
    try {
      $sql          = 'SELECT * FROM languege';
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
