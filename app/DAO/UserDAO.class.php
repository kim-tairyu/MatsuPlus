<?php
require_once 'SuperDAO.class.php';

// User DAO
class UserDAO extends SuperDAO {
  
  // コンストラクタ
  public function __construct() {
    parent::__construct();
  }
  
  // ユーザ情報取得
  public function users() {
    try {
      $sql  = 'SELECT * FROM user';
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
  public function signUP($id, $pass, $name, $mail, $country_id) {
    try {
      $sql  = 'INSERT INTO user (
                user_id,
                password,
                user_name,
                mail_address,
                country_id,
                launguege_id,
                user_status
              ) VALUES (
                '.$id.',
                '.$pass.',
                '.$name.',
                '.$mail.',
                '.country_id.',
                '.launguege_id.',
                "exist"
              );';
      $pdo  = parent::getConnection(); // DB接続
      $stmt = $pdo->prepare($sql);     // ステートメント
      $stmt->execute();                // SQL文実行
      parent::closeDB();               // DB切断
    } catch(PDOException $e) {
      echo 'DB INSERT Error!'.$e->getMesseage;
      die();
    }
  }
}
