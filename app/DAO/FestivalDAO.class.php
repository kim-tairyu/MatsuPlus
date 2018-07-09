<?php
require_once 'SuperDAO.class.php';

// User DAO
class FestivalDAO extends SuperDAO {
  
  // コンストラクタ
  public function __construct() {
    parent::__construct();
  }
  
  // おすすめ祭り情報を取得
  public function getRecommendedFestivals() {
    try {
      $sql          = 'SELECT * FROM festival ORDER BY review_score DESC;';
      $pdo          = parent::getConnection(); // DB接続
      $this->stmt   = $pdo->prepare($sql);     // ステートメント
      $this->stmt->execute();                  // SQL文実行
      $this->result = $this->stmt->fetchAll();             // 結果を代入
      parent::closeDB($this->stmt, $pdo);      // DB切断
    } catch(PDOException $e) {
      $this->result = 'DB SELECT Error!'.$e->getMesseage;
      die();
    }
    return $this->result;
  }
  
  // 祭り情報を取得（一件）
  public function getOneFestival($festival_id) {
    try {
      $sql          = 'SELECT * FROM festival WHERE festival_id = ?;';
      $pdo          = parent::getConnection(); // DB接続
      $this->stmt   = $pdo->prepare($sql);     // ステートメント
      $this->stmt->bindValue(1, $festival_id); // 値指定
      $this->stmt->execute();                  // SQL文実行
      $this->result = $this->stmt;             // 結果を代入
      parent::closeDB($this->stmt, $pdo);      // DB切断
    } catch(PDOException $e) {
      $this->result = 'DB SELECT Error!'.$e->getMesseage;
      die();
    }
    return $this->result;
  }
  
  // 祭り画像を取得
  public function getImageFestival($festival_id) {
    try {
      $sql          = 'SELECT * FROM festival_image WHERE festival_id = ?;';
      $pdo          = parent::getConnection(); // DB接続
      $this->stmt         = $pdo->prepare($sql);     // ステートメント
      $this->stmt->bindValue(1, $festival_id); // 値指定
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
