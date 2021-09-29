<?php

//引入封装的函数 注意：include_once引入方法可以防止文件名冲突

include_once "func.php";

//用2个变量来接收前端传递过来的数据

$username=$_POST['name'];

$pwd=$_POST['password'];

//执行查询的sql语句，注意：传递的变量用引号和花括号包起来

$sql="select * from test where name='{$name}' and password='{$password}'";

//封装的查询函数select（），里面封装好的连接数据库函数conn（）

$res=select(conn("127.0.0.1", "root", "root", "test"), $sql);

//执行查询函数，返回的结果是null就说明查询失败，返回0，也就是登录失败，否者查询成功，返回1，也就是登录成功。

if($res==null){

echo 0;

}else{

echo 1;

}

?>