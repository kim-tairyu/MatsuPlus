<?php
class UserController extends BaseController
{
  public function run()
  {
    if(session_status() === PHP_SESSION_DISABLED) {
      session_start();
    } else if(session_status() === PHP_SESSION_NONE) {
      session_start();
    }
    
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
      case "editer":
        $this->screen_editer();
        break;
      case "manager":
        $this->screen_manager();
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
    $festivalModel = new FestivalModel();
    $articleModel  = new ArticleModel();
    $tagModel      = new TagModel();
    $this->view->assign('festivals', $festivalModel->getRecommendFestivals());
    $this->view->assign('articles',  $articleModel->getArticles());
    $this->view->assign('springFestivals',  $tagModel->getSpringTags());
    $this->view->assign('summerFestivals',  $tagModel->getSummerTags());
    $this->view->assign('autumnFestivals',  $tagModel->getAutumnTags());
    $this->view->assign('winterFestivals',  $tagModel->getWinterTags());
    $this->title = 'MATSURI PLUS : TOP';
    $this->file  = _INDEX_DIR;
    $this->view_display();
  }
  
  //----------------------------------------------------
  // 検索画面へ遷移
  //----------------------------------------------------
  public function screen_search()
  {
    $this->title = 'MATSURI PLUS : SEARCH';
    $this->file  = _SEARCH_DIR;
    $this->view_display();
  }
  
  //----------------------------------------------------
  // ログイン画面へ遷移
  //----------------------------------------------------
  public function screen_signIn()
  {
    if($this->action == 'login') {
      if($this->login()) {
        $this->screen_top();
      } else {
        $this->title = 'MATSURI PLUS : SIGN-IN';
        $this->file  = _SIGNIN_DIR;
        $this->view_display();
      }
    } else {
      $this->title = 'MATSURI PLUS : SIGN-IN';
      $this->file  = _SIGNIN_DIR;
      $this->view_display();
    }
  }
  
  //----------------------------------------------------
  // 新規登録画面へ遷移
  //----------------------------------------------------
  public function screen_signUp()
  {
    $countryModel = new CountryModel();
    $this->view->assign('countrys', $countryModel->getCountrys());
    if($this->action == 'signUp') {
      if($_POST["password"] == $_POST["passwordSecond"]) {
        if($this->signUp()) {
          $this->screen_top();
        } else {
          $this->title = 'MATSURI PLUS : SIGN-UP';
          $this->file  = _SIGNUP_DIR;
          $this->view_display();
        }
      } else {
        $this->title = 'MATSURI PLUS : SIGN-UP';
        $this->file  = _SIGNUP_DIR;
        $this->view_display();
      }
    } else {
      $this->title = 'MATSURI PLUS : SIGN-UP';
      $this->file  = _SIGNUP_DIR;
      $this->view_display();
    }
  }
  
  //----------------------------------------------------
  // マイページへ遷移
  //----------------------------------------------------
  public function screen_mypage()
  {
    $this->title = 'MATSURI PLUS : MYPAGE';
    $this->file  = _MYPAGE_DIR;
    $this->view_display();
  }
  
  //----------------------------------------------------
  // お祭りお気に入り画面へ遷移
  //----------------------------------------------------
  public function screen_favoritesFestival()
  {
    $favoriteModel = new FavoriteModel();
    $this->view->assign('favorite_fes', $favoriteModel->getFavorites($_SESSION["user_id"], 0));
    $this->title = 'MATSURI PLUS : FAVORITES FESTIVAL';
    $this->file  = _FAVORITES_FESTIVAL_DIR;
    $this->view_display();
  }
  
  //----------------------------------------------------
  // 記事お気に入り画面へ遷移
  //----------------------------------------------------
  public function screen_favoritesArticle()
  {
    $favoriteModel = new FavoriteModel();
    $this->view->assign('favorite_art', $favoriteModel->getFavorites($_SESSION["user_id"], 1));
    $this->title = 'MATSURI PLUS : FAVORITES ARTICLE';
    $this->file  = _FAVORITES_ARTICLE_DIR;
    $this->view_display();
  }
  
