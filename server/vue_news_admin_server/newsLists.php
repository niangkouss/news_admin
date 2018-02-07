<?php
require_once('config.php');

$sql = "SELECT * FROM newscont";
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
