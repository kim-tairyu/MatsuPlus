<?php
require_once 'SuperDAO.class.php';

// User DAO
class FestivalDAO extends SuperDAO {
  
  // コンストラクタ
  public function __construct() {
    parent::__construct();
  }
  
  // 祭り情報取得
  public function getFestival() {
    try {
      $sql  = 'SELECT * FROM festival ORDER BY review_score DESC;';
      $pdo  = parent::getConnection();  // DB接続
      $stmt = $pdo->prepare($sql);      // ステートメント
      $stmt->execute();                 // SQL文実行
      parent::closeDB();                // DB切断
    } catch(PDOException $e) {
      echo 'DB SELECT Error!'.$e->getMesseage;
      die();
    }
    return $stmt;
  }
}
