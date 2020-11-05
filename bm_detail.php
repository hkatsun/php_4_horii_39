<?php

// --------------------------------
// データ詳細（detail)：logoutユーザ向けの詳細表示
// --------------------------------

//1．データ取得
$id = $_GET['id'];

//２．SQL接続
require_once("funcs.php");
$pdo = db_conn();

//3. SQL実行
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
      <!-- bookmark -->
      <a class="navbar-brand">bookmark</a>
      <a class="navbar-brand">&nbsp;</a>
      <a class="navbar-brand line" href="select.php">表示</a>
      <a class="navbar-brand">&nbsp;</a>
      <a class="navbar-brand" href="login.php">[login]</a>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="bm_update.php">

  <div class="jumbotron">
   <fieldset>
    <legend>bookmark detail</legend>
     <input type="hidden" type="text" name="id" value=<?= $view['id']?>>
     <label>書籍名：<?= $view['book_nm']?></label>
     <label><?= $view['book_cmnt']?><a href=".$result['book_url']." target='_blank' rel='noopener noreferrer'>[URL]</a>
     <label><p style='font-size:3px;padding-left:10px;color:orange'>
     <?=
        $star = "";
        for($i = 1; $i < $view['star']+1; $i++){
            $star.="★";
        };
        echo $star;
     ?></label>
    </fieldset>
  </div>
</form>
<!-- Main[End] -->

</body>
</html>
