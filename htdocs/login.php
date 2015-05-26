<?php

header("content-type:text/html;charset=utf-8");

require("key.php");
define(DB_TABLENAME, 'users');
define(DB_USERNAME, 'user');
define(DB_PWD, 'pwd');

//连接数据库
$dblink = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("connect failed" . mysql_error());  

//设置字符串编码
mysql_query("set names utf8");

//选择数据库
mysql_select_db(DB_DATABASENAME);

//获取表单数据。
$username=$_POST['username'];
$pwd=$_POST['password'];

//$pwd=md5($pwd); //本示例仅为测试，未考虑测安全方面， 可以对密码进行md5加密。
$sql = sprintf("select %s from %s where %s = '%s'", DB_PWD, DB_TABLENAME, DB_USERNAME, $username);
$result=mysql_query($sql); //执行sql查询
if ($result) {
	$num=mysql_num_rows($result); //获取记录数
} else {
	echo "hehe";
}

if($num){ // 用户存在；
	//print_r(mysql_fetch_array($result));
   $row=mysql_fetch_array($result);
   if($pwd===$row['pwd']){ //对密码进行判断。
    	echo "登陆成功，正在为你跳转至后台页面";
    	header("location:index.php");
    } else {
		echo "密码不正确\r\n";
		echo "<a href='mud.html'>返回登陆页面</a>";
	}
} else {
	echo "用户不存在\r\n";
	echo "<a href='mud.html'>返回登陆页面</a>";
}
mysql_free_result($result);  
mysql_close($dblink); 
?>