<?php
// 入力チェック
if( !isset($in_id) || !isset($in_passwd) ){
    header("Location: ../WEB/login.php?error=1");
    exit;
}

$success = false;
$in_id = $_POST["id"];
$in_pass = $_POST["passwd"];

// ログイン認証処理
require_once('DAO/UserDAO.class.php');
$userDao = new UserDAO();
$users = $userDao->signIn();
foreach( $users as $user ){
  $id   = $user['user_id'];
  $pass = $user['password'];
  if($in_id == $id && $in_pass == $pass) {
    $success = true;
    // session
    session_start();
    $_SESSION["name"] = $name;
    $_SESSION["img_path"] = $img_path;
    // cookie
    session_start();
    setcookie($id, time()+86400);
    break;
  }
}

//画面遷移制御
$url = null;
if($success){

    $url = "mypage.php";
}else{
    $url = "index.php?error=2";
}

// 画面遷移
header("Location: $url");
