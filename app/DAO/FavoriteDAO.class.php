<?php
require_once 'SuperDAO.class.php';

// Favorite DAO
class FavoriteDAO extends SuperDAO {
  
  // コンストラクタ
  public function __construct() {
    parent::__construct();
  }
    
  public function putFavoriteFestival($user_id,$fes_id){
        try {
        $sql = 'INSERT INTO favorite_fes (user_id,festival_id) VALUES (?,?)';
        $pdo          = parent::getConnection(); // DB接続
        $this->stmt   = $pdo->prepare($sql);     // ステートメント
        $this ->stmt -> bindValue(1, $user_id);
        $this ->stmt -> bindValue(2, $fes_id);
        $this->stmt->execute();                  // SQL文実行
        parent::closeDB($this->stmt, $pdo);      // DB切断

    } catch(PDOException $e) {
      $this->result = 'DB SELECT Error!'.$e->getMesseage;
      die();
    }
    return $this->result;
  }
  
  public function putFavoriteArticle($user_id,$arc_id){
      try {
        $sql = 'INSERT INTO favorite_arc (user_id,article_id) VALUES (?,?)';
        $pdo          = parent::getConnection(); // DB接続
        $this->stmt   = $pdo->prepare($sql);     // ステートメント
        $this ->stmt -> bindValue(1, $user_id);
        $this ->stmt -> bindValue(2, $arc_id);
        $this->stmt->execute();                  // SQL文実行
        parent::closeDB($this->stmt, $pdo);      // DB切断

    } catch(PDOException $e) {
      $this->result = 'DB SELECT Error!'.$e->getMesseage;
      die();
    }
    return $this->result;
  }
}