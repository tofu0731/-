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

    <!-- <h2>投稿できました</h1>
    <h3>※直前の投稿と全く同じ投稿をすると投稿されません</h2>
    <a href="http://localhost/index.php">戻る</a> -->
    <?php
      session_start();
      ini_set("display_errors", "Off");

      $name = $_POST["name"];
      $comme = $_POST["comment"];
      $s_name = $_SESSION["name"];
      $s_comment = $SESSION["comment"];
      $tim = date("Y/m/d H:i");
      $eroor = 0;
      $code = array("<!--","<script>","$","=","//","/*","document");
      $code_num = count($code);
      //echo $code_num;

        if($name != $s_name || $comme != $s_comment){

          for ($i=0; $i <= $code_num; $i++) {
            $code_con = strpos($name, $code[$i]);
            echo $code_con;

            if (strpos($name, $code[$i]) === -1) {
              file_put_contents("text.txt", "border
", FILE_APPEND);

              $name = "削除されました<!--コードが含まれている可能性があります。名前からコードが検出されました。"."$name"." -->";

              file_put_contents("error.txt", "name:$name
", FILE_APPEND);

              $eroor = 1;
              break;

            }

            if (strpos($comme,$code[$i]) === -1) {
              file_put_contents("text.txt", "border
", FILE_APPEND);

/*
if ($comme == $code[$i]) {
  file_put_contents("text.txt", "border
", FILE_APPEND);

if(strpos($subject,'bc') !== false){
  //'abcd'のなかに'bc'が含まれている場合
}
*/

              $comme = "削除されました<!--このコメントは運営が確認してから見られます。コメントからコードが検出されました。"."$comme"." -->";

              file_put_contents("error.txt", "comment:$comme
", FILE_APPEND);



              $eroor = 2;
              break;

            }

          }

          if ($eroor == 1) {
            file_put_contents("text.txt", "tim:$tim
", FILE_APPEND);

            file_put_contents("text.txt", "$name
", FILE_APPEND);

          } elseif ($eroor == 2) {

            file_put_contents("text.txt", "tim:$tim
", FILE_APPEND);

            file_put_contents("text.txt", "$comme
", FILE_APPEND);

          }else {
            file_put_contents("text.txt", "border
", FILE_APPEND);

            file_put_contents("text.txt", "tim:$tim
", FILE_APPEND);

            file_put_contents("text.txt", "$comme
", FILE_APPEND);

            file_put_contents("text.txt", "name:$name
", FILE_APPEND);
          }
/*
                  やること
                  ・順番を入れ替える
                  ・検索で色々する
                */
        }

      $_SESSION["name"] = $_POST["name"];
      $_SESSION["comment"] = $_POST["comment"];

      if($eroor == 0){
        echo '<h2>投稿できました</h1>
        <h3>※直前の投稿と全く同じ投稿をすると投稿されません</h2>
        <a href="http://localhost/index.php">戻る</a>';
      }else{
        echo '<h2>投稿できませんでした</h1>
        <h3>※コードなどが発見されました</h2>
        <a href="http://localhost/index.php">戻る</a>';
      }
     ?>


  </body>

</html>
