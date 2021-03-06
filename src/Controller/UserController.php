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
      case "upload":
        $this->screen_upload();
        break;
      case "upload_complete":
        $this->screen_upload_complete();
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
    // 祭りお気に入り処理
    if($this->action == 'festival_favorite')
    {
      $fes_id = $_GET["festival_id"];
      if(isset($_SESSION["user_id"])) {
        $favoriteModel = new FavoriteModel();
        $favoriteModel->putFavoriteFestival($_SESSION["user_id"], $fes_id);
        $this->action = '';
      } else {
        $this->screen_signIn();
      }
    }
    // 記事お気に入り処理
    else if($this->action == 'article_favorite')
    {
      $arc_id = $_GET["article_id"];
      if(isset($_SESSION["user_id"])){
        //お気に入り処理
        $favoriteModel = new FavoriteModel();
        $article_favorite = $favoriteModel->putFavoriteArticle($_SESSION["user_id"], $arc_id);
        $this->action = '';
      } else {
        $this->screen_signIn();
      }
    }
    $this->view->assign('weekFestivals', $festivalModel->getWeekRecommendFestivals());
    $this->view->assign('monthFestivals', $festivalModel->getMonthRecommendFestivals());
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
    $festivalModel = new FestivalModel();
    $tagModel = new TagModel();
    $this->title = 'MATSURI PLUS : SEARCH';
    $this->view->assign('randomTags', $tagModel->getRandomTags());
    
    if($this->action == 'kensaku') {
      if(isset($_POST["festival_name"]) && !empty($_POST['festival_name']) && $_POST['festival_name'] == !null){
          $name = $_POST["festival_name"];
          // 名前検索
          $this->view->assign('searches', $festivalModel->getNameSearch($name));
          $this->file  = _SEARCH_DIR;
          $this->view_display();
      }  
      else if(isset($_POST['location']) && !empty($_POST['location']) && $_POST['location'] == !null){
          $location = $_POST['location'];
          // 開催地検索
          $this->view->assign('searches', $festivalModel->getLocationSearch($location));
          $this->file  = _SEARCH_DIR;
          $this->view_display();
      }
      else if(isset($_POST["start_date"]) && !empty($_POST['start_date']) && $_POST['start_date'] == !null){
          $start_date = $_POST["start_date"];            
          // 開催日検索
          $this->view->assign('searches', $festivalModel->getStartDateSearch($start_date));
          $this->file  = _SEARCH_DIR;
          $this->view_display();
      }
      else {
        $this->view->assign('searches', $festivalModel->getRecommendFestivals());
        $this->file  = _SEARCH_DIR;
        $this->view_display();
      }
    } else if($this->action == 'kensaku_tag') {
      $this->view->assign('searches', $tagModel->getAreaTags($_GET['area']));
      $this->file  = _SEARCH_DIR;
      $this->view_display();
    } else if($this->action == 'festival_tag') {
      $this->view->assign('searches', $tagModel->getAreaTags($_GET['tag_name']));
      $this->file  = _SEARCH_DIR;
      $this->view_display();
    } else if($this->action == 'festival_favorite')
    {
      $fes_id = $_GET["festival_id"];
      if(isset($_SESSION["user_id"])) {
        $favoriteModel = new FavoriteModel();
        $favoriteModel->putFavoriteFestival($_SESSION["user_id"], $fes_id);
        $this->action = '';
      } else {
        $this->screen_signIn();
      }
    } else {
      $this->view->assign('searches', $festivalModel->getRecommendFestivals());
      $this->file  = _SEARCH_DIR;
      $this->view_display();
    }
  }
  
  //----------------------------------------------------
  // ログイン画面へ遷移
  //----------------------------------------------------
  public function screen_signIn()
  {
    if($this->action == 'login') {
      if($this->inputCheck()) {
        if($this->login()) {
          $this->screen_top();
        } else {
          $this->view->assign('errMsg', "USER ID OR PASSWORD ERROR!");
          $this->title = 'MATSURI PLUS : SIGN-IN';
          $this->file  = _SIGNIN_DIR;
          $this->view_display();
        }
      } else {
        $this->view->assign('errMsg', "PLEASE INPUT!");
        $this->title = 'MATSURI PLUS : SIGN-IN';
        $this->file  = _SIGNIN_DIR;
        $this->view_display();
      }
    } else {
      $this->view->assign('errMsg', "");
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
    if($this->action === 'signUp') {
      if($this->inputCheck()) {
        $this->signUp();
        $this->screen_signIn();
      } else {
        $this->view->assign('errMsg', "INPUT ERROR!");
        $this->title = 'MATSURI PLUS : SIGN-UP';
        $this->file  = _SIGNUP_DIR;
        $this->view_display();
      }
    } else {
      $this->view->assign('errMsg', "");
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
    $userModel     = new UserModel();
    $languageModel = new LanguageModel();
    if($this->action == 'logout')
    {
      $this->logout();
      $this->screen_top();
    }
    else if($this->action == 'update')
    {
      if($this->inputCheck())
      {
        $this->updateUserStatus();
        $this->action = null;
        $this->screen_config();
      }
      else
      {
        $this->view->assign('errMsg', "INPUT ERROR!");
        $this->view->assign('userInfo', $userModel->getOneUser($_SESSION["user_id"]));
        $this->view->assign('languages', $languageModel->getLanguages());
        $this->title = 'MATSURI PLUS : CONFIG';
        $this->file  = _CONFIG_DIR;
        $this->view_display();
      }
    }
    else
    {
      $this->view->assign('errMsg', "");
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
    if($this->action == "calendar")
    {
      $scheduleModel = new ScheduleModel();
      $scheduleModel->getSchedules($_SESSION["user_id"]);
      $this->title = 'MATSURI PLUS : SCHEDULE';
      $this->file  = _SCHEDULE_DIR;
      $this->view_display();
    } else {
      $this->title = 'MATSURI PLUS : SCHEDULE';
      $this->file  = _SCHEDULE_DIR;
      $this->view_display();
    }
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
      //$this->view->assign('article_tag',  $articleModel->getTagArticle(2));
      $tag = $articleModel->getTagArticle($this->article_id);
      $this->view->assign('top_image', $articleModel->getTopImageArticle($this->article_id));
      $this->view->assign('images', $articleModel->getImageArticle($this->article_id));
      $this->view->assign('relation_tag', $articleModel->getRelationTag($tag,$arc_id));
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
    $festivalModel = new FestivalModel();
    $articleModel = new ArticleModel();
    $this->view->assign('festivals', $festivalModel->getFestivals());
    $this->view->assign('articles', $articleModel->getArticlesInfo());
    $this->view->assign('festival_id', $festivalModel->getFestivalId());
    $this->title = 'MATSURI PLUS : EDITER';
    
    if($this->action == 'addArticle') {
      if(!isset($_POST['article_name']) ||
         !isset($_POST['festival_id']) ||
         !isset($_POST['text'])) {
        $this->view->assign('errMsg', "INPUT ERROR!");
        $this->file  = _EDITER_DIR;
        $this->view_display();
      } else {
        $articleModel->addArticle($_POST['article_name'], $_POST['festival_id'], $_POST['text']);
        $this->action = null;
        $this->screen_editer();
      }
    } else if($this->action == 'deleteArticle') {
      $articleModel->deleteArticle($_GET['article_id']);
      $this->action = null;
      $this->screen_editer();
    } else {
      $this->view->assign('errMsg', "");
      $this->file  = _EDITER_DIR;
      $this->view_display();
    }
  }
  
  //----------------------------------------------------
  // 管理者画面へ遷移
  //----------------------------------------------------
  public function screen_manager()
  {
    $controller = new ManagerController();
    $userModel = new UserModel();
    $countryModel = new CountryModel();
    $muniModel = new MunicipalityModel();
    $festivalModel = new FestivalModel();
    $this->view->assign('users', $userModel->getUsers());
    $this->view->assign('countrys', $countryModel->getCountrys());
    $this->view->assign('munis', $muniModel->getMunis());
    $this->view->assign('festival_id', $festivalModel->getFestivalId());
    
    if($this->action == 'addAccount') {
      if($controller->inputCheck()) {
        $controller->addAccount();
        $this->action = null;
        $this->screen_manager();
      } else {
        $this->view->assign('errMsg', "INPUT ERROR!");
        $this->title = 'MATSURI PLUS : MANAGER';
        $this->file  = _MANAGER_DIR;
        $this->view_display();
      }
    } else if($this->action == 'delete') {
      $controller->deleteAccount($_GET['user_id']);
      $this->action = null;
      $this->screen_manager();
    } else if($this->action == 'addMuniAccount') {
      if($controller->muniInputCheck()) {
        $controller->addMuniAccount();
        $this->action = null;
        $this->screen_manager();
      } else {
        $this->view->assign('errMsg', "INPUT ERROR!");
        $this->title = 'MATSURI PLUS : MANAGER';
        $this->file  = _MANAGER_DIR;
        $this->view_display();
      }
    } else if($this->action == 'muni_delete') {
      $controller->deleteMuniAccount($_GET['muni_id']);
      $this->action = null;
      $this->screen_manager();
    } else {
      $this->view->assign('errMsg', "");
      $this->title = 'MATSURI PLUS : MANAGER';
      $this->file  = _MANAGER_DIR;
      $this->view_display();
    }
  }
  
  //----------------------------------------------------
  // 祭り詳細画面へ遷移
  //----------------------------------------------------
  public function screen_festival()
  {
    if(isset($_GET["festival_id"])) {
      $fes_id = $_GET["festival_id"];
      if(isset($_GET["action"]) && isset($_SESSION["user_id"])) {
        // お気に入り処理
        $favoriteModel = new FavoriteModel();
        $favoriteModel->putFavoriteFestival($_SESSION["user_id"], $fes_id);
      }
    }else if(isset($_POST["festival_id"])) {
      $fes_id = $_POST["festival_id"];
      if(isset($_POST['star']) && isset($_POST['kanso'])) {
        if($_POST['star'] !=="" && $_POST['kanso'] !=="") {
          if(isset($_SESSION["user_id"])){
            $user_id = $_SESSION["user_id"];
            $kanso = $_POST['kanso'];
            $star = $_POST['star'];
            // レビュー処理
            $reviewModel = new ReviewModel();
            $reviewModel->putReview($fes_id, $user_id, $kanso, $star);
          }else{
            $this->view->assign('errMsg', "");
            $this->title = 'MATSURI PLUS : SIGN-IN';
            $this->file  = _SIGNIN_DIR;
            $this->view_display();
          }
        }
      }else if(isset($_SESSION["user_id"]) && isset($_POST['event'])) {
        if($_POST['event'] !==""){
          $user_id = $_SESSION["user_id"];
          $event = (isset($_POST["event"])) ? $_POST["event"]:"";
          $start_date = (isset($_POST["start_date"])) ? $_POST["start_date"]:"";
          $start_time = (isset($_POST["start_time"])) ? $_POST["start_time"]:"";
          $end_date = (isset($_POST["end_date"])) ? $_POST["end_date"]:"";
          $end_time = (isset($_POST["end_time"])) ? $_POST["end_time"]:"";
          $fes_id = (isset($_POST["festival_id"])) ? $_POST["festival_id"]:"";
          $place = (isset($_POST["place"])) ? $_POST["place"]:"";
          $free = (isset($_POST["free"])) ? $_POST["free"]:"";
            
          $s_date = $start_date." ".$start_time.":00";
          $e_date = $end_date." ".$end_time.":00";

//          $event = $_POST['event'];
//          $place = $_POST['place'];
//          $free = $_POST['free'];
          // スケジュール登録処理
          $scheduleModel = new ScheduleModel();
          $scheduleModel->addSchedule($user_id, $event, $s_date, $e_date, $fes_id, $place, $free);
        }
      }
    }
    
    if(isset($this->festival_id)) {
      $festivalModel = new FestivalModel();
      $giftModel     = new GiftModel();
      $reviewModel   = new ReviewModel();
      $tagModel      = new TagModel();
      $text = $festivalModel->getOneText($this->festival_id);
      foreach($text as $a){
        $b[] =  str_replace( "\\n", '<br />',$a);
      }

      $this->view->assign('description',        $b[0]);
      $this->view->assign('history',            $b[1]);
      $this->view->assign('festival_program',   $b[2]);
      $this->view->assign('festival',        $festivalModel->getOneFestival($this->festival_id));
      $this->view->assign('festival_images', $festivalModel->getFestivalImages($this->festival_id));
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
  // アップロード画面に遷移
  //----------------------------------------------------
  public function screen_upload()
  {
    $this->title = 'MATSURI PLUS : UPLOAD';
    $this->file  = _UPLOAD_DIR;
    $this->view_display();
  }
  
  //----------------------------------------------------
  // アップロード完了画面に遷移
  //----------------------------------------------------
  public function screen_upload_complete()
  {
    $festival_name = (isset($_POST["name_data"])) ? $_POST["name_data"]:"";
    $location      = (isset($_POST["pref_name_data"]) && isset($_POST["location_details_data"]))?$_POST["location_details_data"].",".$_POST["pref_name_data"]:"";
    $start_date    = (isset($_POST["start_date_data"]))?$_POST["start_date_data"]:"";
    $end_date      = (isset($_POST["end_date_data"]))?$_POST["end_date_data"]:"";
    $start_time    = (isset($_POST["start_hour_data"]) && isset($_POST["start_minute_data"]))?$start_date." ".$_POST["start_hour_data"].":".$_POST["start_minute_data"].":00":"";
    $end_time      = (isset($_POST["end_hour_data"]))?$end_date." ".$_POST["end_hour_data"].":".$_POST["end_minute_data"].":00":"";
    $url           = (isset($_POST["url_data"]))?$_POST["url_data"]:"";
    $description   = (isset($_POST["InputDetailed"]))?$_POST["InputDetailed"]:"";
    $movie         = (isset($_POST["InputVideoURL"]))?$_POST["InputVideoURL"]:"";
    $x             = (isset($_POST["x_data"]))?$_POST["x_data"]:"";
    $y             = (isset($_POST["y_data"]))?$_POST["y_data"]:"";
    $tel           = (isset($_POST["InputTEL"]))?$_POST["InputTEL"]:"";
    $fax           = (isset($_POST["InputFAX"]))?$_POST["InputFAX"]:"";
    $email         = (isset($_POST["InputE-mail"]))?$_POST["InputE-mail"]:"";
    $facebook      = (isset($_POST["InputFacebook"]))?$_POST["InputFacebook"]:"";
    $twitter       = (isset($_POST["InputTwitter"]))?$_POST["InputTwitter"]:"";
    $timetable     = (isset($_POST["InputTimeTable"]))?$_POST["InputTimeTable"]:"";
    $sponsor       = (isset($_POST["InputSponsor"]))?$_POST["InputSponsor"]:"";
    $history       = (isset($_POST["InputFesHistory"]))?$_POST["InputFesHistory"]:"";

    $uploadModel = new UploadModel();
    
    $id = $uploadModel-> putMatsuri($festival_name, $location, $start_date, $end_date, $start_time, $end_time, $url, $description, $movie, $x, $y, $tel, $fax, $email, $facebook, $twitter, $timetable, $sponsor, $history);
    
    //画像
    if(isset($_FILES["img"])){
        $image = $_FILES['img']['name'];
        $uploadModel-> putFestival_img($id,$image);
    }
    
    //タグ
    if(isset($_POST["season_tag"]) && isset($_POST["place_tag"])){
        $season = $_POST["season_tag"];
        $place = $_POST["place_tag"];
        $uploadModel-> putFestival_tag($id,"season",$season);
        $uploadModel-> putFestival_tag($id,"region",$place);
    }
    
    //お土産
    if(isset($_POST["gift_name1"]) && isset($_FILES["gift_image1"]) && isset($_POST["gift_price1"]) ){
        $gift_name  = $_POST["gift_name1"];
        $gift_image = $_FILES['gift_image1']['name'];
        $gift_price = $_POST["gift_price1"];
        if($gift_name !== "" && $gift_price !== ""){
            $uploadModel-> putFestival_gift($id,$gift_name,$gift_image,$gift_price);
        }
    }
      
    if(isset($_POST["gift_name2"]) && isset($_FILES["gift_image2"]) && isset($_POST["gift_price2"]) ){
        $gift_name  = $_POST["gift_name2"];
        $gift_image = $_FILES['gift_image2']['name'];
        $gift_price = $_POST["gift_price2"];
        if($gift_name !== "" && $gift_price !== ""){
            $uploadModel-> putFestival_gift($id,$gift_name,$gift_image,$gift_price);
        }
    }
      
    if(isset($_POST["gift_name3"]) && isset($_FILES["gift_image3"]) && isset($_POST["gift_price3"]) ){
        $gift_name  = $_POST["gift_name3"];
        $gift_image = $_FILES['gift_image3']['name'];
        $gift_price = $_POST["gift_price3"];
        if($gift_name !== "" && $gift_price !== ""){
            $uploadModel-> putFestival_gift($id,$gift_name,$gift_image,$gift_price);
        }
    }
    
    if(isset($_POST["gift_name4"]) && isset($_FILES["gift_image4"]) && isset($_POST["gift_price4"]) ){
        $gift_name  = $_POST["gift_name4"];
        $gift_image = $_FILES['gift_image4']['name'];
        $gift_price = $_POST["gift_price4"];
        if($gift_name !== "" && $gift_price !== ""){
            $uploadModel-> putFestival_gift($id,$gift_name,$gift_image,$gift_price);
        }
    }
    
    $this->title = 'MATSURI PLUS : UPLOAD_COMPLETE';
    $this->file  = _UPLOAD_COMPLETE_DIR;
    $this->view_display();
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
        if(session_status() === PHP_SESSION_DISABLED) {
          session_start();
        } else if(session_status() === PHP_SESSION_NONE) {
          session_start();
        }
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
    
    return false;
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

  //----------------------------------------------------
  // 入力チェック処理
  //----------------------------------------------------
  public function inputCheck()
  {
    // ログインチェック
    if($this->action == 'login')
    {
      if((!isset($_POST["id"]) || $_POST["id"] == '') ||
         (!isset($_POST["pass"]) || $_POST["pass"] == ''))
      {
        return false;
      }
      return true;
    }
    // 新規登録チェック
    else if($this->action == 'signUp')
    {
      if(!isset($_POST["user_id"]) ||
         !isset($_POST["mail_address"]) ||
         !isset($_POST["password"]) ||
         !isset($_POST["passwordSecond"]) ||
         !isset($_POST["user_name"]) ||
         !isset($_POST["country_id"]))
      {
        return false;
      }

      $in_id      = $_POST["user_id"];
      $in_mail    = $_POST["mail_address"];
      $in_pass    = $_POST["password"];
      $in_pass2   = $_POST["passwordSecond"];
      $in_name    = $_POST["user_name"];

      if(($in_pass == $in_pass2) &&
         (strlen($in_id) >= 8 && strlen($in_id) <= 16) &&
         (strlen($in_mail) >= 8 && strlen($in_mail) <= 32) &&
         (strlen($in_pass) >= 8 && strlen($in_pass) <= 16) &&
         (strlen($in_name) >= 8 && strlen($in_name) <= 16))
      {
        return true;
      }
      return false;
    }
    // ユーザ設定チェック
    else if($this->action == 'update')
    {
      if((strlen($_POST["user_name"]) >= 8 && strlen($_POST["user_name"]) <= 16) ||
         (strlen($_POST["mail_address"]) >= 8 && strlen($_POST["mail_address"]) <= 32) ||
         (strlen($_POST["password"]) >= 8 && strlen($_POST["password"]) <= 16))
      {
        return true;
      }
      return false;
    }
  }
  
  //----------------------------------------------------
  // ユーザステータス処理
  //----------------------------------------------------
  public function updateUserStatus() {
    $userModel = new UserModel();
    //ユーザ情報変更
    if($_POST["user_name"] != "" && isset($_POST["user_name"])){
      $calm  = 'user_name';
      $value = $_POST["user_name"];
      $userModel->updateUserStatus($_SESSION["user_id"], $calm, $value);
    }
    if($_POST["mail_address"] != "" && isset($_POST["mail_address"])){
      $calm  = 'mail_address';
      $value = $_POST["mail_address"];
      $userModel->updateUserStatus($_SESSION["user_id"], $calm, $value);
    }
    if($_POST["password"] != "" && isset($_POST["password"])){
      $calm  = 'password';
      $value = $_POST["password"];
      $userModel->updateUserStatus($_SESSION["user_id"], $calm, $value);
    }
    if($_POST["language_id"] != "" && isset($_POST["language_id"])){
      $calm  = 'language_id';
      $value = $_POST["language_id"];
      $userModel->updateUserStatus($_SESSION["user_id"], $calm, $value);
    }
  }
}
