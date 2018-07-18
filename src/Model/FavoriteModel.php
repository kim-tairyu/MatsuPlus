<?php
// Favorite Model Class
class FavoriteModel extends BaseModel {

  // お気に入り祭り・記事を取得
  public function getFavorites($user_id, $page){
    try{
      if($page == 0){
        $sql = "SELECT * FROM favorite_fes fav 
                JOIN festival fes ON fav.festival_id = fes.festival_id 
                JOIN festival_image img ON fes.festival_id = img.festival_id 
                WHERE user_id = ? && title_image = 1;";
      }
      if($page == 1){
        $sql = 'SELECT * FROM favorite_arc 
                JOIN article ON favorite_arc.article_id = article.article_id 
                JOIN article_image ON favorite_arc.article_id = article_image.article_id 
                WHERE user_id = ? && title_image = 1;';
      }
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(1, $user_id);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e){
      die('DB ERROR:'.$e->getMesseage);
    }
    return $result;
  }
  
  // お祭りのお気に入り
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
  
  // 記事のお気に入り
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
