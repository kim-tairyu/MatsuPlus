<?php
require_once 'SuperDAO.class.php';

// User DAO
class UserDAO extends SuperDAO {
  
  // コンストラクタ
  public function __construct() {
    parent::__construct();
  }
  
  // ユーザ情報を取得（全件）
  public function signIn() {
    try {
      $sql          = 'SELECT * FROM user';
      $pdo          = parent::getConnection(); // DB接続
      $this->stmt   = $pdo->prepare($sql);     // ステートメント
      $this->stmt->execute();                  // SQL文実行
      $this->result = $this->stmt;             // 結果を代入
      parent::closeDB($this->stmt, $pdo);      // DB切断
    } catch(PDOException $e) {
      $this->result = 'DB SELECT Error!'.$e->getMesseage;
      die();
    }
    return $this->result;
  }
  
  // 新規登録
  public function signUp($user_id, $password, $user_name, $mail_address, $country_id, $launguege_id) {
    try {
      $sql  = 'INSERT INTO user (
	      user_id,
        password,
        user_name,
        mail_address,
        country_id,
        launguege_id
      ) VALUES (
        "'.$user_id.'",
        "'.$password.'",
        "'.$user_name.'",
        "'.$mail_address.'",
        '.$country_id.',
        '.$launguege_id.'
      );';
      $pdo          = parent::getConnection(); // DB接続
      $this->stmt   = $pdo->prepare($sql);     // ステートメント
      $this->stmt->execute();                  // SQL文実行
      $this->result = "DB INSERT SUCCESS!";    // 結果を代入
      parent::closeDB($this->stmt, $pdo);      // DB切断
    } catch(PDOException $e) {
      $this->result = 'DB INSERT Error!'.$e->getMesseage;
      die();
    }
    return $this->result;
  }
}
