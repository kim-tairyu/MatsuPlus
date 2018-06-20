<?php

$pdo = new PDO('mysql:host=localhost;dbname=jep;charset=utf8', 'root', '');

$article = $pdo->prepare("select * from article where festival_id = ?");

$article->bindValue(1,3);

$article->execute();

foreach($article as $loop){
    $article_title[] = $loop['article_title'].PHP_EOL;
    $text[] = $loop['text'].PHP_EOL;
}

?>


<!doctype html>
<html lang="ja">
    <head>
        <title></title>
        <meta charset="utf-8">
    </head>
    <body>
    </body>
</html>
