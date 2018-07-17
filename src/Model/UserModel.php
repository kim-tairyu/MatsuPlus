<?php
// User Model Class
class UserModel extends BaseModel {
  
  // ユーザ情報を取得（全件）
  public function login() {
    try {
      $sql    = 'SELECT * FROM user';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
  
  // 新規登録
  public function signUp($user_id, $password, $user_name, $mail_address, $country_id, $launguege_id) {
    try {
      $sql  = 'INSERT INTO user (
        user_id, password, user_name, mail_address, country_id, languege_id, user_status, user_icon, authority
      ) VALUES (?, ?, ?, ?, ?)';
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(1, $user_id);
      $stmt->bindValue(2, $password);
      $stmt->bindValue(3, $user_name);
      $stmt->bindValue(4, $country_id);
      $stmt->bindValue(5, $launguege_id);
      $stmt->execute();
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
  }
  
  // ユーザ情報を取得（一件）
  public function getUserInfo($mail_address) {
    try {
      $sql    = 'SELECT * FROM user WHERE mail_address = ?';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->bindValue(1, $mail_address);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
}
