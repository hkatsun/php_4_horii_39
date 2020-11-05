<?php

session_start();

$lid = $_POST['lid'];
$lpw = $_POST['lpw'];
// $lpw = password_hash($_POST['lpw'],PASSWORD_DEFAULT);

//2. DB接続
require_once("funcs.php");
$pdo = db_conn();

//２．SQL実行：SELECT
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE lid=:lid AND lpw=:lpw;");
$stmt->bindValue(':lid', h($lid), PDO::PARAM_STR);
$stmt->bindValue(':lpw', h($lpw), PDO::PARAM_STR);
// $stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE lid=:lid;");
// $stmt->bindValue(':lid', h($lid), PDO::PARAM_STR);
$status = $stmt->execute();

if($status==false){
    sql_error($stmt);
}

$val = $stmt->fetch();

// if(password_verify($lpw, $val['lpw'])){
if( $val["id"] != "" ){

    //Login成功時
    $_SESSION["chk_ssid"]  = session_id();
    $_SESSION["kanri_flg"] = $val['kanri_flg'];
    $_SESSION["name"]      = $val['name'];
    header('Location: select.php');
}else{
    //Login失敗時(Logout経由)
    header('Location: login.php');
}

exit();

?>