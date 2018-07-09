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
      $sql          = 'SELECT * FROM article LEFT JOIN article_image ON article.article_id = article_image.article_id WHERE article.article_id = ?;';
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
    
  
  public function getTagArticle($article_id) {
    try {
      $sql          = 'SELECT * FROM `article_tag` WHERE `article_id`=? AND `type`="season";';
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
    
  //関連記事
  public function getRelationTag($tag) {
    try {
      $sql          = 'SELECT article.article_id, article.article_title, article.post_date, article_tag.article_id, article_tag.type, article_tag.tag_name_en ,article_image.image
      FROM article
      LEFT JOIN article_tag ON article.article_id = article_tag.article_id
      LEFT JOIN article_image ON article_tag.article_id = article_image.article_id
      WHERE article_tag.tag_name_en = ?;';
      $pdo          = parent::getConnection(); // DB接続
      $this->stmt   = $pdo->prepare($sql);     // ステートメント
      $this->stmt->bindValue(1, $tag);  // 値指定
      $this->stmt->execute();                  // SQL文実行
      $this->result = $this->stmt;             // 結果を代入
      parent::closeDB($this->stmt, $pdo);      // DB切断
    } catch(PDOException $e) {
      $this->result = 'DB SELECT Error!'.$e->getMesseage;
      die();
    }
    return $this->result;
  }
    
  //画像取得
  public function getImageArticle($article_id){
      try {
      $sql          = 'SELECT * FROM `article_image` WHERE `article_id`=?;';
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
