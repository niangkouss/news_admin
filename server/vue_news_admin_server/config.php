<?php
//error_reporting(E_ALL & ~E_NOTICE);
//开发过程中lotice错误也报出来,但是不论什么错误都会返回ajax,所以只能返回我们要的数据,开发过程中都要报错来,但是正式服务器不能让它出来
//header("Access-Control-Allow-Origin:*");
$dbms="mysql";
$host='localhost';
$dbName='test';
$user='root';
$pass='';
$dsn="$dbms:host=$host;dbname=$dbName;charset=utf8";

try{
    $pdo = new PDO($dsn,$user,$pass);
    //print_r( "连接成功"); 只要echo的都会作为结果返回给ajax,所以连连接成功这些也不需要,只要有返回,直接就设定状态码,不需要像nodejs那样还设置状态码
     /* foreach ($pdo->query('SELECT * from newscat') as $row){
          print_r($row);
      }*/
}catch (PDOException $e){
    die ("Error!: " . $e->getMessage() . "<br/>");
}
