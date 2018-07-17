<?php
// Review Model Class
class ReviewModel extends BaseModel {
  
  // 祭りのレビュー情報を取得
  public function getReviewInfo($festival_id) {
    try {
      $sql    = 'SELECT user.user_id, user.user_name, review.festival_id, review.user_id, review.review, review.star FROM user LEFT JOIN review ON user.user_id = review.user_id WHERE review.festival_id =?;';
      $stmt   = $this->pdo->prepare($sql);
      $stmt->bindValue(1, $festival_id);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
    
  public function putReview($fes_id, $user_id, $kanso, $star){
    try {
      $sql  = 'INSERT INTO review (festival_id,user_id,review,star) VALUES (?,?,?,?)';
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(1, $fes_id);
      $stmt->bindValue(2, $user_id);
      $stmt->bindValue(3, $kanso);
      $stmt->bindValue(4, $star);
      $stmt->execute();
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
  }
}
