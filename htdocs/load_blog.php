<?php
header('Content-Type: text/xml; charset=UTF-8');
header("Cache-Control: no-cache, must-revalidate");

require("key.php");
define(DB_TABLENAME, 'blogs');
define(DB_USERNAME, 'user');
define(DB_PWD, 'pwd');
$index=$_POST["q"];
$time=$_POST["qq"];
$sql="";
$blogs_per_time = 20;
$file_found = 0;
//echo "index:" . $index . "time:" . $time;
$dblink = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("connect failed" . mysql_error());
if (!$dblink) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db(DB_DATABASENAME, $dblink);
//echo "limit:" . $blogs_per_time;
if (null == $time or "" == $time) {
	$sql = sprintf("select * from %s order by post_time limit %d", DB_TABLENAME, $blogs_per_time);
} else {
	$sql = sprintf("select * from %s where post_time < '%s' order by post_time limit %d", DB_TABLENAME, $time, $blogs_per_time);
}
$result = mysql_query($sql);
//echo $sql;
echo '<?xml version="1.0" encoding="ISO-8859-1"?>';
echo "<blogs>";
while($row = mysql_fetch_array($result) and $file_found < $blogs_per_time) {
	$body = "";
	if ($body = file_get_contents("blogs/" . $row['file_name'])) {
		echo "<blog>";
		echo "<topic>";
		echo $row['topic'];
		echo "</topic>";
		echo "<time>";
		echo $row['post_time'];
		echo "</time>";
		echo "<cat>";
		echo $row['category'];
		echo "</cat>";
		echo "<body>";
		echo $body;
		echo "</body>";
		echo "</blog>";
		$file_found++;
	} else {
		echo "bad2";
	}
}
echo "</blogs>";
	
	mysql_close($dblink);

?>