  //----------------------------------------------------
  // 設定画面へ遷移
  //----------------------------------------------------
  public function screen_config()
  {
    if($this->action == 'logout') {
      $this->logout();
      $this->screen_top();
    } else {
      $userModel     = new UserModel();
      $languageModel = new LanguageModel();
      $this->view->assign('userInfo', $userModel->getOneUser($_SESSION["user_id"]));
      $this->view->assign('languages', $languageModel->getLanguages());
      $this->title = 'MATSURI PLUS : CONFIG';
      $this->file  = _CONFIG_DIR;
      $this->view_display();
    }
  }
  
  //----------------------------------------------------
  // スケジュール画面へ遷移
  //----------------------------------------------------
  public function screen_schedule()
  {
    $this->title = 'MATSURI PLUS : SCHEDULE';
    $this->file  = _SCHEDULE_DIR;
    $this->view_display();
  }
  
  //----------------------------------------------------
  // 記事詳細画面へ遷移
  //----------------------------------------------------
  public function screen_article()
  {
    if(isset($_GET["article_id"])) {
      $arc_id = $_GET["article_id"];
      if(isset($_GET["f"]) && isset($_SESSION["user_id"])){
        //お気に入り処理
        $favoriteModel = new FavoriteModel();
        $article_favorite = $favoriteModel->putFavoriteArticle($_SESSION["user_id"], $arc_id);
      }
    }
    
    $articleModel = new ArticleModel();
    if(isset($this->article_id)) {
      $this->view->assign('article',      $articleModel->getOneArticle($this->article_id));
      $this->view->assign('article_tag',  $articleModel->getTagArticle(2));
      $this->view->assign('relation_tag', $articleModel->getRelationTag($tag));
      $this->title = 'MATSURI PLUS : ARTICLE';
      $this->file  = _ARTICLE_DIR;
      $this->view_display();
    } else {
      $this->screen_top();
    }
  }
  
  //----------------------------------------------------
  // 編集者画面へ遷移
  //----------------------------------------------------
  public function screen_editer()
  {
    $this->title = 'MATSURI PLUS : EDITER';
    $this->file  = _EDITER_DIR;
    $this->view_display();
  }
  
  //----------------------------------------------------
  // 管理者画面へ遷移
  //----------------------------------------------------
  public function screen_manager()
  {
    $this->title = 'MATSURI PLUS : MANAGER';
    $this->file  = _MANAGER_DIR;
    $this->view_display();
  }
  
