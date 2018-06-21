<?php
require_once 'SuperDAO.class.php';

// User DAO
class FestivalDAO extends SuperDAO {
  
  // コンストラクタ
  public function __construct() {
    parent::__construct();
  }
  
  // おすすめ祭り情報を取得
  public function getFavoriteFestival() {
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
  
  // 祭り情報を取得（一件）
  public function getOneFestival($festival_id) {
    try {
      $sql  = 'SELECT * FROM festival WHERE festival_id = ?;';
      $pdo  = parent::getConnection();   // DB接続
      $stmt = $pdo->prepare($sql);       // ステートメント
      $stmt->bindValue(1, $festival_id); // 値指定
      $stmt->execute();                  // SQL文実行
      parent::closeDB();                 // DB切断
    } catch(PDOException $e) {
      echo 'DB SELECT Error!'.$e->getMesseage;
      die();
    }
    return $stmt;
  }
}
