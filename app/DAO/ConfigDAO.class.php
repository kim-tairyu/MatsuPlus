<?php require_once 'SuperDAO.class.php';

//ConfigDAO
class ConfigDAO extends SuperDAO{

  //コンストラクタ
  public function __construst(){
    parent::__construst();
  }

  //ユーザ情報取得
  public function getUserStatus($user_id){
    try{
      $sql          = 'SELECT user_name,password,mail_address,user.country_id,country_name from user join country on user.country_id = country.country_id where user_id = ?;';
      $pdo          = parent::getConnection();//DB接続
      $this->stmt   = $pdo->prepare($sql);    //ステートメント
      $this->stmt->bindValue(1, $user_id);     //値指定
      $this->stmt->execute();                  //sql文実行
      $this->result = $this->stmt->fetchAll();
      parent::closeDB($this->stmt, $pdo);     //DB切断
    } catch(PDOException $e){
      $this->result = 'DB SELECT Error!'.$e->getMessage;
      die();
    }
    return $this->result;
  }
  //ユーザ名変更
  public function updateUserStatus($user_id,$calm,$value){
    try{
      $sql          = "UPDATE user SET ".$calm." = ? WHERE user_id = ?;";
      $pdo          = parent::getConnection();//DB接続
      $this->stmt   = $pdo->prepare($sql);    //ステートメント
      $this->stmt->bindValue(1, $value);
      $this->stmt->bindValue(2, $user_id);
      $this->stmt->execute();                  //sql文実行
      $this->result = $this->stmt;
      parent::closeDB($this->stmt, $pdo);     //DB切断
    } catch(PDOException $e){
      $this->result = 'DB SELECT Error!'.$e->getMessage;
      die();
    }
      return $this->result;
  }

}
