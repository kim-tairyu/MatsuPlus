<?php
class ManagerController extends BaseController
{
  private $userModel;
  private $muniModel;
  
  public function __construct()
  {
    $this->userModel = new UserModel();
    $this->muniModel = new MunicipalityModel();
  }
  
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
  
  public function muniInputCheck()
  {
    if(!isset($_POST["muni_id"]) ||
       !isset($_POST["muni_pass"]) ||
       !isset($_POST["muni_name"]) ||
       !isset($_POST["festival_id"]) ||
       !isset($_POST["muni_mail"]) ||
       !isset($_POST["muni_tel"]))
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
    
    $this->userModel->signUp($in_id, $in_pass, $in_name, $in_mail, $in_country_id, $in_country_id, $authority);
  }
  
  //----------------------------------------------------
  // アカウント作成処理
  //----------------------------------------------------
  public function addMuniAccount()
  {
    $in_id   = $_POST["muni_id"];
    $in_pass = $_POST["muni_pass"];
    $in_name = $_POST["muni_name"];
    $in_fes  = $_POST["festival_id"];
    $in_mail = $_POST["muni_mail"];
    $in_tel  = $_POST["muni_tel"];
    
    $this->muniModel->addMuniAccount($in_id, $in_pass, $in_name, $in_fes, $in_mail, $in_tel);
  }
  
  //----------------------------------------------------
  // アカウント削除処理
  //----------------------------------------------------
  public function deleteAccount($user_id)
  {    
    $this->userModel->deleteAccount($user_id);
  }
  
  public function deleteMuniAccount($muni_id)
  {
    $this->muniModel->deleteMuniAccount($muni_id);
  }
}