<?php
  session_start();
  //セッション削除
  session_destroy();
  //リダイレクト
  header("Location: ../WEB/index.php");
