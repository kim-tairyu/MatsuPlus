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
      $sql          = 'SELECT * FROM article;';
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

  // 記事情報を取得（一件）
  public function getOneArticle($article_id) {
    try {
      $sql          = 'SELECT * FROM article WHERE article_id = ?;';
      $pdo          = parent::getConnection(); // DB接続
      $this->stmt   = $pdo->prepare($sql);     // ステートメント
      $this->stmt->bindValue(1, $article_id);  // 値指定
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
