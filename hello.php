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

        <form class="toko" action="http://localhost/fin.php" method="post" onsubmit="return cancelsubmit()">

          <h2>名前</h2> <input type="text" name="name" value="" id="name">

          <h2>言うこと</h2><textarea name="comment" rows="8" cols="80" id="comment"></textarea>

          <br> <a href="http://localhost/fin.php"><input type="submit" name="sousin" value="送信"></a>

        </form>

        <script type="text/javascript">

          function cancelsubmit() {
            if(document.getElementById("name").value === "") {
              alert("名前を入力してください。");
              return false;
            }

            if(document.getElementById("name").value.indexOf(' ') != -1 || document.getElementById("name").value.indexOf('　') != -1 ) {
              alert("名前に空白は使えません。");
              return false;
            }

            if(document.getElementById("comment").value === "") {
              alert("コメントを入力してください。");
              return false;
            }
            const strr = '1234567890-^\\qwertyuiopp@[asdfghjkl;;::]zxcvbnm,./\!"#$%&\'()=~|QWERTYUIOP`{ASDFGHJKL+**}ZXCVBNM<>?_１２３４５６７８９０－＾￥ｑｗｅｒｔｙｕｉｏｐ＠［ａｓｄｆｇｈｊｋｌ；：］ｚｘｃｖｂｎｍ，．／￥あいうえおかきくけこさしすせそたちつてとなにぬねのはひふへほまあみむめもやゆよらりるれろわをんゑヱアイウエオカキクケコサシスセソタチツテトナニヌネノハヒヤユヨフヘホマミムメモラリルレロワヲンｱｲｳｴｵｶｷｸｹｺｻｼｽｾｿﾅﾆﾇﾈﾉﾊﾋﾌﾍﾎﾏﾐﾑﾒﾓﾔﾕﾖﾗﾘﾙﾚﾛﾜｦﾝ';

            if(document.getElementById("comment").value.indexOf(strr) == 2) {
              alert("コメントを入力してください。");
              return false;
            }

          }


        </script>

      </div>
    </div>

  </body>
</html>
