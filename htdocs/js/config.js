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