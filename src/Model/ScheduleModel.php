<?php
// Schedule Model Class
class ScheduleModel extends BaseModel {
  
  // ユーザ情報を取得（全件）
  public function getSchedules($user_id) {
    try {
      $sql    = 'SELECT * FROM schedule WHERE user_id = ?';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->bindValue(1, $user_id);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
    
  //スケジュールの追加
  public function addSchedule($user_id, $event, $place, $free){
    try {
      $sql  = 'INSERT INTO schedule (user_id,schedule_name,location,outline) VALUES (?,?,?,?)';
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(1, $user_id);
      $stmt->bindValue(2, $event);
      $stmt->bindValue(3, $place);
      $stmt->bindValue(4, $free);
      $stmt->execute();
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
}
