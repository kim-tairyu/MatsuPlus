<?php
class IndexController extends BaseController
{
  public function run()
  {
    if(isset($_SESSION["user_id"])) {
      // 会員
      $this->menu_login();
    } else {
      // ゲスト
      $this->menu_guest();
    }
  }
  
  //----------------------------------------------------
  // 会員用メニュー
  //----------------------------------------------------
  public function menu_login()
  {
    switch ($this->type) {
      case "logout":
        $this->logout();
        break;
      case "mypage":
        $this->screen_mypage();
        break;
      case "favorites-festival":
        $this->screen_favoritesFestival();
        break;
      case "favorites-article":
        $this->screen_favoritesArticle();
        break;
      case "config":
        $this->screen_config();
        break;
      case "schedule":
        $this->screen_schedule();
        break;
      case "search":
        $this->screen_search();
        break;
      case "article":
        $this->screen_article();
        break;
      case "festival":
        $this->screen_festival();
        break;
      default:
        $this->screen_top();
    }
  }
  
  //----------------------------------------------------
  // ゲスト用メニュー
  //----------------------------------------------------
  public function menu_guest()
  {
    switch ($this->type) {
      case "login":
        $this->login();
        break;
      case "sign-in":
        $this->screen_signIn();
        break;
      case "sign-up":
        $this->screen_signUp();
        break;
      case "search":
        $this->screen_search();
        break;
      case "article":
        $this->screen_article();
        break;
      case "festival":
        $this->screen_festival();
        break;
      default:
        $this->screen_top();
    }
  }
  
  //----------------------------------------------------
  // トップ画面へ遷移
  //----------------------------------------------------
  public function screen_top()
  { 
    $this->view->assign('festivals', $this->getRecommendFestivals());
    $this->view->assign('articles',  $this->getArticles());
    $this->title = 'MATSURI PLUS : TOP';
    $this->file = _INDEX_DIR;
    $this->view_display();
  }
  
  //----------------------------------------------------
  // 検索画面へ遷移
  //----------------------------------------------------
  public function screen_search()
  {
    $this->title = 'MATSURI PLUS : SEARCH';
    $this->file = _SEARCH_DIR;
    $this->view_display();
  }
  
  //----------------------------------------------------
  // ログイン画面へ遷移
  //----------------------------------------------------
  public function screen_signIn()
  {
    $this->title = 'MATSURI PLUS : SIGN-IN';
    $this->file = _SIGNIN_DIR;
    $this->view_display();
  }
  
  //----------------------------------------------------
  // 新規登録画面へ遷移
  //----------------------------------------------------
  public function screen_signUp()
  {
    $this->title = 'MATSURI PLUS : SIGN-UP';
    $this->file = _SIGNUP_DIR;
    $this->view_display();
  }
  
  //----------------------------------------------------
  // マイページへ遷移
  //----------------------------------------------------
  public function screen_mypage()
  {
    $this->title = 'MATSURI PLUS : MYPAGE';
    $this->file = _MYPAGE_DIR;
    $this->view_display();
  }
  
  //----------------------------------------------------
  // お祭りお気に入り画面へ遷移
  //----------------------------------------------------
  public function screen_favoritesFestival()
  {
    $this->title = 'MATSURI PLUS : FAVORITES FESTIVAL';
    $this->file = _FAVORITES_FESTIVAL_DIR;
    $this->view_display();
  }
  
  //----------------------------------------------------
  // 記事お気に入り画面へ遷移
  //----------------------------------------------------
  public function screen_favoritesArticle()
  {
    $this->title = 'MATSURI PLUS : FAVORITES ARTICLE';
    $this->file = _FAVORITES_ARTICLE_DIR;
    $this->view_display();
  }
  
  //----------------------------------------------------
  // 設定画面へ遷移
  //----------------------------------------------------
  public function screen_config()
  {
    $this->title = 'MATSURI PLUS : CONFIG';
    $this->file = _CONFIG_DIR;
    $this->view_display();
  }
  
  //----------------------------------------------------
  // スケジュール画面へ遷移
  //----------------------------------------------------
  public function screen_schedule()
  {
    $this->title = 'MATSURI PLUS : SCHEDULE';
    $this->file = _SCHEDULE_DIR;
    $this->view_display();
  }
  
