<?php

// --------------------------------
// データ追加(inseart)：処理部
// --------------------------------

//1. データ取得:POST
$bk_nm  = $_POST["b_name"];
$bk_url = $_POST["b_url"];
$bk_cmt = $_POST["b_text"];
$bk_str = $_POST["b_star"];

//2. DB接続
require_once("funcs.php");
$pdo = db_conn();


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table (book_nm,book_url,book_cmnt,star,regist_datetime) VALUES (:bk_nm,:bk_url,:bk_cmt,:bk_str,sysdate())");
$stmt->bindValue(':bk_nm', h($bk_nm), PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':bk_url', h($bk_url), PDO::PARAM_STR);        //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':bk_cmt', h($bk_cmt), PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':bk_str', h($bk_str), PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)

var_dump($stmt);

$status = $stmt->execute(); //実行


//４．データ登録処理後
if($status==false){
    //*** function化する！*****************
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}else{
    //*** function化する！*****************
    header("Location: select.php");
    exit();
}
?>
