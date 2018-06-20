<?php
<<<<<<< HEAD

// 入力チェック
if( !isset($_POST["id"]) || !isset($_POST["pass"]) ){
    header("Location: ../WEB/login.php?error=1");
    exit;
}

$success = false;
$in_id = $_POST["id"];;
$in_passwd = $_POST["pass"];
=======
// 入力チェック
if( !isset($_POST["id"]) || !isset($_POST["passwd"]) ){
    header("Location: ../WEB/login.php?error");
    exit;
}

$oneday  = 86400;
$success = false;
$in_id   = $_POST["id"];
$in_pass = $_POST["passwd"];
>>>>>>> feature

// ログイン認証処理
require_once('DAO/UserDAO.class.php');
$userDao = new UserDAO();
<<<<<<< HEAD
$users   = $userDao->users();
foreach($users as $user){
  $id     = $user['user_id'];
  $passwd = $user['password'];
  if($in_id == $id && $in_passwd == $passwd) {
=======
$users = $userDao->signIn();
foreach( $users as $user ){
  $id   = $user['user_id'];
  $pass = $user['password'];
  if($in_id == $id && $in_pass == $pass) {
>>>>>>> feature
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
<<<<<<< HEAD
    setcookie($user['user_id'], time()+86400);
    setcookie($user['password'], time()+86400);
    setcookie($user['user_name'], time()+86400);
    setcookie($user['mail_address'], time()+86400);
    setcookie($user['country_id'], time()+86400);
    setcookie($user['launguege_id'], time()+86400);
    setcookie($user['user_status'], time()+86400);
=======
    setcookie($user['user_id'], time()+$oneday);
    setcookie($user['password'], time()+$oneday);
    setcookie($user['user_name'], time()+$oneday);
    setcookie($user['mail_address'], time()+$oneday);
    setcookie($user['country_id'], time()+$oneday);
    setcookie($user['launguege_id'], time()+$oneday);
    setcookie($user['user_status'], time()+$oneday);
>>>>>>> feature
    break;
  }
}

// 画面遷移制御
$url = null;
if($success){
    $url = "../WEB/index.php";
}else{
<<<<<<< HEAD
    $url = "../WEB/login.php?error=2";
=======
    $url = "../WEB/login.php?error";
>>>>>>> feature
}

// 画面遷移
header("Location: $url");
