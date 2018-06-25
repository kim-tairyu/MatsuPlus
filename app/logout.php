<?php
// session
session_start();
session_destroy();

// cookie
$oneday = 86400;  
if(isset($_COOKIE["user_id"])) {
  setcookie($_COOKIE['user_id'], time()-$oneday);
}
if(isset($_COOKIE["password"])) {
  setcookie($_COOKIE['password'], time()-$oneday);
}
if(isset($_COOKIE["user_name"])) {
  setcookie($_COOKIE['user_name'], time()-$oneday);
}
if(isset($_COOKIE["mail_address"])) {
  setcookie($_COOKIE['mail_address'], time()-$oneday);
}
if(isset($_COOKIE["country_id"])) {
  setcookie($_COOKIE['country_id'], time()-$oneday);
}
if(isset($_COOKIE["launguege_id"])) {
  setcookie($_COOKIE['launguege_id'], time()-$oneday);
}
if(isset($_COOKIE["user_status"])) {
  setcookie($_COOKIE['user_status'], time()-$oneday);
}

// 画面遷移
header("Location: ../WEB/index.php");
