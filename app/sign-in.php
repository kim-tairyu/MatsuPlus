<?php

$success = false;
$in_id = $_POST["id"];
$in_passwd = $_POST["password"];

// 入力チェック
if( !isset($in_id) || !isset($in_passwd) ){
    header("Location: ../WEB/login.php?error=1");
    exit;
}

// 認証処理
require_once('DAO/UserDAO.class.php');
$userDao = new UserDAO();
$users = $userDao->loginInfo();
foreach( $users as $user ){
  if($in_id == $id && $in_password == $password) {
    $success = true;
    break;
  }
}

//画面遷移制御
$url = null;
if($success){
    // session
    session_start();
    $_SESSION["name"] = $name;
    $_SESSION["img_path"] = $img_path;
    
    // cookie
    setcookie($id, time()+86400);

    $url = "mypage.php";
}else{
    $url = "index.php?error=2";
}

// 画面遷移
header("Location: $url");
