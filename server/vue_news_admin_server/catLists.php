<?php
require_once('config.php');

$tag = empty($_POST['tag'])?0:($_POST['tag']);
if($tag){//只查询分类的名称列
    $sql = "SELECT catName,catid FROM newscat ";

}else{
    $sql = "SELECT * FROM newscat";
}
$pdo_statement = $pdo->query($sql);
$result = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
$err= $pdo->errorInfo();
if($result){
    $re = array(
        'ret'=>1,
        'lists'=>$result
    );
}else{
    $re = array(
        'ret'=>0,
        'lists'=>$err
    );
}
echo json_encode($re);
