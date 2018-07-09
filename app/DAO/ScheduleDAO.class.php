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
      $sql          = 'SELECT * FROM schedule WHERE user_id = ?';
      $pdo          = parent::getConnection(); // DB接続
      $this->stmt   = $pdo->prepare($sql);     // ステートメント
      $this->stmt->bindValue(1, $user_id);     // 値指定
      $this->stmt->execute();                  // SQL文実行
      $this->result = $this->stmt;             // 結果を代入
      parent::closeDB($this->stmt, $pdo);      // DB切断
    } catch(PDOException $e) {
      $this->result = 'DB SELECT Error!'.$e->getMesseage;
      die();
    }
    return $this->result;
  }
    
  //スケジュールの追加
  public function addSchedule($user_id,$event,$place,$free){
        try {
        $sql = 'INSERT INTO schedule (user_id,schedule_name,location,outline) VALUES (?,?,?,?)';
        $pdo          = parent::getConnection(); // DB接続
        $this->stmt   = $pdo->prepare($sql);     // ステートメント
        $this ->stmt -> bindValue(1, $user_id);
        $this ->stmt -> bindValue(2, $event);
        $this ->stmt -> bindValue(3, $place);
        $this ->stmt -> bindValue(4, $free);
        $this->stmt->execute();                  // SQL文実行
        parent::closeDB($this->stmt, $pdo);      // DB切断

    } catch(PDOException $e) {
      $this->result = 'DB SELECT Error!'.$e->getMesseage;
      die();
    }
    return $this->result;
  }
}
