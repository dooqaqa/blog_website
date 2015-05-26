
<?php
require("key.php");
define(DB_TABLENAME, 'blogs');
define(DB_USERNAME, 'user');
define(DB_PWD, 'pwd');
$index=$_POST["q"];
$time=$_POST["qq"];
$sql="";
$blogs_per_time = 5;
$file_found = 0;

$dblink = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("connect failed" . mysql_error());  
if (!$dblink) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db(DB_DATABASENAME, $dblink);
if ("" == $time) {	
	$sql = sprintf("select * from %s order by post_time limit %d", DB_TABLENAME, $time, $blogs_per_time);
} else {
	$sql = sprintf("select * from %s where post_time < '%s' order by post_time limit %d", DB_TABLENAME, $time, $blogs_per_time);
}
$result = mysql_query($sql);

while($row = mysql_fetch_array($result) and $file_found < $blogs_per_time) {
	echo $row['FirstName'];
	echo " " . $row['LastName'];
	echo " " . $row['Age'];
	echo "<br />";
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
	
	mysql_close($dblink);

?>