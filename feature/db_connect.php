<?php

class dbConnect {
  // DBプロパティ
  const DB_NAME = 'db_name';
  const HOST    = 'localhost';
  const UTF     = 'utf8';
  const USER    = 'user';
  const PASS    = '';
  
  // DB接続関数
  function pdo() {
    // phpのバージョンが5.3.6よりも古い場合はcharset=".self::UTFが必要無くなり、array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '.SELF::UTF')が必要
    // 5.3.6以上の場合は必要ないがcharset=".self::UTFは必要
    $dsn  = "mysql:dbname=".self::DB_NAME.";host=".self::HOST.";charset=".self::UTF;
    $user = self::USER;
    $pass = self::PASS;
    
    try {
      $pdo=new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '.SELF::UTF));
    } catch(Exception $e) {
      echo 'error' .$e->getMesseage;
      die();
    }
    //エラーを表示してくれる。
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    return $pdo;
  }
  
  // DB SELECT関数
  function select($sql) {
    $hoge  = $this->pdo();
    $stmt  = $hoge->query($sql);
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $items;
  }
  
  
  //SELECT,INSERT,UPDATE,DELETE文の時に使用する関数。
  function plural($sql,$item) {
    $hoge = $this->pdo();
    $stmt = $hoge->prepare($sql);
    $stmt -> execute(array(':id'=>$item));//sql文のVALUES等の値が?の場合は$itemでもいい。
    return $stmt;
  }
}