<?php

header("Content-type:text/html;charset=utf-8;");
require_once("config.php");

$catName= empty($_POST['catName']) ? null:$_POST['catName'];//变量要判断,如果不存在,会报低级错误,这些错误也会作为警告返回给ajax,开发的时候可以有报警告,但是作为服务器都不可以
//插入newscat数据表
$result = null;
$err = null;
if ($catName) { //访问过来虽然直接是一个对象,但是只有一个对象,那么这个对象直接就是POST,直接对象里面的东西直接获得而无需通过这个对象获得
    $catName = $_POST['catName'];
    $catID = $_POST['catID'];
    $catDesc = $_POST['catDesc'];
    $inserttime = time();
    $sql = "INSERT INTO newscat VALUES ('"  .$catID.  "','"   .$catName.  "','".$catDesc.  "','" .$inserttime. "',0)";
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

echo json_encode($re);//设置的是数组,直接转成JSON格式,echo的解释ajax成功后获取的结果
