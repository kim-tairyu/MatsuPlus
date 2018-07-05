<?php
require_once 'SuperDAO.class.php';

// User DAO
class ReviewDAO extends SuperDAO {
  
  // コンストラクタ
  public function __construct() {
    parent::__construct();
  }
  
  // 祭りのレビュー情報を取得
  public function getReviewInfo($festival_id) {
    try {
      $sql  = 'SELECT user.user_id, user.user_name, review.festival_id, review.user_id, review.review, review.star FROM user LEFT JOIN review ON user.user_id = review.user_id WHERE review.festival_id =? ;';
      $pdo  = parent::getConnection();  // DB接続
      $stmt = $pdo->prepare($sql);      // ステートメント
      $stmt->bindValue(1,$festival_id);
      $stmt->execute();                 // SQL文実行
      parent::closeDB();                // DB切断
    } catch(PDOException $e) {
      echo 'DB SELECT Error!'.$e->getMesseage;
      die();
    }
    return $stmt;
  }
}