  //----------------------------------------------------
  // 祭り詳細画面へ遷移
  //----------------------------------------------------
  public function screen_festival()
  {
    if(isset($_GET["festival_id"])) {
        echo "get";
      $fes_id = $_GET["festival_id"];
      if(isset($_GET["action"]) && isset($_SESSION["user_id"])) {
        // お気に入り処理
        $favoriteModel = new FavoriteModel();
        $favoriteModel->putFavoriteFestival($_SESSION["user_id"], $fes_id);
      }
    }else if(isset($_POST["festival_id"])) {
      $fes_id = $_POST["festival_id"];
      if(isset($_SESSION["user_id"]) && isset($_POST['star']) && isset($_POST['kanso'])) {
        if($_POST['star'] !=="" && $_POST['kanso'] !=="") {
          $user_id = $_SESSION["user_id"];
          $kanso = $_POST['kanso'];
          $star = $_POST['star'];
          // レビュー処理
          $reviewModel = new ReviewModel();
          $reviewModel->putReview($fes_id, $user_id, $kanso, $star);
        }
      }else if(isset($_SESSION["user_id"]) && isset($_POST['event'])) {
        if($_POST['event'] !==""){
          $user_id = $_SESSION["user_id"];
          $event = $_POST['event'];
          $place = $_POST['place'];
          $free = $_POST['free'];
          // スケジュール登録処理
          $scheduleModel = new ScheduleModel();
          $scheduleModel->addSchedule($user_id, $event, $place, $free);
        }
      }
    }
    
    if(isset($this->festival_id)) {
      $festivalModel = new FestivalModel();
      $giftModel     = new GiftModel();
      $reviewModel   = new ReviewModel();
      $tagModel      = new TagModel();
      $this->view->assign('festival',       $festivalModel->getOneFestival($fes_id));
      $this->view->assign('festival_images', $festivalModel->getFestivalImages($fes_id));
      $this->view->assign('gifts',           $giftModel->getGifts($this->festival_id));
      $this->view->assign('reviews',         $reviewModel->getReviews($this->festival_id));
      $this->view->assign('tags',            $tagModel->getTags($this->festival_id));

      $this->title = 'MATSURI PLUS : FESTIVAL';
      $this->file  = _FESTIVAL_DIR;
      $this->view_display();
    } else {
      $this->screen_top();
    }
    
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
        $_SESSION["language_id"]  = $user['language_id'];
        $_SESSION["user_status"]  = $user['user_status'];
        $_SESSION["user_icon"]    = $user['user_icon'];
        $_SESSION["authority"]    = $user['authority'];
        // cookie
        $oneday = 86400;
        setcookie($user['user_id'],      time()+$oneday);
        setcookie($user['password'],     time()+$oneday);
        setcookie($user['user_name'],    time()+$oneday);
        setcookie($user['mail_address'], time()+$oneday);
        setcookie($user['country_id'],   time()+$oneday);
        setcookie($user['language_id'],  time()+$oneday);
        setcookie($user['user_status'],  time()+$oneday);
        setcookie($user['user_icon'],    time()+$oneday);
        setcookie($user['authority'],    time()+$oneday);
        
        return true;
        break;
      }
    }
  }
  
  //----------------------------------------------------
  // 新規登録処理
  //----------------------------------------------------
  public function signUp()
  {
    $in_id         = $_POST["user_id"];
    $in_pass       = $_POST["password"];
    $in_name       = $_POST["user_name"];
    $in_mail       = $_POST["mail_address"];
    $in_country_id = $_POST["country_id"];
    $authority     = 'comon';
    
    $userModel = new UserModel();
    $userModel->signUp($in_id, $in_pass, $in_name, $in_mail, $in_country_id, $in_country_id, $authority);
    $users = $userModel->login();

    foreach($users as $user)
    {
      $id   = $user['user_id'];
      $pass = $user['password'];
      if($in_id == $id && $in_pass == $pass) {
        // session
        session_start();
        $_SESSION["user_id"]      = $user['user_id'];
        $_SESSION["password"]     = $user['password'];
        $_SESSION["user_name"]    = $user['user_name'];
        $_SESSION["mail_address"] = $user['mail_address'];
        $_SESSION["country_id"]   = $user['country_id'];
        $_SESSION["language_id"]  = $user['language_id'];
        $_SESSION["user_status"]  = $user['user_status'];
        $_SESSION["user_icon"]    = $user['user_icon'];
        $_SESSION["authority"]    = $user['authority'];
        // cookie
        $oneday = 86400;
        setcookie($user['user_id'],      time()+$oneday);
        setcookie($user['password'],     time()+$oneday);
        setcookie($user['user_name'],    time()+$oneday);
        setcookie($user['mail_address'], time()+$oneday);
        setcookie($user['country_id'],   time()+$oneday);
        setcookie($user['language_id'],  time()+$oneday);
        setcookie($user['user_status'],  time()+$oneday);
        setcookie($user['user_icon'],    time()+$oneday);
        setcookie($user['authority'],    time()+$oneday);
        
        return true;
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
    if(isset($_COOKIE["authority"])) setcookie($_COOKIE['authority'], time()-$oneday);
  }

}
