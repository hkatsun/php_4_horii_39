<?php
// 0. SESSION開始！！
session_start();

//１．関数群の読み込み
include("funcs.php");

// 1. ログインチェック処理！
sessionCheck();

// --------------------------------
// ユーザ更新（update)：処理部
// --------------------------------

//1. データ取得:POST
$id = $_POST["id"];
$usr_nm  = $_POST["name"];
$usr_id = $_POST["lid"];
$usr_pw = $_POST["lpw"];
$usr_type = $_POST["usr_type"];
$usr_flg = $_POST["life_flg"];

//2. DB接続
// require_once("funcs.php");
$pdo = db_conn();

//３．SQL実行:UPDATE
$stmt = $pdo->prepare("UPDATE gs_user_table SET id=:id,name=:name,lid=:lid,lpw=:lpw,kanri_flg=:kanri_flg,life_flg=:life_flg WHERE id=:id;");
$stmt->bindValue(':id', h($id), PDO::PARAM_INT);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':name', h($usr_nm), PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lid', h($usr_id), PDO::PARAM_STR);        //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', h($usr_pw), PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':kanri_flg', h($usr_type), PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':life_flg', h($usr_flg), PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)

$status = $stmt->execute();

//４．データ処理後リダイレクト
if($status==false){
    sql_error($stmt);
}else{
    redirect('usr_list.php');
}
?>