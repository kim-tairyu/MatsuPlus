<?php
require_once 'SuperDAO.class.php';

// User DAO
class UserDAO extends SuperDAO {
  
  // コンストラクタ
  public function __construct() {
    parent::__construct();
  }
  
  // DBユーザ情報取得
  public function signIn() {
    try {
      $sql  = 'SELECT * FROM user';    // SQL文
      $pdo  = parent::getConnection(); // DB接続
      $stmt = $pdo->prepare($sql);     // ステートメント
      $stmt->execute();                // SQL文実行
      parent::closeDB();               // DB切断
    } catch(PDOException $e) {
      echo 'DB SELECT Error!'.$e->getMesseage;
      die();
    }
    return $stmt;
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
      $pdo  = parent::getConnection(); // DB接続
      $stmt = $pdo->prepare($sql);     // ステートメント
      $stmt->execute();                // SQL文実行
      parent::closeDB();               // DB切断
    } catch(PDOException $e) {
      echo 'DB SELECT Error!'.$e->getMesseage;
      die();
    }
  }
}
