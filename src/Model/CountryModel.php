<?php
// Country Model Class
class CountryModel extends BaseModel {
  
  // 国情報を取得
  public function getCountrysInfo() {
    try {
      $sql    = 'SELECT * FROM country';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
}
