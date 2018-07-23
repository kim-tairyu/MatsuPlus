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
      while($array = $select->fetch(PDO::FETCH_ASSOC)){
        $fesData[]=array(
          'id'=>$array['schedule_id'],//カレンダー内部で利用するID
          'title'=>$array['schedule_name'],//カレンダーに表示されるタイトル
          'start'=>$array['start_time'],//開始日
          'end'=>$array['end_time'],//終了日
          'allDay'=>'true',//終日
          'url'=>'festival.php?festival_id='.$array['festival_id']//祭詳細ページに飛ぶリンク
        );
      }
      header('Content-type: application/json');
      echo json_encode($fesData);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
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
