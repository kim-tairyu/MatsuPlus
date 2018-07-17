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

}
