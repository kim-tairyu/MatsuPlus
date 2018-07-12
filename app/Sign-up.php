<?php
// 入力チェック
if(!isset($_POST["mail_address"]) ||
   !isset($_POST["password"]) ||
   !isset($_POST["user_name"]) ||
   !isset($_POST["country_id"])){
    header("Location: ../WEB/sign-up.php?error");
    exit;
}

$oneday          = 86400;               
$success         = false;
$in_mail         = $_POST["mail_address"]; // メールアドレス
$in_pass         = $_POST["password"];     // パスワード
$in_name         = $_POST["user_name"];    // ユーザ名
$in_country_id   = $_POST["country_id"];   // 出身国

// 新規登録処理
$success = true;
require_once('DAO/UserDAO.class.php');
$userDAO = new UserDAO();
$userDAO->signUp($in_pass, $in_name, $in_mail, $in_country_id, $in_country_id);

include 'Sign-in.php';
//// 画面遷移制御
//$url = null;
//if($success){
//    $url = "Sign-in.php";
//}else{
//    $url = "../WEB/sign-up.php?error";
//}
//
//// 画面遷移
//header("Location: $url");
