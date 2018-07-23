<?php
// Tag Model Class
class TagModel extends BaseModel {
  
  // 祭りタグ取得
  public function getTags($festival_id) {
    try {
      $sql    = 'SELECT * FROM festival_tag WHERE festival_id =?';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->bindValue(1, $festival_id);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
  
  public function getSpringTags() {
    try {
      $sql    = 'SELECT * FROM festival LEFT JOIN festival_tag ON festival.festival_id = festival_tag.festival_id WHERE festival_tag.type = "region" AND tag_name_en = "spring";';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
  
  public function getSummerTags() {
    try {
      $sql    = 'SELECT * FROM festival LEFT JOIN festival_tag ON festival.festival_id = festival_tag.festival_id WHERE festival_tag.type = "region" AND tag_name_en = "summer";';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
  
  public function getAutumnTags() {
    try {
      $sql    = 'SELECT * FROM festival LEFT JOIN festival_tag ON festival.festival_id = festival_tag.festival_id WHERE festival_tag.type = "region" AND tag_name_en = "autumn";';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }

  public function getWinterTags() {
    try {
      $sql    = 'SELECT * FROM festival LEFT JOIN festival_tag ON festival.festival_id = festival_tag.festival_id WHERE festival_tag.type = "region" AND tag_name_en = "winter";';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
}
