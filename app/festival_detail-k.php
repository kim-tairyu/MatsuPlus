<?php

//PDO
//接続
$pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

//祭り情報
$matsuriName = $pdo->prepare("select * from matsuri where festival_id = ?");

//レビュー
$review_info = $pdo->prepare("select * from review ");

//飛んでくる情報(仮)
$matsuriName->bindValue(1,1);

$matsuriName->execute();
$review_info->execute();

//祭情報
foreach($matsuriName as $loop){
    $festival_id = $loop['festival_id'].PHP_EOL;
    $name = $loop['festival_name'].PHP_EOL;
    $location = $loop['location'].PHP_EOL;
    $start_time = $loop['start_time'].PHP_EOL;
    $end_time = $loop['end_time'].PHP_EOL;
    $x = $loop['x'].PHP_EOL;
    $y = $loop['y'].PHP_EOL;
    $movie_url = $loop['movie_url'];
    //lat:40.822286,lng: 140.745205
}

//登録処理

//スケジュール仮データ
$days ="2018-06-018";
$schedule_id = 1;
//レビュー仮データ
$user = "bbb";
$star = 3;
if(isset($_POST['r_button']) == 'registration'){
    $registration = $pdo -> prepare("INSERT INTO schedule_detail (days, schedule_id,festival_id,start_time,end_time,location) VALUES (:days, :schedule_id,:festival_id,:start_time,:end_time,:location)");
    $registration->bindValue(':days', $days, PDO::PARAM_STR);
    $registration->bindValue(':schedule_id', $schedule_id, PDO::PARAM_INT);
    $registration->bindValue(':festival_id', $festival_id, PDO::PARAM_INT);
    $registration->bindValue(':start_time', $start_time, PDO::PARAM_STR);
    $registration->bindValue(':end_time', $end_time, PDO::PARAM_STR);
    $registration->bindValue(':location', $location, PDO::PARAM_STR);
    $registration->execute();
    
}else if(isset($_POST['review_button']) == 'review'){
    $review = $pdo -> prepare("INSERT INTO review (festival_id,user_id,review,star)VALUES(:festival_id,:user_id,:review,:star)");
    $review->bindValue(":festival_id",$festival_id,PDO::PARAM_INT);
    $review->bindValue(":user_id",$user,PDO::PARAM_STR);
    $review->bindValue(":review",$_POST['content'],PDO::PARAM_STR);
    $review->bindValue(":star",$star,PDO::PARAM_INT);
    $review->execute();
}else if(isset($_POST['f_button']) == 'favorite'){
    $user = "bbb";
    $favorite_fes = $pdo -> prepare("INSERT INTO favorite_fes(user_id,festival_id)VALUES(:user_id,:festival_id)");
    $favorite_fes->bindValue(":user_id",$user,PDO::PARAM_STR);
    $favorite_fes->bindValue(":festival_id",$festival_id,PDO::PARAM_INT);
    $favorite_fes->execute();
}

?>

<!doctype html>
<html lang="ja">
    <head>
        <link href="css/map.css" rel="stylesheet" type="text/css">
        <title></title>
        <meta charset="utf-8">
    </head>
    <body>
        <!-- 祭り情報 -->
        <h1><?php echo $name ?></h1>
        <p>開催地：<?php echo $location ?></p>
        <p>動画：<?php echo $movie_url ?></p>
        <!-- マップ表示 -->
        <div id="map"></div>

        <script>
            var x = <?php echo $x ?>;
            var y = <?php echo $y ?>;
            function initMap() {
                var pos = {lat:x, lng:y};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 8,
                    center: pos
                });
                var marker = new google.maps.Marker({
                    position: pos,
                    map: map
                });
            }
        </script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz9pvpNJjaDkINIYHdRqYASuGaiml-ewo&callback=initMap">
        </script>
        <!-- お気に入りに追加 -->
        <form method="post" action="festival_detail.php">
            <button type='submit' name='f_button' value='favorite'>お気に入りに登録</button>
        </form>
        <!-- スケジュールに追加 -->
        <form method="post" action="festival_detail.php">
            <button type='submit' name='r_button' value='registration'>スケジュールに登録</button>
        </form>
        <br>
        <!-- レビュー -->
        <form method="post" action="festival_detail.php">
            <textarea name="content" rows="4" cols="40">れびゅー</textarea><br>
            <button type='submit' name='review_button' value='review'>れびゅー</button>
        </form>
        <p><?php
            foreach($review_info as $loop){
                echo $review_star = $loop['star'].PHP_EOL;
                echo $review_user = $loop['user_id'].PHP_EOL;
                echo $review_content = $loop['review'].PHP_EOL;
                echo "<br>";
            } ?>
        </p>
    </body>
</html>