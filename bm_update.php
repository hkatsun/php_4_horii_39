<?php

// --------------------------------
// データ更新（update)：処理部
// --------------------------------

//1. データ取得:POST
$id     = $_POST["id"];
$bk_nm  = $_POST["book_nm"];
$bk_url = $_POST["book_url"];
$bk_cmt = $_POST["book_cmnt"];
$bk_str    = $_POST["b_star"];

//2. DB接続
require_once("funcs.php");
$pdo = db_conn();

//３．SQL実行:UPDATE
$stmt = $pdo->prepare("UPDATE gs_bm_table SET id=:id,book_nm=:bk_nm,book_url=:bk_url,book_cmnt=:bk_cmt,star=:bk_str WHERE id=:id;");
$stmt->bindValue(':id', h($id), PDO::PARAM_INT); 
$stmt->bindValue(':bk_nm', h($bk_nm), PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':bk_url', h($bk_url), PDO::PARAM_STR);        //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':bk_cmt', h($bk_cmt), PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':bk_str', h($bk_str), PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ処理後リダイレクト
if($status==false){
    sql_error($stmt);
}else{
    redirect('select.php');
}
?>
