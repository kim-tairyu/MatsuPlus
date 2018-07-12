<?php
// パス取得
require_once('../app/PathList.class.php');
$pathList = new PathList();

// アカウントチェック
include $pathList->accountCheckPath;

require_once('../app/DAO/ConfigDAO.class.php');
$configDAO = new ConfigDAO();

//ユーザ情報変更
if($_POST["user_name"] != "" && isset($_POST["user_name"])){
	$calm  = 'user_name';
	$value = $_POST["user_name"];
	$configDAO->updateUserStatus($_SESSION["user_id"],$calm,$value);
}
if($_POST["mail_address"] != "" && isset($_POST["mail_address"])){
	$calm  = 'mail_address';
	$value = $_POST["mail_address"];
	$configDAO->updateUserStatus($_SESSION["user_id"],$calm,$value);
}
if($_POST["password"] != "" && isset($_POST["password"])){
	$calm  = 'password';
	$value = $_POST["password"];
	$configDAO->updateUserStatus($_SESSION["user_id"],$calm,$value);
}
//ユーザ情報取得
$user_status = $configDAO->getUserStatus($_SESSION["user_id"]);
foreach ($user_status as $user) {
	// code...
	$user_name[] = $user['user_name'];
	$password[] = $user['password'];
	$mail_address[] = $user['mail_address'];
	$country_name[] = $user['country_name'];
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>Config</title>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Expires" content="10">
<link type="text/css" rel="stylesheet" href="<?php echo $pathList->cssPath; ?>style.css" />
<link rel="SHORTCUT ICON" href="<?php echo $pathList->imgsPath; ?>M.ico">
<script type="text/javascript" src="<?php echo $pathList->jsPath; ?>jquery-3.2.1.min.js"></script>
<script type="text/javascript">
//ユーザーネーム
document.getElementById("name").style.display ="none";

function btn1_click(){
	var y1 = document.getElementById("name");

	if(y1.style.display=="block"){
		// noneで非表示
		y1.style.display ="none";
	}else{
		// blockで表示
		y1.style.display ="block";
	}
}
//メールアドレス
document.getElementById("mailaddress").style.display ="none";

function btn2_click(){
	var y1 = document.getElementById("mailaddress");

	if(y1.style.display=="block"){
		// noneで非表示
		y1.style.display ="none";
	}else{
		// blockで表示
		y1.style.display ="block";
	}
}
//パスワード
document.getElementById("password").style.display ="none";

function btn3_click(){
	var y1 = document.getElementById("password");

	if(y1.style.display=="block"){
		// noneで非表示
		y1.style.display ="none";
	}else{
		// blockで表示
		y1.style.display ="block";
	}
}
</script>
<!-- Bootstrap -->
    <link href="<?php echo $pathList->cssPath; ?>bootstrap.min.css" rel="stylesheet">
</head>
<!--画像の保存を禁止するという意味（後で外してもよい(UXの観点)）-->
<body>
  <!--[if lt IE 8]>
          <p>お使いのブラウザは<strong>古い</strong>ため、表示が崩れることがあります。
          <a href="http://browsehappy.com/">他のブラウザ</a>を利用されるか、<a href="http://www.google.com/chromeframe/?redirect=true">Google Chrome Frame</a>をインストールすることで正しく表示することができます。</p>
  <![endif]-->
  <!--header-->
  <?php include $pathList->headerPath ?>

<!--
maincontents
-->

<!--全体をかこっているwraperのようなもの-->
<div class="mypage" id="myTapContent">
  <div class="mypage-inner">
  <!--ユーザーの画像表示？-->
  <div class="my_image">
      <img src="<?php echo $pathList->imgsPath; ?>gaijin.png" class="">
  </div>
  <!--ユーザーネーム表示-->
  <div class="user_name_box">
  </div>
  <!--設定変更-->
  <div class="set">
    <form action ="config.php" method="post">
      <!--ユーザーネーム変更-->
      <div class="config_box">
        <div class="config_box_name">
          <p><?php echo $user_name[0]?></p>
        </div>
        <div class="config_box_hensyu">
          <a href="#"><img src="<?php echo $pathList->imgsPath; ?>hensyu.png" onclick="btn1_click()"></a>
        </div>
        <input type="text" id="name" name="user_name" placeholder="USER NAME">
      </div>
      <!--メールアドレス変更-->
      <div class="config_box">
        <div class="config_box_name">
          <p><?php echo $mail_address[0]?></p>
        </div>
        <div class="config_box_hensyu">
          <a href="#"><img src="<?php echo $pathList->imgsPath; ?>hensyu.png" onclick="btn2_click()"></a>
        </div>
      <input type="text" id="mailaddress" name="mail_address" placeholder="mailaddress">
      </div>
      <!--パスワード変更-->
      <div class="config_box">
        <div class="config_box_name">
          <p><?php echo $password[0]?></p>
        </div>
        <div class="config_box_hensyu">
          <a href="#"><img src="<?php echo $pathList->imgsPath; ?>hensyu.png" onclick="btn3_click()"></a>
        </div>
        <input type="password" id="password" name="password" placeholder="password">
      </div>
      <!--出身国-->
      <div class="config_box">
        <div class="config_box_name">
          <p><?php echo $country_name[0]?></p>
        </div>
      </div>

      <!--言語変更-->
      <select name="country_id" class="country-width">
        <option value="">言語変更</option>
        <option value="1">Japn</option>
        <option value="2">English</option>
      </select>
      <div class="user_button">
        <input type="submit" class="henkou" value="変更">
      </div>
    </form>
  </div>
<!--お問い合わせ-->
<div class="company">
  <div class="company-1">
    <a href="../app/Sign-out.php" class="exit3">Sign out</a>
  </div>
  <div class="company-2">
    <a href="#" class="exit3">Contact</a>
</div>
</div>

  </div>
</div>

<!--フッター（SP版では非表示になってる）-->
<?php include $pathList->footerPath ?>

</body>
</html>
