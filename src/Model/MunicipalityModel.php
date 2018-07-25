<?php
// Municipality Model Class
class MunicipalityModel extends BaseModel {
  
  // 自治体情報を取得（一覧）
  public function getMunis() {
    try {
      $sql    = 'SELECT * FROM municipality ORDER BY municipality.muni_id;';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
  
  // アカウント登録
  public function addMuniAccount($muni_id, $muni_pass, $muni_name, $festival_id, $muni_mail, $muni_tel) {
    try {
      $sql  = 'INSERT INTO municipality (
        muni_id, muni_pass, muni_name, festival_id, muni_mail, muni_tel
      ) VALUES (?, ?, ?, ?, ?, ?);';
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(1, $muni_id);
      $stmt->bindValue(2, $muni_pass);
      $stmt->bindValue(3, $muni_name);
      $stmt->bindValue(4, $festival_id);
      $stmt->bindValue(5, $muni_mail);
      $stmt->bindValue(6, $muni_tel);
      $stmt->execute();
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
  }
  
  // 自治体アカウント削除
  public function deleteMuniAccount($muni_id) {
    try {
      $sql    = 'DELETE FROM municipality WHERE muni_id = ?;';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->bindValue(1, $muni_id);
      $stmt->execute();
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
  }
  
}