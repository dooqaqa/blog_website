
<?php
echo "00000";
require("key.php");
define(DB_TABLENAME, 'blogs');
define(DB_USERNAME, 'user');
define(DB_PWD, 'pwd');
$index=$_POST["q"];
$time=$_POST["qq"];
$sql="";
$blogs_per_time = 5;
$file_found = 0;
echo "111111";

$dblink = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("connect failed" . mysql_error());
echo "222222";
if (!$dblink) {
echo "3333333";
	die('Could not connect: ' . mysql_error());
}
echo "4444444";
mysql_select_db(DB_DATABASENAME, $dblink);
echo "55555";
if (null == $time or "" == $time) {
echo "66666";	
	$sql = sprintf("select * from %s order by post_time limit %d", DB_TABLENAME, $time, $blogs_per_time);
} else {
echo "777777";	
	$sql = sprintf("select * from %s where post_time < '%s' order by post_time limit %d", DB_TABLENAME, $time, $blogs_per_time);
}
echo "888888";	
$result = mysql_query($sql);
echo "99999";	

while($row = mysql_fetch_array($result) and $file_found < $blogs_per_time) {
	if ($fp = fopen("blogs/" . $row['file_name'], "r")) {
		$body = "";
		if (fread($fp, $body)) {
			fclose($fp);
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
		} else {
			echo "bad2";
			fclose($fp);
		} 
	} else {
		echo "bad1";
	}
}
	
	mysql_close($dblink);

?>