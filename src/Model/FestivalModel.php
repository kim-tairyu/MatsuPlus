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
  
  // 祭り情報を取得
  public function getOneText($festival_id) {
    try {
      $sql    = 'SELECT description_en,history_en,festival_program_en FROM festival
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
  
  //----------------------------------------------------
  // 検索処理
  //----------------------------------------------------
  
  // おすすめ祭り情報を取得
  public function getRecommendFestivals() {
    try {
      $sql    = 'SELECT * FROM festival 
                LEFT JOIN review ON festival.festival_id = review.festival_id
                LEFT JOIN festival_image ON festival.festival_id = festival_image.festival_id 
                WHERE title_image = 1 
                GROUP BY festival_image.festival_id
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
      $sql = 'SELECT * FROM festival 
              LEFT JOIN festival_image ON festival.festival_id = festival_image.festival_id 
              WHERE festival_name_en LIKE '.$name.' AND title_image = 1
              GROUP BY festival_image.festival_id;';
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
      $sql = 'SELECT * FROM festival 
              LEFT JOIN festival_image ON festival.festival_id = festival_image.festival_id 
              WHERE location_en LIKE '.$location.' AND title_image = 1
              GROUP BY festival_image.festival_id;';
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
      $day = "'%{$start_date}%'";
      $sql = 'SELECT * FROM festival 
              LEFT JOIN festival_image ON festival.festival_id = festival_image.festival_id 
              WHERE start_date LIKE '.$day.' AND title_image = 1
              GROUP BY festival_image.festival_id;';
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':start_date',$start_date);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
  
  //　Get Festival ID
  public function getFestivalId() {
    try {
      $sql = 'SELECT festival_id FROM festival ORDER BY festival_id;';
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
}
