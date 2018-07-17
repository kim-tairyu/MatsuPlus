<?php
class UserController
{
  //----------------------------------------------------
  // ログイン認証処理
  //----------------------------------------------------
  public function login()
  {
    $in_id   = $_POST["id"];
    $in_pass = $_POST["pass"];

    $userModel = new UserModel();
    $users     = $userModel->login();

    foreach($users as $user)
    {
      $id   = $user['user_id'];
      $mail = $user['mail_address'];
      $pass = $user['password'];
      if(($in_id == $id && $in_pass == $pass) ||
         ($in_id == $mail && $in_pass == $pass)) {
        // session
        session_start();
        $_SESSION["user_id"]      = $user['user_id'];
        $_SESSION["password"]     = $user['password'];
        $_SESSION["user_name"]    = $user['user_name'];
        $_SESSION["mail_address"] = $user['mail_address'];
        $_SESSION["country_id"]   = $user['country_id'];
        $_SESSION["languege_id"]  = $user['languege_id'];
        $_SESSION["user_status"]  = $user['user_status'];
        $_SESSION["user_icon"]    = $user['user_icon'];
        $_SESSION["authority"]    = $user['authority'];
        // cookie
        $oneday = 86400;
        setcookie($user['user_id'], time()+$oneday);
        setcookie($user['password'], time()+$oneday);
        setcookie($user['user_name'], time()+$oneday);
        setcookie($user['mail_address'], time()+$oneday);
        setcookie($user['country_id'], time()+$oneday);
        setcookie($user['languege_id'], time()+$oneday);
        setcookie($user['user_status'], time()+$oneday);
        setcookie($user['user_icon'], time()+$oneday);
        setcookie($user['authority'], time()+$oneday);
        break;
      }
    }
  }
  
  //----------------------------------------------------
  // ログアウト処理
  //----------------------------------------------------
  public function logout()
  {
    // session
    session_destroy();

    // cookie
    $oneday = 86400;  
    if(isset($_COOKIE["user_id"])) setcookie($_COOKIE['user_id'], time()-$oneday);
    if(isset($_COOKIE["password"])) setcookie($_COOKIE['password'], time()-$oneday);
    if(isset($_COOKIE["user_name"])) setcookie($_COOKIE['user_name'], time()-$oneday);
    if(isset($_COOKIE["mail_address"])) setcookie($_COOKIE['mail_address'], time()-$oneday);
    if(isset($_COOKIE["country_id"])) setcookie($_COOKIE['country_id'], time()-$oneday);
    if(isset($_COOKIE["launguege_id"])) setcookie($_COOKIE['launguege_id'], time()-$oneday);
    if(isset($_COOKIE["user_status"])) setcookie($_COOKIE['user_status'], time()-$oneday);
    if(isset($_COOKIE["user_icon"])) setcookie($_COOKIE['user_icon'], time()-$oneday);
    if(isset($_COOKIE["authority"])) setcookie($_COOKIE['user_status'], time()-$oneday);
  }
  
  //----------------------------------------------------
  // 新規登録処理
  //----------------------------------------------------
  public function signUp()
  {
    
  }
}