<?php
class BaseController
{
  protected $type;
  protected $action;
  protected $title;
  protected $view;
  protected $file;
  protected $festival_id;
  protected $article_id;
  protected $debug_str;
    
  public function __construct()
  {
    $this->view_init();
  }
  
  //----------------------------------------------------
  // 初期化
  //----------------------------------------------------
  private function view_init()
  {
    // Smartyクラス
    $this->view = new Smarty();
    // Smarty関連ディレクトリの設定
    $this->view->template_dir = _SMARTY_TEMPLATES_DIR;
    $this->view->compile_dir  = _SMARTY_TEMPLATES_C_DIR;
    $this->view->config_dir   = _SMARTY_CONFIG_DIR;
    $this->view->cache_dir    = _SMARTY_CACHE_DIR;
    
    if(isset($_REQUEST['type'])) $this->type = $_REQUEST['type'];
    if(isset($_REQUEST['action'])) $this->action = $_REQUEST['action'];
    
    if(isset($_REQUEST['festival_id'])) $this->festival_id = $_REQUEST['festival_id'];
    if(isset($_REQUEST['article_id'])) $this->article_id  = $_REQUEST['article_id'];
    
    // 環境変数
    $this->view->assign('SCRIPT_NAME', _SCRIPT_NAME);
  }
  
  //----------------------------------------------------
  // フォームと変数を読み込んでテンプレートに組み込んで表示
  //----------------------------------------------------
  protected function view_display()
  {
    // セッション変数などの内容の表示
    $this->debug_display();
    
    $this->view->assign('title',  $this->title);
    $this->view->assign('type',   $this->type);
    $this->view->assign('action', $this->action);
    
    // USERボタン切り替え
    if(session_status() === PHP_SESSION_DISABLED) {
      session_start();
    } else if(session_status() === PHP_SESSION_NONE) {
      session_start();
    }
    
    if(isset($_SESSION["user_id"])) {
      $this->view->assign('changeBtn_name', "My page");
      $this->view->assign('user', "mypage");
      $this->view->assign('schedule', "schedule");
    } else {
      $this->view->assign('changeBtn_name', "SIGN IN");
      $this->view->assign('user', "sign-in");
      $this->view->assign('schedule', "sign-in");
    }
    
    // 表示
    $this->view->display($this->file);
  }
  
  //----------------------------------------------------
  // デバッグ用表示処理
  //----------------------------------------------------
  public function debug_display()
  {
    if(_DEBUG_MODE) {
      $this->debug_str = "";
      if(isset($_SESSION)) {
        $this->debug_str .= '<br><br>$_SESSION<br>';
        $this->debug_str .= var_export($_SESSION, TRUE);
      }
      if(isset($_POST)) {
        $this->debug_str .= '<br><br>$_POST<br>';
        $this->debug_str .= var_export($_POST, TRUE);
      }
      if(isset($_GET)) {
        $this->debug_str .= '<br><br>$_GET<br>';
        $this->debug_str .= var_export($_GET, TRUE);
      }
      // smartyのデバッグモード設定
      // ポップアップウィンドウにテンプレート内の変数を表示
      $this->view->debugging = _DEBUG_MODE;
    }
  }
}
