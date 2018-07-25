<?php
// Festival Model Class
class FestivalModel extends BaseModel {

  // おすすめ祭り情報を取得（週）
  public function getWeekRecommendFestivals() {
    try {
      $sql    = 'SELECT * FROM festival 
                LEFT JOIN review ON festival.festival_id = review.festival_id
                LEFT JOIN festival_image ON festival.festival_id = festival_image.festival_id 
                WHERE title_image = 1 AND WEEKOFYEAR(festival.start_date) = WEEKOFYEAR(NOW()) 
                GROUP BY review.festival_id
                ORDER BY review.star DESC;';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
  
  // おすすめ祭り情報を取得（週）
  public function getMonthRecommendFestivals() {
    try {
      $sql    = 'SELECT * FROM festival 
                LEFT JOIN review ON festival.festival_id = review.festival_id 
                LEFT JOIN festival_image ON festival.festival_id = festival_image.festival_id 
                WHERE title_image = 1 AND MONTH(festival.start_date) = MONTH(NOW()) 
                GROUP BY review.festival_id
                ORDER BY review.star DESC;';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
  
  // 祭り情報を取得（全件）
  public function getFestivals() {
    try {
      $sql    = 'SELECT * FROM festival;';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
  
  // 祭り情報を取得
  public function getOneFestival($festival_id) {
    try {
      $sql    = 'SELECT * FROM festival
                LEFT JOIN festival_image ON festival.festival_id = festival_image.festival_id
                WHERE festival.festival_id = ? && festival_image.title_image = 1 ;';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->bindValue(1, $festival_id);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
  
  // 祭り画像を取得
  public function getFestivalImages($festival_id) {
    try {
      $sql    = 'SELECT * FROM festival_image WHERE festival_id = ? && title_image != 1;';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->bindValue(1, $festival_id);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
}
