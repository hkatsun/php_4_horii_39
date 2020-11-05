<?php

// --------------------------------
// データ更新（update)：更新箇所含め表示部
// --------------------------------

//1．データ取得
$id = $_GET['id'];

//２．SQL接続
require_once("funcs.php");
$pdo = db_conn();

//3. SQL実行
// $stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id=".$id);
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id=:id;");
$stmt->bindValue(':id', h($id), PDO::PARAM_INT); 
$status = $stmt->execute();

//4．データ表示
$view = "";
if ($status == false) {
    sql_error($status);
} else {
    $view = $stmt->fetch();
}

?>

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

  <script type="text/javascript">
    $(function(){
      let num = "#star" + <?php echo $view['star']; ?>;
      $(num).prop('checked',true);
    });
  </script>

</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default bg_img">
    <div class="container-fluid">
      <div class="navbar-header">
        <!-- Bookmark -->
        <a class="navbar-brand">bookmark</a>
        <a class="navbar-brand">[</a>
        <a class="navbar-brand" href="index.php">登録</a>
        <a class="navbar-brand">/</a>
        <a class="navbar-brand" href="select.php">表示</a>
        <a class="navbar-brand">]</a>
        <!-- User -->
        <a class="navbar-brand">ユーザー</a>
        <a class="navbar-brand">[</a>
        <a class="navbar-brand" href="usr_regist.php">登録</a>
        <a class="navbar-brand">/</a>
        <a class="navbar-brand" href="usr_list.php">表示</a>
        <a class="navbar-brand">]</a>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="bm_update.php">

  <div class="jumbotron">
   <fieldset>
    <legend>book bookmark </legend>
     <input type="hidden" type="text" name="id" value=<?= $view['id']?>>
     <label><input type="text" name="book_nm" placeholder="書籍の名称 を入力してください" class="book_name" value=<?= $view['book_nm']?>> 書籍名</label><br>
     <label><input type="text" name="book_url" placeholder="URL を入力してください" value=<?= $view['book_url']?>></label> URL<br>
     <label><textArea name="book_cmnt" rows="4" cols="40" placeholder="感想を記入してください"><?= $view['book_cmnt']?></textArea></label><br>
    <div class="evaluation">
      <input id="star1" type="radio" name="b_star" value="1"><label for="star1">最悪</label>
      <input id="star2" type="radio" name="b_star" value="2"><label for="star2">悪い</label>
      <input id="star3" type="radio" name="b_star" value="3"><label for="star3">普通</label>
      <input id="star4" type="radio" name="b_star" value="4"><label for="star4">良い</label>
      <input id="star5" type="radio" name="b_star" value="5"><label for="star5">最高</label>
    </div>

     <input type="submit" value="再登録" id=#btn>
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
