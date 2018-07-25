<?php
class ManagerController extends BaseController
{
  //----------------------------------------------------
  // 入力チェック処理
  //----------------------------------------------------
  public function inputCheck()
  {
    if(!isset($_POST["user_id"]) ||
       !isset($_POST["mail_address"]) ||
       !isset($_POST["password"]) ||
       !isset($_POST["user_name"]) ||
       !isset($_POST["country_id"]) ||
       !isset($_POST["authority"]))
    {
      return false;
    }
    return true;
  }
  
  //----------------------------------------------------
  // アカウント作成処理
  //----------------------------------------------------
  public function addAccount()
  {
    $in_id         = $_POST["user_id"];
    $in_pass       = $_POST["password"];
    $in_name       = $_POST["user_name"];
    $in_mail       = $_POST["mail_address"];
    $in_country_id = $_POST["country_id"];
    $authority     = $_POST["authority"];
    
    $userModel = new UserModel();
    $userModel->signUp($in_id, $in_pass, $in_name, $in_mail, $in_country_id, $in_country_id, $authority);
  }
  
  //----------------------------------------------------
  // アカウント削除処理
  //----------------------------------------------------
  public function deleteAccount($user_id)
  {    
    $userModel = new UserModel();
    $userModel->deleteAccount($user_id);
  }
}