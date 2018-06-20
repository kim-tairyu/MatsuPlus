<?php
require_once 'SuperDAO.class.php';

// User DAO
class UserDAO extends SuperDAO {
  
  // コンストラクタ
  public function __construct() {
    parent::__construct();
  }
  
  // ユーザ情報取得
  public function signIn() {
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
}
