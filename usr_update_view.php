<?php
// 0. SESSION開始！！
session_start();

//１．関数群の読み込み
include("funcs.php");

// 1. ログインチェック処理！
sessionCheck();

// --------------------------------
// ユーザ更新（update)：更新箇所含め表示部
// --------------------------------

//1．データ取得
$id = $_GET['id'];

//２．SQL接続
// require_once("funcs.php");
$pdo = db_conn();

//3. SQL実行
// $stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id=".$id);
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=:id;");
$stmt->bindValue(':id', h($id), PDO::PARAM_INT); 
$status = $stmt->execute();

//３．ナビゲートバー表示
if(isset($_SESSION["chk_ssid"])&&($_SESSION["kanri_flg"]==1)){// ログイン中 & 管理者FLG = 1
  // bookmark
  $nvbar ="";
  $nvbar .= '<a class="navbar-brand">bookmark</a>';
  $nvbar .= '<a class="navbar-brand">[</a>';
  $nvbar .= '<a class="navbar-brand" href="index.php">登録</a>';
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
  exit("login error");
}else{
  // ログアウト
  exit("login error");
}


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
  
  <!-- ラジオボタンは、登録値でセット -->
  <script type="text/javascript">
    $(function(){
      let num_type = "#type" + <?php echo $view['life_flg']; ?>;
      $(num_type).prop('checked',true);
      let num_life = "#life" + <?php echo $view['life_flg']; ?>;
      $(num_life).prop('checked',true);      
    });
  </script>

</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default bg_img_p">
    <div class="container-fluid">
    <div class="navbar-header">
      <?php echo $nvbar;?>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="usr_update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザ更新</legend>
    <input type="hidden" type="text" name="id" value=<?= $view['id']?>>
    <table>
        <tr><td>　[1]</td>
            <td style="text-align:center">NAME</td><td><input type="text" name="name" value=<?= $view['name']?> required></td>
        </tr>
        <tr><td>　[2]</td>
            <td style="text-align:center">ID</td><td><input type="text" name="lid" value=<?= $view['lid']?> required></td>
        </tr>
        <tr><td>　[3]</td>
            <td style="text-align:center">Password</td><td><input type="password" name="lpw" value=<?= $view['lpw']?> required></td>
        </tr>
        <tr><td>　[4]</td>
            <td style="text-align:center">社員区分：</td>
            <td style="text-align:center">
                <input id="type1" type="radio" name="usr_type" value=1>管理者
                <input id="type0" type="radio" name="usr_type" value=0>一般社員
            </td>
        </tr>
        <tr><td>　[5]</td>
            <td style="text-align:center">在籍区分：</td>
            <td style="text-align:center">
                <input id="life1" type="radio" name="life_flg" value=1>在籍
                <input id="life0" type="radio" name="life_flg" value=0>退社
            </td>
        </tr>        
    </table>
        <p>　</p>
        <input type="submit" value="更新">
    </fieldset>
  </div>
</form>    

</body>
</html>