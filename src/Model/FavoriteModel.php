<?php
// Favorite Model Class
class FavoriteModel extends BaseModel {
    
  // お気に入り祭り情報を取得
  public function putFavoriteFestival($user_id, $fes_id){
    try {
      $sql  = 'INSERT INTO favorite_fes (user_id,festival_id) VALUES (?,?)';
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(1, $user_id);
      $stmt->bindValue(1, $fes_id);
      $stmt->execute();
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
  }
  
  // お気に入り記事情報を取得
  public function putFavoriteArticle($user_id, $arc_id){
    try {
      $sql = 'INSERT INTO favorite_arc (user_id,article_id) VALUES (?,?)';
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(1, $user_id);
      $stmt->bindValue(1, $arc_id);
      $stmt->execute();
    } catch(PDOException $e) {
      die('DB ERROR:'.$e->getMesseage);
    }
  }
}
