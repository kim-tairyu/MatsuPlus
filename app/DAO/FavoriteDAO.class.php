<?php require_once 'SuperDAO.class.php';

//Favorite DAO
class FavoriteDAO extends SuperDAO{

  //コンストラクタ
  public function __construct(){
    parent::__construct();
  }

  //各ユーザのお気に入り祭・記事を取得
  public function getFavorites($user_id,$page){
    try{
      if($page == 0){
          $sql      = "SELECT user_id,fav.festival_id,festival_name_jp,start_date,title_image from favorite_fes fav join festival fes on fav.festival_id = fes.festival_id join festival_image img on fes.festival_id = img.festival_id where user_id = ? && title_image IS NOT NULL;";
      }
      if($page == 1){
          $sql      = 'SELECT user_id,favorite_arc.article_id,article.article_title,post_date,title_image from favorite_arc join article on favorite_arc.article_id = article.article_id join article_image on favorite_arc.article_id = article_image.article_id where user_id = ? && title_image IS NOT NULL;';
      }
      $pdo          = parent::getConnection();//DB接続
      $this->stmt   = $pdo->prepare($sql);    //ステートメント
      $this->stmt->bindValue(1, $user_id); //値指定
      $this->stmt->execute();                 //sql文実行
      $this->result = $this->stmt->fetchAll();//結果を代入
      parent::closeDB($this->stmt, $pdo);     //DB切断
    } catch(PDOException $e){
      $this->result = 'DB SELECT Error!'.$e->getMessage;
      die();
    }
    return $this->result;
  }
}
