<?php
// 0. SESSION開始！！
session_start();

//１．関数群の読み込み
include("funcs.php");

// 1. ログインチェック処理！
sessionCheck();

//３．ナビゲートバー表示
if(isset($_SESSION["chk_ssid"])&&($_SESSION["kanri_flg"]==1)){
  // ログイン中 & 管理者FLG = 1

  // bookmark
  $nvbar ="";
  $nvbar .= '<a class="navbar-brand">bookmark</a>';
  $nvbar .= '<a class="navbar-brand">[</a>';
  $nvbar .= '<a class="navbar-brand line" href="index.php">登録</a>';
  $nvbar .= '<a class="navbar-brand">/</a>';
  $nvbar .= '<a class="navbar-brand" href="select.php">表示</a>';
  $nvbar .= '<a class="navbar-brand">]</a>';
  // user
  $nvbar .= '<a class="navbar-brand">ユーザー</a>';
  $nvbar .= '<a class="navbar-brand">[</a>';
  $nvbar .= '<a class="navbar-brand" href="usr_regist.php">登録</a>';
  $nvbar .= '<a class="navbar-brand">/</a>';
  $nvbar .= '<a class="navbar-brand" href="usr_list.php">表示</a>';
  $nvbar .= '<a class="navbar-brand">]</a>';
  // login中
  $nvbar .= '<a class="navbar-brand">'.$_SESSION["name"].'でlogin中... </a>';
  $nvbar .= '<a class="navbar-brand" href="logout.php">[logout]</a>';

}elseif(isset($_SESSION["chk_ssid"])&&($_SESSION["kanri_flg"]==0)){
  // ログイン中 & 管理者FLG = 0

  // bookmark
  $nvbar ="";
  $nvbar .= '<a class="navbar-brand">bookmark</a>';
  $nvbar .= '<a class="navbar-brand">[</a>';
  $nvbar .= '<a class="navbar-brand line" href="index.php">登録</a>';
  $nvbar .= '<a class="navbar-brand">/</a>';
  $nvbar .= '<a class="navbar-brand" href="select.php">表示</a>';
  $nvbar .= '<a class="navbar-brand">]</a>';
  // login中
  $nvbar .= '<a class="navbar-brand">'.$_SESSION["name"].'でlogin中... </a>';
  $nvbar .= '<a class="navbar-brand" href="logout.php">[logout]</a>';

}else{
  // ログアウト

  // bookmark
  $nvbar ="";
  $nvbar .= '<a class="navbar-brand">bookmark</a>';
  $nvbar .= '<a class="navbar-brand">[</a>';
  $nvbar .= '<a class="navbar-brand" href="select.php">表示</a>';
  $nvbar .= '<a class="navbar-brand">]</a>';
  // login
  $nvbar .= '<a class="navbar-brand" href="login.php">[login]</a>';
}


?>

<!-- // -------------------------------- -->
<!-- // データ登録(regist)：入力部        -->
<!-- // -------------------------------- -->

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <style>div{padding: 10px;font-size:16px;}</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default bg_img">
    <div class="container-fluid">
      <div class="navbar-header">
        <?php echo $nvbar;?>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="bm_insert.php">

  <div class="jumbotron">
   <fieldset>
    <legend>book bookmark </legend>
     <label><input type="text" name="b_name" placeholder="書籍の名称 を入力してください" required class="book_name"> 書籍名</label><br>
     <label><input type="text" name="b_url" placeholder="URL を入力してください" required></label> URL<br>
     <label><textArea name="b_text" rows="4" cols="40" placeholder="感想を記入してください" required></textArea></label><br>

    <div class="evaluation">
      <input id="star1" type="radio" name="b_star" value="1"><label for="star1">最悪</label>
      <input id="star2" type="radio" name="b_star" value="2"><label for="star2">悪い</label>
      <input id="star3" type="radio" name="b_star" value="3"><label for="star3">普通</label>
      <input id="star4" type="radio" name="b_star" value="4"><label for="star4">良い</label>
      <input id="star5" type="radio" name="b_star" value="5"><label for="star5">最高</label>
    </div>

     <input type="submit" value="登録" id=#btn>
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>