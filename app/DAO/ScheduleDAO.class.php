<?php
require_once 'SuperDAO.class.php';

// User DAO
class ScheduleDAO extends SuperDAO {
  
  // コンストラクタ
  public function __construct() {
    parent::__construct();
  }
  
  // ユーザ情報を取得（全件）
  public function getSchedules($user_id) {
    try {
      $sql  = 'SELECT * FROM schedule WHERE user_id = ?';
      $pdo  = parent::getConnection(); // DB接続
      $stmt = $pdo->prepare($sql);     // ステートメント
      $stmt->bindValue(1, $user_id);   // 値指定
      $stmt->execute();                // SQL文実行
      parent::closeDB();               // DB切断
    } catch(PDOException $e) {
      echo 'DB SELECT Error!'.$e->getMesseage;
      die();
    }
    return $stmt;
  }
}
