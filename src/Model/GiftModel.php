<?php
// Gift Model Class
class GiftModel extends BaseModel {
  
  // お土産情報の取得
  public function getGifts($festival_id) {
    try {
      $sql          = 'SELECT * FROM gift WHERE festival_id = ?';
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
