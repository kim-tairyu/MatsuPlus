<?php
try {
    $pdo = new PDO(_DSN, _DB_USER, _DB_PASS, [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
    $select = $pdo->prepare("SELECT * FROM schedule");
    $select->execute();
    $fesData=array();
    while($array = $select->fetch(PDO::FETCH_ASSOC)){
//      $start = new DateTime($array['start_time']);
//      $end = new DateTime($array['end_time']);
//      $start->format('Y-m-d');
//      $end->format('Y-m-d');
        $fesData[]=array(
            'id'=>$array['schedule_id'],//カレンダー内部で利用するID
            'title'=>$array['schedule_name'],//カレンダーに表示されるタイトル
            'start'=>$array['start_time'],//開始日
            'end'=>$array['end_time'],//終了日
            //'allDay'=>'true',//終日
            'url'=>'festival.php?festival_id='.$array['festival_id']//祭詳細ページに飛ぶリンク
        );
    }
    header('Content-type: application/json');
    echo json_encode($fesData);

}catch (PDOException $e){
    header('Content-Type: text/plain; charset=UTF-8', true, 500);
    exit($e->getMessage());
}