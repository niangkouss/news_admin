<?php
require_once("config.php");

/*$hasModify = empty($_POST['data']->modifyCatName) ||empty($_POST['data']->modifyCatDesc)||empty($_POST['data']->modifyCatID);*/
$hasModify = empty($_POST['data']);
$result = null;
if(!$hasModify){
    $catid = empty($_POST['data']['modifyCatID'])?null:$_POST['data']['modifyCatID'];
    $catname= empty($_POST['data']['modifyCatName'])?null:$_POST['data']['modifyCatName'];
    $catDesc = empty($_POST['data']['modifyCatDesc'])?null:$_POST['data']['modifyCatDesc'];
    $updatetime = time();
    $sql = "UPDATE newscat SET catid='".$catid."' ,catname='".$catname."' ,catDesc='".$catDesc."' ,updatetime='".$updatetime."' WHERE catid='".$_POST['num']."' ";
    $result = $pdo->exec($sql);
}
if($result){
    $re = array(
        "ret"=>1,
        "msg"=>$_POST['data']
    );
}else{
    $re = array(
        "ret"=>0,
        "msg"=>$_POST['data']['modifyCatID']
    );
}
echo json_encode($re);
