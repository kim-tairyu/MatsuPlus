<?php
$oneday  = 86400;
$success = false;

// 新規登録処理
require_once('DAO/UserDAO.class.php');
$userDao = new UserDAO();
$users = $userDao->signUp();
foreach( $users as $user ){
  $id   = $user['user_id'];
  $pass = $user['password'];
  if($in_id == $id && $in_pass == $pass) {
    $success = true;
    // session
    session_start();
    $_SESSION["user_id"] = $user['user_id'];
    $_SESSION["password"] = $user['password'];
    $_SESSION["user_name"] = $user['user_name'];
    $_SESSION["mail_address"] = $user['mail_address'];
    $_SESSION["country_id"] = $user['country_id'];
    $_SESSION["launguege_id"] = $user['launguege_id'];
    $_SESSION["user_status"] = $user['user_status'];
    // cookie
    setcookie($user['user_id'], time()+$oneday);
    setcookie($user['password'], time()+$oneday);
    setcookie($user['user_name'], time()+$oneday);
    setcookie($user['mail_address'], time()+$oneday);
    setcookie($user['country_id'], time()+$oneday);
    setcookie($user['launguege_id'], time()+$oneday);
    setcookie($user['user_status'], time()+$oneday);
    break;
  }
}

// 画面遷移制御
$url = null;
if($success){
    $url = "../WEB/index.php";
}else{
    $url = "../WEB/add.php?error";
}

// 画面遷移
header("Location: $url");
