<?php
require_once 'SuperDAO.class.php';

// User DAO
class ArticleDAO extends SuperDAO {
  
  // コンストラクタ
  public function __construct() {
    parent::__construct();
  }
  
  // 記事情報を取得（全件）
  public function getArticles() {
    try {
      $sql    = 'SELECT * FROM article;';
      $pdo    = parent::getConnection(); // DB接続
      $stmt   = $pdo->prepare($sql);     // ステートメント
      $result = $stmt->execute();        // SQL文実行
      parent::closeDB();                 // DB切断
    } catch(PDOException $e) {
      $result = 'DB SELECT Error!'.$e->getMesseage;
      die();
    }
    return $stmt;
  }

  // 記事情報を取得（一件）
  public function getOneArticle($article_id) {
    try {
      $sql    = 'SELECT * FROM article WHERE article_id = ?;';
      $pdo    = parent::getConnection(); // DB接続
      $stmt   = $pdo->prepare($sql);     // ステートメント
      $stmt->bindValue(1, $article_id);  // 値指定
      $result = $stmt->execute();        // SQL文実行
      parent::closeDB();                 // DB切断
    } catch(PDOException $e) {
      $result = 'DB SELECT Error!'.$e->getMesseage;
      die();
    }
    return $result;
  }
}
