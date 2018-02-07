<?php
require_once("config.php");
$data = empty($_POST['id']);
$result = null;
$err = null;
if(!$data){
    $catName = $_POST['catName'];
    $catDesc = $_POST['catDesc'];
    $id = $_POST['id'];
    $catContent = $_POST['catContent'];
    $catAuthor = $_POST['catAuthor'];
    $inserttime = time();
    $sql = "INSERT INTO newscont VALUES (null,'" .$id.  "','".$catName.  "','" .$catDesc.        "','default origin','" .$catContent.  "','" .$catAuthor.  "',0,'" .$inserttime. "',0)";
    $result = $pdo->exec($sql);
    $err = $pdo->errorInfo();
}
if($result){
    $re = array(
        'ret' => 1,
        'msg' => $result
    );
}else{
    $re = array(
        'ret' => 0,
        'msg' => $err
    );
}

echo json_encode($re);