<?php
// Search Model Class
class SearchModel extends BaseModel {

  // おすすめ祭り情報を取得
  public function getRecommendFestivals() {
    try {
      $sql    = 'SELECT * FROM festival 
                LEFT JOIN review ON festival.festival_id = review.festival_id
                LEFT JOIN festival_image ON festival.festival_id = festival_image.festival_id 
                WHERE title_image = 1 
                ORDER BY review.star DESC;';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
    
  // 名前検索
  public function getNameSearch($name) {
    try {
      $name = $_POST['festival_name'];
      $name = " '%{$name}%' ";
      $sql = 'SELECT * FROM festival WHERE festival_name_en LIKE '.$name.';';
//        echo $sql;
//        exit;
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':name',$name);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
    
  //　開催地検索
  public function getLocationSearch($location) {
    try {
      $location = $_POST['location'];
      $location = " '%{$location}%' ";
      $sql = 'SELECT * FROM festival WHERE location_en LIKE '.$location.';';
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':location',$location);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
    
  //　開催日検索
  public function getStartDateSearch($start_date) {
    try {
      $start_date = $_POST['start_date'];
      $day = " '%{$start_date}%' ";
      $sql = 'SELECT * FROM festival WHERE start_date LIKE '.$start_date.';';
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':start_date',$start_date);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
    
  // 祭り画像を取得
  public function getFestivalImages($festival_id) {
    try {
      $sql = 'SELECT * FROM festival_image WHERE festival_id = ?;';
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(1, $festival_id);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  } 
}