  //----------------------------------------------------
  // 記事詳細画面へ遷移
  //----------------------------------------------------
  public function screen_article()
  {
    $this->getArticle();
    $this->title = 'MATSURI PLUS : ARTICLE';
    $this->file = _ARTICLE_DIR;
    $this->view_display();
  }
  
  //----------------------------------------------------
  // 祭り詳細画面へ遷移
  //----------------------------------------------------
  public function screen_festival()
  {
    $this->getFestival();
    $this->title = 'MATSURI PLUS : FESTIVAL';
    $this->file = _FESTIVAL_DIR;
    $this->view_display();
  }
  
  //----------------------------------------------------
  // おすすめお祭り情報を取得
  //----------------------------------------------------
  public function getRecommendFestivals()
  {
    $festivalModel = new FestivalModel();
    return $festivalModel->getRecommendFestivals();
  }
  
  //----------------------------------------------------
  // 記事情報を取得
  //----------------------------------------------------
  public function getArticles()
  {
    $articleModel = new ArticleModel();
    return $articleModel->getArticles();
  }
  
  //----------------------------------------------------
  // お祭り情報を取得
  //----------------------------------------------------
  public function getFestival()
  {
//    $festivalController = new FestivalController();
//    if(isset($_GET["festival_id"])) {
//      $fes_id = $_GET["festival_id"];
//      if(isset($_GET["f"]) && isset($_SESSION["user_id"])) {
//        // お気に入り処理
//        $festivalController->putFavoriteFestival($_SESSION["user_id"], $fes_id);
//      }
//    } else if(isset($_POST["festival_id"])) {
//      $fes_id = $_POST["festival_id"];
//      if(isset($_SESSION["user_id"]) && isset($_POST['star']) && isset($_POST['kanso'])) {
//        if($_POST['star'] !=="" && $_POST['kanso'] !=="") {
//          $user_id = $_SESSION["user_id"];
//          $kanso = $_POST['kanso'];
//          $star = $_POST['star'];
//          // レビュー処理
//          $festivalController->putReview($fes_id, $user_id, $kanso, $star);
//        }
//      } else if(isset($_SESSION["user_id"]) && isset($_POST['event'])) {
//        if($_POST['event'] !==""){
//          $user_id = $_SESSION["user_id"];
//          $event = $_POST['event'];
//          $place = $_POST['place'];
//          $free = $_POST['free'];
//          // スケジュール登録処理
//          $festivalController->addSchedule($user_id, $event, $place, $free);
//        }
//      } else {
//        $this->screen_top();
//      }
//    } else {
//      $this->screen_top();
//    }
    $fes_id = $this->festival_id;
    $this->view->assign('festival', $festivalController->getOneFestival($fes_id));
    $this->view->assign('festival_image', $festivalController->getImageFestival($fes_id));
    $this->view->assign('gift', $festivalController->getGift($fes_id));
    $this->view->assign('review', $festivalController->getReviewInfo($fes_id));
  }
  
  //----------------------------------------------------
  // 記事情報を取得
  //----------------------------------------------------
  public function getArticle()
  {
    if(isset($_GET["article_id"])) {
      $arc_id = $_GET["article_id"];
      if(isset($_GET["f"]) && isset($_SESSION["user_id"])){
        //お気に入り処理
        $favoriteModel = new FavoriteModel();
        $article_favorite = $favoriteModel->putFavoriteArticle($_SESSION["user_id"], $arc_id);
      }
    } else {
      $this->screen_top();
    }
    // 記事情報を取得
    $articleModel = new ArticleModel();

    $this->view->assign('article', $articleModel->getOneArticle(1));
    $this->view->assign('$article_tag', $articleModel->getTagArticle(2));
    $this->view->assign('$relation_tag', $articleModel->getRelationTag($tag));
  }
  
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
        
        $this->screen_top();
        break;
      }
    }
    $this->screen_signIn();
  }
  
  //----------------------------------------------------
  // ログアウト処理
  //----------------------------------------------------
  public function logout()
  {
    $userController = new UserController();
    $userController->logout();
    $this->screen_top();
  }
  
}
