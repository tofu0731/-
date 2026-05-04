<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHPの練習</title>
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
    <link rel="stylesheet" href="bitnami.css" type="text/css">
  </head>
  <body>
    <?php
      $search_name = $_POST["search_name"];
    ?>
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

      $borders_true = 0;

      ?>
    <a href="http://localhost/index.php"><h1 class="title">とことこ掲示板</h1></a>
    <div class="overall">


      <div class="side">
        <h2 class="sky">　メニュー</h2>
        <h3 class="bar"><a class="hot sky" href="http://localhost/hello.php">　　投　稿　　　</a><a class="hot sky" href="http://localhost/search.php">　　検　索　　</a></h3>
      </div>

      <div class="main">
        <h2>検索結果</h2>
        <h3>検索した名前  "<?php echo $search_name; ?>"</h2>

        <br><div class="aiueo"></div>
        <?php

        for($count = $co; $count >= 0; ) {

          $count = $count - 1;
          echo '<br>';

          $txt = $arrar[$count];

          $item_names = substr($txt , 0, 5);

          $n_content = substr($txt , 5);

          $item_times = substr($txt , 0, 4);

          $time = substr($txt , 4);
          $len = strlen($search_name);
          echo $n_content;
          echo $search_name;
          echo $len;

          if ($n_content != $search_name) {
            $borders_true = 1;

          }

          if ($borders_true == 1) {

            if ($arrar[$count] == "border
")          {
              //echo '<br>';
              //echo '<h6 class="hosoi">'.$time.'</h6>';
              echo '<div class="aiueo"></div>';
              $borders_true = 0;


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



        }
          fclose($fp);
        ?>




      </div>
    </div>
  </body>
</html>
