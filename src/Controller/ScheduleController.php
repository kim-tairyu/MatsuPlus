<?php
try {
    $pdo = new PDO("mysql:dbname=matsuri;host=matsuridb.clyrbviaqft9.ap-northeast-1.rds.amazonaws.com;charset=utf8mb4", "JEPUser", "Matsuri_DB", [PDO::ERRMODE_EXCEPTION]);
    $select = $pdo->prepare("SELECT * FROM schedule");
    $select->execute();
    $fesData=array();
    while($array = $select->fetch(PDO::FETCH_ASSOC)){
        $fesData[]=array(
            'id'=>$array['schedule_id'],//カレンダー内部で利用するID
            'title'=>$array['schedule_name'],//カレンダーに表示されるタイトル
            'start'=>$array['start_time'],//開始日
            'end'=>$array['end_time'],//終了日
            'allDay'=>'true',//終日
        );
    }
    header('Content-type: application/json');
    echo json_encode($fesData);

}catch (PDOException $e){
    header('Content-Type: text/plain; charset=UTF-8', true, 500);
    exit($e->getMessage());
}