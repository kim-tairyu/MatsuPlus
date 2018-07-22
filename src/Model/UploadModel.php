<?php
//Upload Model Class
class UploadModel extends BaseModel {
    
    //祭り情報の追加
    public function putMatsuri($festival_name, $location, $start_date, $end_date, $start_time, $end_time, $url, $description, $movie, $x, $y, $tel, $fax, $email, $facebook, $twitter, $timetable, $sponsor, $history){
        try{
            $sql  = 'INSERT INTO festival (festival_name_en, location_en, start_date, end_date, start_time, end_time, festival_url, description_en, movie_url, x_coordinate, y_coordinate, tel, fax, email, facebook_link, twitter_link, sponsor, history_en, festival_program_en) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
            $stmt = $this->pdo->prepare($sql);
            $stmt-> bindValue(1,$festival_name);
            $stmt-> bindValue(2,$location);
            $stmt-> bindValue(3,$start_date);
            $stmt-> bindValue(4,$end_date);
            $stmt-> bindValue(5,$start_time);
            $stmt-> bindValue(6,$end_time);
            $stmt-> bindValue(7,$url);
            $stmt-> bindValue(8,$description);
            $stmt-> bindValue(9,$movie);
            $stmt-> bindValue(10,$x);
            $stmt-> bindValue(11,$y);
            $stmt-> bindValue(12,$tel);
            $stmt-> bindValue(13,$fax);
            $stmt-> bindValue(14,$email);
            $stmt-> bindValue(15,$facebook);
            $stmt-> bindValue(16,$twitter);
            $stmt-> bindValue(17,$sponsor);
            $stmt-> bindValue(18,$history);
            $stmt-> bindValue(19,$timetable);
            $stmt->execute();
        } catch(PDOException $e) {
            die('DB ERROR:'.$e->getMesseage);
        }
        $id = $this->pdo->lastInsertId();
        return $id;
    }
    
    //祭り画像
    public function putFestival_img($festival_id,$top_img){
        try {
            $sql    = 'INSERT INTO festival_image(festival_id,image,title_image) VALUES (?,?,?)';
            $stmt   = $this->pdo->prepare($sql);
            $stmt-> bindValue(1,$festival_id);
            $stmt-> bindValue(2,$top_img);
            $stmt-> bindValue(3,1);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            die('DB ERROR:'.$e->getMesseage);
        }
        return $result;
    }
    
    //タグ
    public function putFestival_tag($festival_id,$type,$tag){
        try {
            $sql    = 'INSERT INTO festival_tag(festival_id,type,tag_name_en) VALUES (?,?,?)';
            $stmt   = $this->pdo->prepare($sql);
            $stmt-> bindValue(1,$festival_id);
            $stmt-> bindValue(2,$type);
            $stmt-> bindValue(3,$tag);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            die('DB ERROR:'.$e->getMesseage);
        }
        return $result;
    }
    
    //お土産
    public function putFestival_gift($festival_id,$gift_name,$gift_image,$price){
        try {
            $sql    = 'INSERT INTO gift(festival_id,gift_name_en,image,price) VALUES (?,?,?,?)';
            $stmt   = $this->pdo->prepare($sql);
            $stmt-> bindValue(1,$festival_id);
            $stmt-> bindValue(2,$gift_name);
            $stmt-> bindValue(3,$gift_image);
            $stmt-> bindValue(4,$price);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            die('DB ERROR:'.$e->getMesseage);
        }
        return $result;
    }
    
    // , , 
    
}