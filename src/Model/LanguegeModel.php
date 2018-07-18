<?php
// Languege Model Class
class LanguegeModel extends BaseModel {
  
  // 言語情報を取得
  public function getLangueges() {
    try {
      $sql    = 'SELECT * FROM languege';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
}
