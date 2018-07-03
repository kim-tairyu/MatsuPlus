<?php
require_once 'SuperDAO.class.php';

// User DAO
class ReviewDAO extends SuperDAO {
  
  // コンストラクタ
  public function __construct() {
    parent::__construct();
  }
  
  // 祭りのレビュー情報を取得
  public function getReviewInfo() {
    try {
      $sql          = 'SELECT user.user_id, user.user_name, review.festival_id, review.user_id, review.review, review.star FROM user LEFT JOIN review ON user.user_id = review.user_id;';
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
