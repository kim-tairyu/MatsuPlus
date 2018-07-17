<?php
// Article Model Class
class ArticleModel extends BaseModel {
  
  // 記事情報を取得（全件）
  public function getArticles() {
    try {
      $sql    = 'SELECT * FROM article;';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }

  // 記事情報を取得（一件）
  public function getOneArticle($article_id) {
    try {
      $sql    = 'SELECT * FROM article LEFT JOIN article_image ON article.article_id = article_image.article_id WHERE article.article_id = ?;';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->bindValue(1, $article_id);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
    
  // タグ記事
  public function getTagArticle($article_id) {
    try {
      $sql    = 'SELECT * FROM article_tag WHERE article_id=1 AND type="season";';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->bindValue(1, $article_id);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
    
  // 関連記事
  public function getRelationTag($tag) {
    try {
      $sql    = 'SELECT article.article_id, article.article_title, article.post_date, article_tag.article_id, article_tag.type, article_tag.tag_name_en ,article_image.image
      FROM article
      LEFT JOIN article_tag ON article.article_id = article_tag.article_id
      LEFT JOIN article_image ON article_tag.article_id = article_image.article_id
      WHERE article_tag.tag_name_en = ?;';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->bindValue(1, $tag);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
    
  // 画像取得
  public function getImageArticle($article_id){
      try {
      $sql    = 'SELECT * FROM `article_image` WHERE `article_id`=?;';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->bindValue(1, $article_id);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
}
