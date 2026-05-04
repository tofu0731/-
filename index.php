<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHPの練習</title>
    <link rel="stylesheet" href="bitnami.css" type="text/css">
    <link rel="index" href="hello.php" type="text/php">
  </head>
  <body>
    <?php
      //session_start();
      ini_set("display_errors", "Off");
      //$cocoo = 0;
      $name = $_POST["name"];
      $comme = $_POST["comment"];

      // 読み込みモードでファイルを開く
      $fp = fopen("text.txt", "r");

      $arrar = array();

      $co = 0;
      // ファイルを1行ずつ取得する
      while ($linee = fgets($fp)) {
        $arrar[] = $linee;
        $co += 1;
      }

      //ファイルを閉じる
      fclose($fp);

      ?>
      <a href="http://localhost/index.php"><h1 class="title">とことこ掲示板</h1></a>

      <!--<a href="http://localhost/hello.php">投稿する</a><br><br><br>-->
    <div class="overall">


      <div class="side">
        <div class="menu">
          <h2 class="sky">　メニュー</h2>
          <h3 class="bar"><a class="hot sky" href="http://localhost/hello.php">　　投　稿　　　</a><a class="hot sky" href="http://localhost/search.php">　　検　索　　</a></h3>
        </div>
        <div class="ad">

        </div>

      </div>

      <div class="main">

        <div class="home">
          <h3>投稿一覧</h2>
          <a href="#portal">最新の投稿を見る</a>
          <div class="aiueo"></div>
        </div>
        <!--太字にするクラス-->
        <div class="php">
          <?php

            for ($i=0; $i <= 0; $i++) {

              //$filename = 'text.txt';

              //$fp = fopen($filename, 'r');

              for($count = $co; $count >= 0; ) {

                $count = $count - 1;
                echo '<br>';

                $txt = $arrar[$count];

                $item_names = substr($txt , 0, 5);

                $n_content = substr($txt , 5);

                $item_times = substr($txt , 0, 4);

                $time = substr($txt , 4);

                if ($arrar[$count] == "border
")              {
                  //echo '<br>';
                  //echo '<h6 class="hosoi">'.$time.'</h6>';
                  if ($count == $co /*- 1*/) {
                    echo '<div class="aiueo"><a id="portal"></div>';
                  }
                  else {
                    echo '<div class="aiueo"></div>';
                  }

                // echo '<br>';
                }elseif ($item_names == "name:") {

                  echo "[ $n_content ]";
                  echo '<br>';

                } elseif ($item_times == "tim:") {
                  echo '<h6 class="hosoi">'.$time.'</h6>';

                }else{
                  echo $txt;
                }

              }



              // fcloseでファイルを閉じる
              fclose($fp);


            }

          ?>

        </div>
      </div>
    </div>

  </body>
</html>
