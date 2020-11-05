<!-- <?php

// --------------------------------
// ユーザ追加(insert)：処理部
// --------------------------------

//1. データ取得:POST
$usr_nm  = $_POST["name"];
$usr_id = $_POST["id"];
$usr_pw = $_POST["pw"];
// $usr_pw = password_hash($_POST['pw'],PASSWORD_DEFAULT);
$usr_type = $_POST["usr_type"];
$usr_flg = $_POST["life_flg"];

//2. DB接続
require_once("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_user_table (name,lid,lpw,kanri_flg,life_flg) VALUES (:name,:lid,:lpw,:kanri_flg,:life_flg)");
$stmt->bindValue(':name', h($usr_nm), PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lid', h($usr_id), PDO::PARAM_STR);        //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', h($usr_pw), PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':kanri_flg', h($usr_type), PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':life_flg', h($usr_flg), PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)

$status = $stmt->execute(); //実行


//４．データ登録処理後
if($status==false){
    //*** function化する！*****************
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}else{
    //*** function化する！*****************
    header("Location: usr_list.php");
    exit();
}
?> -->
