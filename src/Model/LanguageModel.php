<?php
// Language Model Class
class LanguageModel extends BaseModel {
  
  // 言語情報を取得
  public function getLanguages() {
    try {
      $sql    = 'SELECT * FROM language';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
}
