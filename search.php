<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHPの練習</title>
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
    <link rel="stylesheet" href="bitnami.css" type="text/css">
  </head>
  <body>
    <a href="http://localhost/index.php"><h1 class="title">とことこ掲示板</h1></a>
    <div class="overall">


      <div class="side">
        <h2 class="sky">　メニュー</h2>
        <h3 class="bar"><a class="hot sky" href="http://localhost/hello.php">　　投　稿　　　</a><a class="hot sky" href="http://localhost/search.php">　　検　索　　</a></h3>
      </div>

      <div class="main">

        <form class="toko" action="http://localhost/search_results.php" method="post">

          <h2>検索する名前</h2> <input type="text" name="search_name" value="">

          <br> <a href="http://localhost/fin.php"><input type="submit" name="sousin" value="送信"></a>

        </form>

      </div>
    </div>
  </body>
</html>
