<?php
// 0. SESSION開始！！
session_start();

//１．関数群の読み込み
include("funcs.php");

// 1. ログインチェック処理！
// sessionCheck();

// --------------------------------
// データ一覧(view)
// --------------------------------

//1.  DB接続:
$pdo = db_conn();

//２．SQL実行：SELECT
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

//３．ナビゲートバー表示
if(isset($_SESSION["chk_ssid"])&&($_SESSION["kanri_flg"]==1)){// ログイン中 & 管理者FLG = 1
  // bookmark
  $nvbar ="";
  $nvbar .= '<a class="navbar-brand">bookmark</a>';
  $nvbar .= '<a class="navbar-brand">[</a>';
  $nvbar .= '<a class="navbar-brand" href="index.php">登録</a>';
  $nvbar .= '<a class="navbar-brand">/</a>';
  $nvbar .= '<a class="navbar-brand line" href="select.php">表示</a>';
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

}elseif(isset($_SESSION["chk_ssid"])&&($_SESSION["kanri_flg"]==0)){// ログイン中 & 管理者FLG = 0
  // bookmark
  $nvbar ="";
  $nvbar .= '<a class="navbar-brand">bookmark</a>';
  $nvbar .= '<a class="navbar-brand">[</a>';
  $nvbar .= '<a class="navbar-brand" href="index.php">登録</a>';
  $nvbar .= '<a class="navbar-brand">/</a>';
  $nvbar .= '<a class="navbar-brand line" href="select.php">表示</a>';
  $nvbar .= '<a class="navbar-brand">]</a>';
  // login中
  $nvbar .= '<a class="navbar-brand">'.$_SESSION["name"].'でlogin中... </a>';
  $nvbar .= '<a class="navbar-brand" href="logout.php">[logout]</a>';

}else{// ログアウト
  // bookmark
  $nvbar ="";
  $nvbar .= '<a class="navbar-brand">bookmark</a>';
  $nvbar .= '<a class="navbar-brand">&nbsp;</a>';
  $nvbar .= '<a class="navbar-brand line" href="select.php">表示</a>';
  $nvbar .= '<a class="navbar-brand">&nbsp;</a>';
  // user
  $nvbar .= '<a class="navbar-brand">ユーザー</a>';
  $nvbar .= '<a class="navbar-brand">[</a>';
  $nvbar .= '<a class="navbar-brand" href="usr_regist.php">登録</a>';
  $nvbar .= '<a class="navbar-brand">]</a>';  
  // login
  $nvbar .= '<a class="navbar-brand" href="login.php">[login]</a>';
}


//３．データ表示
$view="";
if ($status==false) {
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .='<p>';

    // aタグのリンク先の制御（login / logout)
    if(isset($_SESSION["chk_ssid"])){// login：[edit][delete]を表示
      $view .='<a href="bm_update_view.php?id='.$result['id'].'">';

    }else{// logout
      $view .='<a href="bm_detail.php?id='.$result['id'].'">';
    }

    $view .=$result['id']." ".$result['book_nm'];
    $view .="<div>".$result['book_cmnt']."<a href=".$result['book_url']." target='_blank' rel='noopener noreferrer'>[URL]</a></div>";

    // レビュー評価「★」の記述
    $view .="<p style='font-size:3px;padding-left:10px;color:orange'>";
    for($i = 1; $i < $result['star']+1; $i++){
      $view .="★";
    };
    $view .="</p>";
    $view .='</a>';

    // [edit][delete]の表示制御（loginのみ)
    if(isset($_SESSION["chk_ssid"])){// login：[edit][delete]を表示
      $view .='<div>[<a href="bm_update_view.php?id='.$result['id'].'">edit</a>]';
      $view .='[<a href="bm_delete.php?id='.$result['id'].'">delete</a>]</div>';
    }
    $view .="<p></p>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>bookmark表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-ja.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js" type="text/javascript" charset="utf-8"></script>
<style>div{padding: 10px;font-size:16px;}</style>

</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default bg_img">
    <div class="container-fluid">
      <div class="navbar-header">
        <?php echo $nvbar;?>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?php echo $view;?></div>
</div>
<!-- Main[End] -->

</body>
</html>

