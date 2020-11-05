<?php

// --------------------------------
// データ削除(delete)：処理部
// --------------------------------

//1. データ取得：GET
$id     = $_GET["id"];

//2. DB接続
require_once("funcs.php");
$pdo = db_conn();

//３．SQL実行:DELETE
$stmt = $pdo->prepare("DELETE FROM gs_bm_table WHERE id=:id;");
$stmt->bindValue(':id', h($id), PDO::PARAM_INT); 
$status = $stmt->execute();

//４．データ処理後リダイレクト
if($status==false){
    sql_error($stmt);
}else{
    redirect('select.php');
}
?>
