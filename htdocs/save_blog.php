
<?php
require("key.php");
define(DB_TABLENAME, 'blogs');
define(DB_USERNAME, 'user');
define(DB_PWD, 'pwd');
$mode=$_POST["q"];
$topic=$_POST["qq"];
if ("title_check" == $mode) {
	
	$dblink = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("connect failed" . mysql_error());  
	if (!$dblink) {
		die('Could not connect: ' . mysql_error());
	}
	
	mysql_select_db(DB_DATABASENAME, $dblink);
	$sql = sprintf("select * from %s where topic = '%s'", DB_TABLENAME, $topic);
	
	$result = mysql_query($sql);
	
	if ($result and mysql_fetch_array($result)) {
		echo "呵呵";
	} else {
		echo "\"".$topic."\"可以使用";
	}
	
	mysql_close($dblink);

} else if ("body_save" == $mode){
	$body = $_POST["b"];
	//echo $body;
	if ($fp = fopen("blogs/" . $topic . ".txt", "w")) {
		if (fwrite($fp, $body)) {
			fclose($fp);
			save_blog_db($topic);
			echo $topic . "good";
		} else {
			echo "bad2";
			fclose($fp);
		} 
	} else {
		echo "bad1";
	}
}

function save_blog_db($topic) {
	$dblink = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("connect failed" . mysql_error());  
	if (!$dblink) {
		die('Could not connect: ' . mysql_error());
	}
	
	mysql_select_db(DB_DATABASENAME, $dblink);
	$sql = sprintf("insert into %s values ('%s', '%s', '%s', '%s')", DB_TABLENAME, $topic . ".txt", 
		$topic, date("Y-m-d H:i:s"), "1");
	
	$result = mysql_query($sql);
	
	if ($result) {
		echo $topic . date("Y-m-d H:i:s") . "db good";
	} else {
		echo $topic . "db 呵呵";
	}
	
	mysql_close($dblink);	
}
?>