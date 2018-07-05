<?php
session_start();
$link_mypage      = "";
$link_schedule    = "";
$link_mypage_name = "";
if(isset($_SESSION["user_id"])) {
  $link_mypage      = "mypage.php";
  $link_schedule    = "schedule.php";
  $link_mypage_name = "My page";
} else {
  $link_mypage      = "sign-in.php";
  $link_schedule    = "sign-in.php";
  $link_mypage_name = "SIGN IN";
}
