<?php
// 入力チェック
if(!isset($_POST["user_id"]) ||
   !isset($_POST["password"]) ||
   !isset($_POST["repassword"]) ||
   !isset($_POST["user_name"]) ||
   !isset($_POST["mail_address"]) ||
   !isset($_POST["user_id"]) ||
   !isset($_POST["country_id"]) ||
   $_POST["password"] != $_POST["repassword"]) {
  header("Location: ../WEB/add.php?error");
  exit;
}
$oneday          = 86400;
$success         = false;
$in_id           = $_POST["user_id"];
$in_pass         = $_POST["password"];
$in_repass       = $_POST["repassword"];
$in_name         = $_POST["user_name"];
$in_mail         = $_POST["mail_address"];
$in_country_id   = $_POST["country_id"];
$in_launguege_id = 2;

// 新規登録処理
require_once('DAO/UserDAO.class.php');
$userDao = new UserDAO();
$users = $userDao->signUp($in_id, $in_pass, $in_name, $in_mail, $in_country_id, $in_launguege_id);

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

// 画面遷移制御
$url = null;
if($success){
    $url = "../WEB/index.php";
}else{
    $url = "../WEB/add.php?error";
}

// 画面遷移
header("Location: $url");
