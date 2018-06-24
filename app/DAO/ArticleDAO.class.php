<?php
require_once 'SuperDAO.class.php';

// User DAO
class ArticleDAO extends SuperDAO {
  
  // コンストラクタ
  public function __construct() {
    parent::__construct();
  }
  
  // 記事情報を取得
  public function getArticleInfo($article_id) {
    try {
      $sql  = 'SELECT * FROM article WHERE article_id = ?;';
      $pdo  = parent::getConnection();  // DB接続
      $stmt = $pdo->prepare($sql);      // ステートメント
      $stmt->bindValue(1, $article_id); // 値指定
      $stmt->execute();                 // SQL文実行
      parent::closeDB();                // DB切断
    } catch(PDOException $e) {
      echo 'DB SELECT Error!'.$e->getMesseage;
      die();
    }
    return $stmt;
  }
}
